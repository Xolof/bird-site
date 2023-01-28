@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="default" class="p-2 mb-1 rounded">
      {!! __('Nothing found. Try to search for something else.', 'sage') !!}
    </x-alert>

    {!! get_search_form(false) !!}
  @endif

  @while(have_posts()) @php(the_post())
    @include('partials.content-search')
  @endwhile

  {!! get_the_posts_navigation() !!}
@endsection
