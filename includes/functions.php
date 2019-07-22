<?php include "db.php"; ?>
<?php
function checkQry($res){
  if(!$res){
    die("Error");
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
          echo "<script>location.href='dashboard.php?select=main'</script>";
        }
      }
  }
}

function sendmsg($to, $email, $content){
  global $connection;
  $myname = mysqli_real_escape_string($connection, $_SESSION['name']);
  $qry = "INSERT INTO message (msg_sender, msg_sname, msg_receiver, msg_content, msg_date, msg_time) values ('$email', '$myname', '$to', '$content', CURDATE(), CURTIME())";
  $msg = mysqli_query($connection, $qry);
  checkQry($msg);
}

function addMember($name, $email, $team_name, $team_email, $position){
  global $connection;
  $name = mysqli_real_escape_string($connection, $name);
  $email = mysqli_real_escape_string($connection, $email);
  $team_name = mysqli_real_escape_string($connection, $team_name);
  $team_email = mysqli_real_escape_string($connection, $team_email);
  $position = mysqli_real_escape_string($connection, $position);
  $addmem_qry = "INSERT INTO members (mem_name, mem_email, mem_teamname, mem_teamemail, mem_position) values ('$name', '$email', '$team_name', '$team_email', '$position')";
  $addmem_res = mysqli_query($connection, $addmem_qry);
  checkQry($addmem_res);
}
function req($email, $myemail, $reqtype, $status, $id){
  global $connection;
  $email= mysqli_real_escape_string($connection, $email);
  $myemail = mysqli_real_escape_string($connection, $myemail);
  $reqtype = mysqli_real_escape_string($connection, $reqtype);
  $status = mysqli_real_escape_string($connection, $status);
  $id = mysqli_real_escape_string($connection, $id);
  $qry = "INSERT INTO request (req_type, req_from, req_to, req_status, req_teamid) values('$reqtype', '$myemail', '$email', '$status', '$id')";
  $req = mysqli_query($connection, $qry);
  checkQry($req);
}

function sendTask($to, $from, $team, $content){
  global $connection;
  $to = mysqli_real_escape_string($connection, $to);
  $from = mysqli_real_escape_string($connection, $from);
  $team = mysqli_real_escape_string($connection, $team);
  $content = mysqli_real_escape_string($connection, $content);
  $task_qry = "INSERT INTO task (task_to, task_from, task_team, task_content,task_date) values ('$to', '$from', '$team', '$content', CURDATE())";
  $task_res = mysqli_query($connection, $task_qry);
  checkQry($task_res);
}

function delMsg($id){
  global $connection;
  $del_qry = "DELETE FROM message where msg_id = {$id}";
  $del_res = mysqli_query($connection, $del_qry);
  checkQry($del_res);
}
function delMember($id){
  global $connection;
  $del_qry = "DELETE FROM members where mem_id = {$id}";
  $del_res = mysqli_query($connection, $del_qry);
  checkQry($del_res);
}
 ?>
