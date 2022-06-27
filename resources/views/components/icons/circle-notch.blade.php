@props(['size' => 5, 'color' => 'currentColor', 'class' => ''])
<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'h-' . $size . ' w-' . $size . ' ' . $class]) }} viewBox="0 0 48 48" fill="{{ $color }}">
    <path d="m40.971 7.0293-3.5371 3.5371a19 19 0 0 1 5.4961 13.363 19 19 0 0 1-19 19 19 19 0 0 1-19-19 19 19 0 0 1 5.5645-13.436l-3.4336-3.4336a24 24 0 0 0-7.0605 16.939 24 24 0 0 0 24 24 24 24 0 0 0 24-24 24 24 0 0 0-7.0293-16.971z" stroke-dashoffset="52.913" stroke-linecap="round"/>
</svg>
