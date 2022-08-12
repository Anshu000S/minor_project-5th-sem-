<?php
session_start();
if($_SESSION['role']=='mentor'){
    session_write_close();
    include "Mentor_header.php";
    echo $_SESSION['role'];
    echo $_SESSION['userID'];
}else{
    session_write_close();
    include "Mentee_header.php";
    echo $_SESSION['role'];
    echo $_SESSION['userID'];
}
?>


<?php
    if ($_POST){
        $sender_id = $_SESSION['userID'];
        $receiver_id = $_POST['roll'];
    }
?>
<div class="card col-sm-12" >
<div class="anyclass">
<div class="container" align-center>
  <img src="/w3images/avatar_g2.jpg" alt="Avatar" class="right" style="width:100%;">
  <p>Hey! I'm fine. Thanks for asking!</p>
  <span class="time-left">11:01</span>
</div>
</div>

<input type="text" class = "form-control" name="usermsg" id="usermsg" placeholder="Add message"><br>
<button class = "btn btn-default" id="submitmsg">Send</button>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<!--<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
-->

<script type = "text/javascript">   

// Get the input field
var input = document.getElementById("usermsg");

// Execute a function when the user releases a key on the keyboard
input.addEventListener("keyup", function(event) {
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Cancel the default action, if needed
    event.preventDefault();
    // Trigger the button element with a click
    document.getElementById("submitmsg").click();
  }
});

//message sending script 
    $("#submitmsg").click(function(){
      var clientmsg = $("#usermsg").val();
    $.post("../../controller/post_message.php",{text:clientmsg, sender_id:'<?php echo $sender_id ?>', receiver_id:'<?php echo $receiver_id ?>'},
    function(data,status){
        document.getElementsByClassName('anyclass')[0].innerHTML = data;});
    $("#usermsg").val("");5
        return false;
});
</script>
