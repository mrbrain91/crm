<?php

include('settings.php');
include('bot_lib.php');

if (!isset($_SESSION['usersname'])) {
  header("location: index.php");
}

$last_id = get_id_new_order($connect);


if(isset($_POST['submit']) && $_POST['submit'] == 'Принять') {
    add_each_pro($connect);
    $summ_prod = get_sum($connect);
    add_prod($connect, $summ_prod);

}

$a = 'Пластырь One Aid PVC 19x72 №500';
$b = 'Пластырь One Aid PVC 19x72 №100';
$c = 'Пластырь One Aid PVC 19x72 №8';
$d = 'Пластырь One Aid PVC 25x72 №7';
$e = 'Пластырь One Aid PVC 38x72 №5';
$f = 'Пластырь One Aid PVC MIX №12';
$g = 'Пластырь One Aid PU 19x72 №5';
$h = 'Пластырь One Aid PU 38x72 №3';
$i = 'Пластырь One Aid PU MIX №9';
$j = 'Пластырь One Aid PU 60x70 №3';



// $query = "SELECT * FROM product_tbl";
// $rest = mysqli_query($connect, $query);
 
// while($row = mysqli_fetch_array($rest)){
//    echo "<option value='".$row['product_name']."'>".$row['product_name']."</option>";
// }   



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
            <td><input class="btn btn-success" type="submit" form="order_form" name="submit" value="Принять" />


            <a href="in_store.php"><button type="button" class="btn btn-light">Закрыть</button></a>

        </div>
</div>

<div class="card_head">
    <div class="container-fluid">
        <form action="" method="POST" class="horizntal-form" id="order_form">
            <div class="row">
                <label class="col-sm-2">
                    <span>Номер прихода</span>
                </label>
                <div class="col-sm-1 dash">
                    <?php echo $last_id+1; ?>
                </div>
                <label class="col-sm-1">
                    <span>Дата</span>
                </label>
                <div class="col-sm-2">
                    <input required type="date" value="<?php echo date("Y-m-d"); ?>"  class="form-control" name="order_date" form="order_form">
                </div>
                <label class="col-sm-2">
                    <span>Примечание</span>
                </label>
                <div class="col-sm-4">
                 <textarea required  form="order_form" name="order_note" class="form-control" id="exampleFormControlTextarea1" rows="1">Приход продукции на склад</textarea>
                </div>
            </div>
        </form>
    </div>
</div>

<div class="add_pro_lab">
    <div class="container-fluid">
        Продукции 

    </div>
</div>

<div class="container-fluid">
    <table id="myTable" class="table order-list">
        <thead>
            <tr>
                <td>Продукция  / Производитель </td>
                <td>Количество</td>
                <td>Срок годности</td>
                <td>Цена</td>
                <td>Скидка</td>
                <!-- <td>Сумма</td> -->
            </tr>
        </thead>
        <tbody>
            <tr>
                <td class="col-sm-4">
                    <select name="prod_name[]" form="order_form" class="form-control">
                        <option value="">--выберите продукцию---</option>
                        <option value="<?php echo $a;?>"><?php echo $a;?></option>
                        <option value="<?php echo $b;?>"><?php echo $b;?></option>
                        <option value="<?php echo $c;?>"><?php echo $c;?></option>
                        <option value="<?php echo $d;?>"><?php echo $d;?></option>
                        <option value="<?php echo $e;?>"><?php echo $e;?></option>
                        <option value="<?php echo $f;?>"><?php echo $f;?></option>
                        <option value="<?php echo $g;?>"><?php echo $g;?></option>
                        <option value="<?php echo $h;?>"><?php echo $h;?></option>
                        <option value="<?php echo $i;?>"><?php echo $i;?></option>
                        <option value="<?php echo $j;?>"><?php echo $j;?></option>
                    </select>

                </td>
                <td class="col-sm-1">
                    <input required type="text" name="count_name[]"  class="form-control" form="order_form"/>
                    
                </td>
                <td class="col-sm-2">
                    <input required type="date" name="date_name[]"  class="form-control" form="order_form"/>
                    
                </td>
                <td class="col-sm-1">
                    <input required type="text" name="price_name[]"  class="form-control" form="order_form"/>
                    
                </td>
                <td class="col-sm-1">
                    <input required type="text" name="sale_name[]"  class="form-control" form="order_form"/>
                    
                </td>
                <!-- <td class="col-sm-2">
                    <input disabled type="text" name="total_name[]"  class="form-control" form="order_form"/>
                    
                </td> -->
                <td class="col-sm-1">
                    <i class="fa fa-plus"  id="addrow" style="cursor:pointer"></i>
                </td>
                
                <td class="col-sm-1"><a class="deleteRow"></a>

                </td>
            </tr>
            
        </tbody>
        <tfooter>
            <tr>
                <!-- <td></td>
                <td></td>
                <td></td>
                <td></td> -->
                <!-- <td>Количество: 0</td>
                <td>Сумма: 0</td> -->
            </tr>
        </tfooter>
    </table>
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

