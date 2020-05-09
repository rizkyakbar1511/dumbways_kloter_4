<?php
  require 'connection.php';
  include 'data-query.php';
  include 'header.php';
?>
<div class="container">
    <form action="add_film.php" method="post">
      <div class="form-group mt-5 text-light">
        <label for="#inputFilm">Title</label>
        <input type="text" class="form-control" id="inputFilm" name="title" >
        <label for="#inputDurasi">Durasi</label>
        <input type="number" class="form-control" id="inputDurasi" name="durasi" >
        <label for="#inputRating">Rating</label>
        <input type="number" class="form-control" id="inputRating" name="rating" >
        <label for="#selectGenre">Genre</label>
        <select class="custom-select" id="inputGenre" name="genre[]">
          <option selected>--Pilih Genre--</option>
          <?php foreach($queryFilm as $row) : ?>
           <option value="1"><?= $row['nama_genre']  ?></option>
          <?php endforeach; ?>
        </select>
        <label for="#selectWriter">Writer</label>
        <select class="custom-select" id="inputWriter">
          <option selected>--Pilih Writer--</option>
          <?php foreach($queryFilm as $row) : ?>
           <option value=""><?= $row['nama_writer']  ?></option>
          <?php endforeach; ?>
        </select>
        <label for="#selectDirector">Director</label>
        <select class="custom-select" id="inputDirector">
          <option selected>--Pilih Director--</option>
          <?php foreach($queryFilm as $row) : ?>
           <option value="1"><?= $row['nama_director']  ?></option>
          <?php endforeach; ?>
        </select>
        <label for="#inputDeskripsi">Deksripsi</label><br>
        <textarea name="deksripsi" rows="8" cols="80"></textarea>
      </div>
      <input type="submit" class="btn btn-primary" name="simpanFilm" value="Simpan">
    </form>
  </div>
