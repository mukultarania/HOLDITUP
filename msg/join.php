<?php
if(isset($_POST['join']) && isset($_SESSION['email'])){
  $id = mysqli_real_escape_string($connection, $_POST['id']);
  $join_qry = "SELECT * FROM team";
  $join_res = mysqli_query($connection, $join_qry);
  checkQry($join_res);
  while($row = mysqli_fetch_assoc($join_res)){
    if($row['team_joinid'] == $id){
      $email = mysqli_real_escape_string($connection, $row['team_email']);
      $myemail = mysqli_real_escape_string($connection, $_SESSION['email']);
      $reqtype = "team";
      $status = 0;
      req($email, $myemail, $reqtype, $status, $id);
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
