@extends('frontend.layouts.base')

@section('header')
    @include('frontend.parts.header')
@endsection

@section('content')
            <section class="sidebar">
                @section('left-column')
                @show
            </section>
            <section class="content">
                @section('right-column')
                @show
            </section>
@endsection