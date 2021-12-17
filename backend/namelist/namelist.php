
<?php


header('Access-Control-Allow-Origin: *');

header('Access-Control-Allow-Methods: GET, POST');

header("Access-Control-Allow-Headers: X-Requested-With");

header('Content-type: text/html; charset=utf-8');


include "../configDB.php";



$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);


$emparray = array();
while($row =mysqli_fetch_assoc($result))
{
    $emparray[] = $row;
}
echo json_encode($emparray,JSON_UNESCAPED_UNICODE);


mysqli_close($conn);


?>
