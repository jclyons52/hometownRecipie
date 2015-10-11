<table class="table">
    <tbody>
        @foreach($recipes as $recipe)
        <tr>
            <td>

                <div class="media">
                  <div class="media-left">
                    <a href="{!! route('recipes.show', [$recipe->id]) !!}">
                        <img src="/fileentries/{{$recipe->thumbnail_id}}" height="80px" width="80px" class="media-object img-img-responsive">
                    </a>
                  </div>
                    <div class="media-body">
                        <h4 class="media-heading">{!! $recipe->name !!}</h4>
                        <h5>Description</h5>
                        <p>{!! str_limit($recipe->description, 200) !!}</p>
                        <h5>Method</h5>
                        <p>{!! str_limit($recipe->method, 200) !!}</p>
                    </div>
                </div>
        </td>

        @if(Auth::check())
        @if(Auth::user()->hasRole('admin'))
        <td>
            <a href="{!! route('recipes.edit', [$recipe->id]) !!}"><i class="glyphicon glyphicon-edit"></i></a>
            <a href="{!! route('recipes.destroy', [$recipe->id]) !!}" onclick="return confirm('Are you sure wants to delete this recipe?')"><i class="glyphicon glyphicon-remove"></i></a>
        </td>
        @endif
        @endif

    </tr>
    @endforeach
</tbody>
</table>