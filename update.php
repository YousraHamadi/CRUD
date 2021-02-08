<?php 
include('database.php');
$id= $_GET['id'];
    if(count($_POST)>0) {
        mysqli_query($conn,"UPDATE livres set titre= '".$_POST['titre']."',
        auteur='".$_POST['auteur']."',
        images='".$_POST['images']."', 
         prix='".$_POST['prix']."',
        quantite='".$_POST['quantite']."',
        date_achat='".$_POST['date_achat']."',
        date_de_publication='".$_POST['date_de_publication']."'  WHERE id='".$id."'");
        }
    $result = mysqli_query($conn,"SELECT * FROM livres WHERE id='".$id."'");
    $row= mysqli_fetch_array($result);
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
*{ 
    margin: 0%;
    padding: 0%;
}
body{
    background-color: #F2F2F2;
}
* {
            margin: 0;
            padding: 0;
        }
        #navBarre {
            height: 100px;
            background-color: #6001FF;
        }
        #list {
            /* margin: 0px 0px 50px; */
            /* padding: 10px 15px; */
            float: right;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 16px;
            /* line-height: 6%; */
        }
        #list ul {
            margin:0px;
            margin-top: 40px ;
        }
        #list ul li {
            margin: 0px;
            padding: 0px 32px;
            padding-bottom: 10px;
            display: inline;
            font-size: 15px;
            list-style-type: none;
            /* border-bottom: 6px solid white; */    
        }
        #list ul li a {
            color: #f2f5f7;
            text-decoration: none;
            transition: color 0.5s;
        }

        #list ul li a:hover {
            text-decoration: underline;
        }
        
/* .navbar-container ul li a {
	color: #ffffff;
	text-decoration: none;
	display: inline-block;	
	padding: 10px;
	transition: color 0.5s;
} */

      
        #title {
            padding: 30px 50px 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 22px;
            color: white;
            /* line-height: 100%; */
            display: inline-block;

        }

.titleg p{
    
    font-weight: bold;
    
    margin-top: 100px;
    margin-left: 5%;
    color: #6001FF;
}
.form{
    padding-left: 500px;
    padding-top: 50px;
    display: block;
}
.form input{
    padding: 8px 50px;
    background-color: rgb(230,230,230);
    position: relative;
  overflow: hidden;
  outline: none;
  border : none ;

}
.form button{
    padding: 8px 50px;
    background-color: #6001FF;
    color: white;
}
.form input[type="file"]{
    padding-left:10px;
    height:25px;
}
.btn{
    margin-left:75px;
}
.form span{
    font-weight: bold;
}
#footer{
             
height: 50px;
width: 100%;
line-height: 50px;
color:rgb(130, 130, 130) ;
margin-left: -230px;
display: block;
font-family:  Helvetica, sans-serif;
font-size: 12px;}
#footer p{
text-align: center;}
    </style>
</head>
<body>
<header>
     <div id='navBarre'>
         <div id="title">
             <p>LIBRARY</p>
             </div>
             <div id='list'>
         <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="read.php">Books</a></li>
                </ul>
            </div>
        </div>
    </header>
    <div class="titleg">
        <p>new books :</p>
</div>
    <!-- ce code pour manipuler "update" -->
    
    <form action=""  method ="post" >
    <div  class="form">
       <span>title</span><br>
       
         <input type="text" name = "titre" value="<?php echo $row["titre"]; ?>" > <br> <br>
           <span>Author</span><br>
              <input type="text"  name = "auteur" value="<?php echo $row["auteur"]; ?>"> <br> <br>
              <span>image </span>
           <div class="">
         <input type="file"  name = "images" style="width:242px;" value="<?php echo $row["images"]; ?>"> <br> <br>
         <span>prix </span>
           <div class="">
         <input type="text"  name = "prix" style="width:200px;" value="<?php echo $row["prix"]; ?>">
    </div> <br>
  <span> quatité au stock</span>  <br>
        <input type="text"  name = "quantite" value="<?php echo $row["quantite"]; ?>"> <br> <br>
  <span>date d'achat</span>  <br>
      <input type="date" name="date_achat" style="width:200px;" value="<?php echo $row["date_achat"]; ?>"> <br> <br>
         <div>
    <span>Date du publication</span><br> 
    <input type="date" style="width:200px;" class="form-control"  name="date_de_publication" 
    value="<?php echo $row["date_de_publication"]; ?>" required>
</div> <br> 
    <!--<span>Published AT</span>  <br> <br>
    <input type="text"> <br> -->
    <div class="btn" type ="submit"  name = "submit"><button >UPDATE</button ></div>
</div>
    </form>
    <div id="footer">
        <p>Library Copyrights 2020/2021</p>
    </div>

</body>
</html>