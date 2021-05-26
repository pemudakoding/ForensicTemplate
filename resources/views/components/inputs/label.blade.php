@props(['value','inline'])

@if (!$inline)
<div class="d-block">
    <label {{ $attributes->merge(['class' => 'form-label']) }}>{{ $value }}</label>
</div>
@else
<label {{ $attributes->merge(['class' => 'form-label']) }}>{{ $value }}</label>
@endif
