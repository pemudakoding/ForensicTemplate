@props([
    'name','id','label'
])

<div class="custom-control custom-checkbox">
    <x-inputs.input type="checkbox" :name="$name" class="custom-control-input" tabindex="3" :id="$id"/>
    <label for="{{$id}}" class="custom-control-label" >{{ $label }}</label>
</div>
