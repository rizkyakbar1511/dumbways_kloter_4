<?php
  $queryFilm         = mysqli_query($con, "SELECT * FROM film INNER JOIN genre ON film.id_genre=genre.id
                                                              INNER JOIN director ON film.id_director=director.id
                                                              INNER JOIN writer ON film.id_writer=writer.id");

  if(isset($_POST['simpanDirector'])){
    $directorName = $_POST['directorName'];
    $directorAddQuery   =  mysqli_query($con, "INSERT INTO director(nama_director) VALUES ('$directorName')");
    echo "<div class='alert alert-success' role='alert'>Director Berhasil Ditambah !</div>";
  }

  if(isset($_POST['simpanGenre'])){
    $genreName = $_POST['genreName'];
    $genreAddQuery   =  mysqli_query($con, "INSERT INTO genre(nama_genre) VALUES ('$genreName')");
    echo "<div class='alert alert-success' role='alert'>Genre Berhasil Ditambah !</div>";
  }

  if(isset($_POST['simpanWriter'])){
    $writerName = $_POST['writerName'];
    $genreAddQuery   =  mysqli_query($con, "INSERT INTO writer(nama_writer) VALUES ('$writerName')");
    echo "<div class='alert alert-success' role='alert'>Nama Writer Berhasil Ditambah !</div>";
  }

  if(isset($_POST['simpanFilm'])){
    $title     = $_POST['title'];
    $durasi    = $_POST['durasi'];
    $rating    = $_POST['rating'];
    $deskripsi    = $_POST['deskripsi'];
    $filmAddQuery   =  mysqli_query($con, "INSERT INTO film(title,durasi,rating,deskripsi) VALUES ('$title','$durasi','$rating','$deskripsi')");
    echo "<div class='alert alert-success' role='alert'>Film Berhasil Ditambah !</div>";
  }


 ?>
