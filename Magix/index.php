<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();

	$pageTitle = "Authentification";
	require_once("partial/header.php");
?>

<div class="login-form-frame">
		<div>
		</div>
	<form action="index.php" method="post">
		<?php 

		if ($data["hasConnectionError"]){
			?>
			<div>Connection erronée</div>
			<?php
		}

		?>

		<div class="form-label">
			<label for="username">Nom d'usager : </label>
		</div>
		<div class="form-input">
			<input type="text" name="username" required />
		</div>
		<div class="form-separator"></div>

		<div class="form-label">
			<label for="password">Mot de passe : </label>
		</div>
		<div class="form-input">
			<input type="password" name="password" required />
		</div>
		<div class="form-separator"></div>

		<div class="form-label">
			&nbsp;
		</div>
		<div class="form-input">
			<button type="submit">Connexion</button>
		</div>
		<div class="form-separator"></div>
	</form>
</div>
<?php
	require_once("partial/footer.php");
