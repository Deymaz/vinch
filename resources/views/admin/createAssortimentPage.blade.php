@include('header')

<div class="wrapper">
    <div class="content">
        <form action="{{ route('createAssortiment', [app()->getLocale(), $id]) }}" method="POST">
            @csrf

            <label class="assortiment_label" for="name">{{ __('messages.name') }}</label>
            <input type="text" size="30" name="name" id="name"><br>

            <label class="assortiment_label" for="fao">{{__('messages.fao')}}</label>
            <input type="text" size="30" name="fao" id="fao"><br>

            <label class="assortiment_label" for="type">{{__('messages.type')}}</label>
            <input type="text" size="30" name="type" id="type"><br>

            <label class="assortiment_label" for="usage">{{__('messages.usage')}}</label>
            <input type="text" size="30" name="usage" id="usage"><br>

            <label class="assortiment_label" for="crop_potential">{{__('messages.crop_potential')}}</label>
            <input type="text" size="30" name="crop_potential" id="crop_potential"><br>

            <label class="assortiment_label" for="drought_tolerance">{{__('messages.drought_tolerance')}}</label>
            <input type="text" size="30" name="drought_tolerance" id="drought_tolerance"><br>

            <label class="assortiment_label" for="sufficient_moisture">{{__('messages.sufficient_moisture')}}</label>
            <input type="text" size="30" name="sufficient_moisture" id="sufficient_moisture"><br>

            <label class="assortiment_label" for="insufficient_moisture">{{__('messages.insufficient_moisture')}}</label>
            <input type="text" size="30" name="insufficient_moisture" id="insufficient_moisture"><br>

            <label class="assortiment_label" for="optimal_moisture">{{__('messages.optimal_oisture')}}</label>
            <input type="text" size="30" name="optimal_moisture" id="optimal_moisture"><br>

            <label class="assortiment_label" for="processing">{{__('messages.processing')}}</label>
            <input type="text" size="30" name="processing" id="processing"><br>

            <label class="assortiment_label" for="ripeness_group">{{__('messages.ripeness_group')}}</label>
            <input type="text" size="30" name="ripeness_group" id="ripeness_group"><br>

            <label class="assortiment_label" for="sow_time">{{__('messages.sow_time')}}</label>
            <input type="text" size="30" name="sow_time" id="sow_time"><br>

            <label class="assortiment_label" for="details">{{__('messages.details')}}</label>
            <input type="text" size="30" name="details" id="details"><br>

            <label class="assortiment_label" for="vegetation_period_days">{{__('messages.vegetation_period_days')}}</label>
            <input type="text" size="30" name="vegetation_period_days" id="vegetation_period_days"><br>

            <label class="assortiment_label" for="intensity">{{__('messages.intensity')}}</label>
            <input type="text" size="30" name="intensity" id="intensity"><br>

            <label class="assortiment_label" for="herbicides_tolerance">{{__('messages.herbicides_tolerance')}}</label>
            <input type="text" size="30" name="herbicides_tolerance" id="herbicides_tolerance"><br>

            <label class="assortiment_label" for="oleic_acid_content">{{__('messages.oleic_acid_content')}}</label>
            <input type="text" size="30" name="oleic_acid_content" id="oleic_acid_content"><br>

            <label class="assortiment_label" for="variety">{{__('messages.variety')}}</label>
            <input type="text" size="30" name="variety" id="variety"><br>

            <label class="assortiment_label" for="disinfectant">{{__('messages.disinfectant')}}</label>
            <input type="text" size="30" name="disinfectant" id="disinfectant"><br>

            <label class="assortiment_label" for="origin">{{__('messages.origin')}}</label>
            <input type="text" size="30" name="origin" id="origin"><br>

            <label class="assortiment_label" for="protein_content">{{__('messages.protein_content')}}</label>
            <input type="text" size="30" name="protein_content" id="protein_content"><br>

            <label class="assortiment_label" for="group">{{__('messages.group')}}</label>
            <input type="text" size="30" name="group" id="group"><br>

            <label class="assortiment_label" for="active_substance">{{__('messages.active_substance')}}</label>
            <input type="text" size="30" name="active_substance" id="active_substance"><br>

            <label class="assortiment_label" for="cost_rate_hectare">{{__('messages.cost_rate_hectare')}}</label>
            <input type="text" size="30" name="cost_rate_hectare" id="cost_rate_hectare"><br>

            <input type="submit" class="margin-left-25 btn btn-success" value="Сохранить">
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        </form>
    </div>
</div>
@include('footer')
