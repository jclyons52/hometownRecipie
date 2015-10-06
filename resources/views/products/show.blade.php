@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<h1>{{$product->name}}</h1>
		<hr>
	</div>
    <div class="row">
    	<div class="col-sm-12">
			 @include('products.show_fields')
		</div>
		<hr>
		<div class="col-sm-12">
			<h1>Recipes</h1>
			@include('recipes.table', ['recipes' => $product->recipes])
		</div>
        
    </div>
</div>
@endsection