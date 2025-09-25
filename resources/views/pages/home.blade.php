@extends('template.app')
@section('body_class', 'home-page')
@section('title-page') Home @endsection

@section('meta-description', 'Welcome to Ossian Sportbook - Your premier destination for sports betting and live sports action. Experience the thrill of sports betting with our secure platform.')
@section('meta-keywords', 'sports betting, live sports, football betting, basketball betting, tennis betting, ossian sportbook')
@section('meta-robots', 'index, follow')

@section('og-title', 'Ossian Sportbook - Home')
@section('og-type', 'website')
@section('og-image', asset('images/og-home.jpg'))

@section('twitter-card', 'summary_large_image')
@section('twitter-image', asset('images/twitter-home.jpg'))
@section('twitter-site', '@ossian_sportbook')

@section('content')
	@include('components.flex-blade')
	@include('components.grid-blade')
	@include('components.side-bar')
@endsection
