@extends('app')

@section('css')
    <link href="{{ asset('/css/components/slideshow.almost-flat.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/components/slidenav.almost-flat.min.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/components/dotnav.almost-flat.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="uk-grid uk-grid-collapse" style="margin: 0;">
        <div class="uk-width-1-1 uk-slidenav-position" data-uk-slideshow="{autoplay:true, animation: 'scale', kenburns:true}">
            <ul class="uk-slideshow uk-overlay-active">
                <li>
                    <img src="{{asset('images/1.jpg')}}">
                    <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-overlay-top">呵呵呵</div>
                </li>
                <li>
                    <img src="{{asset('images/2.jpg')}}">
                    <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-overlay-top">呵呵呵</div>
                </li>
                <li>
                    <img src="{{asset('images/3.jpg')}}">
                    <div class="uk-overlay-panel uk-overlay-background uk-overlay-fade uk-overlay-top">呵呵呵</div>
                </li>
            </ul>

            <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-previous" data-uk-slideshow-item="previous"></a>
            <a href="" class="uk-slidenav uk-slidenav-contrast uk-slidenav-next" data-uk-slideshow-item="next"></a>
            <ul class="uk-dotnav uk-dotnav-contrast uk-position-bottom uk-flex-center">
                <li data-uk-slideshow-item="0"><a href=""></a></li>
                <li data-uk-slideshow-item="1"><a href=""></a></li>
                <li data-uk-slideshow-item="2"><a href=""></a></li>
            </ul>
        </div>
    </div>
@endsection

@section('js')
    <script src="{{asset('js/components/slideshow.min.js')}}"></script>
@endsection