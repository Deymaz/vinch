@include('header')

<div class="subCategories-container">
    @foreach($categories as $category)
        <div class="subCategory-item">
            <a class="subCategories-link"
               href="{{ route('productsToCategoryList', [app()->getLocale(), 'category_id' => $category->id]) }}">
                <div>
                    <div class="subCategory-img-block">
                        <img class="subCategory-img" src="{{ asset("storage/$category->img_url") }}">
                    </div>
                    <div class="subCategory-name-block">
                        <p>{{ $category->name }}</p>
                    </div>
                </div>
            </a>
        </div>
    @endforeach
</div>

@include('footer')

