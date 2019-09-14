<html>
<head>
    <title>App Name - @yield('header')</title>
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
                            <a href="{{route('aboutUs', [app()->getLocale()])}}" class="top_menu-link">{{__('messages.about_us')}}</a>
                        </li>
                        <li class="top_menu-li">
                            <a href="{{route('deliveryAndPayment', [app()->getLocale()])}}" class="top_menu-link">{{__('messages.delivery_and_payment')}}</a>
                        </li>
                        <li class="top_menu-li">
                            <a href="{{route('contacts', [app()->getLocale()])}}" class="top_menu-link">{{__('messages.contacts')}}</a>
                        </li>
                        <li class="top_menu-li">
                            <a href="{{route('feedback', [app()->getLocale()])}}" class="top_menu-link">{{__('messages.feedback')}}</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="row header-first">

        <div style="min-width: 25%" class="logo cell-3 cell-4-md cell-5-sm cell-6-mc">
            <h1>LOGO</h1>
        </div>
        <div class="phones cell-3 cell-4-md cell-7-sm cell-6-mc text-right-sm">
            <a href="tel:+7(749)512-34-56" class="phones-a">+7(749)512-34-56</a>
            <span title="Заказать обратный звонок" class="phones-span js-backcall-toggle">{{__('messages.callback')}}</span>
        </div>
        <div class="time cell-3 hidden-md">
            <span class="time-text gray_text">{{__('messages.work_time_phrase')}}:</span>
            <div class="time-inner">
                пн-пт 10:00-20:00, сб-вс 10:00-18:00
            </div>
        </div>

    </div>
</header>
{{--<header>--}}
{{--    <div>{{__('messages.seed_category') }}</div>--}}
{{--    <div>{{__('messages.plant_protection_products_category')}}</div>--}}
{{--    <div>{{__('messages.microfertilizers_category')}}</div>--}}
{{--    @php--}}
{{--        $category1 = \App\Category::find(4);--}}
{{--        $products = $category1->products;--}}
{{--    @endphp--}}
{{--    <ul>--}}
{{--        @foreach($products as $product)--}}
{{--            <li> {{ $product->name }}--}}
{{--                <ul>--}}
{{--                    @foreach($product->assortiment as $item)--}}
{{--                        <li>{{ $item->name }}</li>--}}
{{--                    @endforeach--}}
{{--                </ul>--}}
{{--            </li>--}}
{{--        @endforeach--}}
{{--    </ul>--}}

{{--</header>--}}
