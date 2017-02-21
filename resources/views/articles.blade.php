<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
    @if(isset($action) && $action == 'view')
    <table >
    <tr>
        <td>{{$record->id}}</td>
        <td>{{$record->title}}</td>
        <td>{{$record->description}}</td>
        <td>{{$record->image}}</td>
    </tr>
    </table>
    <a href="{{url('articles/')}}">Back</a> 
    @elseif(isset($action) && $action == 'edit')
    <form method="post">
    <input type="hidden" name="_method" value="put">
    <table >
    <tr>
        <td>Title: <br><input type="text" name="title" value="{{$record->title}}"></td>
    </tr>
    <tr>
        <td>Description: <br><textarea name="description">{{$record->description}}</textarea></td>
    </tr>
    <tr>
        <td>Picture:<br>{{$record->image}}<br>
        <input type="file" name="image"></td>
    </tr>
    <tr>
        <td>
        <input type="submit" name="submit" value="Submit"></td>
    </tr>    
    </table>
    </form>
    <a href="{{url('articles/')}}">Back</a> 
    
    @else
    <table >
    @foreach($records as $record)
    <tr>
        <td>{{$record->id}}</td>
        <td>{{$record->title}}</td>
        <td>{{$record->image}}</td>
        <td><a href="{{url('articles/'.$record->id)}}">View</a> | <a href="{{url('articles/'.$record->id.'/edit')}}">Edit</a> |
        <a href="{{url('articles/'.$record->id)}}">Delete</a> </td>
    </tr>
    @endforeach
    </table>
        
    @endif
    </body>
</html>
