{{--
  Template Name: Fond-oversigt
--}}

@php query_posts( array('post_type' => 'fond') ) @endphp

@include('index')
