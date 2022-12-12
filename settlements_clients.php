<?php

include('settings.php');
include('bot_lib.php');

if (!isset($_SESSION['usersname'])) {
  header("location: index.php");
}
?>


<!DOCTYPE html>
<html lang="ru">
<head>
  
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/style.css">
    <title>ortosavdo</title>
    
</head>
<body>  

<?php include 'partSite/nav.php'; ?>

<div class="page_name">
    <div class="container-fluid">
        <i class="fa fa-clone" aria-hidden="true"></i>
        <i class="fa fa-angle-double-right right_cus"></i>
        <span class="right_cus">Взаиморасчеты с клиентами</span>
    </div>    
</div>

<div class="toolbar">
        <div class="container-fluid">
           <a href="add_order.php"> <button type="button" class="btn btn-success">Взаимозачет</button> </a>
        </div>
</div>

<div class="all_table">
    <div class="container-fluid">
        <table class="table table-striped table-bordered">
        <thead>
            <tr>
            <th scope="col">ИНН</th>
            <th scope="col">Контрагент</th>
            <th scope="col">Долг</th>
            <th scope="col">Предоплата</th>
            <th scope="col">Заказ</th>
            <th scope="col">Итог</th>
            <th scope="col">Детали</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>303169768</td>
                <td>"ZENTA PHARM" MChJ</td>
                <td>16 071 168</td>
                <td>10 844 000</td>
                <td>0</td>
                <td>5 227 168</td>
                <td><a href="#">Детали</a></td>
            </tr>
            <tr>
                <td>303169768</td>
                <td>"ZENTA PHARM" MChJ</td>
                <td>16 071 168</td>
                <td>10 844 000</td>
                <td>0</td>
                <td>5 227 168</td>
                <td><a href="#">Детали</a></td>
            </tr>
            <tr>
                <td>303169768</td>
                <td>"ZENTA PHARM" MChJ</td>
                <td>16 071 168</td>
                <td>10 844 000</td>
                <td>0</td>
                <td>5 227 168</td>
                <td><a href="#">Детали</a></td>
            </tr>
        </tbody>
        </table>
    </div>
</div>




<div class="container-fluid">

    <?php include 'partSite/modal.php'; ?>
    
</div>


</body>
</html>