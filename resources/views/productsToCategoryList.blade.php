
@include('header')

@foreach($products as $product)
    <a href="{{ route('productAssortiment', [app()->getLocale(), 'id' => $product->id]) }}">
        <h3>{{ $product->name }}</h3>
    </a> <br>
@endforeach

@include('footer')

