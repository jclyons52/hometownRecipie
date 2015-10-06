<table class="table">
    <thead>
        <th>Name</th>
        <th>Description</th>
        <th>Method</th>
        <th>Thumbnail Id</th>
        <th width="50px">Action</th>
    </thead>
    <tbody>
        @foreach($recipes as $recipe)
        <tr>
            <td>{!! $recipe->name !!}</td>
            <td>{!! $recipe->description !!}</td>
            <td>{!! $recipe->method !!}</td>
            <td>{!! $recipe->thumbnail_id !!}</td>
            <td>
                <a href="{!! route('recipes.show', [$recipe->id]) !!}"><i class="glyphicon glyphicon-eye-open"></i></a>
                @if(Auth::check())
                    @if(Auth::user()->hasRole('admin'))
                        <a href="{!! route('recipes.edit', [$recipe->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
                        <a href="{!! route('recipes.destroy', [$recipe->id]) !!}" onclick="return confirm('Are you sure wants to delete this Recipe?')"><i class="glyphicon glyphicon-remove"></i></a>
                    @endif
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
