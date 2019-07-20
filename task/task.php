<div class="container-fluid contain">
  <?php
  $my_email = $_SESSION['email']; $my_name = $_SESSION['name'];
  $get_team = "SELECT * FROM team where team_email = '$my_email'";
  $get_team_res = mysqli_query($connection, $get_team); checkQry($get_team_res);
  ?>
  <br>
  <div class="row">
    <div class="col-12">
      <form class="form-controls" action="#" method="post">
        <div class="form-group">
          <label for="message">Member Name</label>
          <input type="text" name="mem" value="<?php if(isset($_GET['mem_name'])){echo $_GET['mem_name'];} ?>">
        </div>
        <div class="form-group">
          <label for="message">Task</label>
          <textarea rows="6" class="form-control" placeholder="" name="content"></textarea>
        </div>
        <div class="form-group">
          <input class="btn btn-success btn-block" type="submit" class="form-control" value="Send" name="button" style="width:150px">
        </div>
    </form>
    </div>
  </div>
</div>
<?php
if(isset($_POST['button']) && isset($_GET['team_name']) && isset($_GET['mem_name'])){
  $t_name = $_GET['team_name']; $m_name=$_GET['mem_name']; $my_email = $_SESSION['email'];$content = $_POST['content'];
  echo "$t_name"; echo "$m_name";echo "$content";echo "$my_email";
  sendTask($m_name, $my_email, $t_name, $content);
}?>
