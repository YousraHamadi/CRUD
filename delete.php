<?php

include('database.php');
//print_r($_POST);
$id = $_POST["dlt"];
$titre=$_POST["titre"];
$form =  '
<div style=" width: 30%; height:300px;
margin: auto; background:ededed; padding:30px; text-align: center; margin-bottom: 40px;margin-top: 50px">
<p style="font-family:arial; font-weight:bold; color:323232; font-size:15px;"> Are you sure you want to delete<<'.$titre.'>></p>
  <form action="" method="post" style="display: inline-block;">
	<button name="sub" value='.$id.' style="background-color:red;color:white; font-family:arial; padding:10px 50px;  border: none; outline:none;">Yes</button>
	</form>
	<a href="read.php"><button  type=submit style="background-color:#6001FF; color:white; font-family:arial; padding:10px 50px; border: none; outline:none;">NO</button></a>
</div>';



if(isset($_POST['sub'])){
  $val=$_POST['sub'];
  $sql = "DELETE FROM livres WHERE id=$val";
  $form = '<div>Record deleted successfully</div> ';
  if ($conn->query($sql)) {
    echo "Record deleted successfully";
  } else {
    echo "Error deleting record: " . $conn->error;
  }

}
echo $form;

// sql to delete a record
/*
$sql = "DELETE FROM livres WHERE id=$id";

if ($conn->query($sql) === TRUE) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . $conn->error;
}

//header("location:read.php");
*/
?>



