@if (count($errors) > 0)
    @foreach ($errors->all() as $error)
    <div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        {{$error}}
      </div>
    @endforeach
@endif

@if (session('success'))
<div class="alert alert-success text-center alert-dismissible fade show" role="alert">
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    {{session('success')}} 
  </div>
@endif

@if (session('error'))
<div class="alert alert-danger text-center alert-dismissible fade show" role="alert">
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    A{{session('error')}}
  </div>
@endif