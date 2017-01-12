@extends("template")


@section("content")
<section id="cadastro">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12" style="padding-top:30px;">
	    	
	    		<h5 class="text-center">Cadastro de loja.</h5>
	    	
	    	
	    		<div class="row">
            		<div class="col-xs-12 text-right">
            			<a href="{{ route('loja.listar') }}"><span class="glyphicon glyphicon-th-list"></span> Lista de Lojas</a>
            		</div>
            	</div>
	    	
	    		@if(Session::has('success'))
		    		<div class="row">
	            			<div class="col-xs-12">
	            			
	            				<p style="">{{ Session::get("success") }}</p>
	            			
	            			</div>
	            	</div>		
	    		
	    		@endif
	    		
	    		@if($errors->any())
	    		
	    			<div class="row">
            			<div class="col-xs-12">
            				<p>Ocorreu erro(s)</p>
            				<ul>
            					@foreach($errors->all() as $erro)
            					
            					<li>{{ $erro }}</li>	
            					
            					@endforeach
            				</ul>
            			</div>
	            	</div
	    		
	    		@endif
	    	
	    		
	    		<div class="row">
            		<div class="col-xs-12">
                		<div class="form-group">
                		    <label for='Loja'>logomarca</label>          
                		 	@if(isset($loja))
				    			@if(isset($loja->Logo))
							   	<div id='img'>	
							   		<img  src="../../../public/logomarcas/{{$loja->Logo}}" width="200">
							   	</div>	
							    @endif
							@else
								<div id='img'>
								    <span  class="glyphicon glyphicon-picture" style="font-size: 60px"></span>
								</div>    
							@endif
                		             		
				 			<input type="file" name="image" id="image" class="form-control">
				 		
    					</div>
	    			</div>
	    		</div>	
	    		
	    		
	    		
	    		
		    	<form method="post" action="{{ route('loja.novo') }}">
		    		{{csrf_field()}}
		    	
		    	    
				    @if(isset($loja))
				    
				    	<input type="hidden" name="ID" Id="ID" value="{{ @$loja->ID }}">
				    
				    @endif
		    	
		    	<input type="hidden" name="Logo" Id="Logo" value="{{ @$loja->Logo }}">
		    		
		    		
		    		<div class="row">
            			<div class="col-xs-12">
                			<div class="form-group">
		    					<label for='Loja'>Nome Loja</label> 
		    					<input type="text" name="Nome" id="Nome" value="{{ @$loja->Nome }}" class="form-control">
		    				</div>
		    			</div>
		    		</div>		
		    		<!--<div class="row">
			            <div class="col-xs-12">
			                <div class="form-group">
				    			<label for='Logo'>Logomarca</label> 
				    			<input type="file" name="Logo" id="Logo" class="form-control">
		    				</div>
		    			</div>
		    		</div>-->
		    		<div class="row">
			            <div class="col-xs-6">
			                <div class="form-group">
				    			<label for='Loja'>Hora de Abertura</label>
				    			<input type="text" name="HoraAbre" id="HoraAbre" value="{{ @$loja->HoraAbre }}" class="form-control hora"> 
				    		</div>
		    			</div>
			            <div class="col-xs-6">
			                <div class="form-group">
				    			<label for='Loja'>Hora de Fechamento</label> 
				    			<input type="text" name="HoraFecha" id="HoraFecha" value="{{ @$loja->HoraFecha }}" class="form-control hora">   
		    				</div>
		    			</div>
		    		</div>	
		    		<div class="row">
            			<div class="col-xs-12">
                			<div class="form-group">
		    					<label for='Descricao'>Descri&ccedil;&atilde;o</label><br> 
		    					<textarea rows="4" cols="60" id='Descricao' name='Descricao' class="form-control">{!! @$loja->Descricao !!}</textarea>
		    				</div>
		    			</div>
		    		</div>
		    		
		    		<div class="form-group" style="text-align: center">
			            <input type="submit" name="submit" id="submit" value="Salvar" class="btn btn-primary">
			        </div>
		    		
		    	</form>
	    	</div>
		</div>
	</div>
</section>	
@stop


@section("script")


<script>

	$(function() {
	
		$('.hora').mask("99:99");
	
	})
	
	$(document).ready(function(){

		$("#image").on("change", function (e) {
			
	        var file_data = $("#image").prop("files")[0];   // Getting the properties of file from file field
	        var form_data = new FormData();                  // Creating object of FormData class
	        form_data.append("file", file_data);              // Adding extra parameters to form_data
        	$.ajax({
	            url: '{{ route("loja.logo")}}',
	            dataType: 'json',
	            cache: false,
	            contentType: false,
	            processData: false,
	            data: form_data,                         // Setting the data attribute of ajax with file_data
	            type: 'post',
	            success: function (data) {
					
					if(data.success=="ok"){

						$("#Logo").val(data.logo);

						$("#img").html("<img  src='../../../public/logomarcas/"+ data.logo +"' width='200'>");

					}else{

						alert("erro no upload");
	
					}

	            }
	        })
	    })	


	})
	
	
</script>
@stop