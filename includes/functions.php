<?php include "db.php"; ?>
<?php
function checkQry($res){
  if(!$res){
    die("Illegal Query");
  }
}
function checkLogin($email, $password){
  global $connection;
  $qry = "SELECT * FROM user";
  $result = mysqli_query($connection, $qry);
  checkQry($result);
  if(isset($_SESSION['email'])){
    echo "<script>location.href='dashboard.php'</script>";
  } else {
      while($row = mysqli_fetch_assoc($result)){
        if($row['user_email']==$email && $row['user_password']==$password){
          $_SESSION['email']= $email;
          $_SESSION['ID']= $row['user_id'];
          echo "<script>location.href='dashboard.php'</script>";
        }
      }
  }
}

function sendmsg($to, $email, $content){
  global $connection;
  $qry = "INSERT INTO message (msg_sender, msg_receiver, msg_content, msg_date, msg_time) values ('$email', '$to', '$content', CURDATE(), CURTIME())";
  $msg = mysqli_query($connection, $qry);
  checkQry($msg);
}

function createTeam(){

}
 ?>
