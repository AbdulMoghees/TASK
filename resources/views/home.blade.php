@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(count($errors)>0)
                @foreach($error->all()as$server)
                    <div class="alert alert-danger">{($error)}</div>
                @endforeach
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif


            <div class="card">
                <div class="card-header">Dashboard</div>
<div class="panel-body"></div>
                <div class="col-md-4"></div>

                <img src="" alt=""/>
                <div class="col-md-8"></div>



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
