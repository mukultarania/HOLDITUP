</head>
<?php session_start(); ?>
<?php include "includes/db.php"; ?>
<?php include "includes/functions.php"; ?>
<?php include "includes/header.php"; ?>
<?php if(isset($_SESSION['email'])){ ?>
<body>
  <!-- <h1 id="main-header">WELCOME TO TEAM MANAGEMENT SYSTEM</h1> -->
  <!-- navigation-->
<?php include "includes/nav.php"; ?>
<!--Sidebar-->
<div class="container-fluid">
  <div class="row">
    <div class="col-2">
      <?php include "includes/sidebar.php"; ?>
    </div>

  </div>
</div>
 <h3 id="main-header">UPDATES</h3>
<hr>
<div class="container-fluid contain">
  <?php
  $my_email = $_SESSION['email']; $my_name = $_SESSION['name'];
  $get_team = "SELECT * FROM members where (mem_email = '$my_email' OR mem_teamemail = '$my_email') AND mem_name = '$my_name'";
  $get_team_res = mysqli_query($connection, $get_team); checkQry($get_team_res);
  ?>
  <div class="row">
    <div class="col-2">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Team Name
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        <?php   while ($row = mysqli_fetch_assoc($get_team_res)) {
            $team_name = $row['mem_teamname']; $team_email = $row['mem_teamemail']; ?>
          <a class="dropdown-item" href="post-update.php?team_name=<?php echo "$team_name";?>"><?php echo "$team_name"; ?></a>
          <?php } ?>
        </div>
      </div>
    </div>
  </div><br>
  <div class="row">
    <div class="col-7">
      <form action="#" method="post">
        <!-- <div class="form-group">
          <label for="first-name">Team Name</label>
          <input type="text" class="form-control">
        </div> -->
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" placeholder="Enter your Team Email" value="<?php echo $my_email; ?>">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea rows="6" class="form-control" placeholder="Discribe about your Team" name="content"></textarea>
        </div>
        <div class="form-group">
          <input type="submit" class="form-control" value="UPDATE" name = "update">
        </div>
      </form>
    </div>
  </div>
</div>
<?php
if(isset($_POST['update']) && isset($_GET['team_name'])){
  $up_content = $_POST['content'];
  $team_name = $_GET['team_name'];
  $up_qry = "INSERT INTO updates (up_teamname, up_teamemail, up_from,	up_content, up_date, up_time) VALUES ('$team_name', '$team_email', '$my_email', '$up_content', CURDATE(), CURTIME())";
  $up_res = mysqli_query($connection, $up_qry); checkQry($up_qry);
}
 ?>
<!--footer-->
<?php include "includes/footer.php"; ?>
<?php } else {
  echo "<script>location.href = 'index.php'</script>";
} ?>
