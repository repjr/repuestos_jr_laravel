@extends('layout.app')
@section('content')
<!-- Page Layout here -->
    <div class="row">

      <div class="col s12 m12 l9 black center">
        <!-- Grey navigation panel -->
        <!-- <div class="container">-->
		  	<h3 class="yellow-text darken-3 center z-depth-2">Lo mas vendido</h3>
		  	<div class="slider">
				<ul class="slides">
		    		@for ($i = 0; $i < 8; $i++)
				      <li>
				        <div class="row">
				        	<div class="col l3">
						        <h3>Bujia</h3>
						        <h5 class="light grey-text text-lighten-3">Detalle</h5>
					    	</div>
					    	<div class="col l9">
					    		<img class="materialboxed" src="img/piezas-para-vehículos-dañados.jpg">
					    	</div>
				    	</div>
				      </li>
					@endfor
			    </ul>
			</div>
		<!-- </div> -->
      </div>

      <div class="col s12 m12 l3 black lighten-1">
      		<h4 class="white-text center">Lo mas buscado</h4>
      		@for ($i = 0; $i < 3; $i++)
        	<div class="col s12 m12 l10 margin-card">
		      <div class="card red darken-3">
		        <div class="card-image">
		          <img src="img/piezas-para-vehículos-dañados.jpg">
		        </div>
		        <div class="card-content">
		          <p>Bujia</p>
		        </div>
		        <div class="card-action" style="text-align: right;">
		          <a class="waves-effect waves-light btn modal-trigger black-text yellow darken-1" href="#modal1">Comprar</a>
		        </div>
		      </div>
		    </div>
		    @endfor
      </div>
    </div>
@endsection