<?php
session_start();
require_once '../config/conn.php';

function GetAll(){
  $query = "SELECT * FROM posts_tb";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'],
		'title' => $data['title'],
		'content' => $data['content'],
		'createdBy' => $data['createdBy'],
		
    );
  }
  return $datas;
}

function GetOne($id){
  $query = "SELECT * FROM  `posts_tb` WHERE  `id` =  '$id'";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('id' => $data['id'], 
		'title' => $data['title'], 
		'content' => $data['content'], 
		'createdBy' => $data['createdBy'], 
		
    );
  }
return $datas;
}

function Insert(){
  $title=$_POST['title']; 
		$content=$_POST['content']; 
		$createdBy=$_POST['createdBy']; 
		
  $query = "INSERT INTO `posts_tb` (`id`,`title`,`content`,`createdBy`)
VALUES (NULL,'$title','$content','$createdBy')";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah disimpan ";
    $_SESSION['mType'] = "success ";
    header("Location: index.php");
  }
  else{
    $_SESSION['message'] = " Data Gagal disimpan ";
    $_SESSION['mType'] = "danger ";
    header("Location: index.php");
  }
}
function Update($id){
  $title=$_POST['title']; 
		$content=$_POST['content']; 
		$createdBy=$_POST['createdBy']; 
		
  $query = "UPDATE `posts_tb` SET `title` = '$title',`content` = '$content',`createdBy` = '$createdBy' WHERE  `id` =  '$id'";
$exe = mysqli_query(Connect(),$query);
  if($exe){
    // kalau berhasil
    $_SESSION['message'] = " Data Sudah diubah ";
    $_SESSION['mType'] = "success ";
    header("Location: index.php");
  }
  else{
    $_SESSION['message'] = " Data Gagal diubah ";
    $_SESSION['mType'] = "danger ";
    header("Location: index.php");
  }
}
function Delete($id){
  $query = "DELETE FROM `posts_tb` WHERE `id` = '$id'";
  $exe = mysqli_query(Connect(),$query);
    if($exe){
      // kalau berhasil
      $_SESSION['message'] = " Data Sudah dihapus ";
      $_SESSION['mType'] = "success ";
      header("Location: index.php");
    }
    else{
      $_SESSION['message'] = " Data Gagal dihapus ";
      $_SESSION['mType'] = "danger ";
      header("Location: index.php");
    }
}


if(isset($_POST['insert'])){
  Insert();
}
else if(isset($_POST['update'])){
  Update($_POST['id']);
}
else if(isset($_POST['delete'])){
  Delete($_POST['id']);
}
?>
