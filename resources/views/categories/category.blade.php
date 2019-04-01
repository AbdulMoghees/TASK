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
                    <div class="card-header">Category</div>

                    <form method="POST" action="{{ url('/add Category') }}">
                                @csrf
                                <strong>{{ $errors->first('category') }}</strong>
                        <div class="form-group row">
                    <label for="category" class="col-md-4 col-form-label text-md-right">Enter Category</label>

                    <div class="col-md-6">
                        <input id="category" type="text" class="form-control{{ $errors->has('category') ? ' is-invalid' : '' }}" name="category" required>

                        @if ($errors->has('category'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('category') }}</strong>
                                    </span>
                        @endif
                    </div>
                </div>
                        <div class="form-group row mb-0">
                    <div class="col-md-8 offset-md-4">
                        <button type="submit" class="btn btn-primary">
                            {{ __('add category') }}
                        </button>
                    </div>
                </div>
                </form>
                </div>
                </div>

        </div>
    </div>

@endsection
