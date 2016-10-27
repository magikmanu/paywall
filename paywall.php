<?php
// On démarre la session
session_start();
//$loginOK = false;  // cf Astuce
setcookie('login', 'KO', (time() + 3600));

// On n'effectue les traitement qu'à la condition que 
// les informations aient été effectivement postées
/*
if ( isset($_POST) && (!empty($_POST['login'])) && (!empty($_POST['password'])) ) {

  extract($_POST); 

  // On va chercher le mot de passe afférent à ce login
  $sql = "SELECT pseudo, age, sexe, ville, mdp FROM user WHERE login = '".addslashes($login)."'";
  $req = mysql_query($sql) or die('Erreur SQL : <br />'.$sql);
  
  // On vérifie que l'utilisateur existe bien
  if (mysql_num_rows($req) > 0) {
     $data = mysql_fetch_assoc($req);
    
    // On vérifie que son mot de passe est correct
    if ($password == $data['mdp']) {
      $loginOK = true;
    }
  }
}
*/
// Si le login a été validé on met les données en sessions
if ($loginOK) 
{
	setcookie('login', 'OK', (time() + 3600));
}

?>
<!DOCTYPE html>
<html lang="fr">
	<!--<![endif]-->
	<head>
		<title>Tests SEO - Paywall</title>
		<meta name="description" content="Super test SEO" />
	</head>
		<body>
		Haec ubi latius fama vulgasset missaeque relationes adsiduae Gallum Caesarem permovissent, quoniam magister equitum longius ea tempestate distinebatur, iussus comes orientis Nebridius contractis undique militaribus copiis ad eximendam periculo civitatem amplam et oportunam studio properabat ingenti, quo cognito abscessere latrones nulla re amplius memorabili gesta, dispersique ut solent avia montium petiere celsorum.
		<br /><br /><br />
		Accenderat super his incitatum propositum ad nocendum aliqua mulier vilis, quae ad palatium ut poposcerat intromissa insidias ei latenter obtendi prodiderat a militibus obscurissimis. quam Constantina exultans ut in tuto iam locata mariti salute muneratam vehiculoque inpositam per regiae ianuas emisit in publicum, ut his inlecebris alios quoque ad indicanda proliceret paria vel maiora.
		<?php
		echo "<br /><br /><font color='red'>Ici Paywall</font><br /><br />";
		echo "Valeur du cookie : ".$_COOKIE['login'];
		if ($_COOKIE['login'] == "OK" OR $_COOKIE['login'] == "") 
		{
		?>
		<br />
		Haec igitur lex in amicitia sanciatur, ut neque rogemus res turpes nec faciamus rogati. Turpis enim excusatio est et minime accipienda cum in ceteris peccatis, tum si quis contra rem publicam se amici causa fecisse fateatur. Etenim eo loco, Fanni et Scaevola, locati sumus ut nos longe prospicere oporteat futuros casus rei publicae. Deflexit iam aliquantum de spatio curriculoque consuetudo maiorum.
		<br /><br /><br />
		Quod opera consulta cogitabatur astute, ut hoc insidiarum genere Galli periret avunculus, ne eum ut praepotens acueret in fiduciam exitiosa coeptantem. verum navata est opera diligens hocque dilato Eusebius praepositus cubiculi missus est Cabillona aurum secum perferens, quo per turbulentos seditionum concitores occultius distributo et tumor consenuit militum et salus est in tuto locata praefecti. deinde cibo abunde perlato castra die praedicto sunt mota.
		<br /><br /><br />
		Adolescebat autem obstinatum propositum erga haec et similia multa scrutanda, stimulos admovente regina, quae abrupte mariti fortunas trudebat in exitium praeceps, cum eum potius lenitate feminea ad veritatis humanitatisque viam reducere utilia suadendo deberet, ut in Gordianorum actibus factitasse Maximini truculenti illius imperatoris rettulimus coniugem.
		<?php
		}
		?>
		</body>
</html>