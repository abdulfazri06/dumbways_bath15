<?php
session_start();
require_once '../config/conn.php';

function GetAll(){
  $query = "SELECT * FROM comments_tb";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('postId' => $data['postId'],
		'id' => $data['id'],
		'comment' => $data['comment'],
		
    );
  }
  return $datas;
}

function GetOne($id){
  $query = "SELECT * FROM  `comments_tb` WHERE  `postId` =  '$id'";
  $exe = mysqli_query(Connect(),$query);
  while($data = mysqli_fetch_array($exe)){
    $datas[] = array('postId' => $data['postId'], 
		'id' => $data['id'], 
		'comment' => $data['comment'], 
		
    );
  }
return $datas;
}

function Insert(){
  $id=$_POST['id']; 
		$comment=$_POST['comment']; 
		
  $query = "INSERT INTO `comments_tb` (`postId`,`id`,`comment`)
VALUES (NULL,'$id','$comment')";
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
  $id=$_POST['id']; 
		$comment=$_POST['comment']; 
		
  $query = "UPDATE `comments_tb` SET `id` = '$id',`comment` = '$comment' WHERE  `postId` =  '$id'";
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
  $query = "DELETE FROM `comments_tb` WHERE `postId` = '$id'";
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
  Update($_POST['postId']);
}
else if(isset($_POST['delete'])){
  Delete($_POST['postId']);
}
?>
