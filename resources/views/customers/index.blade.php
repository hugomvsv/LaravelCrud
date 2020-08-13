<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->

</head>
<body>
<table class="table">
    <thead>



    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Email</th>
        <th scope="col">Birthdate</th>
        <th scope="col">Action</th>
    </tr>
    </thead>
    <tbody>
    <a href="{{url(("admin/Customers/create"))}}">
        <button>Create New</button></a>
    @foreach($customers as $customer)
        <tr>
            <th scope="row">{{$customer->id}}</th>
            <td>{{$customer->name}}</td>
            <td>{{$customer->email}}</td>
            <td>{{$customer->birth}}</td>
            <td>
                <a href="{{url(("admin/Customers/$customer->id"))}}">
                <button>View</button></a>
                <a href="{{url(("admin/Customers/$customer->id/edit"))}}">
                <button>Edit</button></a>
                <form action="{{url(("admin/Customers/$customer->id"))}}" method="post">
                    @csrf
                    <input type="hidden" name="_method" value="DELETE">
                        <button>Delete</button></a>
                </form>


            </td>
        </tr>

    @endforeach

    </tbody>
</table>
</body>
</html>
