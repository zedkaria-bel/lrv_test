

<div class="d-flex flex-column justify-content-center align-items-center mb-5">
    <div class="d-flex flex-column justify-content-center align-items-center w-100 curved-background">
        <div class="d-flex flex-row justify-content-center align-items-center">
            <img src="{{ url('/images/new-year.png') }}" width="3%" height="3%" alt="new-year">
            <p class="fs-2 ms-4 my-0 mb-3" style="color: #434343">Nouvelle année, nouveaux challenges !</p>
        </div>
        <div class="search mb-3">
            <x-search-bar>
                #8b9ccc
            </x-search-bar>
        </div>
    </div>
    <div class="err-date rounded px-4 py-2 col-9 fw-bold mt-2 fs-5" style="background: #f5d1d1; color: #9f3333; display: none;">
        Veuillez choisir une date ultérieur.
    </div>
    <div class="filters d-flex flex-row mt-3 col-9 align-items-center">
        <x-category-drop-down/>
        <p class="mb-0 text-center">DU</p>
        <input type="date" class="form-control mx-2" name="from" id="from" value="{{$currentDateFrom}}"/>
        <p class="mb-0 text-center">AU</p>
        <input type="date" class="form-control mx-2" name="to" id="to" value="{{$currentDateTo}}" {{ $currentDateFrom == ''? 'disabled' : '' }} />
    </div>
</div>
