<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>form tambah data user</h1>
    <a href="/user">back</a>
    <form action="/user/tambah_simpan" method="POST">

        {{ csrf_field() }}

        <label for="">username</label>
        <input type="text" name="username" placeholder="masukan username">
        <br>
        <label for="">nama</label>
        <input type="text" name="nama" placeholder="masukan nama">
        <br>
        <label for="">password</label>
        <input type="password" name="password" placeholder="masukan pass">
        <br>
        <label for="">level id</label>
        <input type="text" name="level_id" placeholder="masukan id level">
        <br><br>
        <input type="submit" class="btn btn-success" value="simpan">
    </form>
</body>
</html>