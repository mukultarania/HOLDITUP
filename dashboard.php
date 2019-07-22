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
<br>
<?php
if(isset($_GET['select'])){
  $select = $_GET['select'];
  switch ($select) {
    case "team":
        include "includes/team.php";
        break;
    case "create-team":
        include "includes/create_team.php";
        break;
    case "task":
    include "task/task.php";
    break;
    case "request":
    include "msg/request.php";
    break;
    case "join":
    include "msg/join.php";
    break;
    case "members":
    include "includes/members.php";
    break;
    case "main":
    include "task/main.php";
    break;
    default:
        echo "<script>location.href='dashboard.php'</script>";
}

}
        ?>



<!--footer-->
<?php include "includes/footer.php"; ?>
<?php }else{
  echo "<script>location.href='index.php'</script>";
  } ?>
