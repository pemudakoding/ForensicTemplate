@props(['to'])
<a href={{ $to }} {{ $attributes->merge(['class' => 'btn']) }}>
        {{$slot}}
</a>
