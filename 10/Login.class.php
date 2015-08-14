<?php
/**
 * Login class
 */

class Login {

    private $mysqli;

    /**
     * @param $mysqli MySQLi object (connection is assumed to be opened already)
     */
    function __construct($mysqli) {
        $this->mysqli = $mysqli;
    }

    /**
     * Checks if there is any user logged in
     *
     * @return bool
     */
    function isLoggedIn() {
        return isset($_SESSION['admin']) && strlen($_SESSION['admin']) > 0;
    }

    /**
     * Attempt login with a given username-password combination.
     *
     * @param $username
     * @param $password
     * @return bool true if login is successful
     */
    function login($username, $password) {
        // TODO check username and password using the database
        // - use $this->mysql for talking to the database
        // - don't forget to use hashing
        $salt = "bicycle" . $password;
        $query = "SELECT password FROM admins WHERE username = '$username' AND password = md5('$salt') LIMIT 1";
        $res = mysqli_query($this->mysqli,$query);
        $user = mysqli_fetch_array($res);

        if (!empty($user)) {
          $_SESSION['admin'] = $username;
          return true;
        }

        return false;
    }

    /**
     * Logout
     */
    function logout() {
        if (isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
        }
    }

}
