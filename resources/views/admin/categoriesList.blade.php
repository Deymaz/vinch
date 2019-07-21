<ul>
    @foreach ($categories as $category)
        <li>
                <div>
                        <p>{{$category->name}}</p>
                        <a href="{{ route('updateCategory', ['id' => $category->id]) }}">Редактировать</a>
                        <form  method="post" action="{{ route('deleteCategory', ['id' => $category->id]) }}">
                                @csrf
                                <input type="submit" value="Удалить">
                        </form>
                </div>
        </li>
    @endforeach
</ul>
