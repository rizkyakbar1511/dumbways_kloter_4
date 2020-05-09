<?php
  require 'connection.php';
  include 'data-query.php';
  include 'header.php';
?>
    <div class="container">
        <form action="add_director.php" method="post">
          <div class="form-group mt-5 text-light">
            <label for="#inputDirector">Director Name</label>
            <input type="text" class="form-control" id="inputDirector" name="directorName" >
            <small id="directorHelp" class="form-text text-muted">(E.g : Todd Phillips / Sam Mendes)</small>
          </div>
          <input type="submit" class="btn btn-primary" name="simpanDirector" value="Simpan">
        </form>
      </div>
