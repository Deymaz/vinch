@include('header')

<ul>
    @foreach ($assortimentList as $assortiment)
        <li>
            <div>
                <p>{{$assortiment->name}}</p>
                <a href="{{ route('updateAssortiment', [app()->getLocale(),'id' => $assortiment->id]) }}">Редактировать</a>
                <form  method="post" action="{{ route('deleteAssortiment', [app()->getLocale(), 'id' => $assortiment->id]) }}">
                    @csrf
                    <input type="submit" value="Удалить">
                </form>
            </div>
        </li>
    @endforeach
</ul>
