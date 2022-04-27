<div class="container">
    <div class="row justify-content-center my-5">
        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <div>
                {{ $logo }}
            </div>
            <div class="card mb-3">
                <div class="card-body">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>