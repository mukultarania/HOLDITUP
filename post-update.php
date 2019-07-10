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
 <h3 id="main-header">UPDATES</h3>
<hr>
<div class="container-fluid contain">
  <div class="row">
    <div class="col-2">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Team Name
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#">Action</a>
        </div>
      </div>
    </div>
    <div class="col-2">
        <div class="dropdown">
          <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Team Name
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
          </div>
        </div>
    </div>
    <div class="col-1">
      <button type="button" class="btn btn-secondary btn-block" name="button">GO</button>
    </div>
  </div>
  <hr>
  <div class="row">
    <div class="col-7">
      <form>
        <div class="form-group">
          <label for="first-name">Team Name</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="last-name">Leader Name (Your Name)</label>
          <input type="text" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" class="form-control" placeholder="Enter your Team Email">
        </div>
        <div class="form-group">
          <label for="phone">Phone</label>
          <input type="tel" class="form-control" placeholder="Enter your Team Phone">
        </div>
        <div class="form-group">
          <label for="message">Message</label>
          <textarea rows="6" class="form-control" placeholder="Discribe about your Team"></textarea>
        </div>
        <div class="form-group">
          <input type="submit" class="form-control" value="Create">
        </div>
      </form>
    </div>
  </div>


</div>

<!--footer-->
<?php include "includes/footer.php"; ?>
