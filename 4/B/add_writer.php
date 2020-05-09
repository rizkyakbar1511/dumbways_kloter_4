<?php
  require 'connection.php';
  include 'data-query.php';
  include 'header.php';
?>
    <div class="container">
        <form action="add_writer.php" method="post">
          <div class="form-group mt-5 text-light">
            <label for="#inputWriter">Writer Name</label>
            <input type="text" class="form-control" id="inputWriter" name="writerName" >
            <small id="writerHelp" class="form-text text-muted">( E.g :  David Desola )</small>
          </div>
          <input type="submit" class="btn btn-primary" name="simpanWriter" value="Simpan">
        </form>
      </div>
