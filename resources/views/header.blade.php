<html>
<head>
    <title>App Name - @yield('header')</title>
</head>
<body>
<header>
    <div>{{__('messages.seed_category') }}</div>
    <div>{{__('messages.plant_protection_products_category')}}</div>
    <div>{{__('messages.microfertilizers_category')}}</div>
    @php
        $category1 = \App\Category::find(4);
        $products = $category1->products;
    @endphp
    <ul>
        @foreach($products as $product)
            <li> {{ $product->name }}
                <ul>
                    @foreach($product->assortiment as $item)
                        <li>{{ $item->name }}</li>
                    @endforeach
                </ul>
            </li>
        @endforeach
    </ul>

</header>
