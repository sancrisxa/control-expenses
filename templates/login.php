<?php include('layout/header.php');?>
<div class="login-form">
  <form action="../src/code/service/LoginRequest.php" method="post">
    Login:<br>
    <input type="text" name="login" value="">
    <br>
    Password:<br>
    <input type="text" name="password" value="">
    <br><br>
    <input type="submit" value="Logar">   
  </form> 

    <a href="../templates/adm/admin.php">Ir para o painel administrativo</a>

 
</div>
<?php include('layout/footer.php');?>