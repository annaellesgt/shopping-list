@extends('frontend.layouts.app')

@section('title', app_name() . ' | '.__('navs.general.home'))

@section('content')
    <div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-list"></i> My Lists
                </div>
                <div class="card-body">
                    <ul>
                        <li> Grocery List </li>
                        <li> Summer sales! </li>
                        <li> TO BUY: Friday's Party </li>
                    </ul>
                    <div>
                        <i class="fas fa-plus-circle"></i> Create new list
                    </div>
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->

    <!--<div class="row mb-4">
        <div class="col">
            <div class="card">
                <div class="card-header">
                    <i class="fas fa-list"></i> Friends' Lists
                </div>
                <div class="card-body">
                    <ul>
                        <li> Grocery List </li>
                        <li> Summer sales! </li>
                        <li> <i class="fas fa-portrait"></i> TO BUY: Friday's Party </li>
                    </ul>
                </div>
            </div><!--card-->
        <!--</div><!--col-->
    <!--</div><!--row-->
@endsection
