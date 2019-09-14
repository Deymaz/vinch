@include('header')

@foreach($assortiment as $item)
    {{ $item->name }} <br>
@endforeach

@include('footer')

