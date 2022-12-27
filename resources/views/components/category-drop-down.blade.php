<x-dropdown onchange="location = this.value;">
    <x-slot name="all_options">
        Toutes les catégories
    </x-slot>
    @foreach ($categories as $cat)
        <option value="/?category={{ $cat->slug }}&{{http_build_query(request()->except('category', 'page'))}}" {{ (isset($currentCategory) && $currentCategory->is($cat))? 'selected': '' }}>{{ Str::ucfirst(Str::lower($cat->category)) }} </option>
    @endforeach
</x-dropdown>
