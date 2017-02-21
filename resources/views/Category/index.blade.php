
@extends('layouts.default')

@section('content')
@include('category.header')

<h2>Categories</h2>
<table class="table table-bordered">
<tr>
    <td width="50px">No</td>
    <td>Name</td>
    <td>Details</td>
    <td width="250px">Image</td>
    <td width="250px">Action</td>
</tr>

@foreach($categories as $category)
<tr>
    <td>{{$i++}}</td>
    <td>{{$category->name}}</td>
    <td>{{$category->details}}</td>
    <td>
    {{ Html::image($category->image,'',['width'=>200,])}}
    </td>
    <td>
    <a class="btn btn-primary" href="{{route('category.edit', $category->id)}}">Edit</a>
        {{ Form::open(['method'=>'delete', 'route'=>['category.destroy', $category->id],'style'=>'display:inline']) }}
        {{ Form::submit('Delete', ['class'=>'btn btn-danger']) }}
        {{ Form::close() }}
    </td>
</tr>
@endforeach
</table>
@endsection