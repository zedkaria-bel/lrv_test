@extends('layout')

@section('title')
    Activité journalière
@endsection


@section('content')
    @include('prods.post-header')
    <div class="zoom-backg w-100 h-100 d-flex justify-content-center align-items-center" style="display: none !important; z-index:99">
        <img id="img-zoom" src="" alt="zoomed-img" style="z-index:100" height="90%">
        <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="white" class="close-img m-5 fw-bolder bi bi-x-lg" viewBox="0 0 16 16">
            <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8 2.146 2.854Z"/>
        </svg>
    </div>
    <div class="content">
        <div class="container px-0">
            <div class="wil-comm d-flex flex-column my-5 col-4">
                <div class="wilaya-div">
                    <select class="form-select my-2" name="wilaya" id="wilaya" aria-label="Default select example" onchange="location: this.value;">
                        <option value="no-choice">----------</option>
                        @foreach ($wilayas as $wilaya)
                            <option value="/?category=diverse&">{{ $wilaya->label }}</option>
                        @endforeach
                    </select>
                    <small class="fst-italic wilaya-error" style="color: red">Veuillez choisir une wilaya.</small>
                </div>
                <div class="commune-div" style="display: none">
                    <select class="form-select" name="commune" id="commune">
                    </select>
                    <small class="fst-italic" style="color: red">Veuillez choisir une commune.</small>
                </div>
            </div>
            <div class="row">
                @if ($prods->count() < 1)
                    <p class="fs-3 text-center">Aucune donneé disponible.</p>
                @else
                <table id="prods-tb" class="table table-bordered display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th scope="col">Avatar</th>
                            <th scope="col">Unité</th>
                            <th scope="col">Ligne</th>
                            <th scope="col">Brute ( jour )</th>
                            <th scope="col">Date</th>
                            <th scope="col">Catégorie</th>
                            <th scope="col">User</th>
                            <th scope="col">Wilaya</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($prods as $prod)
                            <tr>
                                <td class="d-flex justify-content-center"> <img class="avatar rounded" height="30px" src="{{ asset('/images/'.$prod->img) }}" alt="image"> </td>
                                <td> {{$prod->unit->code}} </td>
                                <td>{{$prod->line}}</td>
                                <td>{{$prod->brute_j}}</td>
                                <td>{{ date('d/m/Y', strtotime($prod->date)) }}</td>
                                <td>{{$prod->category->category}}</td>
                                <td>{{$prod->user->name}}</td>
                                <td>{{$prod->wilaya->label}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                    {{-- @foreach ($prods as $prod)
                        <div class="col-sm-4 d-flex align-items-stretch">
                            <x-prod-card :prod=$prod/>
                        </div>
                    @endforeach --}}
                @endif
            </div>
        </div>
        {{-- {{ $prods->links() }} --}}
    </div>
@endsection

@section('jq')
    <script>
        $(document).ready( function () {
            var table = $('#prods-tb').DataTable();
        });

        $('.avatar').click(function (){
            $('#img-zoom').attr('src', $(this).attr('src'));
            $('.zoom-backg').show('slow');
        });

        $('.close-img').click(function (e) {
            $('#img-zoom').attr('src', '');
            $('.zoom-backg').hide('slow');
        });

        $('#from').change(function (e) {
            var from = $('#from').val();
            var url = '/?';
            if (from != '') {
                url = "/?from=" + from + "&{{http_build_query(request()->except('from', 'page'))}}";
            }
            window.location = url;
        });

        $('#to').change(function (e) {
            var from = $('#from').val().split("-");
            var dateFrom = new Date(from[0], from[1] - 1, from[2]);
            var to = $('#to').val();
            var dateTo = new Date(to.split("-")[0], to.split("-")[1] - 1, to.split("-")[2]);
            var url = '/?';
            if (dateFrom > dateTo) {
                $('.err-date').slideDown();
            }
            else{
                $('.err-date').slideUp();
                if (from != '') {
                    url = "/?to=" + to + "&{{http_build_query(request()->except('to', 'page'))}}";
                }
                window.location = url;
            }
        });

        $('#wilaya').change(function (e) {
            if ($('#wilaya').val() == 'no-choice') {
                $('.commune-div').slideToggle();
                $('.wilaya-error').html('Veuillez choisir une wilaya.');
            }
            else{
                if (!$('.commune-div').is(':visible')) {
                    $('.commune-div').slideToggle();
                    $('.wilaya-error').html('');
                }
                var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                $.ajax({
                    type: "POST",
                    url: "/get-communes",
                    data: {wilaya: $('#wilaya').val(), _token: CSRF_TOKEN},
                    dataType: "json",
                    success: function (response) {
                        $('#commune').html('');
                        $('#commune').append(response);
                    }
                });
            }
        });
    </script>
@endsection
