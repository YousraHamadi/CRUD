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
        
            float: right;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 16px;
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
        }

        #list ul li a {
            color: #f2f5f7;
            text-decoration: none;
            transition: color 0.5s;
        }

        #list ul li a:hover {
            text-decoration: underline;
        }

        
        #title {
            padding: 30px 50px 0px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: bold;
            font-size: 22px;
            color: white;
            display: inline-block;

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
   
        <!-- footer -->
    
</body>

</html>