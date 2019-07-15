<?php session_start(); ?>
<?php
function checkLogin($email, $password){
  global $connection;
  $qry = "SELECT user_email, user_password FROM user";
  $result = mysqli_query($connection, $qry);
  if(isset($_SESSION['email'])){
    echo "<script>location.href='dashboard.php'</script>";
  } else {
      while($row = mysqli_fetch_assoc($result)){
        if($row['user_email']==$email && $row['password']==$password){
          $_SESSION['email']= $email;
          $_SESSION['ID']= $row['user_id'];
          echo "<script>location.href='dashboard.php'</script>";
        } else {
          echo "<script>alert('INCORRECT E-MAIL AND PASSWORD')</script>";
        }
      }
  }
}
?>
