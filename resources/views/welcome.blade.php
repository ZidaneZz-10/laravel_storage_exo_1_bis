<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach ($images as $image)
    <div>
        <img src="{{asset('images/'.$image->src)}}" alt="" width="150px">
        <a href="/image/{{$image->id}}/edit">Edit</a>
        <a href="/image/{{$image->id}}/download">Download</a>
    </div>
@endforeach
<form action="image/store" method="post" enctype="multipart/form-data">
        @csrf
        <input type="file" id="" name="image">
        <button type="submit">Add</button>
    </form>
</body>
</html>