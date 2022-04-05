<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($posts as $post)
         <div>
             <h4>{{$post->id}} {{$post->emp_name}}</h4>
             <p>{{$post->salary}}</p>
             <p>{{$post->city}}</p>
             <hr>
         </div>
     @endforeach
</body>
</html>