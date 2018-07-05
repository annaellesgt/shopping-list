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
                                <a href="#profile" class="nav-link active" aria-controls="profile" role="tab" data-toggle="tab">Create New List</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active pt-3" id="profile" aria-labelledby="profile-tab">
                                <form>
                                    <div class="form-group">
                                        <label for="inputName">Name</label>
                                        <input type="name" class="form-control" id="inputName" aria-describedby="nameHelp" placeholder="Enter name">
                                        <small id="nameHelp" class="form-text text-muted">This name will be use to share your list.</small>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputDescription">Description</label>
                                        <textarea  type="text" class="form-control" id="inputDescription" placeholder="Description"> </textarea>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Create</button>
                                </form>
                            </div><!--tab panel profile-->



                        </div><!--tab content-->
                    </div><!--tab panel-->
                </div><!--card body-->
            </div><!-- card -->
        </div><!-- col-xs-12 -->
    </div><!-- row -->
@endsection
