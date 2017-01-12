/**
 * funções gerais usadas no sistema 
 */

//Insere e-mail para receber news
$("#news_enviar").click(function(){
	alert("aaaaaaaaaaa");
	if($("#email_news").val()==""){
		$("#erroNews").css('display','block');
		$("#erroNews").html('<span style="color:#F00">Informe um E-mail</span>');
	}else{
		$.ajax({
			type: "POST", 
			dataType: "json",
		    url: "/pe/home/set_news", 
		    data: "Email="+$("#email_news").val(), 
		    success: function(data){
		    	if(data.sucesse==true){
		    		$("#erroNews").css('display','block');
				};
		    }	
		});
	}	
})

//Insere e-mail para receber news
$("#news_enviar2").click(function(){
	alert("aaaaaaaaaaa2");
	if($("#email_news2").val()==""){
		$("#erroNews2").css('display','block');
		$("#erroNews2").html('Informe um E-mail');
	}else{
	
		$.ajax({
			type: "POST", 
			dataType: "json",
		    url: "/pe/home/set_news", 
		    data: "Email="+$("#email_news2").val(), 
		    success: function(data){
		    	if(data.sucesse==true){
		    		//$("#erroNews").html('<p>E-mail cadastrado com sucesso.</p>');
		    		$("#erroNews2").css('display','block');
				}
		    }	
		});
	}	
})