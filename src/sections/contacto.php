<section class="contact">
	<div class="contact1">
		<h2 class="contact__title">¡Hablemos!</h2>
		<p class="contact__text">Envíanos tu consulta y te contestaremos a la brevedad.</p>
		<form action="src/sections/correo.php" method="post" class="form">
			<div class="form__item">
				<label for="nombre" class="form__label sr-only"></label>
				<input type="text" name="nombre" id="nombre" placeholder="Nombre completo">
			</div>
			<div class="form__item">
				<label for="email" class="form__label sr-only"></label>
				<input type="email" name="email" id="email" placeholder="Email">
			</div>
			<div class="form__item">
				<label for="telefono" class="form__label sr-only"></label>
				<input type="tel" name="telefono" id="telefono" placeholder="Teléfono">
			</div>
			<div class="form__item">
				<label for="mensaje" class="form__label sr-only"></label>
				<textarea name="mensaje" id="mensaje" placeholder="mensaje"></textarea>
			</div>
			<button type="submit" class="form__btn">
				<img src="src/assets/icons/icon__email.svg" alt="icon enviar" class="form__icon">
				Enviar
			</button>
		</form>
	</div>
	<div class="contact2">
		<iframe
			src="https://maps.google.com/maps?q=Adolfo%20Alsina%201814%2C%20Buenos%20Aires%2C%20Argentina&amp;output=embed" title="Ubicación sucursal Montserrat"
			class="contact__mapa" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		<div class="info">
			<div class="info__content">
				<div class="info__item">
					<div class="info__title">
						<img src="src/assets/icons/icon__locate-dark.svg" alt="icon">
						Sucursal Montserrat:
					</div>
					<div class="info__text">
						Adolfo Alsina 1814.
					</div>
				</div>
				<div class="info__item">
					<div class="info__title">
						<img src="src/assets/icons/icon__time.svg" alt="icon">
						Horario de atención
					</div>
					<div class="info__text">
						Lunes a Viernes de 10 a 18hs
						<br>
						Sábados de 10 a 13hs.
					</div>
				</div>
				<div class="info__item contact__item">
					<div class="info__title">
						<img src="src/assets/icons/icon__whatsapp.svg" alt="icon">
						Whatsapp
					</div>
					<div class="info__text">
						1153198818
					</div>
				</div>
				<div class="info__item">
					<div class="info__title">
						<img src="src/assets/icons/icon__email-dark.svg" alt="icon">
						Correo
					</div>
					<div class="info__text">
						cortinascongreso
						<br>
						@yahoo.com.ar
					</div>
				</div>
			</div>
		</div>
	</div>
</section>