<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm fixed-top">
    <div class="container-fluid" style="margin-left: 30px; margin-right: 10px;">
        <a class="navbar-brand fw-bold" href="#">
        <img src="image/logo/logo.png" alt="Bootstrap" width="50" height="50">    
        IoT-Productions Aktara Academy</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            {{$slot}}
        </div>
    </div>
</nav>