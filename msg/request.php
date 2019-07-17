<?php session_start(); ?>
<?php include "includes/db.php"; ?>
<?php include "includes/functions.php"; ?>
<?php
if(isset($_SESSION['email'])){
  $email = $_SESSION['email'];
  $query = "SELECT * FROM request where req_to = '$email'";
  $req_res = mysqli_query($connection, $query);
  checkQry($req_res);
 ?>
<div class="container-fluid contain">
<?php while($row = mysqli_fetch_assoc($req_res)){
  $from = $row['req_from']; $type = $row['req_type']; $id = $row['req_id']; ?>
  <div class="row">
    <div class="col-5">
      <h7>From: <strong><small><?php echo $from;?></small></strong></h7><br>
    </div>
    <div class="col-5">
      <h7>Type: <strong><small><?php echo $type;?></small></strong></h7><br>
    </div>
    <div class="col-2 mr-auto">
      <form action=# method="post">
        <button class="btn btn-primary" type="submit" name="accept" method="post">ACCEPT</button> <button class="btn btn-primary" type="submit" name="decline">DECLINE</button>
      </form>
    </div>
  </div><hr><?php } ?>
</div>
<?php
if(isset($_POST['accept'])){
  $qry = "SELECT * FROM user, team where user_email = '$from' AND team_email = '$email'";
  $accept = mysqli_query($connection, $qry);
  checkQry($accept);
  while($row = mysqli_fetch_assoc($accept)){
    $usr_name = $row['user_name'];
    addMember($row['user_name'], $row['user_email'], $row['team_name'],$row['team_email'], "Member");
  }
  $del_qry = "DELETE FROM request where req_id = '$id'";
  $del_result = mysqli_query($connection, $del_qry);
  checkQry($del_qry);
  echo "<script>location.href='dashboard.php?select=request'</script>";
}else if(isset($_POST['decline'])){
  $del_qry = "DELETE FROM request where req_id = '$id'";
  $del_result = mysqli_query($connection, $del_qry);
  checkQry($del_qry);
}
} ?>
