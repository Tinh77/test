<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Danh sách chung cư</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css"
          integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/list.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
</head>
<body>
<nav>
    <ul class="menu">
        <li><a href="/admin/apartment">Home</a></li>
        <li><a href="/admin/apartment">Best Home</a></li>
        <li><a href="/admin/apartment">Life style</a></li>
        <li><a href="/admin/apartment">About us</a></li>
        <li><a href="/admin/apartment">Contact us</a></li>
    </ul>
</nav>
<div class="container">
    <div class="card">
        <div class="card-body">
            <div class="row">
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Image</th>
                        <th scope="col">Name</th>
                        <th scope="col">Price</th>
                        <th scope="col">General Information</th>
                        <th scope="col">Details</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($list as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>
                                <div class="card"
                                     style="background-image: url('{{$item->image}}'); background-size: cover; width: 77px; height: 60px">
                                </div>
                            </td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->price}}</td>
                            <td>{{$item->general_information}}</td>
                            <td>{{$item->details}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row float-right mr-2">
                {{$list->appends($_GET)->links()}}
            </div>
        </div>
    </div>
</div>
</body>
</html>