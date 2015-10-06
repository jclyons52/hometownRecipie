@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Recipes</h1>
            <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('recipes.create') !!}">Add New</a>
        </div>

        <div class="row">
            @if($recipes->isEmpty())
                <div class="well text-center">No Recipes found.</div>
            @else
                @include('recipes.table')
            @endif
        </div>

        {!! $recipes->render() !!}

    </div>
@endsection