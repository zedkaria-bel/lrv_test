@extends('layout')

@section('title')
    Détails de l'activité
@endsection


@section('content')
<div class="content my-5">
    <div class="d-flex flex-row">
        <div class="col d-flex flex-row align-items-center">
            <div class="d-flex flex-column">
            <h1 class="fw-bolder mb-0" style="font-size: 5.5rem">
                <a href="/prods/{{ $prod->slug }}">{{ $prod->unit->code }}</a>
            </h1>
            </div>
        </div>
        <div class="col-10 details">
            <div class="d-flex flex-column">
            <div class="d-flex flex-row justify-content-between align-items-center mb-4">
                <a class="fw-bold" style="color: #3263d6" href="/">< Retourner aux productions</a>
                <x-category-button :category="$prod->category"/>
            </div>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th scope="col">Ligne</th>
                    <th scope="col">Brute au jour</th>
                    <th scope="col">Conforme au jour</th>
                    <th scope="col">Rebut au jour</th>
                    <th scope="col">Brute au mois</th>
                    <th scope="col">Conforme au mois</th>
                    <th scope="col">Rebut au mois</th>
                    <th scope="col">Date</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td> {{ $prod->line }} </td>
                    <td>{{ $prod->brute_j }}</td>
                    <td>{{ $prod->conforme_j }}</td>
                    <td>{{ $prod->rebut_j }}</td>
                    <td>{{ $prod->brute_m }}</td>
                    <td>{{ $prod->conforme_m }}</td>
                    <td>{{ $prod->rebut_m }}</td>
                    <td>{{ $prod->date }}</td>
                </tr>
                </tbody>
            </table>
            </div>
            <x-prod-user-date :prod=$prod/>
        </div>
    </div>
</div>
@endsection
