<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<link href="../css/style.css" rel="stylesheet" type="text/css"/>
<script src="../javascript/SpryValidationTextField.js" type="text/javascript"></script>
<script src="../javascript/SpryValidationTextArea.js" type="text/javascript"></script>
<link href="../css/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="../css/SpryValidationRadio.css" rel="stylesheet" type="text/css" />
</head>

<body>
<span class="titulo2">
		TENHO UMA ÁREA
</span>
<br />
<div style="padding: 20px; width:350px">
		<form id="formulario" action="../php/enviagleba.php" method="post" enctype="multipart/form-data">
				<span id="sprytextfield1">
						<input name="nome" placeholder="Nome" type="text"  />
						<span class="textfieldRequiredMsg">
								Obrigat&oacute;rio.
						</span>
				</span>
				<span id="sprytextfield2">
						<input type="text" placeholder="E-mail" name="email" />
						<span class="textfieldInvalidFormatMsg">
								Informe um e-mail v&aacute;lido.
						</span>
				</span>
				<span id="sprytextfield3">
						<input type="text" placeholder="Telefone" name="telefone" />
						<span class="textfieldRequiredMsg">
								Obrigat&oacute;rio.
						</span>
						<span class="textfieldInvalidFormatMsg">
								Informe um telefone v&aacute;lido.
						</span>
				</span>
				<span id="sprytextfield4">
						<input name="cidade" placeholder="Cidade" type="text"  />
						<span class="textfieldRequiredMsg">
								Obrigat&oacute;rio.
						</span>
				</span>
				<span id="sprytextfield5" style="width:200px;">
						<select name="uf" style="color:#999" >
								<option value="" style="color:#999">Estado</option>
								<option value="AC">AC</option>
								<option value="AL">AL</option>
								<option value="AM">AM</option>
								<option value="AP">AP</option>
								<option value="BA">BA</option>
								<option value="CE">CE</option>
								<option value="DF">DF</option>
								<option value="ES">ES</option>
								<option value="GO">GO</option>
								<option value="MA">MA</option>
								<option value="MG">MG</option>
								<option value="MS">MS</option>
								<option value="MT">MT</option>
								<option value="PA">PA</option>
								<option value="PB">PB</option>
								<option value="PE">PE</option>
								<option value="PI">PI</option>
								<option value="PR">PR</option>
								<option value="RJ">RJ</option>
								<option value="RN">RN</option>
								<option value="RO">RO</option>
								<option value="RR">RR</option>
								<option value="RS">RS</option>
								<option value="SC">SC</option>
								<option value="SE">SE</option>
								<option value="SP">SP</option>
								<option value="TO">TO</option>
						</select>
						<span class="textfieldRequiredMsg">
								Obrigat&oacute;rio.
						</span>
				</span>
				<span id="sprytextfield6">
						<input name="link" placeholder="Link do Google Maps" type="text"  />
						<span class="textfieldRequiredMsg">
								Obrigat&oacute;rio.
						</span>
				</span>
				<span id="sprytextarea7">
						<textarea name="msg" placeholder="Mensagem" ></textarea>
						<span class="textfieldRequiredMsg">
								Obrigat&oacute;rio.
						</span>
				</span>
				<span id="sprytextfield8">
						<div class="inputFile">
								<span>
										Selecione o documento.
								</span>
								<input type="file" name="arquivo" id="arquivo" />
						</div>
						<span  class="textfieldRequiredMsg">
								Obrigat&oacute;rio.
						</span>
				</span>
				<input type="submit" name="enviar" value="Enviar" class="send">
		</form>
</div>
<script type="text/javascript">
<!--
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield2", "email", {useCharacterMasking:true, isRequired:false});
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "custom", {useCharacterMasking:true, pattern:"00 0000-0000"});
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextarea7");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield8");

//-->
</script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"  type="text/javascript"></script>
<script type="text/javascript">
		
		$("#arquivo").change(function() {
			$(this).prev().html('O documento foi anexado.');
		});
	</script>
</body>
</html>
