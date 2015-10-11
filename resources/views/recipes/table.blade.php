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
                        <p>{!! $recipe->description !!}</p>
                        <p>{!! $recipe->method !!}</p>
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