<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Üye Kaydı</title>
</head>
<body>
<div style="background-color:red">
    @foreach($errors->all() as $error)
        <li>{{$error}}</li>
    @endforeach
</div>
<form method="post" action="{{route("kayit.post")}}">
    @csrf
    <label>Ad Soyad</label>
    <input type="text" name="ad" value="{{old("ad")}}"/><br>
    <label>Kullanıcı Adı</label>
    <input type="text" name="kullanici_adi" value="{{old("kullanici_adi")}}"/><br>
    <label>E-mail Adresi</label>
    <input type="email" name="email" value="{{old("email")}}"/><br>
    <label>Şifre</label>
    <input type="password" name="sifre"/><br>
    <label>Şifre Tekrar</label>
    <input type="password" name="sifre_confirmation"/><br>
    <button type="submit">Kayıt Ol</button>
</form>
</body>
</html>
