<?php session_start(); ?>
<?php include "includes/functions.php"; ?>
<?php
if(isset($_POST['create'])){
  global $connection;
  $name = $_POST['name']; $leader = $_POST['leader']; $content = $_POST['content']; $joinid = uniqid(); $email = $_SESSION['email'];
  $qry = "INSERT INTO team (team_name, team_leader, team_joinid, team_email, team_desc, team_date) values ('$name', '$leader', '$joinid', '$email', '$content', CURDATE())";
  $create_team = mysqli_query($connection, $qry);
  checkQry($create_team);
}
 ?>
<div class="container-fluid contain">
  <form action="#" method="post">
    <div class="form-group">
      <label for="first-name">Team Name</label>
      <input type="text" class="form-control" name="name">
    </div>
    <div class="form-group">
      <label for="last-name">Leader Name (Your Name)</label>
      <input type="text" class="form-control" name="leader">
    </div>
    <!-- <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" placeholder="Enter your Team Email" name="email">
    </div> -->
    <!-- <div class="form-group">
      <label for="phone">Phone</label>
      <input type="tel" class="form-control" placeholder="Enter your Team Phone" name="phone">
    </div> -->
    <div class="form-group">
      <label for="message">Message</label>
      <textarea rows="6" class="form-control" placeholder="Discribe about your Team" name="content"></textarea>
    </div>
    <div class="form-group">
      <input type="submit" class="btn btn-primary" value="Create" name="create">
    </div>
  </form>
</div>
