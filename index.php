<?php


//This trims the URI
$request_uri = trim($_SERVER['REQUEST_URI'],'/');

//create a database connection
$db_connect = new mysqli("localhost", "root", "", "ToDo");
if ($db_connect->connect_error) {
    die("Connection failed: " .$db_connect->connect_error);
}




// $db_page = FALSE;

// //this takes information from the database
// $query = "SELECT * FROM main WHERE request_uri = '$request_uri' LIMIT 1";
// //object operator, '->' used in object scope to access methods and properties of an object.
// //'query' Specifies the SQL query string
// $results = $db_connect->query($query);
// if (!$results) {
//     print_r( mysqli_error($db_connect) );
//     exit;
// }

// if ($results->num_rows > 0) {
//     $db_page = $results->fetch_assoc();
// }

// if (!$db_page) {
//     http_response_code(404);
//     echo "404, sorry";
//     die;
// }



$db_page2 = FALSE;
$nav_pages = "SELECT * FROM pages";
$pages = $db_connect->query($nav_pages);
if (!$pages) {
    print_r( mysqli_error($db_connect) );
    exit;
}

if ($pages->num_rows > 0) {
    $db_page2 = $pages->fetch_assoc();
}

if (!$db_page2) {
    http_response_code(404);
    echo "404, sorry";
    die;
}


?>


<?php
include __DIR__.'/includes/header.php';
?>

<div class="text-center">
    <?php
    foreach ($pages as $content)
    //I think the best way to do this is to have each page separate and customize each page
    {
    echo "<h1 class='text-white'>" . $content['nav_name'] . "</h1>" . 
    "<h1 class='text-black'>" . $content['content'] . "</h1>";
    }
    ?>
</div>
<?php
include __DIR__.'/includes/footer.php';
?>