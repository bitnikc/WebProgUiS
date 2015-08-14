<?php

/**
 * Products class
 */
class Products {

    protected $mysqli;

    function __construct() {
      $db_server = "localhost";
      $db_username = "root";
      $db_password = "root";
      $db_database = "dat310_lectures";

      // Create connection
      $this->mysqli = new mysqli($db_server, $db_username, $db_password, $db_database);

      // Check connection
      if ($this->mysqli->connect_error) {
        die("Connection failed: " . $mysqli->connect_error);
      }
    }

    /**
     * Returns a given product
     *
     * @param $product_id
     * @return product properties in an associative array
     */
    function loadProduct($product_id) {
      $query = "SELECT * FROM product WHERE product_id='$product_id'";

      $fetch = mysqli_query($this->mysqli, $query) or die ("Table not found");
      $item = mysqli_fetch_assoc($fetch);

      return array(
          'product_id' => $product_id,
          'name' => $item['name'],
          'description' => $item['description'],
          'price' => $item['normal_price'],
          'bonus_price' => $item['bonus_price'],
          'photo'=>$item['photo']
      );
    }

    /**
     * Returns all products
     *
     * @return products in an array
     */
    function listProducts() {
        // TODO load products from the database
        $amount_items = mysqli_num_rows(mysqli_query($this->mysqli,"SELECT * FROM product"));
        $product_array = array();

        for($i = 1;$i <= $amount_items; $i++){
            array_push($product_array, $this->loadProduct($i));
        }
        // this is just some example data for testing
        //$p1 = $this->loadProduct(1);
        //$p2 = $this->loadProduct(2);
        //$p3 = $this->loadProduct(3);
        //return array($p1, $p2, $p3);
        return $product_array;
    }

}
