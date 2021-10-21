    <?php
    include 'header.php';
    ?>
    <div class="fundo">
<div class="container1">
  <h2>Login</h2>
  <form action="/action_page.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Senha:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Confirmar a senha</label>
    </div>
    <button type="submit" class="btn btn-default">Enviar</button>
  </form>
  
</div>
<?php
    include 'footer.php';
    ?>
</body>
</html>
