@include('header')

<ul>
    <li><a href="{{ route('categoriesList',[app()->getLocale()]) }}">Список категорий</a></li>
    <li><a href="{{ route('createCategoryPage', [app()->getLocale()]) }}">Создать категорию</a></li>
</ul>

<ul>
    <li><a href="{{ route('productsList', [app()->getLocale()]) }}">Список товаров</a></li>
    <li><a href="{{ route('createProductPage', [app()->getLocale()]) }}">Создать товар</a></li>
</ul>
