## Instruksi Soal 4-A (Query_DB)
- Tampilkan Semua Film
```
SELECT * FROM film
```
- tampilkan film per genre beserta writer dan director, field ditampilkan title film, durasi film, name genre, name writer, name director,  durasi film, image film, deskripsi film, rating film


```
SELECT title,durasi,nama_genre,nama_writer,nama_director,photo,deskripsi,rating FROM film
                   INNER JOIN genre ON film.id_genre=genre.id
                   INNER JOIN writer ON film.id_writer=writer.id
                   INNER JOIN genre ON film.id_director=director.id;
```

- tampilan detail film berdasarkan id film
```
SELECT * FROM Film ORDER BY id ASC;
```
