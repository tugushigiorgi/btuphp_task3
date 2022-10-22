<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Home Page</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100&display=swap" rel="stylesheet">
    <link  href="./css/app.css" rel="stylesheet">

</head>
<body>

</body>


<div class="main_container" >
    <h1>Youtube vidoes</h1>
    @foreach($data as $item)
    <ul>

        <li>Title : <span>{{$item->title}}</span></li>
        <li>Author <span>{{$item->Author}}</span></li>
        <li><a href={{$item->Link}} target="_blank">Go to Link</a></li>
        <li>Likes <span>{{$item->Likes}}</span></li>
        <li>description <span>{{$item->description}}</span></li>

    </ul>
    @endforeach


</div>




</html>
