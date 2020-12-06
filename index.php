<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Website #1 | SUSANTOKUN</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>

  <header class="header">
    <h1>Website #1</h1>
    <p>Saat ini saya sedang belajar membuat website sederhana menggunakan PHP dan MySQL</p>
  </header>

  <nav class="navbar">
    <ul>
      <li class="utama"><a href="/web">Beranda</a></li>
      <li class="utama"><a href="index.php?web=form">Input Data</a></li>
      <li class="utama"><a href="index.php?web=view">Lihat Data</a></li>
      <li class="utama"><a href="#">Galery</a>
        <ul>
          <li><a href="">Kegiatan</a></li>
          <li><a href="">Foto Tampanku</a></li>
        </ul>
      </li>
      <li class="utama logout"><a href="#">Logout</a></li>
    </ul>
  </nav>

  <main class="main">

    <div class="content">
      <h2>TITLE 1</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio incidunt at doloremque reiciendis ea voluptas
        placeat architecto sequi! Corporis, doloribus, vero natus non magnam eligendi quisquam accusantium placeat
        tempora in provident! Possimus hic aperiam quo, modi dolorem et voluptatum, numquam, esse libero autem suscipit.
        Suscipit veniam iure magni doloremque numquam.</p>
      <br>
      <h2>TITLE 2</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Optio incidunt at doloremque reiciendis ea voluptas
        placeat architecto sequi! Corporis, doloribus, vero natus non magnam eligendi quisquam accusantium placeat
        tempora in provident! Possimus hic aperiam quo, modi dolorem et voluptatum, numquam, esse libero autem suscipit.
        Suscipit veniam iure magni doloremque numquam.</p>
    </div>
    
    <aside class="sidebar">
      <h2>Tentang</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus modi fugit repellendus ab alias
        blanditiis dignissimos ea provident, expedita porro.</p>
      <br>
      <h2>Berita Terkini</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus modi fugit repellendus ab alias
        blanditiis dignissimos ea provident, expedita porro.</p>
    </aside>
  </main>

  <footer class="footer">
    <p>Copyright &copy 2017 SUSANTOKUN</p>
  </footer>

</body>

</html>