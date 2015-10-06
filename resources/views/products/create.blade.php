@extends('app')

@section('content')
<div class="container">

    @include('common.errors')

    {!! Form::open(['route' => 'products.store']) !!}

        @include('products.fields')

    {!! Form::close() !!}
</div>
@endsection
