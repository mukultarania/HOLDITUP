</head>
<?php include "includes/header.php"; ?>
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
    case "task":
    include "includes/task.php";
    break;
    case "members":
    include "includes/members.php";
    break;

    default:
        echo "<script>location.href='dashboard.php'</script>";
}

}
        ?>



<!--footer-->
<?php include "includes/footer.php"; ?>
