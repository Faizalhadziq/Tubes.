<?php 
require 'functions.php';
$berita = query("SELECT * FROM berita");
?>
<!DOCTYPE html>
<html>
  <head>
    <title></title>
    <link rel="stylesheet" href="css/dashboard.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>

  <body>
    <div id="mySidenav" class="sidenav">
      <p class="logo"><span>F</span>-Admin</p>
      <a class="icon-a"
        ><i class="fa fa-dashboard icons"></i> &nbsp;&nbsp;Dashboard</a
      >
      <a href="#" class="icon-a"
        ><i class="fa fa-list icons"></i> &nbsp;&nbsp;Projects</a
      >
      <a href="#" class="icon-a"
        ><i class="fa fa-user icons"></i> &nbsp;&nbsp;Accounts</a
      >
    </div>
    <div class="main">
      <div class="head">
        <div class="col-div-6">
          <span class="nav">&#9776; Dashboard</span>
          <span class="nav2">&#9776; Dashboard</span>
        </div>

        <div class="title">
            <h1>Selamat Datang</h1>
        </div>

        <div class="table-data">
    <table>
      <thead>
    <tr>
            <td>No.</td>
            <td>Judul</td>
            <td>Deskripsi</td>
            <td>Gambar</td>
            <td>Aksi</td>
    </tr>
  </thead>
  <tbody>

    <tr>
    <?php $i = 1; ?>
        <?php foreach($berita as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $row["judul"];?></td>
            <td><?= $row["deskripsi"];?></td>     
            <td><img src="img/<?php echo $row["gambar"]; ?>" width="300"></td>
            <td>
                <a href="">Ubah</a> |
                <a href="">Hapus</a>
            </td>
        </tr>
       <?php  $i++; ?>
            <?php endforeach; ?>
    </tr>
  </tbody>

    </table>
  </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

        $(".nav").click(function(){
          $("#mySidenav").css('width','70px');
          $(".main").css('margin-left','70px');
          $(".logo").css('visibility', 'hidden');
          $(".logo span").css('visibility', 'visible');
           $(".logo span").css('margin-left', '-10px');
           $(".icon-a").css('visibility', 'hidden');
           $(".icons").css('visibility', 'visible');
           $(".icons").css('margin-left', '-8px');
            $(".nav").css('display','none');
            $(".nav2").css('display','block');
        });
      
      $(".nav2").click(function(){
          $("#mySidenav").css('width','300px');
          $(".main").css('margin-left','300px');
          $(".logo").css('visibility', 'visible');
           $(".icon-a").css('visibility', 'visible');
           $(".icons").css('visibility', 'visible');
           $(".nav").css('display','block');
            $(".nav2").css('display','none');
       });
      
      </script>
  </body>
</html>
