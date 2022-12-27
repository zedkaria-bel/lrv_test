@extends('layout')

@section('title')
    Activité journalière
@endsection


@section('content')
    @include('prods.post-header')
    <div class="content">
        <div class="container px-0">
            <div class="row">
                @if ($prods->count() < 1)
                    <p class="fs-3 text-center">Aucune donneé disponible.</p>
                @else
                    @foreach ($prods as $prod)
                        <div class="col-sm-4 d-flex align-items-stretch">
                            <x-prod-card :prod=$prod/>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
        {{ $prods->links() }}
    </div>
@endsection
