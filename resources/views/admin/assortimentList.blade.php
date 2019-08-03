<ul>
    @foreach ($assortimentList as $assortiment)
        <li>
            <div>
                <p>{{$assortiment->name}}</p>
                <a href="{{ route('updateAssortiment', ['id' => $assortiment->id]) }}">Редактировать</a>
                <form  method="post" action="{{ route('deleteAssortiment', ['id' => $assortiment->id]) }}">
                    @csrf
                    <input type="submit" value="Удалить">
                </form>
            </div>
        </li>
    @endforeach
</ul>
