@extends("template")


@section("content")
<section id="cadastro">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12" style="padding-top:30px;">
	    	
	    		<h5 class="text-center">Lista de Lojas.</h5>
	    	
	    			    	
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
            			<div class="col-xs-12 text-right">
            				<a href="{{ route('loja.novo') }}"><span class="glyphicon glyphicon-plus-sign"></span> Nova Loja</a>
            			</div>
            		</div>	
		    		<div class="row">
            			<div class="col-xs-12">
                			<table class="table table-striped">
                			
                				<thead>
                					<th></th>
                					<th>Logo</th>
                					<th>Loja</th>
                					<th>Hora Abre</th>
                					<th>Hora Fecha</th>
                					<th>Descri&ccedil;&atilde;o</th>
                				</thead>
                				<tbody>
                				               				
                					@foreach($lojas as $loja)
                						<tr>
                							<td><a href="{{route('loja.alterar', ['id' => $loja->ID ])}}"><span class="	glyphicon glyphicon-pencil"></span></a> <a  href="{{route('loja.excluir', ['id' => $loja->ID ])}}"><span class="glyphicon glyphicon-trash"></span></a></td>
                							<td>
												@if($loja->Logo!="")
											   		<div id='img'>	
											   			<img  src="../../../public/logomarcas/{{$loja->Logo}}" width="100">
											   		</div>	
										    	@else
										    		<div id='img'>
												    	<span  class="glyphicon glyphicon-picture" style="font-size: 60px"></span>
													</div> 
												@endif

											</td>
                							<td>{{ $loja->Nome }}</td>
                							<td>{{ $loja->HoraAbre }}</td>
                							<td>{{ $loja->HoraFecha }}</td>
                							<td>{!! $loja->Descricao !!}</td>
                						</tr>
                					@endforeach
                				</tbody>
                			</table>
		    			</div>
		    		</div>		
		    		
	    	</div>
		</div>
	</div>
</section>	
@stop


@section("script")

@stop