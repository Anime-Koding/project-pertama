<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>visitor profile</title>
</head>
<body>
    <div class="">
        masukan nama dan telp yang sama jika sudah pernah mengunjungi profile ini
    </div>
    <form method="POST" action="{{ route("visitor_store",$user->username) }}">
        @csrf
        <input type="text" name="nama" id="nama" placeholder="masukan nama">
        @error('nama')
            <p>{{ $message }}</p>
        @enderror

        <input type="text" name="whatapp" id="whatapp" placeholder="masukan nomor whatsapp">
        @error('telp')
            <p>{{ $message }}</p>
        @enderror
        <button type="submit">submit</button>
    </form>
</body>
</html>