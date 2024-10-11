<?php

// Definir fuso horário de Brasília
date_default_timezone_set('America/Sao_Paulo');

// Capturar data e hora atuais
$dataEnvio = date('d/m/Y');
$horaEnvio = date('H:i:s');

// Capturar dados do formulário
$assunto = $_POST["assunto"];
$nome = $_POST["nomeCompleto"];
$celular = $_POST["celular"];
$bairro = $_POST["bairro"];

// Dividir o valor da escola em e-mail e nome usando '|' como separador
list($emailEscola, $nomeEscola) = explode('|', $_POST["escola"]);

// Definir destinatário e assunto
$to = $emailEscola; // Agora $to tem apenas o e-mail da escola
$subject = $assunto;

// Montar a mensagem
$message = "<strong>Escola:</strong> ".$nomeEscola." (".$emailEscola.")<br>"; // Exibe o nome e o e-mail da escola
$message .= "<strong>Nome:</strong> ".$nome."<br>";
$message .= "<strong>Assunto:</strong> ".$assunto."<br>";
$message .= "<strong>Celular:</strong> ".$celular."<br>";
$message .= "<strong>Bairro:</strong> ".$bairro."<br>";
$message .= "<strong>Data de envio:</strong> ".$dataEnvio."<br>";
$message .= "<strong>Hora de envio:</strong> ".$horaEnvio."<br>";

// Definir os cabeçalhos do e-mail
$headers = "From: franciney.araujo@gmail.com\r\n" .
           "Reply-To: franciney.araujo@gmail.com\r\n" .
           "X-Mailer: PHP/" . phpversion();

// Exibir a mensagem dentro de um "card" no navegador
echo '<div style="max-width: 400px; margin: 70px auto; padding: 30px; border: 1px solid #ccc; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1);">';
echo '<h2 style="text-align: center; color: #333;">Nova Mensagem Recebida</h2>';
echo '<p style="text-align: justify; font-weight: bold; color: #333; ">Querida escola, o candidato abaixo deseja fazer parte desta instituição na modalidade EJA.</p>';
echo '<p style=font-size: 30px;>'.$message.'</p>';
echo '</div>';

// Enviar o e-mail
if (mail($to, $subject, strip_tags($message), $headers)) { // Enviar e-mail com conteúdo sem HTML
    echo "<p style='text-align: center;'>E-mail enviado com sucesso!</p>";
    header("Refresh: 5; url=index.php");
} else {
    echo "<p style='text-align: center;'>Falha no envio do e-mail.</p>";
}
?>
