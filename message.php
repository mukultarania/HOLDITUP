<?php session_start(); ?>
<?php include "includes/db.php"; ?>
<?php include "includes/functions.php"; ?>
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
<h2 id="main-header">Messages</h2>
<hr>
<?php
  if($_SESSION['email']){
    $email = $_SESSION['email'];
    $qry = "SELECT * FROM message where msg_receiver = '$email'";
    $msg = mysqli_query($connection, $qry);
    checkQry($msg);
    while($row = mysqli_fetch_assoc($msg)){
      $sender = $row['msg_sender']; $receiver = $row['msg_receiver']; $date = $row['msg_date']; $time= $row['msg_time']; $content = $row['msg_content'];
 ?>
<div class="container-fluid contain">
  <div class="row">
    <div class="col-xl-2">
      <h7>Sender: <strong><small><?php echo "$sender"; ?></small></strong></h7><br>
      <h7>Receiver: <strong><small><?php echo "$receiver"; ?></small></strong></h7><br>
      <h7>Date: <strong><small><?php echo "$date"; ?></small></strong></h7><br>
      <h7>Time: <strong><small><?php echo "$time"; ?></small></strong></h7><br>
    </div>
    <div class="col-xl-9">
      <h5><b>Content:</b></h5><p><?php echo "$content"; ?></p>
    </div>
    <div class="col-xl-1"><hr>
      <button type="button" name="button" onclick="location.href='includes/reply.php?to=<?php echo $sender; ?>';">Reply</button>
    </div>
  </div><br> <hr>
</div>
<?php }}else{
  echo "<script>location.href='index.php'</script>";
  } ?>
<!--footer-->
<?php include "includes/footer.php"; ?>
