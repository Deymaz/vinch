@include('header')
<div class="wrapper" style="display: block">
    <div class="content" style="display: block">
        <table id="assortiment_table">
            <thead>
            <tr>
                @foreach ($filledFields as $filledField)
                    <td>{{ __('messages.' . $filledField)}}</td>
                @endforeach
            </tr>
            </thead>
            <tbody>
            @foreach($assortiment as $item)
                <tr>
                    <td style="font-weight: bold">{{ $item->name }}</td>
                    @if ($item->fao)
                        <td>{{ $item->fao }}</td>
                    @endif

                    @if ($item->type)
                        <td>{{ $item->type }}</td>
                    @endif
                    @if ($item->usage)
                        <td>{{ $item->usage }}</td>
                    @endif

                    @if ($item->crop_potential)
                        <td>{{ $item->crop_potential }}</td>
                    @endif

                    @if ($item->drought_tolerance)
                        <td>{{ $item->drought_tolerance }}</td>
                    @endif

                    @if ($item->sufficient_moisture)
                        <td>{{ $item->sufficient_moisture }}</td>
                    @endif

                    @if ($item->insufficient_moisture)
                        <td>{{ $item->insufficient_moisture }}</td>
                    @endif

                    @if ($item->optimal_moisture)
                        <td>{{ $item->optimal_moisture }}</td>
                    @endif

                    @if ($item->processing)
                        <td>{{ $item->processing }}</td>
                    @endif

                    @if ($item->ripeness_group)
                        <td>{{ $item->ripeness_group }}</td>
                    @endif

                    @if ($item->sow_time)
                        <td>{{ $item->sow_time }}</td>
                    @endif

                    @if ($item->details)
                        <td>{{ $item->details }}</td>
                    @endif

                    @if ($item->vegetation_period_days)
                        <td>{{ $item->vegetation_period_days }}</td>
                    @endif

                    @if ($item->intensity)
                        <td>{{ $item->intensity }}</td>
                    @endif

                    @if ($item->herbicides_tolerance)
                        <td>{{ $item->herbicides_tolerance }}</td>
                    @endif

                    @if ($item->oleic_acid_content)
                        <td>{{ $item->oleic_acid_content }}</td>
                    @endif

                    @if ($item->variety)
                        <td>{{ $item->variety }}</td>
                    @endif

                    @if ($item->disinfectant)
                        <td>{{ $item->disinfectant }}</td>
                    @endif

                    @if ($item->origin)
                        <td>{{ $item->origin }}</td>
                    @endif

                    @if ($item->protein_content)
                        <td>{{ $item->protein_content }}</td>
                    @endif

                    @if ($item->group)
                        <td>{{ $item->group }}</td>
                    @endif

                    @if ($item->active_substance)
                        <td>{{ $item->active_substance }}</td>
                    @endif

                    @if ($item->cost_rate_hectare)
                        <td>{{ $item->cost_rate_hectare }}</td>
                    @endif

                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@include('footer')
