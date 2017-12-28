<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		
		body{
			background: #61bd8c;
		}
		#conteudo{
			background: #ffffff;
			padding: 10px;
			width: 800px;
			height: 1500px;
			margin: 30px auto;
			margin-top: 120px;
		}
		.caixa{
			background: gray;
			width: 100px;
			height: 100px;

		}

		#relativo{
			position: relative;
			left: 30px;

		}

		#absoluto{
			position: absolute;
			bottom: : 0px;
			left: 150px;
		}
		#fixo{
			position: fixed;
			top: 0px;
			left: 0px;
			width: 2500px;



		}
	</style>
</head>
<body>

	<div id="conteudo">

		<h1>Posicionamento</h1>

		<h4>Relativo</h4>
		
		<div id="relativo" class="caixa">
			Relativo

		</div>

		<h4>Absoluto</h4>
		
		<div id="absoluto" class="caixa">
			Absoluto

		</div>  

		<h4>Fixo</h4>
		
		<div id="fixo" class="caixa">
			Fixo

		</div>    
		

	</div>



</body>
</html>