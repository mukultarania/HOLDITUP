<?php
function checkConn($res){
  if(!$res){
    die("DB is not connected");
  }
}

function checkQry($res){
  global $connection;
  if(!$res){die("Query Fail");}
}

function insertData(){
  global $connection;
  if(isset($_POST['add'])){
      global $connection;
      $cat_title = $_POST['cat_title'];
      if($cat_title == "" || empty($cat_title)){
        echo "This field should not be empty.";
        }
      else {
        $qry_add = "INSERT INTO category (cat_title) values ('$cat_title')";
        $res = mysqli_query($connection, $qry_add);
        if(!$res){
          die("QUERY FAIL");
        }
      }
    }
}

function findAllCat(){
  global $connection;
  $sql = "SELECT * FROM category";
  $cat_show = mysqli_query($connection, $sql);
  while($row = mysqli_fetch_assoc($cat_show)){
    $cat_title = $row['cat_title'];
    $cat_id = $row['cat_id'];
    echo "<tr>
      <th><a href='#'>{$cat_id}</a></th>
      <th><a href='#'>{$cat_title}</a>  </th>
      <th><a href='admin_cat.php?delete={$cat_id}'>DELETE</a></th>
      <th><a href='admin_cat.php?edit={$cat_id}'>EDIT</a></th>
    </tr>";
  }
}

function deleteCat(){
  global $connection;
  if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $qry_delete = "DELETE FROM category WHERE cat_id = '{$delete_id}'";
    $del = mysqli_query($connection, $qry_delete);
    header("LOCATION: admin_cat.php");
  }
}
 ?>
