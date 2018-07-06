@extends('frontend.layouts.app')

@section('content')
    <div class="row justify-content-center align-items-center mb-3">
        <div class="col col-sm-10 align-self-center">
            <div class="card">
                <div class="card-header">
                    <strong>

                    </strong>
                </div>
                <h1>{{ $listDetail->name }}</h1>
                @foreach ($contributors as $contributor)
                    <h3>{{ $contributor->user_name }}</h3>

                @endforeach
                <div class="card-body">
                    <div role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a href="#waiting" class="nav-link active" aria-controls="waiting" role="tab" data-toggle="tab"><b> Waiting </b></a>
                            </li>
                            <li class="nav-item">
                                <a href="#done" class="nav-link" aria-controls="done" role="tab" data-toggle="tab"><b> Done </b></a>
                            </li>
                        </ul>
                        <div class="card  border-light" style="width: 18rem;">
                            <div class="card-body ">
                                <a href="{{route('frontend.addItem', $listDetail->id)}}"><button type="button" class="btn btn-primary btn-lg btn-block">ADD ITEM</button></a>
                            </div>
                        </div>
                        <div class="card  border-light" style="width: 18rem;">
                            <div class="card-body ">
                                <a href="{{route('frontend.addContributor', $listDetail->id)}}"><button type="button" class="btn btn-danger btn-lg btn-block">ADD CONTRIBUTOR</button></a>
                            </div>
                        </div>
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active pt-3 " id="waiting" aria-labelledby="waiting-tab">
                                @foreach ($items as $item)
                                    @if ($item->status == "waiting")
                                    <div class="card" style="width: 18rem;">
                                        <div class="card-body ">
                                            <h5 class="card-title">{{$item->name}}</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">price : <b>{{$item->price}}$</b>  qte : <b>{{$item->qte}}</b></h6>
                                            <h7 class="card-subtitle mb-2 text-muted">Carrefour</h7>
                                            <img class="card-img" src="{{$item->img}}" alt="Card image">
                                        </div>
                                    </div>
                                    @endif
                                @endforeach
                            </div><!--tab panel profile-->
                            <div role="tabpanel" class="tab-pane fade show active pt-3 " id="done" aria-labelledby="done-tab">
                                @foreach ($items as $item)
                                    @if ($item->status == "done")
                                        <div class="card" style="width: 18rem;">
                                            <div class="card-body ">
                                                <h5 class="card-title">{{$item->name}}</h5>
                                                <h6 class="card-subtitle mb-2 text-muted">price : <b>{{$item->price}}$</b>  qte : <b>{{$item->qte}}</b></h6>
                                                <h7 class="card-subtitle mb-2 text-muted">Carrefour</h7>
                                                <img class="card-img" src="{{$item->img}}" alt="Card image">
                                            </div>
                                        </div>
                                    @endif
                                @endforeach
                            </div>


                        </div><!--tab content-->
                    </div><!--tab panel-->
                </div><!--card body-->
            </div><!-- card -->
        </div><!-- col-xs-12 -->
    </div><!-- row -->
@endsection
