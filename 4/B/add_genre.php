<?php
  require 'connection.php';
  include 'data-query.php';
  include 'header.php';
?>
    <div class="container">
        <form action="add_genre.php" method="post">
          <div class="form-group mt-5 text-light">
            <label for="#inputGenre">Genre Name</label>
            <input type="text" class="form-control" id="inputGenre" name="genreName" >
            <small id="genreHelp" class="form-text text-muted">(E.g :  Crime, Drama, Thriller)</small>
          </div>
          <input type="submit" class="btn btn-primary" name="simpanGenre" value="Simpan">
        </form>
      </div>
