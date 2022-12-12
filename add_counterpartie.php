<?php

include('settings.php');
include('bot_lib.php');

if (!isset($_SESSION['usersname'])) {
  header("location: index.php");
}

$last_id = get_id_new_order($connect);


if(isset($_POST['submit']) && $_POST['submit'] == 'Сохранить') {
    add_counterparties($connect);
}


?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
        <span class="right_cus">Приход продукции на склад</span>
    </div>    
</div>

<div class="toolbar">
        <div class="container-fluid">
            <!-- <button type="button" class="btn btn-primary">Сохранить</button> -->
            <!-- <button type="submit" form="order_form" name="save_add_pro" class="btn btn-success">Принять</button> -->
            <td><input class="btn btn-success" type="submit" form="counterpartie_form" name="submit" value="Сохранить" />


            <a href="counterparties.php"><button type="button" class="btn btn-light">Закрыть</button></a>

        </div>
</div>

<div class="card_head">
    <div class="container-fluid">
        <form action="" method="POST" class="horizntal-form" id="counterpartie_form">
        <div class="row">
                <div class="col-md-3">
                    <span>Название</span>
                </div>
                <div class="col-md-3">
                    <span>Альтернативное название</span>
                </div>
                <div class="col-md-3">
                    <span>ИНН/ПНФЛ</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <input required type="text" class="form-control" name="name" form="counterpartie_form" >
                </div>
                <div class="col-md-3"> 
                    <input required type="text" class="form-control" name="alternative_name" form="counterpartie_form">
                </div>
                <div class="col-md-3">
                    <input required type="text" class="form-control" name="inn" form="counterpartie_form">
                </div>
            </div>
            <div class="row mt">
                <div class="col-md-3">
                    <span>Регистрационный код плательщика НДС</span>
                </div>
                <div class="col-md-3">
                    <span>Расчетный счет</span>
                </div>
                <div class="col-md-3">
                    <span>МФО</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <input required type="text" class="form-control" name="nds" form="counterpartie_form">
                </div>
                <div class="col-md-3">
                    <input required type="text" class="form-control" name="raschetny_schet" form="counterpartie_form">
                </div>
                <div class="col-md-3">
                    <input required type="text" class="form-control" name="mfo" form="counterpartie_form">
                </div>
            </div>

            <div class="row mt">
                <div class="col-md-3">
                    <span>Адрес</span>
                </div>
                
            </div>
            <div class="row">
                <div class="col-md-3">
                    <input required type="text" class="form-control" name="address" form="counterpartie_form">
                </div>
               
            </div>


            <div class="row mt">
            <div class="col-md-3">
                    <span>Контакт</span>
                </div>
                <div class="col-md-3">
                    <span>Директор</span>
                </div>
                <div class="col-md-3">
                    <span>Гл.Бухгалтер</span>
                </div>
            </div>
            <div class="row">
            <div class="col-md-3">
                    <input required type="text" class="form-control" name="contact" form="counterpartie_form">
                </div>
                <div class="col-md-3">
                    <input required type="text" class="form-control" name="director" form="counterpartie_form">
                </div>
                <div class="col-md-3">
                    <input required type="text" class="form-control" name="accountant" form="counterpartie_form">
                </div>
            </div>
        </form>
    </div>
</div>



<div class="container-fluid">

    <?php include 'partSite/modal.php'; ?>
    
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</body>
<script>
$(document).ready(function () {
    var counter = 0;


 

    $("#addrow").on("click", function () {
        var newRow = $("<tr>");
        var cols = "";                                                      
                
                                                                                                                                                                 
        cols += '<td><select name="prod_name[]" form="order_form" class="form-control"><option value="">--выберите продукцию--</option><option value="<?php echo $a; ?>"><?php echo $a; ?></option><option value="<?php echo $b; ?>"><?php echo $b; ?></option><option value="<?php echo $c; ?>"><?php echo $c; ?></option><option value="<?php echo $d; ?>"><?php echo $d; ?></option><option value="<?php echo $e; ?>"><?php echo $e; ?></option><option value="<?php echo $f; ?>"><?php echo $f; ?></option><option value="<?php echo $g; ?>"><?php echo $g; ?></option><option value="<?php echo $h; ?>"><?php echo $h; ?></option><option value="<?php echo $i; ?>"><?php echo $i; ?></option><option value="<?php echo $j; ?>"><?php echo $j; ?></option></select></td>';
        cols += '<td><input required type="text" name="count_name[]"  class="form-control" form="order_form"/></td>'; 
        cols += '<td><input required type="date" name="date_name[]"  class="form-control" form="order_form"/></td>';
        cols += '<td><input required type="text" name="price_name[]"  class="form-control" form="order_form"/></td>';
        cols += '<td><input required type="text" name="sale_name[]"  class="form-control" form="order_form"/></td>';
        // cols += '<td><input disabled type="text" name="total_name[]"  class="form-control" form="order_form"/></td>';


        cols += '<td><input type="button" class="ibtnDel btn btn-md btn-danger "  value="Delete"></td>';
        newRow.append(cols);
        $("table.order-list").append(newRow);
        counter++;
    });



    $("table.order-list").on("click", ".ibtnDel", function (event) {
        $(this).closest("tr").remove();       
        counter -= 1
    });


});



function calculateRow(row) {
    var price = +row.find('input[name^="price"]').val();

}

function calculateGrandTotal() {
    var grandTotal = 0;
    $("table.order-list").find('input[name^="price"]').each(function () {
        grandTotal += +$(this).val();
    });
    $("#grandtotal").text(grandTotal.toFixed(2));
} 
</script>
</html>

