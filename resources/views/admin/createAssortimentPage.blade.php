@include('header')

<div class="wrapper">
    <div class="content">
        <form action="{{ route('createAssortiment', [app()->getLocale(), $id]) }}" method="POST">
            @csrf

            <label class="assortiment_label" for="name">Имя продукции</label>
            <input type="text" size="30" name="name" id="name"><br>

            <label class="assortiment_label" for="fao">fao</label>
            <input type="text" size="30" name="fao" id="fao"><br>

            <label class="assortiment_label" for="type">type</label>
            <input type="text" size="30" name="type" id="type"><br>

            <label class="assortiment_label" for="usage">usage</label>
            <input type="text" size="30" name="usage" id="usage"><br>

            <label class="assortiment_label" for="crop_potential">crop_potential</label>
            <input type="text" size="30" name="crop_potential" id="crop_potential"><br>

            <label class="assortiment_label" for="drought_tolerance">drought_tolerance</label>
            <input type="text" size="30" name="drought_tolerance" id="drought_tolerance"><br>

            <label class="assortiment_label" for="sufficient_moisture">sufficient_moisture</label>
            <input type="text" size="30" name="sufficient_moisture" id="sufficient_moisture"><br>

            <label class="assortiment_label" for="insufficient_moisture">insufficient_moisture</label>
            <input type="text" size="30" name="insufficient_moisture" id="insufficient_moisture"><br>

            <label class="assortiment_label" for="optimal_moisture">optimal_oisture</label>
            <input type="text" size="30" name="optimal_moisture" id="optimal_moisture"><br>

            <label class="assortiment_label" for="processing">processing</label>
            <input type="text" size="30" name="processing" id="processing"><br>

            <label class="assortiment_label" for="ripeness_group">ripeness_group</label>
            <input type="text" size="30" name="ripeness_group" id="ripeness_group"><br>

            <label class="assortiment_label" for="sow_time">sow_time</label>
            <input type="text" size="30" name="sow_time" id="sow_time"><br>

            <label class="assortiment_label" for="details">details</label>
            <input type="text" size="30" name="details" id="details"><br>

            <label class="assortiment_label" for="vegetation_period_days">vegetation_period_days</label>
            <input type="text" size="30" name="vegetation_period_days" id="vegetation_period_days"><br>

            <label class="assortiment_label" for="intensity">intensity</label>
            <input type="text" size="30" name="intensity" id="intensity"><br>

            <label class="assortiment_label" for="herbicides_tolerance">herbicides_tolerance</label>
            <input type="text" size="30" name="herbicides_tolerance" id="herbicides_tolerance"><br>

            <label class="assortiment_label" for="oleic_acid_content">oleic_acid_content</label>
            <input type="text" size="30" name="oleic_acid_content" id="oleic_acid_content"><br>

            <label class="assortiment_label" for="variety">variety</label>
            <input type="text" size="30" name="variety" id="variety"><br>

            <label class="assortiment_label" for="disinfectant">disinfectant</label>
            <input type="text" size="30" name="disinfectant" id="disinfectant"><br>

            <label class="assortiment_label" for="origin">origin</label>
            <input type="text" size="30" name="origin" id="origin"><br>

            <label class="assortiment_label" for="protein_content">protein_content</label>
            <input type="text" size="30" name="protein_content" id="protein_content"><br>

            <label class="assortiment_label" for="group">group</label>
            <input type="text" size="30" name="group" id="group"><br>

            <label class="assortiment_label" for="active_substance">active_substance</label>
            <input type="text" size="30" name="active_substance" id="active_substance"><br>

            <label class="assortiment_label" for="cost_rate_hectare">cost_rate_hectare</label>
            <input type="text" size="30" name="cost_rate_hectare" id="cost_rate_hectare"><br>

            <input type="submit" class="margin-left-25 btn btn-success" value="Сохранить">
            @foreach ($errors->all() as $error)
                <div class="alert alert-danger">{{ $error }}</div>
            @endforeach
        </form>
    </div>
</div>
@include('footer')
