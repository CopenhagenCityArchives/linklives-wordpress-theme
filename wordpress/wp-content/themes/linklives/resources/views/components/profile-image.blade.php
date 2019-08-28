@if ( has_post_thumbnail($id))
  <img class="rounded-circle {{$class}}" width="{{$width ? $width : '48px'}}" height="{{$height ? $height : '48px'}}" src="{{get_the_post_thumbnail_url($id, 'profile-image-x1')}}" srcset="{{get_the_post_thumbnail_url($id, 'profile-image-x2')}} 2x"/>
@else
  @include('components.icon', ['icon' => 'user', 'class' => $class . ' profile-img'])
@endif
