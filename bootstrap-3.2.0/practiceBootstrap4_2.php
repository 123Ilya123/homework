<?php 
    require "PAPKA/footear.php";
?>

<div class="container">
    <form class="form-horizontal" role="form"> 
        <div class="form-group"><h3>Поле ввода</h3>
        <label for="inputEmail3" class="col-sm-2">Email</label> 
            <div class="col-sm-2"><input type="email" class="form-control" id="inputEmail3" placeholder="Email"></div> 
        </div> 
        <div class="form-group"><h3>Текстовая область</h3>
            <label for="inputEmail3" class="col-sm-2">Текстовая область</label> 
    <div class="col-sm-2"><textarea class="form-control" rows="3"></textarea> 
    </div> 
  </div>        
  <div class="form-group"><h3>Флажки</h3><div class="checkbox">
    <label><input type="checkbox" value="">Флажок</label> 
</div> 
<div class="checkbox disabled"><label> 
    <input type="checkbox" value="" disabled> 
    Флажок отключённый 
  </label> 
</div> 
    <label class="checkbox-inline"><input type="checkbox" id="inlineCheckbox1" value="option1"> 1</label> 
    <label class="checkbox-inline"><input type="checkbox" id="inlineCheckbox2" value="option2"> 2</label> 
    <label class="checkbox-inline"><input type="checkbox" id="inlineCheckbox3" value="option3"> 3</label> 
</div> 
<div class="form-group"><h3>Переключатели</h3> 
    <div class="radio"><label> 
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>Первый переключатель</label> 
</div> 
<div class="radio"><label> 
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">Второй переключатель</label> 
</div> 
<div class="radio disabled"><label> 
<input type="radio" name="optionsRadios" id="optionsRadios3" value="option3" 
disabled>Неактивный переключатель</label> 
</div> 
<label class="radio-inline"><input type="radio" name="inlineRadioOptions" 
id="inlineRadio1" value="option1">1</label> 
<label class="radio-inline"><input type="radio" name="inlineRadioOptions" 
id="inlineRadio2" value="option2">2</label> 
<label class="radio-inline"><input type="radio" name="inlineRadioOptions" 
id="inlineRadio3" value="option3">3</label> 
</div> 
    <div class="form-group"> 
     <h3>Меню выбора</h3> 
        <label for="sel" class="col-sm-2">  
        <select class="form-control" id='sel'><option>1</option><option>2</option> 
        </select> 
    </label>     
    </div>     
</form>

</div> 



<?php 
    require "PAPKA/header.php";
?>