<!DOCTYPE html>

<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>

  <body>

  <br>

  Cari Nama : <br>
  <form action='barang/cari' method='GET'>
    <input type='text' name='search' value="{{ old('search') }}">
    <input type='submit' value='CARI'>
  </form>

  <br>

    <a href="barang/tambah"> + ADD </a>

    <table border='1'>
      <tr>
        <th>Nama</th>
        <th>Kategori</th>
        <th>Jumlah</th>
        <th>Harga</th>
      </tr>

      @foreach($barang as $brg)

      <tr>
        <td>{{ $brg->nama }}</td>
        <td>{{ $brg->kategori }}</td>
        <td>{{ $brg->jumlah }}</td>
        <td>{{ $brg->harga }}</td>
        <td>
          <a href="/barang/edit/{{ $brg->id }}"> Edit </a>
          <a href="/barang/hapus/{{ $brg->id }}"> Hapus </a>
        </td>
      </tr>

      @endforeach

    </table>

    <br>

    {{ $barang->links() }}

  </body>
</html>