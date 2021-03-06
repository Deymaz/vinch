</div>
<footer class="footer">
    <div class="container">
        <div class="footer-inner row">
            <div class="footer-menu-left cell-6 cell-12-xs">
                <div class="row">
                    <div class="footer-menu cell-6 cell-12-xs">
                        <div class="footer-logo hide-xs">
                            <h3><a style="color: white" href="{{ route('main', [app()->getLocale()]) }}">Vinch</a></h3>
                        </div>
                        <div class="phones footer-phones">
                            <a href="tel:{{__('messages.company_phone_number')}}" class="phones-a">{{__('messages.company_phone_number')}}</a>
                        </div>

                    </div>
                    <div class="footer-menu cell-3 hide-md">
                        <ul class="footer-menu-list list">
                            <li><a href="{{route('aboutUs', [app()->getLocale()])}}" class="footer-menu-link" title="{{__('messages.about_us')}}">{{__('messages.about_us')}}</a></li>
                            <li><a href="{{route('contacts', [app()->getLocale()])}}" class="footer-menu-link" title="{{__('messages.contacts')}}">{{__('messages.contacts')}}</a></li>
                            <li><a href="{{route('deliveryAndPayment', [app()->getLocale()])}}" class="footer-menu-link" title="{{__('messages.delivery_and_payment')}}">{{__('messages.delivery_and_payment')}}</a></li>
                            <li><a href="{{route('feedback', [app()->getLocale()])}}" class="footer-menu-link" title="{{__('messages.feedback')}}">{{__('messages.feedback')}}</a></li>
                        </ul>
                </div>
                </div>

            </div>
            <div class="footer-menu-right cell-6 cell-12-xs">
                <div class="row">
                    <div class="footer-menu hide-md">
                        <span class="time-text">{{__('messages.work_time_phrase')}}</span>
                        <div class="time-inner">
                            {{__('messages.work_time')}}
                        </div>
                    </div>
                </div>
            </div>
            </div>
    </div>
</footer>
