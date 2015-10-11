@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<h1>{{$recipe->name}}</h1>
		<hr>
	</div>
    <div class="row">
    	<div class="col-sm-12">
			  @include('recipes.show_fields')
		</div>
		<hr>
		<div class="col-sm-12">
			<h1>Ingredients</h1>
			@include('products.table', ['products' => $recipe->products])
		</div>
        
    </div>
	
</div>
@endsection
