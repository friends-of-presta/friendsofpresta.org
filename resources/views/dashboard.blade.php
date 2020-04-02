@extends('layouts.app')

@section('content')
<div class="container-fluid py-2">
    <div class="row justify-content-center">
        <div class="col">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a href="{{ route('register') }}" class="btn btn-primary">Register</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
