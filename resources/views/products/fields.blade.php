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

<!--- Price Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('price', 'Price:') !!}
	{!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>

<!--- Thumbnail Id Field --->
<div class="form-group col-sm-6 col-lg-4">
    {!! Form::label('thumbnail_id', 'Thumbnail Id:') !!}
	{!! Form::text('thumbnail_id', null, ['class' => 'form-control']) !!}
</div>


<!--- Submit Field --->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
</div>
