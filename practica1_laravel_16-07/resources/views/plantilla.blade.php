<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="/css/detalle.css">
    <title>
      @yield('titulo')
    </title>
  </head>
  <body>
    <header>
      <ul>
        <li>Home</li>
        <li>Nosotros</li>
      </ul>
    </header>
    <section>
      @yield('principal')
    </section>
    <footer> Copyright</footer>
  </body>
</html>
