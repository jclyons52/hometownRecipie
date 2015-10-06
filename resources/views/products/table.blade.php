<table class="table">
    <thead>
    <th>Name</th>
			<th>Description</th>
			<th>Price</th>
			<th>Thumbnail Id</th>
    <th width="50px">Action</th>
    </thead>
    <tbody>
    @foreach($products as $product)
        <tr>
            <td>{!! $product->name !!}</td>
			<td>{!! $product->description !!}</td>
			<td>{!! $product->price !!}</td>
            <td>
                <a href="{!! route('products.show', [$product->id]) !!}"><i class="glyphicon glyphicon-eye-open"></i></a>
                 @if(Auth::check())
                    @if(Auth::user()->hasRole('admin'))
                        <a href="{!! route('products.edit', [$product->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('products.destroy', [$product->id]) !!}" onclick="return confirm('Are you sure wants to delete this Product?')"><i class="glyphicon glyphicon-remove"></i></a>
                    @endif
                @endif
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
