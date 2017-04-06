@if (Session::has('error'))
    <div class="alert alert-danger" style="text-align: center; margin-top: 15px;">
        {{ Session::get('error') }}
    </div>
@endif

@if (Session::has('success'))
    <div class="alert alert-success" style="text-align: center; margin-top: 15px;">
        {{ Session::get('success') }}
    </div>
@endif
