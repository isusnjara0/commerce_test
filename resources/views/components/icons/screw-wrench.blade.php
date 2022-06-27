@props(['size' => 5, 'color' => 'currentColor', 'class' => ''])
<svg xmlns="http://www.w3.org/2000/svg" {{ $attributes->merge(['class' => 'h-' . $size . ' w-' . $size . ' ' . $class]) }} viewBox="0 0 20 20" fill="{{ $color }}">
    <path d="m4.9727 0c-0.1676 0.0061386-0.33582 0.021962-0.50195 0.044892l-1.584 0.2186 3.3633 3.0644v2.918h-2.9199l-3.0664-3.361-0.21875 1.5829c-0.022944 0.16602-0.038779 0.33413-0.044922 0.50162v0.027326c0 2.7507 2.2475 4.9967 5 4.9967h0.00195c0.098613-2.775e-4 0.19615-0.0084044 0.29297-0.019518 1.2095-0.91735 2.3496-1.5401 3.0723-1.3468l1.6641-1.6629-0.39258-0.39232c0.17504-0.51327 0.35979-1.0283 0.36133-1.5732v-0.00195c0-2.7507-2.2475-4.9967-5-4.9967h-0.013672zm13.551 0-3.5 1.9987v1.9987l-5.6328 5.629c-2.0905-0.55913-7.6589 5.6462-8.3672 6.3629-0.7863 0.79575-1.1194 1.2634-1 1.9987 0.15102 0.93001 1.0459 1.8477 1.9766 1.9987 0.73573 0.11931 1.6155-0.58651 2.0234-0.99933 0.70825-0.71676 6.9252-6.274 6.3672-8.3616l5.6328-5.629h2l1.9766-3.4977zm-5.4922 9.9621-1.6641 1.6629c0.1411 0.5279-0.15295 1.2785-0.67969 2.1158l4.8164 4.8112 0.03711 0.02928s0.60002 0.46685 1.332 0.84904c0.36601 0.1911 0.76631 0.3709 1.207 0.45282 0.44072 0.08191 1.0277 0.05823 1.4512-0.36499 0.42351-0.42323 0.44721-1.0098 0.36523-1.4502-0.08197-0.44042-0.2619-0.84046-0.45312-1.2062-0.38245-0.73152-0.84961-1.3311-0.84961-1.3311l-0.0293-0.03708z"/>
</svg>