@include('header')

<form action="{{ route('updateAssortiment', [app()->getLocale(), $assortiment->id]) }}" method="POST">
    @csrf
    <label class="assortiment_label" for="name">Имя продукции</label>
    <input  type="text" size="30" name="name" id="name" @if($assortiment->name) value="{{ $assortiment->name}}" @endif><br>

    <label class="assortiment_label" for="fao">fao</label>
    <input type="text" size="30" name="fao" id="fao" @if($assortiment->fao) value="{{ $assortiment->fao}}" @endif><br>

    <label class="assortiment_label" for="type">type</label>
    <input type="text" size="30" name="type" id="type" @if($assortiment->type) value="{{ $assortiment->type}}" @endif><br>

    <label class="assortiment_label" for="usage">usage</label>
    <input type="text" size="30" name="usage" id="usage" @if($assortiment->usage) value="{{ $assortiment->usage}}" @endif><br>

    <label class="assortiment_label"for="crop_potential">crop_potential</label>
    <input type="text" size="30" name="crop_potential" id="crop_potential" @if($assortiment->crop_potential) value="{{ $assortiment->crop_potential}}" @endif><br>

    <label  class="assortiment_label"for="drought_tolerance">drought_tolerance</label>
    <input type="text" size="30" name="drought_tolerance" id="drought_tolerance" @if($assortiment->drought_tolerance) value="{{ $assortiment->drought_tolerance}}" @endif><br>

    <label class="assortiment_label" for="sufficient_moisture">sufficient_moisture</label>
    <input  type="text" size="30" name="sufficient_moisture" id="sufficient_moisture" @if($assortiment->sufficient_moisture) value="{{ $assortiment->sufficient_moisture}}" @endif><br>

    <label class="assortiment_label" for="insufficient_moisture">insufficient_moisture</label>
    <input type="text" size="30" name="insufficient_moisture" id="insufficient_moisture" @if($assortiment->insufficient_moisture) value="{{ $assortiment->insufficient_moisture}}" @endif><br>

    <label class="assortiment_label" for="optimal_moisture">optimal_moisture</label>
    <input type="text" size="30" name="optimal_moisture" id="optimal_moisture" @if($assortiment->optimal_moisture) value="{{ $assortiment->optimal_moisture}}" @endif><br>

    <label class="assortiment_label" for="processing">processing</label>
    <input type="text" size="30" name="processing" id="processing" @if($assortiment->processing) value="{{ $assortiment->processing}}" @endif><br>

    <label class="assortiment_label" for="ripeness_group">ripeness_group</label>
    <input type="text" size="30" name="ripeness_group" id="ripeness_group" @if($assortiment->ripeness_group) value="{{ $assortiment->ripeness_group}}" @endif><br>

    <label class="assortiment_label" for="sow_time">sow_time</label>
    <input type="text" size="30" name="sow_time" id="sow_time" @if($assortiment->sow_time) value="{{ $assortiment->sow_time}}" @endif><br>

    <label class="assortiment_label" for="details">details</label>
    <input  type="text" size="30" name="details" id="details" @if($assortiment->details) value="{{ $assortiment->details}}" @endif><br>

    <label class="assortiment_label" for="vegetation_period_days">vegetation_period_days</label>
    <input type="text" size="30" name="vegetation_period_days" id="vegetation_period_days" @if($assortiment->vegetation_period_days) value="{{ $assortiment->vegetation_period_days}}" @endif><br>

    <label class="assortiment_label" for="intensity">intensity</label>
    <input  type="text" size="30" name="intensity" id="intensity" @if($assortiment->intensity) value="{{ $assortiment->intensity}}" @endif><br>

    <label class="assortiment_label" for="herbicides_tolerance">herbicides_tolerance</label>
    <input type="text" size="30" name="herbicides_tolerance" id="herbicides_tolerance" @if($assortiment->herbicides_tolerance) value="{{ $assortiment->herbicides_tolerance}}" @endif><br>

    <label class="assortiment_label" for="oleic_acid_content">oleic_acid_content</label>
    <input  type="text" size="30" name="oleic_acid_content" id="oleic_acid_content" @if($assortiment->oleic_acid_content) value="{{ $assortiment->oleic_acid_content}}" @endif><br>

    <label class="assortiment_label" for="variety">variety</label>
    <input type="text" size="30" name="variety" id="variety" @if($assortiment->variety) value="{{ $assortiment->variety}}" @endif><br>

    <label class="assortiment_label" for="disinfectant">disinfectant</label>
    <input  type="text" size="30" name="disinfectant" id="disinfectant" @if($assortiment->disinfectant) value="{{ $assortiment->disinfectant}}" @endif><br>

    <label class="assortiment_label" for="origin">origin</label>
    <input  type="text" size="30" name="origin" id="origin" @if($assortiment->origin) value="{{ $assortiment->origin}}" @endif><br>

    <label class="assortiment_label" for="protein_content">protein_content</label>
    <input  type="text" size="30" name="protein_content" id="protein_content" @if($assortiment->protein_content) value="{{ $assortiment->protein_content}}" @endif><br>

    <label class="assortiment_label" for="group">group</label>
    <input type="text" size="30" name="group" id="group" @if($assortiment->group) value="{{ $assortiment->group}}" @endif><br>

    <label class="assortiment_label" for="active_substance">active_substance</label>
    <input type="text" size="30" name="active_substance" id="active_substance" @if($assortiment->active_substance) value="{{ $assortiment->active_substance}}" @endif><br>

    <label class="assortiment_label" for="cost_rate_hectare">cost_rate_hectare</label>
    <input type="text" size="30" name="cost_rate_hectare" id="cost_rate_hectare" @if($assortiment->cost_rate_hectare) value="{{ $assortiment->cost_rate_hectare}}" @endif><br>

    <input type="submit" class="margin-left-25 btn btn-success" value="Сохранить">
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">{{ $error }}</div>
    @endforeach
</form>

@include('footer')
