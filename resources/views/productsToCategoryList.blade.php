@foreach($products as $product)
    <a href="{{ route('productAssortiment', [app()->getLocale(), 'id' => $product->id]) }}">
        {{ $product->name }}
    </a> <br>
@endforeach
