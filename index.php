<?php


//This trims the URI
$request_uri = trim($_SERVER['REQUEST_URI'],'/');

//create a database connection
$db_connect = new mysqli("localhost", "root", "", "ToDo");
if ($db_connect->connect_error) {
    die("Connection failed: " .$db_connect->connect_error);
}

//******** This block of code can create a new Database and store it through the connection *********
// $sql = "CREATE DATABASE ClaytonDB";
// if ($db_connect->query($sql) === TRUE) {
//   echo "Database created successfully";
// } else {
//   echo "Error creating database: " . $db_connect->error;
// }


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




// ++++++***** sql to create table***+++++
// $sql = "CREATE TABLE MyGuests (
// id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
// firstname VARCHAR(30) NOT NULL,
// lastname VARCHAR(30) NOT NULL,
// email VARCHAR(50),
// reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
// )";

// if ($db_connect->query($sql) === TRUE) {
//     echo "Table MyGuests created successfully";
//   } else {
//     echo "Error creating table: " . $db_connect->error;
//   }


//ADD AN ITEM
// $sql = "INSERT INTO MyGuests (firstname, lastname, email)
// VALUES ('John', 'Doe', 'john@example.com')";

// if ($db_connect->query($sql) === TRUE) {
//   echo "New record created successfully";
// } else {
//   echo "Error: " . $sql . "<br>" . $db_connect->error;
// }

//DELETES AN ITEM
// $sql = "DELETE FROM MyGuests WHERE id=1";

// if ($db_connect->query($sql) === TRUE) {
//   echo "Record deleted successfully";
// } else {
//   echo "Error deleting record: " . $db_connect->error;
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

$db_content = FALSE;
$page_content = "SELECT nav_name FROM pages LIMIT 1";
$content = $db_connect->query($page_content);
if(!$content) {
    print_r(mysqli_error($db_connect));
    exit;
}
if ($content->num_rows > 0) {
    $db_content = $content->fetch_assoc();
}
if(!$page_content) {
    http_response_code(404);
    echo "404";
    die;
}
?>


<?php
include __DIR__.'/includes/header.php';
?>

<!-- <div class="text-center">
    <?php
    foreach ($pages as $info)
    //I think the best way to do this is to have each page separate and customize each page
    {
        echo '<div class="text-white">' . $info ['nav_name'] . '</div>';
    }
    ?>
</div> -->
