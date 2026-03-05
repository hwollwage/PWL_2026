<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>form ubah data user</h1>
    <a href="/user">kembali</a> <br><br>

    <form action="/user/ubah_simpan/{{ $data->user_id }}" method="POST">
        
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <label for="">username</label>
        <input type="text" name="username" value="{{ $data->username }}" placeholder="masukan username">
        <br>
        <label for="">nama</label>
        <input type="text" name="nama" value="{{ $data->nama }}" placeholder="masukan nama">
        <br>
        <label for="">password</label>
        <input type="password" name="password" placeholder="masukan pass">
        <br>
        <label for="">level id</label>
        <input type="text" name="level_id" value="{{ $data->level_id }}" placeholder="masukan id level">
        <br><br>
        <input type="submit" class="btn btn-success" value="ubah">

    </form>
</body>
</html>