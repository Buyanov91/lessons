<?php 

$query = "SELECT * FROM films WHERE year > '2000'";
$query = "SELECT * FROM films WHERE title LIKE '%а%'";
$query = "SELECT * FROM films WHERE title LIKE 'У%'";
$query = "SELECT * FROM films WHERE title LIKE '%а%' OR year < '2000'";
$query = "SELECT * FROM films WHERE title LIKE '%а%' AND year < '2000'";
$query = "SELECT films.title, directors.name
 			FROM films
 			JOIN directors ON films.director_id = directors.id";
$query = "SELECT films.title
 			FROM films
 			JOIN directors ON films.director_id = directors.id
 			WHERE directors.name LIKE '%а%'";
$query = "SELECT films.title, genres.name
 			FROM genre_film
 			JOIN films ON genre_film.film_id = films.id
 			JOIN genres ON genre_film.genre_id = genres.id";
$query = "SELECT films.title, genres.name
 			FROM genre_film
 			JOIN films ON genre_film.film_id = films.id
 			JOIN genres ON genre_film.genre_id = genres.id";
