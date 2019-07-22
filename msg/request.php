<?php
if(isset($_SESSION['email'])){
  $email = $_SESSION['email'];
  $query = "SELECT * FROM request where req_to = '$email'";
  $req_res = mysqli_query($connection, $query);
  checkQry($req_res);
 ?>
<div class="container-fluid contain">
  <div class="row">
    <h2 id="main-header">Request</h2>
  </div>
<?php while($row = mysqli_fetch_assoc($req_res)){
  $t_id = mysqli_real_escape_string($connection, $row['req_teamid']);
  $to = mysqli_real_escape_string($connection, $row['req_to']);
  $from = mysqli_real_escape_string($connection, $row['req_from']);
  $type = mysqli_real_escape_string($connection, $row['req_type']);
  $id = mysqli_real_escape_string($connection, $row['req_id']);
  ?>
  <div class="row">
    <div class="col-2">
      <h7>From: <strong><small><?php echo $from;?></small></strong></h7><br>
    </div>
    <div class="col-8">
      <h7>Wants to Join Your <strong><?php echo $type;?></strong></h7><br>
    </div>
    <div class="col-2 mr-auto">
      <form action=# method="post">
        <button class="btn btn-primary" type="submit" name="accept" method="post">ACCEPT</button> <button class="btn btn-primary" type="submit" name="decline">DECLINE</button>
      </form>
    </div>
  </div><hr>
</div>
<?php
if(isset($_POST['accept'])){
  $pstn="Member";
  $acc_qry = "SELECT * FROM user, team where user_email = '$from' AND team_email = '$to'";
  $acc_res = mysqli_query($connection, $acc_qry);
  checkQry($acc_res);
  while($row = mysqli_fetch_assoc($acc_res)){
    $myname=$row['user_name']; $usr_email= $row['user_email']; $name=$row['team_name']; $email = $row['team_email'];
    if($t_id == $row['team_joinid']){
      addMember($myname, $from, $name, $email, $pstn);
    }
  }
  $del_qry = "DELETE FROM request where req_id = '$id'";
  $del_result = mysqli_query($connection, $del_qry);
  checkQry($del_qry);
  echo "<script>location.href='dashboard.php?select=request'</script>";

} else if(isset($_POST['decline'])){
  $del_qry = "DELETE FROM request where req_id = '$id'";
  $del_result = mysqli_query($connection, $del_qry);
  checkQry($del_qry);
}

} ?>
<?php } ?>
