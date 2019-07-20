<div class="container-fluid contain">
  <div class="row">
    <h2 id="main-header">Members</h2>
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
          $email = $_SESSION['email'];
          $qry = "SELECT * FROM members where mem_teamemail = '$email' OR mem_email = '$email'";
          $res = mysqli_query($connection, $qry);
          checkQry($res);
          while($row = mysqli_fetch_assoc($res)) {
          $name  = $row['mem_name']; $t_email = $row['mem_teamemail']; $email = $row['mem_email']; $postn =$row['mem_position']; $t_name = $row['mem_teamname'];
            echo "<tr>
              <td>$name</td>
              <td>$t_name</td>
              <td>$t_email</td>
              <td>$postn</td>
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
