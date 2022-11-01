<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo&display=swap" rel="stylesheet">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Comatible" content="IE=edg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Products Cart | سلة منتجاتي</title>
    <style>
        h3{
            font-family: 'cairo', sans-serif;
            font-weight: bold;
            margin-top: 20px;
        }
        main{
            width: 50%;
            margin-top: 30px;
        }
        table{
            box-shadow: 1px 1px 10px silver;
        }
        thead{
            background-color: #7E81E3;
            color: white;
            text-align: center;
        }
        tbody{
            text-align: center;
        }
    </style>
</head>
<body>
    <center>
        <h3>المنتجات المختارة</h3>
    </center>
    <?php
    include('config.php');
    $result = mysqli_query($con, "SELECT * FROM addcart");
    while($row =mysqli_fetch_array($result)){
        echo "
            <center>
        <main>
            <table class='table'>
                <thead>
                    <tr>
                        <th scope='col'>Product name</th>
                        <th scope='col'>Product price</th>
                        <th scope='col'>Delete product</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>$row[name]</td>
                        <td>$row[price]</td>
                        <td><a href='del_card.php? id=$row[id]' class='btn btn-danger'>إزالة</a></td>
                    </tr>
                </tbody>
            </table>
        </main>
    </center>
        ";}?>
        <center>
            <a href="shop.php">الرجوع لقائمة المنتجات</a>
        </center>
</body>
</html>