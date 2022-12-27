@props(['category'])


<a href="?category={{ $category->slug }}" target="_blank" class="mb-0 category d-flex align-self-center">
    <div class="p-2 ms-4 {{ $category->category == 'CONSERVE' ? 'cons' : 'diver'  }} rounded d-flex justify-content-center align-items-center">
        <p class="mb-0 fw-bolder"> {{ $category->category }} </p>
    </div>
</a>
