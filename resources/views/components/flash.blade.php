

@if ( session()->has('success') )
    <div id="flash-msg" class="position-fixed py-3 px-4 m-4 rounded bottom-0 end-0 shadow">
        <div class="d-flex flex-row align-items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="#cddcc2" class="bi bi-check-circle-fill me-3" viewBox="0 0 16 16">
                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
            </svg>
            <p class="fs-3 fw-bold mb-0" style="color: white">{{ session('success') }}</p>
            <div id="closeFlashMsg" class="p-1 ms-3 rounded" style="background: #a3e99d">
                <svg xmlns="http://www.w3.org/2000/svg" width="45" height="45" fill="#319728" class="bi bi-x" viewBox="0 0 16 16">
                    <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                </svg>
            </div>
        </div>
    </div>
@endif
