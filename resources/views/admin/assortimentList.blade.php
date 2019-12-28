@include('header')

<div class="wrapper">
    <div class="content">
        <ul>
            @foreach ($assortimentList as $assortiment)
                <li style="margin-bottom: 25px">
                    <div>
                        <div style="min-width: 200px" class="float-left">{{$assortiment->name}}</div>
                        <div class="float-left small-padding-right">
                            <a class="btn btn-warning"
                               href="{{ route('updateAssortiment', [app()->getLocale(),'id' => $assortiment->id]) }}">Редактировать</a>
                        </div>
                        <div class="float-left small-padding-right">

                            <form method="post"
                                  action="{{ route('deleteAssortiment', [app()->getLocale(), 'id' => $assortiment->id]) }}">
                                @csrf
                                <input type="submit" class="btn btn-danger" value="Удалить">
                            </form>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>
</div>

@include('footer')

