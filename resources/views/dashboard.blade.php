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

                    <div class="row">
                        <!-- Icon Cards-->
                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                            <div class="bg-light">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-4 bg-dark"></div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-8 align-items-end">
                                        <h4>Employee</h4>
                                        <h2>20</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                            <div class="inforide">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-4 bg-dark"></div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-8">
                                        <h4>Clients</h4>
                                        <h2>120</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-4 col-sm-6 col-12 mb-2 mt-4">
                            <div class="inforide">
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-4 col-4 bg-dark"></div>
                                    <div class="col-lg-9 col-md-8 col-sm-8 col-8">
                                        <h4>Jobs</h4>
                                        <h2>50</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
