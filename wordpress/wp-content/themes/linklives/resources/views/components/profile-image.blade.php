@if ( has_post_thumbnail($id))
  @php $photographer = get_field('photographer', get_post_thumbnail_id($id)) @endphp
  <img class="rounded-circle {{$class}}" width="{{isset($width) ? $width : '48px'}}" height="{{isset($height) ? $height : '48px'}}" src="{{get_the_post_thumbnail_url($id, 'profile-image-x1')}}" srcset="{{get_the_post_thumbnail_url($id, 'profile-image-x2')}} 2x" data-toggle="tooltip" data-placement="top" title="{{ $photographer ? pll__('Fotograf') . ' ' . $photographer : '' }}" />
@else
  @include('components.icon', ['icon' => 'user', 'class' => $class . ' profile-img'])
@endif
