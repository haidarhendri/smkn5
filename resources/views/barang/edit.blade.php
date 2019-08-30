<!DOCTYPE html>

<html>
  <body>

@foreach($barang as $brg)
    <form action="/barang/simpan" method="post">
      {{ csrf_field() }}

      <input type="hidden" name="id" value="{{ $brg->id }}"><br>
      Nama : <input type="text" name="nama" required="required" value="{{ $brg->nama }}"><br>
      Kategori : <input type="text" name="kategori" required="required" value="{{ $brg->kategori }}"><br>
      Jumlah : <input type="text" name="jumlah" required="required" value="{{ $brg->jumlah }}"><br>
      Harga : <input type="text" name="harga" required="required" value="{{ $brg->harga }}"><br>

      <input type="submit" value="KIRIM">
    </form>
@endforeach
  </body>
</html>