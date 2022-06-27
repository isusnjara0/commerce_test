@props(['size' => 5, 'color' => 'currentColor', 'class' => ''])
<svg version="1.1" viewBox="0 0 48 48" xmlns="http://www.w3.org/2000/svg"  {{ $attributes->merge(['class' => 'h-' . $size . ' w-' . $size . ' ' . $class]) }} fill="{{ $color }}">
    <g stroke="#000" stroke-dashoffset="52.913" stroke-linecap="round" stroke-linejoin="round">
     <g fill="#f00">
      <path d="M 29.5,12 A 5.5,11.5 0 0 1 24,23.5 5.5,11.5 0 0 1 18.5,12 5.5,11.5 0 0 1 24,0.5 5.5,11.5 0 0 1 29.5,12 Z"/>
      <path d="m32.73 15.588a5.5 11.5 30 0 1-10.513 7.2093 5.5 11.5 30 0 1 0.98686-12.709 5.5 11.5 30 0 1 10.513-7.2093 5.5 11.5 30 0 1-0.98686 12.709z"/>
      <path d="m15.204 15.588a11.5 5.5 60 0 0 10.513 7.2093 11.5 5.5 60 0 0-0.98686-12.709 11.5 5.5 60 0 0-10.513-7.2093 11.5 5.5 60 0 0 0.98686 12.709z"/>
     </g>
     <g fill="#008000">
      <path d="m23.901 23.982c0.76564 0 1.382 0.63847 1.382 1.4315v20.631c0 0.79308-0.61638 1.4315-1.382 1.4315-0.76564 0-1.382-0.63847-1.382-1.4315v-20.631c0-0.79308 0.61638-1.4315 1.382-1.4315z"/>
      <path d="m35.588 37.73a5.5 11.5 60 0 1-12.709 0.98686 5.5 11.5 60 0 1 7.2093-10.513 5.5 11.5 60 0 1 12.709-0.98686 5.5 11.5 60 0 1-7.2093 10.513z"/>
      <path d="m12.088 37.73a11.5 5.5 30 0 0 12.709 0.98686 11.5 5.5 30 0 0-7.2093-10.513 11.5 5.5 30 0 0-12.709-0.98686 11.5 5.5 30 0 0 7.2093 10.513z"/>
     </g>
    </g>
</svg>