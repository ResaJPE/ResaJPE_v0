<?php include('template/head.php'); ?>

<body class="bg-dark">
	<div id="main-connexion">
		<header><?php echo $titrePage; ?></header>
		<form method="POST" action="index.php?controle=connexion&action=connecter">
			<label for="email" >Login</label>
			<input type="login" id="login" name="login" placeholder="Votre login" >
			<label for="mdp" >Mot de passe</label>
			<input type="password" id="mdp" name="mdp" placeholder="Votre mot de passe" >
			<input type="submit" value="Connexion">
		</form>
        <small><?php echo $alerte; ?></small>
       	<div class="infos">
			<strong>Identifiants pour la connexion</strong>
			<ul>
				<li>Responsable de la communication - Joselin HEROT : j.herot@organisation.fr / pwsio</li>
				<li>...</li>
			</ul>
        </div>
	</div>
</body>
</html>
