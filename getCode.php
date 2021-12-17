<?php

header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

header('Content-type: text/plain; charset=utf-8');

include "configDB.php";

$conn->set_charset("utf8");

$sql = "SELECT username, code FROM users";

$result = mysqli_query($conn, $sql);


$emparray = array();
while($row =mysqli_fetch_assoc($result))
{
    $emparray[] = $row;
}


echo json_encode(end($emparray));
// echo json_encode($emparray);


// if ($result->num_rows > 0) {
//     // output data of each row
//     while($row = $result->fetch_assoc()) {
//         echo " Username: " . $row["username"]. " - Game - " . $row["game"]. "<br>";
//     }
// } else {
//     echo "0 results";
// }

mysqli_close($conn);



?>