<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
	pageEncoding="ISO-8859-1"%>
<!DOCTYPE html>
<html>
<head>
<title>SIEPA</title>
<meta charset="ISO-8859-1">
<link href="/WEB_SCORING/resource/jquery/jquery-ui.css"	rel="stylesheet" />
<script	src="/WEB_SCORING/resource/jquery/jquery-1.10.2.min.js"	type="text/javascript"></script>
<script	src="/WEB_SCORING/resource/jquery/jquery-ui.min.js"	type="text/javascript"></script>
<link rel="stylesheet"	href="/WEB_SCORING/resource/jquery/jquery-confirm.min.css">
<script type="text/javascript"	src="/WEB_SCORING/resource/jquery/jquery-confirm.min.js"></script>
<link rel="stylesheet"	href="/WEB_SCORING/resource/jquery/bootstrap.min.css">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300&display=swap" rel="stylesheet">

</head>
<style>
body {
	background-position: center center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	background-color: #66999;
	background-image: url(/WEB_SCORING/img/login/fondo.png);
	font-family: 'Roboto', sans-serif;
}

footer {
	position: absolute;
	bottom: 0;
	width: 100%;
	height: 40px;
	text-align: center;
}

#boxForm {
	margin-left:10%;
	text-align: center;
	padding: 2%;
	border-radius: 22px;
	width: 75%;
	height: 450px;
	background-position: center center;
	background-repeat: no-repeat;
	background-attachment: fixed;
	background-size: cover;
	background-image: url(/WEB_SCORING/img/login/box.png);
}
.input-login {
	background:#DCE4F5 !important; 
 	opacity: 0.5 !important; 
	
	font-size: 12px;
}
span{
/* 	border-radius: 50% !important; */
	background:white;
}

::placeholder { 
  color: black !important; 
  opacity: 1 !important; 
  font-weight: bold;
  font-size: 1em
}

</style>
<body>
<form id="f" name="f" >
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-7" style="padding-top: 12%">
				<img src="/WEB_SCORING/img/login/fondo2.png"	width="100%"	alt="Logotipo"  class="mx-auto d-block">
			</div>
			<div class="col-sm-5" style="padding-top: 9%">
				<div id="boxForm">
					<p style="margin-top: 5px;color: white;font-size: 18px;margin-bottom: 0;" >Bienvenido a nuestro sistema</p>
					<p style="color: white;font-weight: bold;font-size: 25px;margin-top: 0;">SIEPA</p>
					<div style="    width: 100%;    padding-left: 15%;    padding-right: 15%;">
						<div class="input-group mb-3" style="margin-bottom: 30px;" >
						  <span class="input-group-text" ><img width="100%" height="100%" src="/WEB_SCORING/img/login/Trazado 1.png"></span>
						  <input   id="usuario" type="text" placeholder="Usuario"  class="form-control input-login" >
						</div>
						<br>
			 			<div class="input-group mb-3"  style="margin-bottom: 30px;" >
						  <span class="input-group-text" ><img width="23px" height="22px" src="/WEB_SCORING/img/login/Grupo 2.png"></span>
						  <input id="password" type="password" placeholder="Password"  onblur="login();" class="form-control input-login" >
						</div>
						<br>
			 			<select name='cboEmpresa' id='cboEmpresa' style="display: none"  >
	 						<option value='' selected='selected' class='gf_placeholder'>ENTIDAD FINANCIERA</option>
	 					</select>
	 					
	 					<div class="input-group mb-3 "  style="margin-bottom: 30px;">
						  <span class="input-group-text" ><img width="100%" height="100%" src="/WEB_SCORING/img/login/Grupo 3.png"></span>
						  <select class="form-select input-login" aria-label="Default select example" name='cboAgencia' id='cboAgencia'>
						  	<option value='' selected='selected' class='gf_placeholder'>SELECCIONAR AGENCIA</option>
						  </select>
						</div>
						 <br>
			 			<input style="width: 70%;margin-top: 20px" class="btn btn-primary" onclick="ingresar()" type="button" value="INGRESAR" />
					</div>
				</div> 
			</div>
		</div>
	</div>
	</form>
	<footer>
		<img alt="" src="/WEB_SCORING/img/login/footer.png">
	</footer>
	
	
	<script type="text/javascript">
function login(){
    var urlPeriodo = "/WEB_SCORING/Login_Servlet?accion=login&password="+ $("#password").val()+"&usuario="+$("#usuario").val().toUpperCase();
    $.ajax({
        type: 'get',
        url: urlPeriodo,
        async: true,
        cache: false,
        dataType: 'json',
        //contentType: 'application/json; charset=utf-8',
        success: function (data) {
            console.log(data);
            listarAgencia();
    	},
	    error: function () {
	        alert("Error en el servidor");
	    }
	});
}  
    function ingresar(){
		 //var urlPeriodo = "/WEB_SCORING/Siepa_Conect?agencia="+$("#cboAgencia").val()+"&password="+ $("#password").val()+"&usuario="+$("#usuario").val().toUpperCase()+"&empresa="+$("#cboEmpresa").val();
		 var url;
	    		$.ajax({
	    		     type: "POST",
	    		     url: "/WEB_SCORING/Siepa_Conect",
	    		     data: {
	    		    	 tipoSistema	:"N",
	    		    	 empresa		:$("#cboEmpresa").val(),
	    		    	 agencia		:$("#cboAgencia").val(),
	    		    	 usuario		:$("#usuario").val().toUpperCase(),
	    		    	 password		:$("#password").val()     
	        		     },
	    		     dataType:"json",
	    		     async: false,
	    		     success: function(response){ 
	        		     //console.log(response); 
	        		     //alert("response "+response);
	        		     url = response; 
	    		     } 
	    		});
	    	
	    	console.log(url);
	    	if( url == '1'){
	    	    alert("Hubo un error en el Sistema");
	    	}else{
		     	//window.location.replace(url);
		     	f.method = "post";
			    f.action = url;
			    f.submit();
	    	}	
	    		
	     
	     //f.method = "post";
	     //f.action = urlPeriodo;
	     //f.submit();
	            
	            
    }
	   
    function listarAgencia(){
	 var urlPeriodo = "/WEB_SCORING/Login_Servlet?accion=listarAgencia&usuario="+$("#usuario").val().toUpperCase();
	    $.ajax({
	        type: 'post',
	        url: urlPeriodo,
	        async: true,
	        cache: false,
	        dataType: 'json',
	        //contentType: 'application/json; charset=utf-8',
	        success: function (data) {
	           // console.log(data);
	            
	    	$('#cboEmpresa').find('option').remove();		      
			$.each(data, function(i, item) 
			{					
				$('#cboEmpresa').append($("<option></option>").attr("value",item.codigoEmpresa).text(item.descripcionEmpresa));
				
			});

			var usedNames = {};
			$("#cboEmpresa > option").each(function () {
			  if(usedNames[this.text]) {
			     $(this).remove();
			 } else {
			     usedNames[this.text] = this.value;
			 }});
			
			$("#cboEmpresa").attr("selectedIndex",1);	

			// **************

			$('#cboAgencia').find('option').remove();		      
			$.each(data, function(i, item) 
			{					
				$('#cboAgencia').append($("<option></option>").attr("value",item.codigoAgencia).text(item.descripcionAgencia));
				
			});

			$("#cboAgencia").attr("selectedIndex",1);	
			
			
			
	        },
                error: function () {
                    alert("Error en el servidor");
                }
            });
    }
</script>

</body>
</html>