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
                        @foreach ($lists as $list)
                            <li><a href="{{route('frontend.detailList', $list->id)}}"> {{$list->name}} </a></li>
                        @endforeach
                    </ul>
                    <div>
                        <a href="{{route('frontend.createList')}}"><i class="fas fa-plus-circle"></i> Create new list</a>
                    </div>
                </div>
            </div><!--card-->
        </div><!--col-->
    </div><!--row-->
@endsection
