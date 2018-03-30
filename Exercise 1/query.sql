#I select a full article, join it with the users table when the id's are the same and when article id equals to 10

SELECT * FROM articles
	JOIN users ON users.id = articles.id_user
	WHERE articles.id = 10;