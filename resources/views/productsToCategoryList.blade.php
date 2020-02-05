@include('header')
<div class="wrapper">
    <div class="content">
        <div class="subCategories-container">
            @foreach($products as $product)
                <div class="subCategory-item">
                    <a class="subCategories-link"
                       href="{{ route('productAssortiment', [app()->getLocale(), 'product_id' => $product->id]) }}">
                        <div>
                            <div class="subCategory-img-block">
                                <img class="subCategory-img" src="{{ asset("storage/$product->file_url") }}">
                            </div>
                            <div class="subCategory-name-block">
                                <p>{{ $product->name }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
</div>
@include('footer')

