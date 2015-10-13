@extends('app')

@section('content')

    <div class="container">

        @include('flash::message')

        <div class="row">
            <h1 class="pull-left">Products</h1>
                @if(Auth::check())
                @if(Auth::user()->hasRole('admin'))
                    <a class="btn btn-primary pull-right" style="margin-top: 25px" href="{!! route('products.create') !!}">Add New</a>
                @endif
                @endif
            
        </div>

        <div class="row">
            @if($products->isEmpty())
                <div class="well text-center">No Products found.</div>
            @else
                @include('products.table')
            @endif
        </div>

        {!! $products->render() !!}

    </div>
@endsection