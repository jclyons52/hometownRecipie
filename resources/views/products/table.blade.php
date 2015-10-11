<table class="table">
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>

                <div class="media">
                  <div class="media-left">
                    <a href="{!! route('products.show', [$product->id]) !!}">
                        <img src="/fileentries/{{$product->thumbnail_id}}" height="80px" width="80px" class="media-object img-img-responsive">
                    </a>
                  </div>
                    <div class="media-body">
                        <h4 class="media-heading">{!! $product->name !!}</h4>
                        <p>{!! $product->description !!}</p>
                        <p>{!! $product->price !!}</p>
                    </div>
                </div>
        </td>

        @if(Auth::check())
        @if(Auth::user()->hasRole('admin'))
        <td>
            <a href="{!! route('products.edit', [$product->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
            <a href="{!! route('products.destroy', [$product->id]) !!}" onclick="return confirm('Are you sure wants to delete this Product?')"><i class="glyphicon glyphicon-remove"></i></a>
        </td>
        @endif
        @endif

    </tr>
    @endforeach
</tbody>
</table>
