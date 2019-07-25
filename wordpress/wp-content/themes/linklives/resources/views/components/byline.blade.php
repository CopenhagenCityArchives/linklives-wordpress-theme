@php $h = $headline ? $headline : 'h6' @endphp

<div class="byline align-items-center {{$flex ? $flex : 'd-flex'}}">

  @include('components.profile-image', ['id' => $id, 'class' => 'mr-3'])

  <div>
    <div class="light">
      {{ get_field('members_title', $id) ? get_field('members_title', $id) : pll__('Medlem') }}
    </div>

    <{{$h}}>{{ get_the_title( $id ) }}</{{$h}}>
  </div>

</div>
