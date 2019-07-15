<?php session_start(); ?>
<?php include "includes/db.php"; ?>
<?php include "includes/functions.php"; ?>
<div class="container-fluid contain">
  <div class="row">
    <h2 id="main-header">Team</h2>
  </div>
  <div class="row">
    <div class="col-2">
      <button type="button" class="btn btn-success btn-block" onclick="location.href='dashboard.php?select=create-team';" name="button">CREATE TEAM</button>
    </div>
    <div class="col-2">
      <button type="button" class="btn btn-success btn-block" onclick="location.href='dashboard.php?select=join';" name="button">JOIN TEAM</button>
    </div>
  </div><br>
  <div class="row">
    <div class="col-xl-12">
      <table class="table table-striped">
        <thead>
          <th>Team Name</th>
          <th>Leader</th>
          <th>Join ID</th>
          <th>Email</th>
          <th>Description</th>
          <th>Members</th>
          <th>Delete Team</th>
        </thead>
        <?php
        if(isset($_SESSION['email'])){
          global $connection;
          $email = $_SESSION['email'];
          $qry = "SELECT * FROM team where team_email = '$email'";
          $res = mysqli_query($connection, $qry);
          checkQry($res);
          while($row = mysqli_fetch_assoc($res)) {
            $name = $row['team_name']; $leader = $row['team_leader']; $joinid = $row['team_joinid']; $t_email = $row['team_email']; $desp = $row['team_desc'];
            echo "<tr>
              <td>$name</td>
              <td>$leader</td>
              <td>$joinid</td>
              <td>$t_email</td>
              <td>$desp</td>
              <td><a href=#>Members</a></td>
              <td><a href=#>Delete</a></td>
            </tr>";
          }
        }
        ?>
      </table>
    </div>
  </div>
</div>
