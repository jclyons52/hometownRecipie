@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'recipes.store']) !!}

        @include('recipes.fields')

    {!! Form::close() !!}
</div>
@endsection
