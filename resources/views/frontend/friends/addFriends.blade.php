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
                                <a href="#profile" class="nav-link active" aria-controls="profile" role="tab" data-toggle="tab"><b>Add One Friend</b></a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active pt-3" id="profile" aria-labelledby="profile-tab">
                                <form>
                                    <div class="form-group">
                                        <label for="inputType">Email</label>
                                        <input type="name" class="form-control" id="inputType" placeholder="Enter type here ... ">
                                    </div>
                                    <div class="form-group">
                                        <button type="button" class="btn btn-primary btn-block" data-toggle="modal" data-target="#myModal">CONFIRM</button>
                                    </div>
                                </form>
                                <!-- Modal -->
                                <div class="modal fade" id="myModal" role="dialog">
                                    <div class="modal-dialog">
                                    
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h4 class="modal-title">Success</h4>
                                        </div>
                                        <div class="modal-body">
                                        <p>You request has been sent.</p>
                                        </div>
                                        <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">OK</button>
                                        </div>
                                    </div>
                                    
                                    </div>
                                </div>

                        </div><!--tab content-->
                    </div><!--tab panel-->
                </div><!--card body-->
            </div><!-- card -->
        </div><!-- col-xs-12 -->
    </div><!-- row -->
@endsection
