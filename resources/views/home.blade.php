@extends('app')

@section('buttons')
	<button id="open-wizard" class="btn btn-primary">
		Nuevo Registro
	</button>
@endsection

@section('sidebar')
<div id="sidebar" class="sidebar-offcanvas">
  <div class="col-md-12">
    <h3>Navegacion</h3>
    <ul class="nav nav-pills nav-stacked">
      <li class="active"><a href="#">Registros</a></li>
      <li><a href="#">Section</a></li>
      <li><a href="#">Section</a></li>
    </ul>
  </div>
</div> 
@endsection

@section('content')
	<div class="row">
	<div class="col-md-10 col-md-offset-1">
		<div class="panel panel-default">
			<div class="panel-heading">Home</div>
			<div class="panel-body">
				You are logged in!
			</div>
		</div>
	</div>
	</div>
@endsection


