@extends('frontend.layouts.app')

@section('content')
    <div class="row justify-content-center align-items-center mb-3">
        <div class="col col-sm-10 align-self-center">
            <div class="card">
                <div class="card-header">
                    <strong>

                    </strong>
                </div>

                <div class="card-body">
                    <div role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a href="#profile" class="nav-link active" aria-controls="profile" role="tab" data-toggle="tab"><b>MyList</b></a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active pt-3" id="profile" aria-labelledby="profile-tab">
                                <form>
                                    <div class="form-group">
                                        <label for="inputType">Type</label>
                                        <input type="name" class="form-control" id="inputType" placeholder="Enter type here ... ">
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">Item</label>
                                        <input type="name" class="form-control" id="inputItem" placeholder="Enter items here ... ">
                                    </div>
                                </form>
                            </div><!--tab panel profile-->
                            <div class="card" style="width: 18rem;">
                                <div class="card-body ">
                                    <h5 class="card-title">Banana</h5>
                                    <h6 class="card-subtitle mb-2 text-muted">price : <b>1.25$</b>  qte : <b>2</b></h6>
                                    <h7 class="card-subtitle mb-2 text-muted">Carrefour</h7>
                                    <img class="card-img" src="https://images-na.ssl-images-amazon.com/images/I/71gI-IUNUkL._SY355_.jpg" alt="Card image">
                                </div>
                            </div>


                        </div><!--tab content-->
                    </div><!--tab panel-->
                </div><!--card body-->
            </div><!-- card -->
        </div><!-- col-xs-12 -->
    </div><!-- row -->
@endsection
