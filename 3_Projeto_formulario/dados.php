<?php
/*recebendo os dados dos formulario html*/ 

/*variaveis */
$nome = $_POST['nome'];
$cpf = $_POST['cpf'];
$email = $_POST['email'];
$genero = $_POST['genero'];


echo "Dados do Formulario <br><br>" ;

echo "<br> Nome completo: " .$nome ;
echo "<br> CPF: " .$cpf;
echo "<br> E-mail: " .$email;
echo "<br> Genero: ".$genero;





?>