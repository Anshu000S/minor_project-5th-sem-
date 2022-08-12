<?php
include "../db/db_connection.php";

echo $text = $_POST['text'];
echo $sender_id= $_POST['sender_id'];
echo $receiver_id= $_POST['receiver_id'];
$sql = "INSERT INTO messages (sender_id ,receiver_id, msg, date, time) VALUES ('$sender_id','$receiver_id', '$text', curdate(), curtime()) ";
$conn->query($sql);
?>