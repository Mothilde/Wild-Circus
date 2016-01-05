<?php


<!DocType html>
<html>

<head>
 <meta charset="utf-8" />
 <link rel="stylesheet" href="wildcircus.css"/>
 
<title>Wild Circus Company</title>

</head>

<div id="bloc_page">

<header>
<img src="Images/banniere.png" alt="banniere"/>
</header>

<body>

<h1> Welcome to Wild Circus Company </h1>

<nav id="menu">
<ul>
<li><a href="Index.html">Home</a></li>
<li>
<a href="performances.html">Performance</a>
<ul>
<li><a href="dresseur.html">Trainer</a></li>
<li><a href="magicien.html">Magician</a></li>
<li><a href="jongleur.html">Juggler</a></li>
</ul>
</li>

<li><a href="Dates.html">Dates</li></a>
<li><a href="tarif.html">Price</li></a>
</ul>
</nav>

<section>

               
<h1>Formulaire de Contact</h1>

<form id="contact" method="post" action="postcontact.php">
<p>
<label for="statut">Vous êtes?</label></br>
<select name="statut" id="statut">
<option value="particuliers">Un particuliers</option>
<option value="scolaires">Une école</option>
<option value="groupes">Un groupe</option>
<option value="entreprisesCE">Une entreprise Ou un Comité d'entreprise</option>
</select>

<fieldset>
<legend>Vos Coordonnées</legend>
<label for="nom">Nom :</label>
        <input type="text" id="nom"required/></br>
<label for="prenom">Prénom</label>
		<input type="text" id="prénom"/></br>
<label for="adresse">Adresse</label>
		<input type="text" id="adresse"required/></br>
<label for="code postal">Code postal</label>
		<input type="postcode" id="codepostal"required/></br>
<label for="ville">Ville</label>
		<input type="text" id="ville"required/></br>
<label for="email">Email</label>
		<input type="email" id="email"required/></br>
<label for="Téléphone">Numéro de téléphone</label>
		<input type="tel" id="telephone"/></br>
</fieldset>

<fieldset>
<legend>Votre Demande</legend>
<label for="message">Message :</label>
        <textarea id="message"required></textarea>
</fieldset>
<input type="submit" name="envoi" value="Envoyer le formulaire !" />
</p>
</form>
                    
					
				
				</section>

</body>

<footer>
<div id="pieddepage">
<p class="email"><a href="mailto:"mathildenavet@hotmail.com">Contact</a></p>
</div>
</footer>
</div>
</html>

?>
