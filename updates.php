</head>
<?php include "includes/db.php"; ?>
<?php session_start(); ?>
<?php include "includes/functions.php"; ?>
<?php include "includes/header.php"; ?>
<?php if(isset($_SESSION['email'])) { ?>
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
          <a class="dropdown-item" href="updates.php?team_name=<?php echo $team_name;?>"><?php echo "$team_name"; ?></a>
          <?php } ?>
        </div>
      </div>
    </div>
    <div class="col-2 ml-auto">
      <button type="button" class="btn btn-success btn-block" onclick="location.href='post-update.php';" name="button">POST UPDATE</button>
    </div>
  </div>
  <hr>

  <?php
  if(isset($_GET['team_name'])){
    $t_name = $_GET['team_name'];
    $up_q = "SELECT * FROM updates WHERE up_teamname = '$t_name'";
    $res = mysqli_query($connection, $up_q);
    while ($row = mysqli_fetch_assoc($res)){
     $up_from = $row['up_from']; $up_date = $row['up_date']; $up_time = $row['up_time']; $up_content = $row['up_content'];
?>
  <div class="row">
    <div class="col-xl-2">
      <h7>From: <strong><small><?php echo $up_from;?></small></strong></h7><br>
      <h7>Date: <strong><small><?php echo $up_date;?></small></strong></h7><br>
      <h7>Time: <strong><small><?php echo $up_time;?></small></strong></h7><br>
    </div>
    <div class="col-xl-9">
      <h5><b>Content:</b></h5>
      <p><?php echo $up_content;?></p>
    </div>
  </div> <hr>
<?php   }
} ?>
</div>
<!--footer-->
<?php include "includes/footer.php"; ?>
<?php
  } else {
  echo "<script>location.href = 'index.php'</script>";
} ?>
