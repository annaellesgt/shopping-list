
@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.general.home'))

@section('content')
    <div class="row mb-4">

        <div class="row mb-12">
            <div class="map" style=" height: 600px;
    width: 600px;"></div>

        </div>
        </div><!--col-->
    </div>
<!--row-->
@endsection
