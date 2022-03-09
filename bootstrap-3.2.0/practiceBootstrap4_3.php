<?php 
    require "PAPKA/footear.php";
?>

<div class="container">
    <div class="form-group has-success has-feedback">
    <label class="control-label" for="inputSuccess"> Успешный ввод с иконкой и 
шириной input-lg </label>
    <input type="text  " class ="form-control input-lg" id="inputSuccess2">
    <span class="glyphicon glyphicon-ok form-control-feedback"></span>
    </div>
   
    <div class="form-group has-error has-feedback"> 
        <label class="control-label" for="inputSuccess2" >Ошибка с иконкой и шириной input-sm</label> 
        <input type="text" class="form-control input-sm" id="inputSuccess2"> 
        <span class="glyphicon glyphicon-remove form-control-feedback"></span> 
    </div> 
<form class="form-horizontal"> 
    <div class="form-group has-warning has-feedback"> 
        <label class="control-label col-sm-3" for="inputSuccess2">Предупреждение с иконкой с указанием ширины col-sm-3</label> 
        <div class="col-sm-5"> 
        <input type="text" class="form-control" id="inputSuccess2"> 
        <span class="glyphicon glyphicon-warning-sign form-control-feedback"></span> 
        <span class="help-block">Этот элемент формы предупреждения с иконкой и установленной шириной col-sm-5</span> 
        </div> 
    </div> 
</form> 
</div> 



<?php 
    require "PAPKA/header.php";
?>