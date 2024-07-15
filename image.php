<?php

include "config.php";

$query = mysqli_query($con, "SELECT `cover` FROM `event-test` WHERE `id` = :id" );
// $query->execute(array(':id'=>$_GET['id']));
$data = mysqli_fetch_assoc($query);
// $pic = $data['cover'];

header('Content-type: image/jpeg');
echo $data['cover'];

?>