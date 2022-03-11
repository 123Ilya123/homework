<?php 
    require "PAPKA/footear.php";
?>

<ul class="nav nav-tabs" role="tablist"> 
<li class="active"><a href="#">Первая</a></li> 
<li><a href="#">Вторая</a></li> 
<li class="disabled" ><a href="#">Третья</a></li> 
</ul>


<ul class="nav nav-pills" role="tablist"> 
<li class="active"><a href="#">Первая</a></li> 
<li><a href="#">Вторая</a></li> 
<li class="disabled"><a href="#">Третья</a></li> 
</ul>


<div class="btn-group"> 
    <button type="button" class="btn btn-default">Первая</button>
    <button type="button" class="btn btn-default">Вторая</button>
    <div class="btn-group"> 
    <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" > Третья<span class="caret"></span> 
    </button> 
    <ul class="dropdown-menu"> 
    <li><a href="#">Пункт 1</a></li> <li><a href="#">Пункт 2</a></li> 
    </ul> 
    </div> 
</div>




<?php 
    require "PAPKA/header.php";
?>