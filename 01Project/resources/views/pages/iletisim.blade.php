<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>İletişim</title>
</head>
<body>
<h1>İletişim</h1>
<form method="post" action="{{route("iletisim.post")}}">
    @csrf
    <label>Ad Soyad</label>
    <input type="text" name="name"/><br>
    <label>E-mail Adresi</label>
    <input type="email" name="mail"/><br>
    <label>İletişim Sebebi</label>
    <select name="subject">
        <option>İş Teklifi</option>
        <option>Destek</option>
    </select><br>
    <label>Mesajınız</label>
    <textarea name="message" rows="3"></textarea>
    <button type="submit">Gönder</button>
</form>

</body>
</html>
