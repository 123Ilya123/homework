<?php 
    require "PAPKA/footear.php";
?>
  <form class="form-horizontal" role="form"> 
<div class="form-group"> 
     <h3>Меню выбора</h3> 
        <label for="sel" class="col-sm-2">  
        <select class="form-control" id='sel'><option>1</option><option>2</option> 
        </select> 
    </label>     
    </div>     
</form>








     <div class="dropdown">

        <button class="btn btn-default" type ="button" data-toggle="dropdown">Меню 
             <span class="caret"></span> 
        </button>

      






        <ul class="dropdown-menu"> 
        <li class="dropdown-header">Первое меню</li> 
        <li><a href="#">Пункт первого меню 1</a></li> 
        <li><a href="#">Пункт первого меню 2</a></li> 
        <li class="divider"></li> 
        <li class="dropdown-header">Второе меню</li> 
        <li class="disabled"><a href="#">Пункт второго меню 1</a></li> 
        </ul> 
        </div>
     
<?php 
    require "PAPKA/header.php";
?>