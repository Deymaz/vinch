@include('header')

<ul>
    @foreach ($categories as $category)
        <li>
                <div>

                        <div style="min-width: 200px" class="float-left">{{$category->name}}</div>
                        <div class="float-left small-padding-right">
                            <a class="btn btn-warning" href="{{ route('updateCategory', [app()->getLocale(), 'id' => $category->id]) }}">Редактировать</a>
                        </div>
                        <form method="post" action="{{ route('deleteCategory', [app()->getLocale(), 'id' => $category->id]) }}">
                                @csrf
                            <div class="small-padding-right">
                                <input type="submit"  class="btn btn-danger" value="Удалить">
                            </div>
                        </form>
                </div>
        </li>
    @endforeach
</ul>
