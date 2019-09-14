@include('header')
    @foreach ($products as $product)
            <div>
                <h3>{{$product->name}} ({{ $product->category->name }})</h3>
                <div class="float-left small-padding-right">
                    <a class="btn btn-warning"
                       href="{{ route('updateProductPage', [app()->getLocale(), $product->id]) }}">Редактировать</a>
                </div>
                <div class="float-left small-padding-right">
                    <a class="btn btn-primary"
                       href="{{ route('createAssortimentPage', [app()->getLocale(), $product->id]) }}">Добавить
                        ассортимент</a>
                </div>
                <div class="float-left small-padding-right"><a class="btn btn-info" href="{{ route('assortimentList', [app()->getLocale(), $product->id]) }}">Ассортимент
                        продукта</a>
                </div>
                <form method="post" action="{{route("deleteProduct", [app()->getLocale(), $product->id])}}">
                    @csrf
                    <input type="submit" class="btn btn-danger" value="Удалить">
                </form>
            </div>
        <hr>
    @endforeach

@include('footer')
