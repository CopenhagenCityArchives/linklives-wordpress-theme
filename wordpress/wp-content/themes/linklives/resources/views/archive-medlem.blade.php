{{--
  Template Name: Medlem-oversigt
--}}

@php query_posts( array('post_type' => 'medlem') ) @endphp

@include('index', ['category' => true])
