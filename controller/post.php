<?php
include "../views/global/Mentor_header.php";
include_once('../db/db_connection.php');
?>
<?php
$options = $_GET['mentee_list'];
$textArea = $_GET['Textarea1'];
$str='';
if(!empty($options)){
    foreach ($options as $option){ 
        $str = $str.','.$option;
    }
}else{
    $str = "ALL";
}

$post_id = rand(1,10000000);
$user_ID = $_SESSION['userID'];
$date ="" ;
$time = "";
$sql = "INSERT INTO posts (post_id ,Mentor_id_fk, Post_text, recepients, date, time) VALUES ('$post_id','$user_ID', '$textArea', '$str', curdate(), curtime()) ";
$conn-> query($sql);
header('Location:../views/mentor/Post.php');
?>



<?php
include "../global/footer.php";
?>
