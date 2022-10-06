<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>SHOWROOM EUROPEAN CARS</title>
   <link rel="stylesheet" href="style.css">
   <style>
      .section {
         width: 60%;
         margin: 20px auto 50px auto;
         padding: 20px;
      }

      footer {
         position: relative;
         bottom: 0;
      }

      footer p {
         text-align: center;
         color: rgba(255, 255, 255, 0.8);
         font-size: 12px;
         padding-top: 30px;
      }
   </style>
</head>

<body>
   <header>
      <div class="bayangan-header">
         <h1 id="flex1">DETAIL MOBIL</h1>
         <ul id="flex2">
            <li><a href="index.php">Beranda</a></li>
         </ul>
      </div>
   </header>

   <section>
      <?php
      $id = $_GET['id'];
      ?>

      <div class="section">

         <?php
         if ($id == 1) {
         ?>
            <img src="images/bmw X6.jpg" class="gd" alt="">
            <h3 id="nama" class="jarak-atas"><?php echo $_GET['nama'] ?></h3>
            <h4 class="jarak-atas"><?php echo $_GET['harga'] ?></h4>
            <p id="deskripsi">BMW X6 2022 adalah 5 Seater SUV yang tersedia dengan harga Rp 2,23 Milyar di Indonesia. Ini tersedia dalam 11 warna, 1 varian, 1 pilihan mesin, dan 1 opsi transmisi: Otomatis di Indonesia. Dimensi X6 adalah 4935 mm L x 2212 mm W x 1696 mm H. Cicilan bulanan terendah dimulai dari Rp 358,97 Million (selama 72 bulan). Pesaing terdekat BMW X6 adalah Q7 dan X5.</p>
         <?php
         }
         if ($id == 2) {
         ?>

            <div class="box">
               <img src="images/lambo.jpg" class="gd" alt="">
               <h3 id="nama" class="jarak-atas"><?php echo $_GET['nama'] ?></h3>
               <h4 class="jarak-atas"><?php echo $_GET['harga'] ?></h4>
               <p id="deskripsi">Lamborghini Aventador 2022 adalah 2 Seater Coupe yang tersedia dalam daftar harga Rp 6,4 - 8,7 Milyar di Indonesia. Ini tersedia dalam 7 warna, 4 varian, 1 pilihan mesin, dan 1 opsi transmisi: Otomatis di Indonesia. Dimensi Aventador adalah 4780 mm L x 2265 mm W x 1136 mm H. Lebih dari 2 pengguna telah memberikan penilaian untuk Aventador berdasarkan fitur, jarak tempuh, kenyamanan tempat duduk dan kinerja mesin. Pesaing terdekat Lamborghini Aventador adalah AMG GT, 911, Vantage dan R8.</p>
            </div>
         <?php
         }
         if ($id == 3) {
         ?>
            <div class="box">
               <img src="images/masserati-granturismo.jpg" class="gd" alt="">
               <h3 id="nama" class="jarak-atas"><?php echo $_GET['nama'] ?></h3>
               <h4 class="jarak-atas"><?php echo $_GET['harga'] ?></h4>
               <p id="deskripsi">Maserati GranTurismo 2022 adalah 4 Seater Coupe yang tersedia dalam daftar harga Rp 3,5 - 3,96 Milyar di Indonesia. Ini tersedia dalam 10 warna, 4 varian, 2 pilihan mesin, dan 1 opsi transmisi: Otomatis di Indonesia. Mobil ini memiliki ground clearance 110 mm dengan dimensi sebagai berikut: 4933 mm L x 2044 mm W x 1343 mm H. Pesaing terdekat Maserati GranTurismo adalah 911, Continental, AMG GT dan Taycan.</p>
            </div>
         <?php
         }
         if ($id == 4) {
         ?>
            <div class="box">
               <img src="images/mclaren.jpg" class="gd" alt="">
               <h3 id="nama" class="jarak-atas"><?php echo $_GET['nama'] ?></h3>
               <h4 class="jarak-atas"><?php echo $_GET['harga'] ?></h4>
               <p id="deskripsi">Mclaren 570S 2022 adalah 2 seater Coupe. Ini tersedia dalam 16 warna, 1 varian, 1 pilihan mesin, dan 1 opsi transmisi: Otomatis di Indonesia. Dimensi 570S adalah 4530 mm L x 2095 mm W x 1202 mm H. Pesaing terdekat Mclaren 570S adalah 911, GLE-Class, 718 dan M4 Coupe.</p>
            </div>
         <?php
         }
         ?>
      </div>
      
   </section>
   <footer>
      <p>&copy; 2022</p>
   </footer>
</body>

</html>
