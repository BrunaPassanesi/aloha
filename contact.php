<!DOCTYPE html>
<html lang="pt-br">
<head>
<title>Aloha</title>
<link rel="shortcut icon" href="images/favicon.png" type="images/favicon.png" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
<script src="email/validation.js" type="text/javascript"></script>
<script type="text/javascript">
	
		function getParameterByName(name) {
		   name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
		   var regex = new RegExp("[\\?&]" + name + "=([^&#]*)"),
			results = regex.exec(location.search);
		   return results == null ? "" : decodeURIComponent(results[1].replace(/\+/g, " "));
		}
		$( function(){
			debugger;
			var mensagem = getParameterByName("msg");
			
			if(mensagem != "" && mensagem != undefined){
				alert(mensagem);
			}
				
		});
		
	</script>
<link href='http://fonts.googleapis.com/css?family=Monda:400,700' rel='stylesheet' type='text/css'>
</head>
	
<body>
<!-- header -->
	
<!-- //header -->
<!-- top-header -->
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
			
			<div class="top_left">
				<ul>
					<li class="top_link">Email:<a href="mailto:contato@alohabemsao.com.br">contato@alohabemsao.com.br</a></li>|
                    <li class="top_link"><a href="contact.php">Deseja ser nosso parceiro</a></li>
                    
										
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- top-header -->
<!-- logo-cart -->
<div class="header_top">
	<div class="container">
		<div class="logo">
		 	<a href="index.html"><img src="images/logo.jpg"</a>			 
		</div>
		<div class="header_right">
			<div class="cart box_1">
				<a href="checkout.html">
				
				</a>
				<p><a href="javascript:;" class="simpleCart_empty"></a></p>
				<div class="clearfix"> </div>
			</div>				 
		</div>
		<div class="clearfix"></div>	
	</div>
</div>
<!-- //logo-cart -->
<!------>
<div class="mega_nav">
	 <div class="container">
		 <div class="menu_sec">
		 <!-- start header menu -->
		<ul class="megamenu">
			<li class="grid"><a href="aloha.html">AlohA Bem São</a></li>
            <li class="grid"><a  href="produtos.html">Produtos Aloha</a>
            <li class="grid"><a  href="espaco-holistico.html">Espaço Holistico</a>
            <li class="grid"><a href="fitness.html">Fitness</a>		
			<li class="grid"><a href="galeria.html">Galeria</a></li>
            <li class="grid"><a href="blog.html">Blog</a></li>
            <li class="grid"><a href="contact.php">Contato</a></li>
		   <div class="clearfix"></div>
	  </div>
</div>
</li>

<!---->
<!-- contact -->
		<div class="contact">
		<div class="container">
			<div class="col-md-4 contact-left">
				<h3>Entrem em contato</h3>
				<p>Estamos a disposição, para exclarecimento de qualquer dúvida.
					<span></span></p>
				<ul>
					<li>Whatsapp :11-955559898</li>
					                 					
					<li><a href="mailto:contato@alohabemsao.com.br">contato@alohabemsao.com.br</a></li>
                    
				</ul>
                <br>
                <h3>Deseja se tornar um Parceiro</h3>
                <ul>
                <li>Entre em contato</li>
                <li><a href="mailto:parceiros@alohabemsao.com.br">parceiros@alohabemsao.com.br</a></li>
                </ul>
			</div>
            <h3 style="color:#090808;"><?php echo $_GET[msg];?></h3>
			<div class="col-md-8 contact-left">
				<h3>Contato</h3>
				<form name="enq" method="post" action="email/index.php?email=contato"  onsubmit="return validation();">
  <fieldset>
    <a href="sucesso.html"></a>
	<input type="text" name="name" id="name" value=""  class="input-block-level" placeholder="Nome Completo" />
    <input type="text" name="email" id="email" value="" class="input-block-level" placeholder="Email" />
	<input type="text" name="tel" required="required" id="tel" value=""  class="input-block-level" maxlength="11" placeholder="DDD+Telefone " />
   
    <textarea rows="11" name="message" id="message" class="input-block-level" placeholder="Mensagem"></textarea>
    <div class="actions">
	<input type="submit" value="Enviar" name="submit" id="submitButton" class="btn btn-info pull-right" title="Clique aqui para enviar a sua mensagem!" />
	</div>
	
	</fieldset>
</form>  
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //contact -->
<!-- footer -->
		<div class="footer">
		<div class="container">
			<div class="col-md-3 footer-grid">
				<h6>Quem Somos</h6>
				<p>Aloha é uma saudação polinésia muito vivenciada no Havaí pelos amantes da liberdade em desafiar as ondas na sensação da expansão dos horizontes. </p>
			</div>
			<div class="col-md-3 footer-grid">
				<h6>Menu</h6>
				<ul>
					<li><a href="produtos.html">Alimentos</a></li>
					<li><a href="espaco-holistico.html">Espaço Holístico</a></li>
					<li><a href="fitness.html">Fitness</a></li>
					
				</ul>
			</div>
			<div class="col-md-3 footer-grid">
				<h6>Redes Sociais</h6>
				<ul>
					
					<li><img src="images/instagram.png">&nbsp;Instagram</li>
                    <li><img src="images/facebook.png">&nbsp;Facebook</li>
                    <li><img src="images/youtube.png">&nbsp;Youtube</li>
                    
					
				</ul>
			</div>
			<div class="col-md-3 footer-grid">
				<h6>Contato</h6>
				<ul>
					<!--<li><img src="images/whatsapp.png"></li>-->
                    <li>Exclusivo para vendas - Apenas em horário comercial 8hs as 18hrs - &nbsp;<img src="images/whatsapp.png"> (11)-953808832</li>
                    <li><a href="mailto:contato@alohabemsao.com.br">contato@alohabemsao.com.br</li>
					
				</ul>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
	<div class="footer-copy">
		<p>Todos os Direitos Reservados </p>
	</div>
<!-- //footer -->
</body>
</html>