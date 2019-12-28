@include('header')
<div class="wrapper">
    <div class="content">
        <ul>
            <li><a href="{{ route('categoriesList',[app()->getLocale()]) }}">Список категорий</a></li>
            <li><a href="{{ route('createCategoryPage', [app()->getLocale()]) }}">Создать категорию</a></li>
        </ul>

        <ul>
            <li><a href="{{ route('productsList', [app()->getLocale()]) }}">Список товаров</a></li>
            <li><a href="{{ route('createProductPage', [app()->getLocale()]) }}">Создать товар</a></li>
        </ul>

        <ul>
            <li><a href="{{ route('feedback_list_admin', [app()->getLocale()]) }}">Заявки обратной связи</a></li>
        </ul>
    </div>
</div>
@include('footer')

