<?php
  header("Content-type: text/xml; charset=utf-8");
  echo '<?xml version="1.0" encoding="UTF-8"?>';
  include_once "../dao/GenreDao.php";
  $genreDao = new GenreDao();
  $genres = $genreDao->lireGenres();
?>
<rss version="2.0"
	xmlns:content="http://purl.org/rss/1.0/modules/content/"
	xmlns:wfw="http://wellformedweb.org/CommentAPI/"
	xmlns:dc="http://purl.org/dc/elements/1.1/"
	xmlns:atom="http://www.w3.org/2005/Atom"
	xmlns:sy="http://purl.org/rss/1.0/modules/syndication/"
	xmlns:slash="http://purl.org/rss/1.0/modules/slash/"
	>
	<channel>
		<title>page liste</title>
		<atom:link href="http://localhost/projet-web-php-2018-gui45/src/export/rss.php" rel="self" type="application/rss+xml" />
		<link>http://localhost/projet-web-php-2018-gui45/src/</link>
		<description>le fil rss de la page liste</description>
		<lastBuildDate>2018-05-14</lastBuildDate>
		<language>fr</language>
		<sy:updatePeriod>hourly</sy:updatePeriod>
		<sy:updateFrequency>1</sy:updateFrequency>

	</channel>
</rss>
