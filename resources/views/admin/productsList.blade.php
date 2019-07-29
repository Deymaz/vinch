<ul>
    @foreach ($products as $product)
        <li>
            <div>
                <p>{{$product->name}}</p>
                <a href="{{ route('updateProductPage', $product->id) }}">Редактировать</a>
                <form  method="post" action="">
                    @csrf
                    <input type="submit" value="Удалить">
                </form>
            </div>
        </li>
    @endforeach
</ul>
