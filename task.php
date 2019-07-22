</head>
<?php session_start(); ?>
<?php include "includes/db.php"; ?>
<?php include "includes/functions.php"; ?>
<?php include "includes/header.php"; ?>
<?php if(isset($_SESSION['email'])){ ?>
<?php
$my_name = mysqli_real_escape_string($connection, $_SESSION['name']);
$mytask_qry = "SELECT * FROM task where task_to = '$my_name'";
$mytask_res = mysqli_query($connection, $mytask_qry);
checkQry($mytask_res); ?>
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
 <h2 id="main-header">Task</h2>
<hr>
<div class="container-fluid contain">
<?php while($row = mysqli_fetch_assoc($mytask_res)){ ?>
  <div class="row">
    <div class="col-2">
      <h7>From: <strong><small><?php echo $row['task_from']; ?></small></strong></h7><br>
      <h7>Date: <strong><small><?php echo $row['task_date']; ?></small></strong></h7><br>
    </div>
    <div class="col-10">
      <h5><b><?php echo $row['task_team']; ?>:</b></h5><p><?php echo $row['task_content']; ?></p>
    </div>
  </div><hr>
<?php } ?>
  <br> <hr>
</div>

<!--footer-->
<?php include "includes/footer.php"; ?>
<?php }else{
  echo "<script>location.href='index.php'</script>";
  } ?>
