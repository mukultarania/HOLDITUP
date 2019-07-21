<?php
if(isset($_GET['id'])){
  delMember($_GET['id']);
} ?>
<div class="container-fluid contain">
  <div class="row">
    <h2 id="main-header">Members</h2>
  </div>
  <div class="row">
    <h7 id="main-header">My-Team</h7>
  </div>
  <div class="row">
    <div class="col-xl-12">
      <table class="table">
        <thead>
          <th>Name</th>
          <th>Team Name</th>
          <th>Team Email</th>
          <th>Position</th>
          <th>Task</th>
          <th>Message</th>
          <th>Remove</th>
        </thead>
        <?php
        if(isset($_SESSION['email'])){
          global $connection;
          $myemail = $_SESSION['email'];
          $name = $_SESSION['name'];
          $qry = "SELECT * FROM members where  mem_position = 'Member' AND mem_name != '$name' AND (mem_teamemail = '$myemail' OR mem_email = '$myemail')";
          $res = mysqli_query($connection, $qry);
          checkQry($res);
          while($row = mysqli_fetch_assoc($res)) {$mem_id = $row['mem_id'];
          $name  = $row['mem_name']; $t_email = $row['mem_teamemail']; $email = $row['mem_email']; $postn =$row['mem_position']; $t_name = $row['mem_teamname'];
            echo "<tr>
              <td>$name</td>
              <td>$t_name</td>
              <td>$t_email</td>
              <td>$postn</td>
              <td><a href=dashboard.php?select=task&mem_name=$name&t_name=$t_name>Task</a></td>
              <td><a href=msg/reply.php?to=$email>Message</a></td>
              <td><a href=dashboard.php?select=members&id=$mem_id>Remove</a></td>
            </tr>";
          }
        }
          ?>
      </table>
    </div>
  </div>
  <div class="row">
    <h7 id="main-header">Joined-Team</h7>
  </div>
  <div class="row">
    <div class="col-xl-12">
      <table class="table">
        <thead>
          <th>Name</th>
          <th>Team Name</th>
          <th>Team Email</th>
          <th>Position</th>
          <th>Message</th>
        </thead>
        <?php
        if(isset($_SESSION['email'])){
          global $connection;
          $email = $_SESSION['email'];
          $qry = "SELECT * FROM members where mem_email = '$email' AND mem_position = 'Member'";
          $res = mysqli_query($connection, $qry);
          checkQry($res);
          while($row = mysqli_fetch_assoc($res)) {$mem_id = $row['mem_id'];
          $name  = $row['mem_name']; $t_email = $row['mem_teamemail']; $email = $row['mem_email']; $postn =$row['mem_position']; $t_name = $row['mem_teamname'];
            echo "<tr>
              <td>$name</td>
              <td>$t_name</td>
              <td>$t_email</td>
              <td>$postn</td>
              <td><a href=msg/reply.php?to=$t_email>Message</a></td>
              <td><a href=dashboard.php?select=members&id=$mem_id>Leave</a></td>
            </tr>";
          }
        }
          ?>
      </table>
    </div>
  </div>
</div>
