
<?php
	require_once("action/IndexAction.php");

	$action = new IndexAction();
	$data = $action->execute();

	require_once("partial/header.php");
?>

		<main class="container">
			<div class="pub2"></div>
			<div class="question">
				<h1>Pourquoi mon code JavaScript ne fonctionne-t'il pas?</h1>
				<div class="question-text">
					<p>
						Je ne comprends pas... j'ai tout essayé et mon code JavaScript ne fonctionne simplement pas... j'ai joujours des erreurs...
					</p>
<pre>
document.getElementById("elem").onclick = test(event);

function test(e) {
	this.style.display = "none";
}
</pre>
					<p>
						Est-ce que quelqu'un pourrait m'aider?
					</p>
					<p>
						par : Fédérik Tério
					</p>
				</div>
				<div class="cols">
					<div class="left">
						<h2>Réponses</h2>

						<div class="answer">
							<div class="text">
								JavaScript est de la bouette, passe donc à C#. Il a été prouvé que l'utilisation de JavaScript augmente la dépendance à la programmation Web!
							</div>
							<div class="author">
								Par : John W
							</div>
						</div>

						<div class="answer">
							<div class="text">
								Est-ce que JavaScript est installé sur ton ordinateur? Moi, j'ai la JVM 1.8.
							</div>
							<div class="author">
								Par : Mario B.
							</div>
						</div>

						<div class="answer">
							<strong>Vous avez la réponse? Aidez-le !</strong>
							<div class="text">
								<textarea required placeholder="Votre réponse"></textarea>
							</div>
							<div class="author">
								<input type="text" required placeholder="Votre nom">
							</div>
							<div class="send-btn">
								<button>Envoyer</button>
							</div>
						</div>

					</div>
					<div class="right">
						<div class="pub"></div>
						<h3>Autres questions</h3>
						<ul>
							<li>
								<a href="javascript:void(0)">
									Est-ce que jQuery fonctionne avec PHP?
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									Du PHP dans une JS ne fonctionne pas, pourquoi?
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									Pourquoi mon petit frère ne comprend pas mes blagues?
								</a>
							</li>
							<li>
								<a href="javascript:void(0)">
									Je veux inventer une intelligence artificielle, mais je n'y arrive pas... aide s.v.p.!
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</main>



		<?php
	require_once("partial/footer.php");





		