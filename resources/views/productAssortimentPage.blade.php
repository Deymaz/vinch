@include('header')
<div class="wrapper" style="display: block">
    <div class="content" style="display: block">
        <table id="assortiment_table">
            <thead>
            <tr>
                @foreach ($header as $row)
                    <td>{{$row}}</td>
                @endforeach
            </tr>
            </thead>
            <tbody>
            @foreach($content as $line)
                <tr>
                    @foreach($line as $row)
                        <td>{{ $row }}</td>
                    @endforeach
                </tr>
            @endforeach
                </tbody>
        </table>
    </div>
</div>
@include('footer')
