@include('header')

<ul>
    @foreach ($products as $product)
        <li>
            <div>
                <p>{{$product->name}} ({{ $product->category->name }})</p>
                <a href="{{ route('updateProductPage', [app()->getLocale(), $product->id]) }}">Редактировать</a><br>
                <a href="{{ route('createAssortimentPage', [app()->getLocale(), $product->id]) }}">Добавить ассортимент</a><br>
                <a href="{{ route('assortimentList', [app()->getLocale(), $product->id]) }}">Ассортимент продукта</a>
                <form  method="post" action="{{route("deleteProduct", [app()->getLocale(), $product->id])}}">
                    @csrf
                    <input type="submit" value="Удалить">
                </form>
            </div>
        </li>
    @endforeach
</ul>
