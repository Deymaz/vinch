
@include('header')
<div class="wrapper">
    <div class="content">
        @foreach($products as $product)
            <a href="{{ route('productAssortiment', [app()->getLocale(), 'id' => $product->id]) }}">
                <h3>{{ $product->name }}</h3>
            </a> <br>
        @endforeach
    </div>
</div>
@include('footer')

