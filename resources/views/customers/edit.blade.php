<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>CREATE</title>

    <!-- Fonts -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <!-- Styles -->

</head>
<body>
<div>
    <form name="edit" id="edit" method="post" action="{{url(("admin/Customers/$customer->id"))}}">
        @method('PUT')
        @csrf
        <input class="form-control" type="text" name="name" placeholder="Nome:" value="{{$customer->name ?? ''}}" required>
        <input class="form-control" type="email" name="email" placeholder="Email:" value="{{$customer->email ?? ''}}"required>
        <input class="form-control" type="datetime-local" name="birthdate" placeholder="Birthdate" value="{{$customer->birth ?? ''}}" required>
        <input  class="btn-primary" type="submit" value="Submit">
    </form>
</div>
</body>
</html>
