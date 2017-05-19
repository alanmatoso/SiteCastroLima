<?php 

/*apenas dispara o envio da mensagem caso houver/existir $_POST['enviar']*/
if (isset($_POST['enviar']))

{

/* #### ALTERE OS CAMPOS ENTRE ASPAS SIMPLES DESTACADOS ABAIXO #### */

/* ## CAMPO 1 ## Informe o e-mail que receberá o formulário */
$destinatarios = 'relacionamento@castrolima.com.br';

/* ## CAMPO 2 ## Informe o nome que será exibido no e-mail do formulário */
$nomeDestinatario = 'Site Castro Lima - Tenho Gleba';

/* ## CAMPO 3 ## Informe o endereço de e-mail completo criado em sua hospedagem, que será o remetente da mensagem. Como por exemplo teste@seudominio */
$usuario = 'relacionamento@castrolima.com.br';

/* ## CAMPO 4 ## Informe a senha do endereço de e-mail acima */
$senha = 'm70195';

/* empedindo utilização de tags html e espaço vazios */
$nome     = strip_tags(trim($_POST['nome']));
$email    = strip_tags(trim($_POST['email']));
$telefone = strip_tags(trim($_POST['telefone']));
$cidade   = strip_tags(trim($_POST['cidade']));
$uf       = strip_tags(trim($_POST['uf']));
$link     = strip_tags(trim($_POST['link']));
$msg      = strip_tags(trim($_POST['msg']));
$arquivo  = $_FILES['arquivo']; 

/*abaixo as veriaveis principais, que devem conter em seu formulario*/
$nomeRemetente = $nome;
$assunto = 'Tenho Gleba em ' . $cidade . '/' . $uf ;

$_POST['mensagem'] = nl2br( 'Nome: '. $nome ."\n".
							'E-mail: '. $email ."\n". 
							'Telefone: '. $telefone ."\n".
							'Local: '. $cidade . '/' . $uf ."\n \n". 
							'Link Google Maps: ' . $link . "\n ".
							'Documento anexo: '. $arquivo['name']. "\n \n" . $msg);




/*********************************** A PARTIR DAQUI NAO ALTERAR ************************************/

include_once("../PHPMailer-master/class.phpmailer.php");

$To = $destinatarios;
$Subject = $assunto;
$Message = $_POST['mensagem'];


$Host = 'smtp.'.substr(strstr($usuario, '@'), 1);
$Username = $usuario;
$Password = $senha;
$Port = "587";

$mail = new PHPMailer();
$body = $Message;
$mail->IsSMTP(); // telling the class to use SMTP
$mail->Host = $Host; // SMTP server
$mail->SMTPDebug = 0; // enables SMTP debug information (for testing)
// 1 = errors and messages
// 2 = messages only
$mail->SMTPAuth = true; // enable SMTP authentication
$mail->Port = $Port; // set the SMTP port for the service server
$mail->Username = $Username; // account username
$mail->Password = $Password; // account password

$mail->SetFrom($usuario, $nomeDestinatario);
$mail->Subject = $Subject;
$mail->MsgHTML($body);
$mail->AddAddress($To, "");
$mail->addAttachment($arquivo['tmp_name'], $arquivo['name']) ;


echo '<script> alert("Mensagem enviada!"); </script>';
echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=../php/formgleba.php'>";


if(!$mail->Send()) {
$mensagemRetorno = 'Erro ao enviar e-mail: '. print($mail->ErrorInfo);
} else {	
$mensagemRetorno = 'E-mail enviado com sucesso!';
}
}
?>
