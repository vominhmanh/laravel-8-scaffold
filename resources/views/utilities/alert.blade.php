@if (session('success'))
    <div class="alert alert-success alert-dismissible alert-popup fade show" id="successAlert" role="alert">
        <strong> {{ session('success') }} </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
@if (session('danger'))
    <div class="alert alert-danger alert-dismissible alert-popup fade show" id="dangerAlert" role="alert">
        <strong> {{ session('danger') }} </strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
@endif
