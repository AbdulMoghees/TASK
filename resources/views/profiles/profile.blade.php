@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(count($errors)>0)
                    @foreach($error->all()as$server)
                        <div class="alert alert-danger">{($error)}</div>
                    @endforeach
                @endif
                @if(session("status"))
                    <div class="alert alert-success">{{session("status")}}</div>
                @endif

                <div class="card">
                    <div class="card-header">Profile</div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                            <form method="POST" action="{{ url('/addprofile') }}">
                                @csrf
                                <strong>{{ $errors->first('name') }}</strong>

                            </form>
                            @endif

                    </div>

                </div>

                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Enter Name</label>

                    <div class="col-md-6">
                        <input id="name" type="password" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" required>

                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">Designation</label>

                    <div class="col-md-6">
                        <input id="desgnation" type="text" class="form-control{{ $errors->has('designation') ? ' is-invalid' : '' }}" name="designation" required>

                        @if ($errors->has('designation'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('designation') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                <div class="form-group row">
                    <label for="name" class="col-md-4 col-form-label text-md-right">profile_pic</label>
                    <div class="col-md-6">
                        <input id="profile_pic" type="file" class="form-control{{ $errors->has('profile_pic') ? ' is-invalid' : '' }}" name="name" required>

                        @if ($errors->has('profile_pic'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('profile_pic') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>


                <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('Add profile') }}
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
