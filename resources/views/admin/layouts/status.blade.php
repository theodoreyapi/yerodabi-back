@if ($errors->any())
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger rounded-pill alert-dismissible fade show">
            {{ $error }}
        </div>
    @endforeach
@endif
@if (session()->get('succes'))
    <div class="alert alert-success rounded-pill alert-dismissible fade show">
        {{ session()->get('succes') }}
    </div>
@endif
