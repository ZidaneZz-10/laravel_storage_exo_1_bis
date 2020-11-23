<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Image Edit</title>
</head>

<body>

        <img src="{{asset('images/'.$image->src)}}" alt="" width="150px">
        <form action="/image/{{$image->id}}/update" method="post" enctype="multipart/form-data">
            @csrf
            <input type="file" name="image" id="">
            <button type="submit">Modifier</button>
        </form>
</body>
</html>