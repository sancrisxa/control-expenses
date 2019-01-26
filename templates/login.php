<?php include('layout/header.php');?>
    <a href="../templates/adm/admin.php">Ir para o painel administrativo</a>
<form action="/action_page.php">
  Login:<br>
  <input type="text" name="login" value="">
  <br>
  Password:<br>
  <input type="text" name="password" value="">
  <br><br>
  <input type="submit" value="Logar">
</form> 
<?php include('layout/footer.php');?>