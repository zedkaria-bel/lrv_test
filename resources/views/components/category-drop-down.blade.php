<x-dropdown class="mx-2" onchange="location = this.value;">
    <x-slot name="all_options">
        Toutes les catégories
    </x-slot>
    @foreach ($categories as $cat)
        <option value="/?category={{ $cat->slug }}&{{http_build_query(request()->except('category', 'page'))}}" {{ (isset($currentCategory) && $currentCategory->is($cat))? 'selected': '' }}>{{ Str::ucfirst(Str::lower($cat->category)) }} </option>
    @endforeach
</x-dropdown>
<x-dropdown class="mx-2" onchange="location = this.value;">
    <x-slot name="all_options">
        Toutes les wilayas
    </x-slot>
    @foreach ($wilayas as $wil)
        <option value="/?wilaya={{ $wil->id }}&{{http_build_query(request()->except('wilaya', 'page'))}}" {{ (isset($currentWilaya) && $currentWilaya->is($wil))? 'selected': '' }}>{{ Str::ucfirst(Str::lower($wil->label)) }} </option>
    @endforeach
</x-dropdown>
