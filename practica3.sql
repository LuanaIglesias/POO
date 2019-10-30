SELECT name, title
FROM movies
INNER JOIN genres ON genre_id = genres.id
ORDER BY name ASC

SELECT title, name, first_name, last_name
FROM movies
INNER JOIN genres ON genre_id = genres.id
INNER JOIN actor_movie ON movie_id = movies.id
INNER JOIN actors ON actor_id = actors.id

SELECT first_name, title
FROM movies
INNER JOIN actor_movie ON movie_id = movies.id
INNER JOIN actors ON actor_id = actors.id
ORDER BY first_name

SELECT title, name
FROM movies
RIGHT JOIN genres ON genre_id = genres.id

SELECT episodes.title, seasons.number,  genres.name, COUNT(actors.first_name)
FROM genres
INNER JOIN series ON genre_id = genres.id
INNER JOIN seasons ON serie_id = series.id
INNER JOIN episodes ON season_id = seasons.id
INNER JOIN actor_episode ON episode_id = episodes.id
INNER JOIN actors ON actor_id = actors.id
GROUP BY episodes.title

SELECT episodes.title, seasons.number, series.title, genres.name, COUNT(actor_episode.id)
FROM episodes
JOIN seasons ON episodes.season_id = seasons.id
JOIN series ON seasons.serie_id = series.id
JOIN genres  ON series.genre_id = genres.id
JOIN actor_episode ON actor_episode.episode_id = episodes.id
GROUP BY episodes.id

/*Mostrar todos los géneros (genres) y el promedio de rating (rating) de sus películas (movies). Considerar solamente las películas con rating mayor a 5.*/

SELECT genres.name, AVG(movies.rating)
FROM movies
JOIN genres ON movies.genre_id = genres.id
HAVING movies.rating > 5
GROUP BY genres.name




