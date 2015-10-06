<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Name:') !!}
    <p>{!! $recipe->name !!}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', 'Description:') !!}
    <p>{!! $recipe->description !!}</p>
</div>

<!-- Method Field -->
<div class="form-group">
    {!! Form::label('method', 'Method:') !!}
    <p>{!! $recipe->method !!}</p>
</div>

<!-- Thumbnail Id Field -->
<div class="form-group">
    {!! Form::label('thumbnail_id', 'Thumbnail Id:') !!}
    <p>{!! $recipe->thumbnail_id !!}</p>
</div>

