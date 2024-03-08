<footer>
			<div>
				<h3>Stack Overflow</h3>
				<ol>
					<li>
						Ajouter le framework de classes PHP (IndexAction, CommonAction, etc.)
					</li>
					<li>
						Sur votre base de données (PostgreSQL, MySQL ou Oracle), créer une table « stack_answers », permettant de conserver les réponses des utilisateurs (voir le fichier table.sql pour la version pgsql). 
					</li>
					<li>
						Dans un DAO (AnswerDAO), ajouter les méthodes : <code>getAnswers()</code> et <code>addAnswer(author, answer)</code>.
					</li>
					<li>
						Terminer le formulaire, puis faire en sorte qu'une réponse est ajoutée dans la table lorsque le formulaire est envoyé.
					</li>
					<li>
						Appelez la méthode AnswerDAO::getAnswers() afin de lire les réponses, puis les afficher dans la page Web via une boucle <code>foreach</code>. Retirer les réponses existantes, mais utiliser la structure (div et et etc.) afin de conserver les styles CSS.
					</li>
				</ol>
			</div>
		</footer>
	</body>
</html>