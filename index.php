<?php 

include 'top.php';
?>

<body>
  <div class="wrapper">
      <section id="home">
        <div class="row">
            <img src="https://assets.kompasiana.com/items/album/2020/04/22/2b841c72-4370-4c36-99f2-1125471c3da0-5e9fcdef097f360d7d518be2.jpeg?t=o&v=770" width="600" height="400"/>
            <div class="kolom">
                <p class="deskripsi">Jual Beli dan Tukar Menukar #dirumahaja</p>
                <h2>Platform Barter Online</h2>
                <p align="justify">Sebelum kita mengenal uang, kita sudah terbiasa dengan istilah Barter. Namun Sejarah barter diperkirakan muncul pada 6000 SM dan diperkenalkan oleh suku Mesopotamia. Kemudian, sistem barter ini diadopsi oleh orang Fenisia. Orang Fenisia dapat disebut sebagai “perantara”, sebab mereka membawa dan menjual barang antar negara-negara.</p>
						    <?php 
                  if(!empty($_SESSION['username'])){
                  echo "<p><a href='logout.php' class='tbl-pink' >Keluar</a></p>";
                  }
                  else{
                    echo "<p><a href='masuk.php' class='tbl-pink' >Masuk</a></p>";
                  }
                ?>
                
                
            </div>
            <div id="copyright">
              <div class="wrapper">
               &copy; 2022. <b>Barter Shop Khayi.</b> All Rights Reserved.
              </div>
        </div>
        </div>
        
      </section>
  </div>
  
</body>
</html>
