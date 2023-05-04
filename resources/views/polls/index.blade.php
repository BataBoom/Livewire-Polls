@extends('layouts.testy')
@if (Route::currentRouteName() === 'premiumTimeline')
@section('title', 'Premium Feed')
@else
@section('title', 'Home')
@endif
@section('metaContent', url()->full())
@section('metaTitle', '10G')
@section('metaProperty', 'myMetaProperty')
@if (Route::currentRouteName() === 'premiumTimeline')
@section('navHeader', 'Navi+')
@else
@section('navHeader', 'Navi')
@endif
@section('toggleNav')
@section('rightColumn')
@section('content')
<livewire:forms.create-poll />
@endsection
