<?php
if(isset($_POST['email']) && empty($_POST['email']) == false)
{
    if(isset($_POST["senha"]) &&empty($_POST['senha']) == false)
    {
           $email = $_POST['email'];
           $senha = $_POST['senha'];

          echo "meu email é:".$email. "E minha senha e".$senha;
    }
} 
// verificar se foi setado os campos e logar
?>
<hr>
<form method="POST">
<label for="">E-mail</label>
<input type="text" name="email"> <br/><br/>

<label for="">Senha</label>
<input type="password" name="senha"><br/><br/>
<button type="submit" value="Enviar Dados">Enviar</button> 

</form>