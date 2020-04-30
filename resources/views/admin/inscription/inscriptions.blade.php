@extends('layouts.app')

@section('title', "Inscriptions")

@section('content')
    <div class="container-fluid p-1 px-2">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('admin') }}">Dashboard</a></li>
                <li class="breadcrumb-item active" aria-current="page">Inscriptions</li>
            </ol>
        </nav>

        <h1 class="mb-2">Inscriptions</h1>

        <div class="sticky-top bg-light pt-1 px-1 rounded-bottom shadow-sm">
            <form method="get" action="{{ route('admin.inscriptions') }}">
                <div class="form-row">
                    <div class="col-md-1">
                        <input type="text" name="id" class="form-control @error('id') is-invalid @enderror" value="{{ $request->get('id') }}" placeholder="Id" />
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="societe" class="form-control @error('societe') is-invalid @enderror" value="{{ $request->get('societe') }}" placeholder="Société" />
                    </div>
                    <div class="col-md-3">
                        <select name="status" class="custom-select form-control @error('status') is-invalid @enderror">
                            <option value="">-- Choisir un status</option>
                            @foreach(array_keys($status) as $statut)
                            <option class="text-capitalize" value="{{ $statut }}" @if($statut == $request->get('status')) selected @endif>{{ $statut }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select name="attribution" class="custom-select form-control @error('attribution') is-invalid @enderror">
                            <option value="">-- Choisir un expert</option>
                            @foreach($userlist as $user)
                                <option value="{{ $user->id }}" @if($user->id == $request->get('attribution')) selected @endif>{{ $user->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-2">
                        <input type="text" name="cp" class="form-control @error('cp') is-invalid @enderror" value="{{ $request->get('cp') }}" placeholder="Code postal (ex : 95, 950001)" />
                    </div>
                    <div class="col-md-1">
                        <button type="submit" class="w-100 btn btn-primary"><i class="fas fa-search"></i></button>
                    </div>
                </div>

                <input type="hidden" name="sort" value="{{ $request->get('sort') }}" />
                <input type="hidden" name="direction" value="{{ $request->get('direction') }}" />
            </form>
            <div class="d-flex flex-row justify-content-center mt-1">
                <div class="mx-auto">{{ $inscriptionlist->appends($request->all())->links() }}</div>
            </div>
        </div>

        <table class="table table-striped">
            <thead>
            <tr>
                <th scope="col" class="text-nowrap">@sortablelink('id', '#')</th>
                <th scope="col">@sortablelink('created_at', 'Date')</th>
                <th scope="col">@sortablelink('societe', 'Société')</th>
                <th scope="col">@sortablelink('cp', 'CP')</th>
                <th scope="col">@sortablelink('ville', 'Ville')</th>
                <th scope="col">@sortablelink('user.name', 'Expert')</th>
                <th scope="col">@sortablelink('user.company', 'Agence')</th>
                <th scope="col">@sortablelink('user.city', 'Ville')</th>
                <th scope="col">Actions</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($inscriptionlist as $inscription)
                <tr>
                    <th scope="row" id="l{{ $inscription->id }}">{{ $inscription->id }}</th>
                    <td><span @if($inscription->created_at) data-toggle="tooltip" data-placement="top" title="{{ ucfirst($inscription->created_at->locale('fr_FR')->isoFormat('LLLL')) }}" @endif>{{ $inscription->created_at ? $inscription->created_at->diffForHumans() : '' }}</span></td>
                    @if($inscription->url)
                    <td class="text-uppercase"><a target="_blank" href="{{ $inscription->url }}">{{ $inscription->societe }}</a></td>
                    @else
                    <td class="text-uppercase">{{ $inscription->societe }}</td>
                    @endif
                    <td>{{ $inscription->cp }}</td>
                    <td>{{ $inscription->ville }}</td>
                    <td>{{ $inscription->user ? $inscription->user->name : '' }}</td>
                    <td>{{ $inscription->user ? $inscription->user->company : '' }}</td>
                    <td class="text-nowrap">{{ $inscription->user ? $inscription->user->city . ' (' . $inscription->user->department . ')' : '' }}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            @can('view', $inscription)
                                <a href="{{ route('admin.inscription', ['inscription' => $inscription]) }}" class="btn btn-secondary btn-sm"><i class="far fa-eye"></i></a>
                            @endcan
                            @can('notif', $inscription)
                                <a title="Notifier sur Slack"
                                   href="{{ route('admin.inscription.notif', ['inscription' => $inscription]) }}"
                                   class="btn btn-secondary btn-sm btn__action"
                                   data-method="post"
                                ><i class="fab fa-slack"></i></a>
                            @endcan
                            <span class="rounded-0 btn-sm text-nowrap btn-{{ $status[$inscription->status]['color'] }}">
                                {{ $inscription->status }}
                            </span>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
