

<form method="GET" class="d-flex flex-row justify-content-center align-items-center rounded py-2 px-4" style="border: 1px solid {{ $slot }}">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="{{ $slot }}" class="bi bi-search me-1" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
    </svg>
    @if (request('category'))
        <input type="hidden" name="category" value="{{request('category')}}">
    @endif
    <input class="search-input ms-1 fs-5" type="search" name="search" placeholder="Search" aria-label="Search" value="{{ request('search') }}">
</form>


{{-- #6473a0 --}}
