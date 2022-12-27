@props(['prod'])


<div class="user-date mt-auto">
    <div class="user ms-4 text-end pt-1">
        <p class="mb-0">Ajouté par <a href="?user={{ $prod->user->username }}" class="username"><i>{{ $prod->user->name }}</i></a> </p>
    </div>
    <div class="time ms-4 text-end pt-1" style="color: #a3beda">
        <p class="mb-0"> <i>{{ $prod->created_at->diffForHumans() }} </i></p>
    </div>
</div>

