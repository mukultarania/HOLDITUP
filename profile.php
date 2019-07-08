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
 <h2 id="main-header"></h2>

<div class="container-fluid contain">
  <div class="row justify-content-center">
    <div class="col-3">

    </div>
    <div class="col-3">
      <img class="rounded-circle" src="images/your_project.jpg" alt="" width="250px" height="250px">
    </div>
    <div class="col-3">
      <button class="btn-primary" type="submit" name="Edit"><a href=#>Edit</a></button>
    </div>
  </div>
  <br>
  <br>
  <div class="row justify-content-center">
    <div class="col-xl-5">
    <ul class="list-group" style="list-style: none;">
      <li class="list-group-item"><h3><strong>Name</strong></h3>  </li>
      <li class="list-group-item"><h3><strong>Age</strong></h3></li>
      <li class="list-group-item"><h3><strong>E-Mail</strong></h3></li>
      <li class="list-group-item"><h3><strong>Phone-no</strong></h3></li>
      <li class="list-group-item"><h3><strong>Task Completed</strong></h3></li>
    </ul>
    </div>
    <div class="col-xl-5">
    <ul class="list-group" style="list-style: none;">
      <li class="list-group-item"> <h3>Mukul</h3> </li>
      <li class="list-group-item"> <h3>22</h3> </li>
      <li class="list-group-item"> <h3>E-Mail</h3> </li>
      <li class="list-group-item"> <h3>123456789</h3> </li>
      <li class="list-group-item"> <h3>123456789</h3> </li>
    </ul>
    </div>
  </div>

</div>

<!--footer-->
<?php include "includes/footer.php"; ?>
