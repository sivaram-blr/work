@if($success = Session::get('success'))
    <div class="alert alert-success">{{ $success}}</div>
@endif


@if($warning = Session::get('warning'))
    <div class="alert alert-warning">{{ $warning}}</div>
@endif

@if($error = Session::get('error'))
    <div class="alert alert-danger">{{ $error}}</div>
@endif

@if(count($errors) > 0)
    <div class="alert alert-danger">
        <h5>Oops! There are issues with input.</h6>
        <ul>
        @foreach($errors->all() as $error)
        <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
@endif