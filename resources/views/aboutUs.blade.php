@include('header')

<div class="wrapper">
    <div class="content">
        @php
            $image = asset('storage/images/about_us_background.jpg')
        @endphp
        <div class="abous_us_text_wrapper" style="background-image: url('{{$image}}')" >
            <div class="about_as_text_block" >
                <h2 style="text-align: center">{{mb_strtoupper(__('messages.about_company_header'))}}</h2>
                <p>{{__('messages.about_company_1_paragraph')}}</p>
                <p>{{__('messages.about_company_2_paragraph')}}</p>
            </div>
            <div class="about_as_text_block">
                <h2 style="text-align: center">{{mb_strtoupper(__('messages.company_mission_header'))}}</h2>
                <p>{{__('messages.company_mission_1_paragraph')}}</p>
                <p>{{__('messages.company_mission_2_paragraph')}}</p>
            </div>
            <div class="about_as_text_block">
                <h2 style="text-align: center">{{mb_strtoupper(__('messages.company_philosophy_header'))}}</h2>
                <p>{{__('messages.company_philosophy_1_paragraph')}}</p>
                <p>{{__('messages.company_mission_2_paragraph')}}</p>
            </div>
        </div>
    </div>
</div>

@include('footer')

