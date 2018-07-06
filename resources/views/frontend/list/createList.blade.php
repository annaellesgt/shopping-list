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
                                {{ html()->form('POST', route('frontend.createList.send'))->open() }}
                                    <div class="form-group">
                                        {{ html()->label('Name')->for('inputName') }}

                                        {{ html()->text('inputName')
                                            ->class('form-control')
                                            ->placeholder('Enter name')
                                            ->required() }}
                                        <small id="nameHelp" class="form-text text-muted">This name will be use to share your list.</small>
                                    </div>
                                    <div class="form-group">
                                        {{ html()->label('Description')->for('inputDescription') }}

                                        {{ html()->text('inputDescription')
                                            ->class('form-control')
                                            ->placeholder('Description')
                                            ->required() }}
                                    </div>
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
