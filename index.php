<!--
Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relativa lunghezza e sostituire la badword passata in GET con tre *. -->



<?php
// Php conf error
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);
// Input
$title = 'vaffanculo';
$author = 'Masini Marco';
$text = 'Se mi guardo nello specchio
Con il tempo che è passato
Sono solo un po\' più ricco
Più cattivo e più invecchiato
È l\'amara confessione
Di un cantante di successo
Forse è l\'ultima occasione
Che ho di essere me stesso
Quando ho smesso di studiare
Per campare di illusioni
Sono stato il dispiacere
Di parenti e genitori
Ero uno di quei figli
Sognatori adolescenti
Che non vogliono consigli
E rispondono fra i denti
vaffanculo
vaffanculo
Ma la musica è cattiva
È una fossa di serpenti
E per uno che ci arriva
Quanti sono i fallimenti
Mi diceva quella gente
Che s\'intende di canzoni
Hai la faccia da perdente
Mi dispiace non funzioni
Masini, vaffanculo (vaffanculo)
vaffanculo
Non importa se ho pianto e sofferto
Questa vita fa tutto da sé
Nella musica ho solo scoperto
Il bisogno…';
// Control
$badword = isset($_GET["badword"]) ? $_GET["badword"] : 'da inserire';
// Output
$newtitle = str_replace($badword, '***', $title);
$newText = str_replace($badword, '***', $text);
$length = strlen($text);
?>

 <!DOCTYPE html>
 <html lang="en" dir="ltr">
 	<head>
 		<meta charset="utf-8">
		<link rel="stylesheet" href="style.css">
 		<title>php-badwords</title>
 	</head>
 	<body>
		<div class="container">
			<strong>Inserisci come argomento dell'attributo badword il titolo della canzone di masini con il metodo GET. </strong>
			<h1><?php echo $newtitle  ?></h1>
			<h3><?php echo $author ?></h3>
			<p>
				<?php echo $newText ?>
			</p>
			<p>Lunghezza stringa: <?php echo $length ?></p>
			<p>Badword: <?php echo $badword ?> </p>
		</div>
 	</body>
 </html>

 docker pull ubuntu
