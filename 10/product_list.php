<?php
/**
 * Server-side script for serving data to DataTables for listing products
 */
require("mysql.php");

require("Login.class.php");
$login = new Login($mysqli);


// check if the user is logged in
//if ($login->isLoggedIn()) {

    require("Products.class.php");
    $products = new Products($mysqli);

    // TODO prepare the data that will be used by DataTables

    // DB table to use
    $table = 'products';

    // Table's primary key
    $primaryKey = 'product_id';

    $columns = array(
        	array( 'db' => 'product_id',   'dt' => 0 ),
        	array( 'db' => 'name',         'dt' => 1 ),
        	array( 'db' => 'description',  'dt' => 2 ),
        	array( 'db' => 'price',        'dt' => 3,
            'formatter' => function( $d, $row ) {
                return '$'.number_format($d);
            }
            ),
            array(
            'db'        => 'bonus_price',
            'dt'        => 4,
            'formatter' => function( $d, $row ) {
                return '$'.number_format($d);
            }),
        	array( 'db' => 'photo',  'dt' => 5 )
        );

        $sql_details = array(
        'user' => 'root',
        'pass' => 'root',
        'db'   => 'dat310_lectures',
        'host' => 'localhost'
    );

    require( 'ssp.class.php' );

    $data = SSP::simple( $_GET, $sql_details, $table, $primaryKey, $columns;

    

    // return it JSON-encoded
    echo json_encode($data ));
    //echo json_encode($data);
//}

// close MySQL connection
$mysqli->close();
