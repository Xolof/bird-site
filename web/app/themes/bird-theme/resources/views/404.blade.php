@extends('layouts.app')

@section('content')
  @include('partials.page-header')

  @if (! have_posts())
    <x-alert type="warning" class="p-2 mb-1 rounded">
      {!! __('That page doesn\'t exist.', 'sage') !!}
    </x-alert>
    <img src="@asset('images/feeder.jpg')">

    <!-- {!! get_search_form(false) !!} -->
  @endif
@endsection
