<?php
	require("header.php");
?>




	<div class="zone">

		<form method="post" action="models/addPost.php">

			<p>
				<input type="text" name="nom" placeholder="nom du parc" required/>
				<br>
				<textarea name="message" placeholder="votre expérience" rows="8" cols="70"></textarea>
				<br>
				<input type="submit" name="envoyer">
			</p>

		</form>

	</div>

</body>
</html>