<?php 
    require "PAPKA/footear.php";
?>

<div class="container">
    <form>
        <div class="form-group">
        <label for="Email1">Адрес электронной почты</label> 
        <input type ="email" class="form-control" id="Email1" placeholder="Введите E-mail"> 
        </div>

        <div class="form-group"> 
         <label for="Password1">Введите пароль</label> 
        <input type="password" class="form-control" id="Password1" placeholder="Пароль"> 
         </div> 
    </form> 
    <form class="form-inline"> 
        <div class="form-group"> 
         <label class="sr-only" for="firstName">Фамилия</label> 
        <input type="text" class="form-control" id="firstName" placeholder="Введите Фамилию"> 
        </div> 
    <div class="form-group"> 
        <label class="sr-only" for="lastName">Фамилия</label> 
        <input type="text" class="form-control" id="lastName" placeholder="Введите Имя"> 
    </div> 
    <div class="checkbox"> 
        <label> 
      <input type="checkbox"> Запомнить меня 
    </label>
    </form>

</div> 



<?php 
    require "PAPKA/header.php";
?>