@extends('layouts.app')

@section('content')
    <div class="container-fluid p-1 px-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </nav>

        <h1 class="mb-2">Dashboard</h1>

        <div class="row">
            <div class="col-4">
                <div class="card">
                    <div class="card-header">Inscriptions #ecommercesolidaire</div>
                    <div class="card-body">
                        <div class="display-2 text-center">{{ $inscriptiontotal }}</div>
                    </div>
                    <div class="card-footer"><a href="{{ route('admin.inscriptions') }}" class="card-link">Listing des inscriptions</a></div>
                </div>
            </div>
        </div>
    </div>
@endsection
