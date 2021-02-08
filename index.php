<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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

        #content p {
            color: #6001FF;
            font-size: 30px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            /* background-color: yellow; */
            vertical-align: middle;
            position: relative;
            padding: 18px;
        }

        #content {
            display: flex;
            align-items: center;
            justify-content: center;
            height: calc(100vh - 200px);
        }

        #content p::before {
            position: absolute;
            content: '';
            border-top: 2px solid #6001FF;
            border-left: 2px solid #6001FF;
            height: 16px;
            width: 16px;
            top: 0px;
            left: 0px;
            border-width:6px;
        }
        #content p::after {
            position: absolute;
            content: '';
            border-bottom: 2px solid #6001FF;
            border-right: 2px solid #6001FF;
            height: 16px;
            width: 16px;
            bottom: 0px;
            right: 0px;
            border-width:6px;
        }
      
        #title {
            padding: 30px 50px 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 22px;
            color: white;
            display: inline-block;

        }
        #footer{ 
            height: 50px;
            width: 100%;
            line-height: 50px;
            color:rgb(130, 130, 130) ;
            /* height: calc(100vh - 20px); */
            position: absolute;
            bottom: 0;
            display: block;
            font-family:  Helvetica, sans-serif;
            font-size: 12px;
        }
        #footer p{
            text-align: center;

        }

    </style>
</head>

<body>
    <!-- barre de navigation -->
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
        <!-- contenu -->
    <div id="content">
        <p>WELCOME TO LIBRARY</p>
    </div>
        <!-- footer -->
    <div id="footer">
        <p>Library Copyrights 2020/2021</p>
    </div>
</body>

</html>