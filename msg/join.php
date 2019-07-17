<?php session_start(); ?>
<?php include "includes/db.php"; ?>
<?php include "includes/functions.php"; ?>
<?php
if(isset($_POST['join']) && isset($_SESSION['email'])){
  $id = $_POST['id'];
  $qry = "SELECT * FROM team";
  $res = mysqli_query($connection, $qry);
  checkQry($res);
  while($row = mysqli_fetch_assoc($res)){
    if($row['team_joinid'] == $id){
      $email = $row['team_email'];
      $myemail = $_SESSION['email'];
      $reqtype = "team";
      $status = 0;
      req($email, $myemail, $reqtype, $status);
    }
  }
}
 ?>
<div class="container-fluid contain">
  <div class="row">
    <div class="col-4">
      <form action="#" method="post">
        <div class="form-group">
          <label for="first-name">ENTER JOIN ID</label>
          <input type="text" class="form-control" name="id">
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="JOIN" name="join">
        </div>
      </form>
    </div>
  </div>
</div>
