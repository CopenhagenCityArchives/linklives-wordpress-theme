{{--
  Template Name: Associeret partner-oversigt
--}}

@php query_posts( array('post_type' => 'associeret_partner') ) @endphp

@include('index')
