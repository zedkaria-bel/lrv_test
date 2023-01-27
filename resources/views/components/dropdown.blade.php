
@props(['all_options'])

<select {{ $attributes(['class' => 'form-select', 'aria-label' => 'Default select example']) }}>
    <option value="/?{{http_build_query(request()->except('category', 'wilaya', 'page'))}}"> {{ $all_options }} </option>
    {{ $slot }}
</select>
