<?php include "db.php"; ?>
<?php
function checkQry($res){
  if(!$res){
    die("KUCH TO GALAT HAI");
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
          $_SESSION['name']= $row['user_name'];
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

function addMember($name, $email, $team_name,$team_email, $position){
  global $connection;
  $status = 0;
  //$name = $_SESSION['name'];
  //$team_email = $_SESSION['email'];
  $qry = "INSERT INTO members (mem_name, mem_email, mem_teamname, mem_teamemail, mem_position, mem_status) values ('$name', '$email', '$team_name', '$team_email',  '$position', '$status')";
  $res = mysqli_query($connection, $qry);
  checkQry($res);
}
function req($email, $myemail, $reqtype, $status){
  global $connection;
  $qry = "INSERT INTO request (req_type, req_from, req_to, req_status) values('$reqtype', '$myemail', '$email', '$status')";
  $req = mysqli_query($connection, $qry);
  checkQry($req);
}
function sendTask($to, $from, $team, $content){
  global $connection;
  $task_qry = "INSERT INTO task (task_to, task_from, task_team, task_content) values ('$to', '$from', '$team', '$content')";
  $task_res = mysqli_query($connection, $task_qry);
  checkQry($task_res);
}
 ?>
