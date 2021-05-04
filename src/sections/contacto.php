<section class="contact">
	<div class="contact1">
		<h2 class="contact__title">¡Hablemos!</h2>
		<p class="contact__text">Llena el formulario con los datos solicitados y te armamos le presupuesto.</p>
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
			src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3283.532258086026!2d-58.39528408417845!3d-34.61598746565556!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95bccade0cd6f6c3%3A0x6e751dcfa4f55201!2sCombate%20de%20los%20Pozos%20618%2C%20C1222%20AAD%2C%20Buenos%20Aires!5e0!3m2!1ses-419!2sar!4v1620048859770!5m2!1ses-419!2sar"
			class="contact__mapa" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
		<div class="info">
			<div class="info__content">
				<div class="info__item">
					<div class="info__title">
						<img src="src/assets/icons/icon__locate-dark.svg" alt="icon">
						Sucursal Montserrat:
					</div>
					<div class="info__text">
						Combate de los pozos 618.
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