{{--
  Template Name: Associeret partner-oversigt
--}}

@php get_posts( array('post_type' => 'associeret_partner') ) @endphp

@include('index')
