<div class="row">
    <div class="col-sm-6">
        <div class="panel">
    <div class="panel-heading">
    </div>
    <div class="panel-body">
        @if($recipe->thumbnail_id)
       <img src="/fileentries/{{$recipe->thumbnail_id}}" alt="" class="img img-responsive">
       @else
        @if(Auth::check())
        @if(Auth::user()->hasRole('admin'))
        <form action="{{ route('recipes.update', [$recipe->id]) }}" method="POST" enctype="multipart/form-data">
            <input type="hidden" name="_method" value="PUT">    
            <input type="hidden" value="{{csrf_token()}}" name="_token">
            <input type="file" name="thumbnail">
            <br>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>
       @endif
       @endif 
       @endif
        
    </div>
</div>
    </div>
    <div class="col-sm-6">
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
          @if(Auth::check())
        @if(Auth::user()->hasRole('admin'))
        <input type="button" class="btn btn-primary" value="Print Div" onclick="PrintElem('#qr-code')" />
           @endif
       @endif 
    </div>
</div>

 <div id="qr-code" style="display:none;">
     {!! QrCode::size(600)->generate(route('recipes.show', $recipe->id)) !!}
</div>


@section('scripts')
    <script>
        function PrintElem(elem)
        {
            Popup($(elem).html());
        }

        function Popup(data) 
        {
            var mywindow = window.open('', 'my div', 'height=400,width=600');
            mywindow.document.write('<html><head><title>my div</title>');
            /*optional stylesheet*/ //mywindow.document.write('<link rel="stylesheet" href="main.css" type="text/css" />');
            mywindow.document.write('</head><body >');
            mywindow.document.write(data);
            mywindow.document.write('</body></html>');

            mywindow.document.close(); // necessary for IE >= 10
            mywindow.focus(); // necessary for IE >= 10

            mywindow.print();
            mywindow.close();

            return true;
        }

    </script>
@endsection