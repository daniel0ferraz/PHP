<?php
if(isset($_POST['email']) && empty($_POST['email']) == false)
{
    $email = $_POST['email'];
    echo "Seu Email informado é: ".$email;
}
?>