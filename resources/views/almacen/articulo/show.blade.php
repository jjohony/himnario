@extends ('layouts.admin')
@section ('contenido')
	<div class="row" >
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<!-- <h1 align="center">{{ $articulo->nombre}}</h1> -->
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif
			
		</div>
	</div>

	<div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" >
        	<div class="table-responsive">
        		<table class="table table-striped table-bordered table-condensed table-hover">
				<tr>
					<td><a href="<?=$_SERVER["HTTP_REFERER"]?>"><button class="btn btn-primary">Atras</button><i class="fas fa-undo-alt"></i></a>
					</td>
					<td><a href=""><button class="btn btn-primary">Siguiente</button></a>
					</td>
					<td><a href=""><button class="btn btn-primary">Anterior</button></a>
					</td>
				</tr>
				</table>
            </div>
        </div>
    </div>
	
	
	<div class="row">
        <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12" >
        	<div class="form-group"  >
        		<pre style="background-color:#252D34" >
        			
               		
					<h1  class="text-center"  style="color:#FAF5F5">
						<p style="font-size: 45px">{{$articulo->lineas}}</p>
					</h1>
					
					
				</pre>		
            </div>
        </div>
        
    </div>
    	
    			        
@endsection
