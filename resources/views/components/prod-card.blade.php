@props(['prod'])

<article class="p-3 prod-card rounded d-flex flex-column mb-4">
    <div class="d-flex flex-row justify-content-between mb-3">
        <h1 class="fw-bolder mb-0 unit">
            <a href="/prods/{{ $prod->slug }}">{{ $prod->unit->code }}</a>
        </h1>
        <x-category-button :category="$prod->category"/>
    </div>
    <div class="mb-3"> Ligne : {{ $prod->line }}, Conforme au jour : {{ $prod->conforme_j }}, Rebut au jour : {{ $prod->rebut_j }}, Conforme au mois : {{ $prod->conforme_m }}, Rebut au mois : {{ $prod->rebut_m }}, date : {{ $prod->date }}. </div>
    <x-prod-user-date :prod=$prod/>
</article>
