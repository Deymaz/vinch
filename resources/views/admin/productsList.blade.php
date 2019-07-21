<ul>
    @foreach ($products as $product)
        <li>
            <div>
                <p>{{$product->name_ru}}</p>
                <a href="">Редактировать</a>
                <form  method="post" action="">
                    @csrf
                    <input type="submit" value="Удалить">
                </form>
            </div>
        </li>
    @endforeach
</ul>
