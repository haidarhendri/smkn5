<!DOCTYPE html>

<html>
  <body>

    <form action="/barang/kirim_data" method="post">
      {{ csrf_field() }}

      Nama : <input type="text" name="nama" required="required"><br>
      Kategori : <input type="text" name="kategori" required="required"><br>
      Jumlah : <input type="text" name="jumlah" required="required"><br>
      Harga : <input type="text" name="harga" required="required"><br>

      <input type="submit" value="KIRIM">
    </form>

  </body>
</html>