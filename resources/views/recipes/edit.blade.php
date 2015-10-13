@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::model($recipe, ['route' => ['recipes.update', $recipe->id], 'method' => 'patch']) !!}

        @include('recipes.fields')

    {!! Form::close() !!}
</div>
@endsection

@section('scripts')

<script type="text/javascript">
    $('#recipe_products').select2();
</script>
@endsection
