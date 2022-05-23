@extends('layouts.app')

@section('content')
  @include('sections.landing-page.headline')
  @include('sections.landing-page.statistics')
  @include('sections.landing-page.courses')
  @include('sections.landing-page.benefits')
  @include('sections.landing-page.application')
  <x-testimonials />
  @include('sections.landing-page.cta')
@endsection