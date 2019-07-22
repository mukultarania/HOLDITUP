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
<h2 id="main-header">Messages</h2>
<hr>
<div class="container-fluid contain">
  <div class="row">
    <div class="col-2 ml-auto">
      <button type="button" class="btn btn-success btn-block" onclick="location.href='msg/reply.php';" name="button">SEND MESSAGE</button>
    </div>
  </div><br><hr>
<?php
    $email = $_SESSION['email'];
    $qry = "SELECT * FROM message where msg_receiver = '$email'";
    $msg = mysqli_query($connection, $qry);
    checkQry($msg);
    while($row = mysqli_fetch_assoc($msg)){
      $sender = $row['msg_sender']; $receiver = $row['msg_receiver']; $date = $row['msg_date']; $time= $row['msg_time']; $content = $row['msg_content'];
      $id = $row['msg_id']; $mname = $row['msg_sname'];
 ?>
  <div class="row">
    <div class="col-2">
      <h7>Sender: <strong><small><?php echo "$sender"; ?></small></strong></h7><br>
      <h7>Receiver: <strong><small><?php echo "$receiver"; ?></small></strong></h7><br>
      <h7>Date: <strong><small><?php echo "$date"; ?></small></strong></h7><br>
      <h7>Time: <strong><small><?php echo "$time"; ?></small></strong></h7><br>
    </div>
    <div class="col-9">
      <h5><b><?php echo "$mname"; ?>:</b></h5><p><?php echo "$content"; ?></p>
    </div>
    <div class="col-1">
      <button type="button" name="button" class="btn btn-secondary" onclick="location.href='msg/reply.php?to=<?php echo $sender; ?>';">Reply</button><br><br>
      <button type="button" name="button" class="btn btn-danger" onclick="location.href='message.php?del=<?php echo $id; ?>';">Delete</button>
    </div>
  </div><hr><?php } ?>
</div>
<?php
if(isset($_GET['del'])){
  delMsg($_GET['del']);
} ?>
<!--footer-->
<?php include "includes/footer.php"; ?>
<?php }else{
  echo "<script>location.href='index.php'</script>";
  } ?>
