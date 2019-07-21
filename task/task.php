<div class="container-fluid contain">
  <div class="row">
    <div class="col-12">
      <form class="form-controls" action="#" method="post">
        <div class="form-group">
          <label for="message">Member Name</label>
          <input type="text" class="form-control" style="width:250px" name="mem" value="<?php if(isset($_GET['mem_name'])){echo $_GET['mem_name'];} ?>">
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
if(isset($_POST['button']) && isset($_GET['t_name']) && isset($_GET['mem_name'])){
  $m_name=$_GET['mem_name'];
  $my_email = $_SESSION['name'];
  $t_name = $_GET['t_name'];
  $content = $_POST['content'];
  sendTask($m_name, $my_email, $t_name, $content);
}?>
