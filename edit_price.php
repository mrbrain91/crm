<?php

include('settings.php');
include('bot_lib.php');

if (!isset($_SESSION['usersname'])) {
  header("location: index.php");
}

if (isset($_GET['id'])) {
   $id = $_GET['id'];
   $query = "SELECT * FROM price_item_tbl WHERE price_id='$id' ORDER by id DESC";  
   $rs_result = mysqli_query ($connect, $query);  
}



if(isset($_POST['submit']) && $_POST['submit'] == 'Добавить') {
    // add_product($connect);
    echo 'ok';
}




?>


<!DOCTYPE html>
<html lang="en">
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
        <span class="right_cus">Редактировать цена</span>
    </div>    
</div>

<div class="toolbar">
        <div class="container-fluid">
           <a href="price.php"> <button type="button" class="btn btn-light">Закрыть</button> </a>
        </div>
</div>



<div>
    <div class="container-fluid"> 
        <div class="card_head card_head_mt0">
        <form action="#"  method="POST" class="horizntal-form" id="order_form">
            <div class="row mt">
                <div class="col-md-3">
                    <span>Продукция</span>
                </div>
                <div class="col-md-2">
                    <span>Цена</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <select required name="main_order_sale_agent" form="order_form" class="form-control">
                        <option value="">--выберитe---</option>
                        <option value="<?php echo 'Khamidov Khakimjon Makhmudovich';?>"><?php echo 'Khamidov Khakimjon Makhmudovich';?></option>
                        <option value="<?php echo 'Yuldoshev Fazliddin Xudoyorovich';?>"><?php echo 'Yuldoshev Fazliddin Xudoyorovich';?></option>
                    </select>
                </div>
                <div class="col-md-2">
                    <input type="text" class="form-control">
                </div>
                <div class="col-md-3">
                    <input class="btn btn-success" type="submit" form="product_form" name="submit" value="Добавить" />
                </div>

            </div>
            
        </form></br>
        </div>




        
        <table class="table table-hover table-bordered">
        <thead>
            <tr>
            <th scope="col">Название</th>
            <th scope="col">Цена</th>
            <th scope="col">Удалить</th>
            </tr>
        </thead>
        <tbody>
<?php     
    while ($row = mysqli_fetch_array($rs_result)) {    
?> 
            <tr>
                <td><?php echo $row["name"]; ?></td>
                <td><?php echo $row["cost"]; ?></td>
                <td><a href="#" onclick="return confirm('Удалить?')" role="button">Удалить</a></td>
            </tr>
<?php       
    };    
?>
        </tbody>
        </table>
    </div>
</div>




<div class="container-fluid">

    <?php include 'partSite/modal.php'; ?>
    
</div>


</body>
</html>