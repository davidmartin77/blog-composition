<!DOCTYPE html>
<html>
<body>

	<div class="header__left-item">
		<a href="trentwalton.php"><img src="Trent Walton logo.png" height="100px," width="100px" class="logo"></a>
	</div>


	<div id="navigation">

		<ul> 
			<li<?php if ($thisPage=="Articles")
			echo " id=\"currentpage\""; ?>>
			<a href="trentwalton_articles.php">ARTICLES</a></li>

			<li<?php if ($thisPage=="Notes")
			echo " id=\"currentpage\""; ?>>
			<a href="individual_article.php">NOTES</a></li>

			<li<?php if ($thisPage=="Info")
			echo " id=\"currentpage\""; ?>>
			<a href="http://www.trentwalton.com/info">INFO</a></li>

			<a> SEARCH </a>

		</ul>
	</div>
</body>
</html>

