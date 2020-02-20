@php
    $subCategoriesSeed = \App\Category::where('parent_category_id' , 2)->get();
    $subCategoriesProtect = \App\Category::where('parent_category_id' , 3)->get();
    $subCategoriesMicro = \App\Category::where('parent_category_id' , 4)->get();
@endphp

<html>
<head>
    <title>Vinch - @yield('header')</title>
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/styles.css') }}" rel="stylesheet">
</head>
<body>
<header class="header">
    <div class="top-panel top-panel-desktop hidden-md">
        <div class="container">
            <div class="row">
                <div>
                    <ul class="top_menu list">
                        <li class="top_menu-li">
                            <a href="{{route('aboutUs', [app()->getLocale()])}}"
                               class="top_menu-link">{{__('messages.about_us')}}</a>
                        </li>
                        <li class="top_menu-li">
                            <a href="{{route('deliveryAndPayment', [app()->getLocale()])}}"
                               class="top_menu-link">{{__('messages.delivery_and_payment')}}</a>
                        </li>
                        <li class="top_menu-li">
                            <a href="{{route('contacts', [app()->getLocale()])}}"
                               class="top_menu-link">{{__('messages.contacts')}}</a>
                        </li>
                        <li class="top_menu-li">
                            <a href="{{route('feedback', [app()->getLocale()])}}"
                               class="top_menu-link">{{__('messages.feedback')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @if (Auth::check())
            <script src="{{ asset('js/fontawesome.js') }}"></script>
            <a href="{{route('adminPanel', [app()->getLocale()])}}">Админка</a>
            <div style="padding-left: 5px;">
                <form method="post" action="{{route('logout')}}">
                    @csrf
                    <button style="background: #85a71e; border: none; cursor: pointer; min-width: 30px;">
                        <i class="fa fa-power-off" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        @endif
    </div>

    <div class="row header-first">

        <div style="min-width: 25%" class="logo cell-3 cell-4-md cell-5-sm cell-6-mc">
            <h1><a href="{{ route('main', [app()->getLocale()]) }}">Vinch</a></h1>
        </div>
        <div class="phones" style="padding-right: 50px">
            <a href="tel:{{__('messages.company_phone_number')}}" class="phones-a">{{__('messages.company_phone_number')}}</a>

        </div>
        <div class="time cell-3 hidden-md">
            <span class="time-text gray_text">{{__('messages.work_time_phrase')}}:</span>
            <div class="time-inner">
                {{__('messages.work_time')}}
            </div>
        </div>

    </div>
    <div class="catalog_header">
        <div class="catalog_block_left"></div>
        <div class="catalog_block_center">
            <nav>
                <ul class="topmenu">
                    <li class="main_list">
                        <a href="{{route('subcategoriesList', ['id' => 2, app()->getLocale()])}}">{{__('messages.seed_category') }}</a>
                        <ul class="submenu">
                            @foreach($subCategoriesSeed as $category)
                                <li class="dropdown">
                                    <a href="{{route('productsToCategoryList', ['category_id' => $category->id, app()->getLocale()])}}">
                                        {{ $category->name }}
                                    </a>
                                    @if(count($category->products))
                                    <ul>
                                        @foreach($category->products as $product)
                                            <li>
                                                <a href="{{route('productAssortiment', ['product_id' => $product->id, app()->getLocale()])}}">
                                                    {{ $product->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('subcategoriesList', ['id' => 3, app()->getLocale()])}}">{{__('messages.plant_protection_products_category') }}</a>
                        <ul class="submenu">
                            @foreach($subCategoriesProtect as $category)
                                <li class="dropdown">
                                    <a href="{{route('productsToCategoryList', ['category_id' => $category->id, app()->getLocale()])}}">
                                        {{ $category->name }}
                                    </a>
                                    @if(count($category->products))
                                    <ul>
                                        @foreach($category->products as $product)
                                            <li>
                                                <a href="{{route('productAssortiment', ['product_id' => $product->id, app()->getLocale()])}}">
                                                    {{ $product->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </li>
                    <li>
                        <a href="{{route('subcategoriesList', ['id' => 4, app()->getLocale()])}}">{{__('messages.microfertilizers_category') }}</a>
                        <ul class="submenu">
                            @foreach($subCategoriesMicro as $category)
                                <li class="dropdown">
                                    <a href="{{route('productsToCategoryList', ['category_id' => $category->id, app()->getLocale()])}}">
                                        {{ $category->name }}
                                    </a>
                                    @if(count($category->products))
                                    <ul>
                                        @foreach($category->products as $product)
                                            <li>
                                                <a href="{{route('productAssortiment', ['product_id' => $product->id, app()->getLocale()])}}">
                                                    {{ $product->name }}
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                    @endif
                                </li>
                            @endforeach
                        </ul>
                    </li>
                </ul>
            </nav>
        </div>
        <div class="catalog_block_right"></div>
    </div>
</header>
