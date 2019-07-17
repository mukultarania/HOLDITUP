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
  $team_email = $_SESSION['email'];
  $get_team = "SELECT * FROM members where mem_email = '$team_email' OR mem_teamemail = '$team_email'";
  $get_team_res = mysqli_query($connection, $get_team); checkQry($get_team_res);
  while ($row = mysqli_fetch_assoc($get_team_res)) {
    $team_name = $row['mem_teamname'];
  ?>
  <div class="row">
    <div class="col-2">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle btn-block" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Team Name
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="updates.php?team_name=<?php echo $team_name;?>"><?php echo $team_name; ?></a>
        </div>
      </div>
    </div><?php } ?>
    <div class="col-2 ml-auto">
      <button type="button" class="btn btn-success btn-block" onclick="location.href='post-update.php';" name="button">POST UPDATE</button>
    </div>
  </div>
  <hr>
  <br>
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
<?php } else {
  echo "<script>location.href = 'index.php'</script>";
} ?>
