<article class="login_index">
				<form method="POST" action="/login" class="form_login">
					<p class="login_texte" enctype="multipart/from-data">
						<label for="adresse_email"> adresse email</label>
					</p>
					<p class="login_texte">
						<input type="email" name="adresse%email" id="adresse%email" placeholder="Ex : adresse_email@email.com" size="25" autofocus required>
						<br>
					</p>
					<p class="login_texte">
						<label for="mot_de_passe"> mot de passe </label>
					</p>
					<p class="login_texte">
						<input type="password" name="password" id="password" size="25" required>
						<br>
					</p>
					<p class="login_texte">
						<input type="submit" value="Envoyer" />
						<br>
					</p>
				</form>
		</article>