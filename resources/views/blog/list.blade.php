<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>List</title>
</head>
<body>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">title</th>
            <th scope="col">Defination</th>
            <th scope="col">Edit</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($data as $item)
          <tr>
            <th>{{$item['id']}}</th>
            <th>{{$item['title']}}</th>
            <th>{{$item['Defination']}}</th>
            {{-- <th><a href="{{route('blog.edit')}}"><button type="submit" class="btn btn-primary">Update</button></a></th> --}}
            {{-- <th><a href="{{route("blog.edit,['date'=>$item->id]")}}"><button type="submit" class="btn btn-primary">Delete</button></a></th> --}}
          </tr>
            @endforeach
        </tbody>
      </table>
</body>
</html>