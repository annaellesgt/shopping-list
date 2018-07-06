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
                                <a href="#profile" class="nav-link active" aria-controls="profile" role="tab" data-toggle="tab">Add new Contributor</a>
                            </li>
                        </ul>

                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade show active pt-3" id="profile" aria-labelledby="profile-tab">
                                {{ html()->form('POST', route('frontend.addContributor.send'))->open() }}
                                <div class="form-group">
                                    <label for="sel1">Email:</label>
                                    <select class="form-control" id="email" name="email">
                                        @foreach ($users as $user)
                                            <option value="{{$user->email}}">{{$user->email}}</option>
                                        @endforeach
                                    </select>
                                </div>


                                <input id="hiddenId" name="hiddenId" type="hidden" value="{{ $id }}">
                                {{ form_submit('Create'), array('class' => 'btn btn-primary float-right') }}

                                {{ html()->form()->close() }}
                            </div><!--tab panel profile-->



                        </div><!--tab content-->
                    </div><!--tab panel-->
                </div><!--card body-->
            </div><!-- card -->
        </div><!-- col-xs-12 -->
    </div><!-- row -->
@endsection
