<!DOCTYPE html>
<html lang="en">
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"></link>
	<link rel="preconnect" href="https://fonts.googleapis.com"></link>
	<link rel="preconnect" href="https://fonts.gstatic.com" 'crossorigin'></link>
	<link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet"></link>
	<meta charset="UTF-8"></meta>
	<meta http-equiv="X-UA-Comatible" content="IE=edg"></meta>
	<meta name="viewport" content="width=device-width, initial-scale=1.0"></meta>
    <title>Products | المنتجات</title>
	<link rel="stylesheet" href="style.css"></link>
    <style>
        h3{
            font-family: 'Cairo', sans-serif;
            font-weight: bold;
            margin-top: 15px;
        }
        .card{
            float: right;
            margin-top: 20px;
            margin-left: 10px;
            margin-right: 10px;
        }
        .card img{
            width: 100%;
            height: 200px;
        }
        main{
            width: 60%;
        }
        #aa{
            margin-left: 70px;
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark bg-dark">
        <a id="aa" class="navbar-brand" href="card.php">Mycart | سـلــتــي</a>

    </nav>
    <center>
        <h3>قائمة المنتجات المعروضة</h3>
    </center>
    <?php
    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM product");
    while($row = mysqli_fetch_array($result)){
        echo "
        <center>
        <main>   
            <div class='card' style='width: 15rem;'>
                <img src='$row[image]' class='card-img-top'>
                <div class='card-body'>
                    <h5 class='card-title'>$row[name]</h5>
                    <p class='card-text'>$row[price]</p>
                    <a href='val.php? id=$row[id]' class='btn btn-success'>إضافة للسلة</a>
                </div>
            </div>
        </main>
        </center>
        ";
    }


    ?>


</body>
</html>