
@extends('layouts.default')

@section('categoryForm')

    <div class="row">
        <div class="cols-sm-6">
            <div class="form-group">
                <strong>Name</strong>{{$category->name}}
                {!! Form::text('name', null, ['placeholder'=>'Enter Name', 'class'=>'form-control'])!!}
            </div>
        </div>
        <div class="cols-sm-6">
            <div class="form-group">
                <strong>Details</strong>
                {!! Form::textarea('details', null, ['placeholder'=>'Enter Description', 'class'=>'form-control'])!!}
            </div>
        </div>            
        <div class="cols-sm-6">
            <div class="form-group">
                <strong>Image</strong>
                {!! Form::file('image', null, ['class'=>'form-control'])!!}
            </div>
        </div>            
        <div class="cols-sm-6">
            <div class="form-group">
                {!! Form::submit('Submit', ['class'=>'btn btn-warning'])!!}
            </div>
        </div>        
    </div>
@endsection


@section('content')
    @include('category.header')
    
    @if(isset($action) && $action == 'create')
        
    {!! Form::open(['route'=>'category.store', 'files'=>true])!!}
        @yield('categoryForm')
    {!! Form::close() !!}
    
    @else
        
    {!! Form::model($category, ['files' => true, 'method'=>'patch','route'=>['category.update',$category->id]])!!}            
    <div class="row">
        <div class="cols-sm-6">
            <div class="form-group">
                <strong>Name</strong>{{$category->name}}
                {!! Form::text('name', null, ['placeholder'=>'Enter Name', 'class'=>'form-control'])!!}
            </div>
        </div>
        <div class="cols-sm-6">
            <div class="form-group">
                <strong>Details</strong>
                {!! Form::textarea('details', null, ['placeholder'=>'Enter Description', 'class'=>'form-control'])!!}
            </div>
        </div>            
        <div class="cols-sm-6">
            <div class="form-group">
                <strong>Image</strong>
                {{Html::image($category->image, '', ['width'=>200])}}<br>
                {!! Form::file('image', null, ['class'=>'form-control'])!!}
            </div>
        </div>            
        <div class="cols-sm-6">
            <div class="form-group">
                {!! Form::submit('Submit', ['class'=>'btn btn-warning'])!!}
            </div>
        </div>        
    </div>        
    {!! Form::close() !!}      
    
    @endif
    
@endsection

