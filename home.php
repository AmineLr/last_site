<?php
 
$bdd = new PDO ("mysql:host=localhost;dbname=games;charset=utf8", "root", "m1456m1456");
$request = "SELECT * FROM game";
$r = $bdd->prepare($request);
$r->execute();
while($row = $r->fetch(PDO::FETCH_ASSOC))
{
	$games[] = $row ;
}



?>


		<?php include("header.php");?>

		<h1>Top 10</h1>

		<div id="container">

			<?php foreach($games as $game):?>

				<div class="jeu">
					<h2><a href="show.php?id=<?= $game['id'];?> "><?=$game['title'];?></a></h2>
				
					<p>
					<img src="<?= $game['image'];?>" alt ="image du jeu" title="affiche du jeu <?= $game['title']?>"/>
					</p>
					<a href="detail.php?id=<?= $game['id'];?>">Contenu </a>

				</div>

			<?php endforeach;?>

			
		</div>

		<?php include ("footer.php");?>