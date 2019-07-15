<?php
if(isset($_POST['join'])){
  $id = $_POST['id'];
  
}
 ?>
<div class="container-fluid contain">
  <div class="row">
    <div class="col-4">
      <form action="#" method="post">
        <div class="form-group">
          <label for="first-name">ENTER JOIN ID</label>
          <input type="text" class="form-control" name="id">
        </div>
        <div class="form-group">
          <input type="submit" class="btn btn-primary" value="JOIN" name="join">
        </div>
      </form>
    </div>
  </div>
</div>
