<ul>
    @foreach ($products as $product)
        <li>
            <div>
                <p>{{$product->name}} ({{ $product->category->name }})</p>
                <a href="{{ route('updateProductPage', $product->id) }}">Редактировать</a><br>
                <a href="{{ route('createAssortimentPage', $product->id) }}">Добавить ассортимент</a><br>
                <a href="{{ route('assortimentList', $product->id) }}">Ассортимент продукта</a>
                <form  method="post" action="{{route("deleteProduct", $product->id)}}">
                    @csrf
                    <input type="submit" value="Удалить">
                </form>
            </div>
        </li>
    @endforeach
</ul>
