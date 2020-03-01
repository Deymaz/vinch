@include('header')

<div class="wrapper">
    <div class="content">
        <div style="padding-left: 35px;">
            <h2 >{{__('messages.phone')}}:
                <a style="color: #c53737" href="tel:{{__('messages.company_phone_number')}}">{{__('messages.company_phone_number')}}</a>
            </h2>
            <h2>{{__('messages.email')}}:
                <a style="color: #c53737" href="mailto:{{__('messages.company_email_address')}}">{{__('messages.company_email_address')}}</a>
            </h2>
        </div>
    </div>
</div>

@include('footer')

