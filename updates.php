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
    <div class="col-2 ml-auto">
      <button type="button" class="btn btn-success   btn-block" name="button">POST UPDATE</button>
    </div>
  </div>
  <hr>
  <br><br>
  <div class="row">
    <div class="col-xl-2">
      <h7>From: <strong><small>GG</small></strong></h7><br>
      <h7>Date: <strong><small>GG</small></strong></h7><br>
      <h7>Time: <strong><small>GG</small></strong></h7><br>
    </div>
    <div class="col-xl-9">
      <h5><b>Content:</b></h5>
      <p>he action of choosing someone to hold an office or post.
          "a leader's designation of his own successor"
          synonyms:	appointment, nomination, selection, choice, choosing, picking, election, naming, identifying; More
          the action of choosing a place for a special purpose or giving it a special status.
          "Dibden Bay's designation as a Site of Special Scientific Interest"
          synonyms:	classification, classing, labelling, specification, definition, defining, earmarking, stipulation, particularization, pinpointing
          "one of its roles is the designation of nature reserves"</p>
    </div>
    <hr>
  </div>
</div>

<!--footer-->
<?php include "includes/footer.php"; ?>
