@php $sprite = 'images/feather-sprite.svg#' . $icon @endphp

<svg class="icon {{$class}}">
  <use xlink:href="@asset($sprite)"/>
</svg>
