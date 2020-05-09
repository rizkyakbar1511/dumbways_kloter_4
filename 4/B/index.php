<?php
  require 'connection.php';
  include 'data-query.php'
?>
    <div class="container">
      <?php include "header.php" ?>
        <?php foreach($queryFilm as $row) : ?>
          <div class="card-deck mt-5 mb-5">
            <div class="card" style="width: 18rem;">
              <?= '<img src="data:image/jpeg;base64,'.base64_encode( $row['photo'] ).'" class="card-img-top"/>'; ?>
               <div class="card-body">
                <p class="card-text"><i class="fa fa-star"></i> <?= $row['rating']  ?></p>
                <h5 class="card-title"><?= $row['title']; ?></h5>
                <a href="#"><?= $row['nama_genre']  ?></a>
                <p class="card-text">Director : <?= $row['nama_director']  ?></p>
                <p class="card-text">Writer : <?= $row['nama_writer']  ?></p>
                <p class="card-text">Durasi : <?= $row['durasi']  ?> Min.</p>
                <p class="card-text"><?= $row['deskripsi']  ?></p>
               </div>
             </div>
            </div>
          <?php endforeach; ?>
       </div>
