@extends('front.layouts.app')

@section('content')

    @include('front.components.header')

    <!---CONTENT START
						==================================-->
    <div id="content" class="content-wrapper clearfix">
        
      @include('front.components.slider')

      @include('front.components.about')

      @include('front.components.service')

      @include('front.components.partenaire')

      @include('front.components.suivi')

    </div>
    <!--- CONTENT END -->

    @include('front.components.footer')

@endsection
