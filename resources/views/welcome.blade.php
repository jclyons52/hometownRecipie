@extends('app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Home</div>

                <div class="panel-body">
                      <div id="reader" style="width:300px;height:250px">
                        </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
<script src="/libs/html5-qrcode/lib/html5-qrcode.min.js"></script>
<script src="/libs/html5-qrcode/lib/jsqrcode-combined.min.js"></script>
<script>
    $('#reader').html5_qrcode(function(data){
         console.log(data);
    },
    function(error){
        //show read errors 
    }, function(videoError){
        //the video stream could be opened
    }
);
</script>
@endsection
