<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    ***{{$cnt}}***
    @foreach($lists as $name)
        <div>{{$name->name}}</div>
    @endforeach

    <a href="{{$export}}" style="display: block; margin-top:300px; color: red;">CSV Export</a>

    <form action="{{$import}}" style="margin-top: 100px" method="POST" enctype="multipart/form-data">
        @csrf
        <p class="mt-5"><input type="file" name="txtFile"></p>
        <button>CSV import</button>
    </form>


</body>
</html>