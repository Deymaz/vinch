@include('header')

<ul>
    @foreach ($categories as $category)
        <li>
                <div>
                        <p>{{$category->name}}</p>
                        <a href="{{ route('updateCategory', [app()->getLocale(), 'id' => $category->id]) }}">Редактировать</a>
                        <form  method="post" action="{{ route('deleteCategory', [app()->getLocale(), 'id' => $category->id]) }}">
                                @csrf
                                <input type="submit" value="Удалить">
                        </form>
                </div>
        </li>
    @endforeach
</ul>
