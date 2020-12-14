<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!--Tags básicas do head-->
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Arrays em PHP</title>
	<!--Link dos nossos arquivos CSS e JS padrão-->
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<script src="js/scripts.js"></script>
	<!--Link dos arquivos CSS e JS do Bootstrap-->
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>

</head>

<body>
	<div class="container">
		<div class="row text-center">
			<div class="col-md-12">
				<h1>Arrays em PHP</h1>
				<h2>Miscelânea de exemplos básicos de uso</h2>
			</div>
		</div>
		<br>
		<div class="row" id="fundo">
			
			<div class="col-md-12 text-center">
				<br>

				<?php
					
					$frutas = array(
						"banana",
						"limão",
						"laranja",
						"abacate",
						"kiwi",
						"uva",
						"abacaxi",
						"morango",
						"bergamota",
						"pitanga",
						"caqui",
						"manga",
						"caju"
					);

					//1ª forma de add: posição
					$frutas[13] = "butiá";
					//2ª forma de add: sem posição (add no final do array)
					$frutas[] = "guabiroba";
					//3ª forma de add: utilizando método push (add no final do array)
					array_push($frutas, "laranja");

					echo "<br><h3>Listando as frutas do array (com FOR)</h3>";
					$tamanho = count($frutas);
					for($i=0; $i<$tamanho; $i++){
						echo "$frutas[$i]<br>";
					}

					echo "<br><h3>Listando as frutas do array (com FOREACH)</h3>";
					foreach($frutas as $fruta){
						echo "$fruta<br>";
					}

					echo "<br><h3>Listando as frutas em ordem crescente</h3>";
					asort($frutas);
					foreach($frutas as $fruta){
						echo "$fruta<br>";
					}

					echo "<br><h3>Listando as frutas em ordem decrescente</h3>";
					arsort($frutas);
					foreach($frutas as $fruta){
						echo "$fruta<br>";
					}

					echo "<br><h3>Pesquisando um valor dentro de um array (guabiroba)</h3>";
					if(in_array("guabiroba", $frutas)){
						$posicao = array_search("guabiroba", $frutas);
						echo "<br>Existe guabiroba dentro da posição $posicao do array";
					} else {
						echo "<br>Não existe guabiroba dentro do array";
					}

					echo "<br><h3>Fundindo arrays</h3>";
					$frutas2 = array(
						"abacate",
						"maça",
						"goiaba",
						"uva",
						"morango",
						"melancia",
						"framboesa",
						"morango",
						"cereja",
						"laranja",
						"pitaia",
						"kiwi"
					);
					$todasfrutas = array_merge($frutas, $frutas2);
					foreach($todasfrutas as $fruta){
						echo "$fruta<br>";
					}

					echo "<br><h3>Removendo um valor do array (somente 1ª ocorrência - morango)</h3>";
					$posicao = array_search("morango", $todasfrutas);
					if($posicao!=null){
						unset($todasfrutas[$posicao]);
					} 
					foreach($todasfrutas as $fruta){
						echo "$fruta<br>";
					}

					echo "<br><h3>Removendo um valor do array (todas as ocorrências - morango)</h3>";
					while(in_array("morango", $todasfrutas)){
						$posicao = array_search("morango", $todasfrutas);
						unset($todasfrutas[$posicao]);
					}
					foreach($todasfrutas as $fruta){
						echo "$fruta<br>";
					}

					echo "<br><h3>Removendo valores duplicados</h3>";
					$frutasnaoduplicadas = array_unique($todasfrutas);
					foreach($frutasnaoduplicadas as $fruta){
						echo "$fruta<br>";
					}

					echo "<br><h3>Removendo os valores de um array dentro de outro array</h3>";
					$frutasexcluir = array("pitaia", "kiwi", "caju");
					$frutasfinal = array_diff($frutasnaoduplicadas, $frutasexcluir);
					foreach($frutasfinal as $fruta){
						echo "$fruta<br>";
					}

					echo "<br><h3>Inserir valor no início do array</h3>";
					array_unshift($frutasfinal, "umbu");
					foreach($frutasfinal as $fruta){
						echo "$fruta<br>";
					}

					echo "<br><h3>Escrevendo com letra padronizada</h3>";
					//converter todas para maiúscula: strtoupper
					//converter todas para minúscula: strtolower
					//converter somente primeira em maiúscula: ucfirst
					foreach($frutasfinal as $fruta){
						echo strtoupper($fruta) . "<br>";
					}

					echo "<br><h3>Inspecionando o interior do array</h3>";
					var_dump($frutasfinal);

				?>
			
			</div>
		</div>
	</div>
</body>

</html>