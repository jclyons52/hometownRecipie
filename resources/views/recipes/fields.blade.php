<!--- Name Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('name', 'Name:') !!}
	{!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!--- Description Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('description', 'Description:') !!}
	{!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!--- Method Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('method', 'Method:') !!}
	{!! Form::textarea('method', null, ['class' => 'form-control']) !!}
</div>
@if(isset($recipe))
<div class="form-group">
    {!! Form::label('products', 'products:') !!}
    {!! Form::select('products[]', \App\Models\Product::lists('name', 'id'), $recipe->products->lists('id')->toArray(), ['class' => 'form-control', 'multiple', 'id' => 'recipe_products']) !!}
</div>
@endif
<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
