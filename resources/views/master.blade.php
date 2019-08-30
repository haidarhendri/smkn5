<!DOCTYPE html>
<html>
  <head>
    <title>SMKN 5 Solo</title>
  </head>

  <body>
    <header>
      <h1>Laravel</h1>
      <nav>
        <a href="/toko"> BERANDA </a> | 
        <a href="/toko/about"> ABOUT </a> | 
        <a href="/toko/contact"> CONTACT </a>
      </nav>
    </header>

    <br>

    <h3>@yield('judul_halaman')</h3>
    @yield('content')

    <footer>
      <p>Footer page</p>
    </footer>

  </body>
</html>
