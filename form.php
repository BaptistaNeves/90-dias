<?php $name = $_POST['nome'];
$email   = $_POST['email'];
$telefone = $_POST['telefone'];
$celular = $_POST['celular'];
$escolha = $_POST['escolha'];
$mensagem =$_POST['mensagem'];
$formcontent="De: $name \n\n Mensagem: $mensagem \n\n Telefone: $telefone \n Celular: $celular \n Celular é Whatsapp? $escolha";
$recipient= "teste@teste.com.br";
$subject= "MENSAGEM DO FORMULÁRIO";
$mailheader="From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Erro!");
echo "Muito obrigado, a sua mensagem foi enviada";
?>


