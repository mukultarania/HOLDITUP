<?php include "includes/db.php"; ?>
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
          $team_qry = "SELECT * FROM team where team_email = '$email'";
          $team_res = mysqli_query($connection, $team_qry);
          checkQry($team_res);
          while($team_row = mysqli_fetch_assoc($team_res)) {
            $name = $team_row['team_name']; $leader = $team_row['team_leader'];
            $joinid = $team_row['team_joinid'];
            $t_email = $team_row['team_email'];
            $desp = $team_row['team_desc'];
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
