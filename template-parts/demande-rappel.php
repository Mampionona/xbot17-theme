<!-- Devenir distributeur -->
<div class="modal fade" id="rappel" tabindex="-1" role="dialog" aria-labelledby="rappelLabel">
    <style type="text/css">
        .form_rappel_popup input, .form_rappel_popup textarea, .form_rappel_popup #select_pays{
			width: 100%;
			margin-bottom: 15px;
			padding: 8px 15px;
			outline: none;
			border: 1px solid transparent;
			border-radius: 3px;
		}
		.ajaxloader_rappel {
			position: absolute;
			top: 0;
			left: 0;
			width: 100%;
			height: 100%;
			line-height: 100%;
			text-align: center;
			background: rgb(46, 55, 65);
			align-items: center;
			justify-content: center;
			border-radius: 5px;
			display: none;
		}
		#info_rappel {
			min-height: 200px;
			line-height: 20px;
		}
		.alert_c_rappel {
			font-size: 14px;
		}
		.form_rappel_popup input#submit_rappel {
			background: #000;
			border: none;
			font-weight: bold;
			color: #fff!important;
			font-size: 18px;
			padding: 12px 15px;
			background: #00aeef!important;
		}
		.form_rappel_popup input#submit_rappel:hover {
			background: #fff!important;
			color: #00aeef!important;
		}
		.alert_c_rappel .error, .alert_c_rappel .success {
			color: yellow;
			font-weight: bold;
		}
		input.border_red_rappel {
			border: 1px solid red!important;
		}
		.container_form_rappel {
			position: relative;
			background: #2075c9;
			overflow: hidden;
			padding: 15px 25px;
		}
    </style>
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content" id="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			<div class="clearfix container_form_rappel">
				<h3>Demande de rappel</h3>
				<form method="POST" action="" class="form_rappel_popup">
					<input type="hidden" name="action" value="demande_rappel">
					<div class="ajaxloader_rappel"><img alt="Ajax loader" src="<?= get_template_directory_uri(); ?>/assets/images/eeee.gif"></div>
					<input type="text" id="nom_rappel" name="nom_rappel" placeholder="Nom*">
					<input type="email" id="email_rappel" name="email_rappel" placeholder="Email*">
					<input type="telephone" id="telephone_rappel" name="telephone_rappel" placeholder="Téléphone*">																<input type="text" id="pays_contact" name="pays_contact" placeholder="Votre pays">								<?php // include('includes/select-pays.php'); ?>
					<select name="select_pays" id="select_pays" class="form-control">
						<?php foreach (apply_filters('pays', array()) as $pays): ?>
							<option value="<?= $pays; ?>"><?= $pays; ?></option>
						<?php endforeach; ?>
					</select>
					<textarea id="info_rappel" name="info_rappel" placeholder="Votre demande" >Bonjour,<?php echo "\n\n"; ?>J'aimerais en savoir plus sur le robot de trading XBOT17.<?php echo "\n\n"; ?>Pourriez-vous me recontacter rapidement ?<?php echo "\n\n"; ?>Bien cordialement.</textarea>

					<p class="alert_c_rappel">(*) Champ obligatoire</p>

					<input type="submit" name="submit_rappel" value="Envoyer" id="submit_rappel">
				</form>
			</div>
        </div>
    </div>
</div>
