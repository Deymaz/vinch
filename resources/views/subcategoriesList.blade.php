@include('header')

@foreach($categories as $category)
   <a href="{{ route('productsToCategoryList', [app()->getLocale(), 'category_id' => $category->id]) }}"> {{ $category->name }}</a> <br>
@endforeach

@include('footer')

