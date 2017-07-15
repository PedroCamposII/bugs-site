<!DOCTYPE html>
<html>
<head>
	<!-- Descrição da Página -->
	<meta name="description" content="A inocação ainda está por vir">
	
	<!--  Palavras-chave-->
	<meta name="keywords" content="banco super fácil, resposta mais rápida, conexão segura">
	
	<!-- Os motores de busca vão indexar a index e todos os linkks que eles encontarem nela  -->
	<meta name="robots" content="index, folow">

	<meta name="author" content="João Pedro de Campos">
	<script type="text/javascript" src="_js/jquery-3.2.0.js"></script>
	<meta charset="utf-8">
	<link rel="icon" href="_img/BugsLogo.png">
	<link rel="stylesheet" type="text/css" href="_css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="_css/estilo.css">
	<title>Bem vindos à bug corp</title>
</head>
<body>
<h1 style="text-align: center;background-color: #606060; padding: 3%;">Menu do Rennan</h1>
	<div class="container-fluid">
		<!-- Menu de Botões que levam aos itens  -->
		<div class="btn-group btn-group-justified" role="group" aria-label="...">
  			<div class="btn-group" role="group">
  				<!-- Redireciona a página para o item do formulario Rápido -->
  				<a href="assistencia.html#cp" class="btn btn-default">Já sabe o problema</a>
    			<!-- <button type="button" class="btn btn-default"></button> -->
  			</div>
  			<div class="btn-group" role="group">
  				<!-- Redireciona a página para o item do formulário -->
    			<a href="assistencia.html#fm" class="btn btn-default">Preencha o Formulario</a>
  			</div>
  			<div class="btn-group" role="group">
  				<!-- Redireciona a página para o item de informações adicionais -->
    			<a href="assistencia.html#pf" class="btn btn-default">Perguntas Frequentes</a>
  			</div>
		</div>

		<div class="row">

			<!-- Artigo de Formulário, se o usuário já conhece o problema  -->
			<article class="col-md-4 col-sm-12 fundo1" id="cp">
				<h2>Você identificou o problema? </h2>
                <fieldset id="sexo">
                 	<input type="radio" name="tOp" id="cSim" class="btn-sim"> <label for="cSim">Sim</label><br/>
                    <input type="radio" name="tOp" id="cNao" class="btn-nao"> <label for="cNao" >Não</label>
                    <button class="btn-sim btn-primary" >Enviar</button>
                </fieldset>
                <img src="_img/12524276_1169694303052539_6854480724080263786_n.jpg">
			</article>
			<article class="col-md-4 col-sm-0 fm " id="fm">
				<h2>Preencha o formulário</h2>
				<form>
					<div class="form-group">
						<label for="exampleInputEmail1">Email address</label>
					 	<input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Password</label>
					    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="exampleInputFile"> Carregar Arquivo </label>
					    <input type="file" id="exampleInputFile">
					    <!-- <p class="help-block">Example block-level help text here.</p> -->
					</div>
					<div class="checkbox">
						<label>
						    <input type="checkbox"> Check me out
						</label>
					</div>
					  <button type="submit" class="btn btn-default">Submit</button>
				</form>

				<img src="_img/17352006_706477569535107_3310237834592725551_n.jpg">
			</article>
			<article class="col-md-4 col-sm-12 fundo1" id="pf">
				<h2>Problemas frequentes</h2>
				<ul>
					<li>Pc não liga!!!</li>
					<li>O sistema não inicia </li>
					<li>Os arquivos que uso não ficam salvos</li>
					<li>A data e a hora não ficam ajustadas</li>
				</ul>
				<img src="_img/14494852_1422772431084697_1622434620716482011_n.jpg ">
			</article>
		</div>
		
	</div>
</body>
</html>