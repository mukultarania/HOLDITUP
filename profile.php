</head>
<?php session_start(); ?>
<?php include "includes/db.php"; ?>
<?php include "includes/functions.php"; ?>
<?php include "includes/header.php"; ?>
<?php if(isset($_SESSION['email'])) { ?>
<?php $my_email = $_SESSION['email'];
$my_name = $_SESSION['name'];
$profile_qry = "SELECT * FROM user where user_email = '$my_email' and user_name = '$my_name'";
$profile_result = mysqli_query($connection, $profile_qry); checkQry($profile_result);
 ?>
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
 <h2 id="main-header"></h2>

<div class="container-fluid contain">
  <div class="row">
    <div class="col-5 ml-auto">
      <img src="images/your_project.jpg" alt="" width="100%">
    </div>
    <!-- <div class="col-xs-1">
      <button class="btn btn-info" type="submit" name="Edit"><a href=#>Edit</a></button>
    </div> -->
    <div class="col-xl-2 mr-auto">
      <br>
      <h3><strong>Name</strong></h3><br>
      <h3><strong>Phone-no</strong></h3><br>
      <h3><strong>E-Mail</strong></h3><br>
      <h3><strong>Password</strong></h3><br>
      <!-- <h3><strong>Task Completed</strong></h3><br> -->
    <!-- <ul class="list-group" style="list-style: none;">
      <li class="list-group-item"></li>
      <li class="list-group-item"></li>
      <li class="list-group-item"></li>
      <li class="list-group-item"></li>
      <li class="list-group-item"></li>
    </ul> -->
    </div>
    <div class="col-xl-2 mr-auto">
    <?php
    while($row = mysqli_fetch_assoc($profile_result)){
      echo "<br>
      <h3>{$row['user_name']}</h3><br>
      <h3>{$row['user_phone']}</h3><br>
      <h3>{$row['user_email']}</h3> <br>
      <h3>{$row['user_password']}</h3><br>";
    } ?>
    </div>
  </div>
  <br>
  <br>
</div>

<!--footer-->
<?php include "includes/footer.php"; ?>
<?php
  } else {
  echo "<script>location.href = 'index.php'</script>";
} ?>
