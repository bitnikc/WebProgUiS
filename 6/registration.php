<!DOCTYPE html>
<html>
<head>
    <title>Magazine subscription</title>
    <link rel="stylesheet" type"text/css" href="style.css" />
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
</head>
<body>

<?php
/**
 * Assignment 6 - Magazine subscription
 *
 * This file is the main entry point to the website
 */

 function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}

require("Magazine.class.php");
require("Subscription.class.php");
//define variables to empty values
$email_error_msg = $error_sign = $fname_error = $lname_error = $mags_error = false;
$email_error = $gen_error = $dob_error = $email_format = $error = false;

$first_name = isset($_POST['first_name']) ? $_POST['first_name'] : "";
$last_name =  isset($_POST['last_name']) ? $_POST['last_name'] : "";
$gender =     isset($_POST['gender']) ? $_POST['gender'] : "";
$birth_date = isset($_POST['birth_date']) ? $_POST['birth_date'] : "";
$period =     isset($_POST['subscr_period']) ? $_POST['subscr_period'] : "";
$email =      isset($_POST['email']) ? test_input($_POST['email']) : "";
$submitted =  isset($_POST['submit']);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $email_error_msg = "Invalid email format";
}

$magazines =  array(
    new Magazine("svg_aftbld","Stavanger Aftenblad", 200),
    new Magazine("tsk_ubld","Teknisk Ukeblad", 300),
    new Magazine("se_ho","Se og H&oslash;r", 100),
    new Magazine("dnl","Dagens Neringsliv", 250),
    new Magazine("fam","Familien", 150)
);

//Check if magazines have been selected. If so, reselect them.
// and message if none are checked.
$no_mags = true;
foreach($magazines as $mag) {
  $mag->checked = isset($_POST[$mag->id]);
  if($mag->checked) { $no_mags = false;}
}

//$submitted = count($_POST) > 0;
if ($submitted) {
  $error_sign =   '<i class="fa fa-exclamation-triangle"></i>';
  $fname_error =  $first_name == "";
  $lname_error =  $last_name == "";
  $email_error =  $email == "";
  $gen_error =    $gender == "";
  $dob_error =    $birth_date == "";
  $mags_error =   $no_mags;
  $email_format = $email_error_msg != "";
  $error = $fname_error || $lname_error || $email_error || $gen_error || $dob_error;
}

?>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST" <?php if(!$error && $submitted) { echo 'class="hidden"';  } ?>>
    <fieldset>
      <legend>Personal Details</legend>
      <input type="text" placeholder="First name" name="first_name" <?php
        echo 'value="' . $first_name . '" '; if($fname_error) {echo 'class="error"';} ?> />
      <span class="error"><?php if($fname_error) {echo $error_sign;} ?></span> <br />
      <input type="text" placeholder="Last name" name="last_name" <?php
        echo "value=\"$last_name\" "; if($lname_error) {echo 'class="error"';} ?> />
      <span class="error"><?php if($lname_error) {echo $error_sign;} ?></span> <br />
      <input type="text" placeholder="Email adress" name="email" <?php
        echo "value=\"$email\" "; if($email_error || $email_format) {echo ' class="error"';} ?> />
      <span class="error"><?php
      if($email_error) {echo $error_sign;}
      elseif($email_format) {echo '<i class="fa fa-ban"></i> '. $email_error_msg;}
      ?></span> <br />
      <input type="radio" name="gender" value="male" id="male_check" <?php if($gender == "male") {echo "checked";} ?>/>
      <label for="male_check" <?php if ($gen_error) {echo ' class="error"';} ?>>male</label>
      <input type="radio" name="gender" value="female" id="female_check" <?php if($gender == "female") {echo "checked";} ?>/>
      <label for="female_check" <?php if ($gen_error) {echo ' class="error"';} ?>>female</label>
      <span class="error" style="margin-left: 35px;"><?php if($gen_error) {echo $error_sign;} ?></span>
      <br />
      <label <?php if($dob_error) {echo ' class="error"';} ?>>Date of birth: <br />
        <input type="date" name="birth_date" <?php echo 'value="' . $birth_date . '"';
        if($dob_error) {echo ' class="error"';} ?>  />
        <span class="error"><?php if($dob_error) {echo $error_sign;} ?></span>
      </label>
      <br />
      <span class="error">
        <?php
        if($error) {echo $error_sign . ' Missing';}
        if($error && $email_format) {echo '<br />';}
        if($email_format) {echo '<i class="fa fa-ban"></i> Wrong email format';}
        ?>
      </span>
    </fieldset>

    <fieldset>
      <legend>Magazines</legend>
      <?php echo Subscription::listMagazines($magazines); ?>
      <?php if($mags_error){echo '<span class="error">' . $error_sign . ' Pick at least one magazine!</span>';} ?>
    </fieldset>

    <fieldset>
    <legend>Subscrption</legend>
      <label>Period</label>
      <select name="subscr_period">
        <?php
        for($i = 6; $i<25; $i += 6) {
          echo "<option value=\"" . $i . "\" ";
          if($period == $i) {echo "selected";}
          echo ">" . $i . " months</option> \r\n      ";
        }
        ?>
      </select>
    </fieldset>

    <input type="submit" name="submit" value="Subscribe" />
</form>

<?php

  if($submitted && !$error) {

    $sum = 0;
    $discount = 0;
    $subs = new Subscription();


    echo '<table>
  <tr>
    <th colspan="2">Personal information</th>
  </tr>
  <tr>
    <td>First name</td>
    <td>' . $first_name . '</td>
  </tr>
    <td>Last name</td>
    <td>' . $last_name . '</td>
  </tr>
    <td>Email</td>
    <td>' . $email . '</td>
  </tr>
    <td>Sex</td>
    <td>' . $gender . '</td>
  </tr>
  <tr>
    <th colspan="2">Subscribed magazines</th>
  </tr>
  ';
      foreach($magazines as $mag){
        if($mag->checked) {
          $subs->subscribe($mag->id,$email);
          echo '<tr>
    <td>' . $mag->name . '</td>
    <td>' . $mag->price . ' kr/year</td>
  </tr>
  ';
          $sum += $mag->price;
        }
      }
      $amount_subs = count($subs->subscriptions);
      if($amount_subs > 0) {
    echo '<tr>
    <td>
      Discount
    </td>
    <td class="bold">
      ';

      $discount = $amount_subs < 3 ? $amount_subs*5 : "15";
      echo $discount;

      echo '%
    </td>
  </tr>
  <tr>
    <td>
      Total
    </td>
    <td class="bold">
      ';
      echo $sum - $sum*($discount/100);
      echo ' kr/year
    </td>
  </tr>';
  }
  echo '<tr>
    <th colspan="2">Subscription period</th>
  </tr>
  <tr>
    <td colspan="2">
      You selected ' . $period . ' months.<br />
      Subscription expires on ';
      echo '<span class="bold">';
      echo date('Y-m-d', strtotime("+$period months", strtotime(date("Y-m-d"))));
      echo '</span>';
      echo '
    </td>
  </tr>
</table>';
  }
?>

</body>
</html>
