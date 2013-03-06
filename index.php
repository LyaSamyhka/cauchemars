<!DOCTYPE html>
<html>
	<head>
		
		<link href="bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
		<link href="bootstrap/css/bootstrap-responsive.css" rel="stylesheet" type="text/css"/>
		<link href="custom.css" rel="stylesheet" type="text/css"/>
	</head>
	<body>
		<div class="container">
			<div class="row">
				<header class="span12">header</header>
				<aside class="span2">
					<div class="row">
						<div class="span2">adise 1</div>
						<div class="span2">aside 2</div>
					</div>
				</aside>
				<section class="span10">
					<div class="span10 no-margin"><h2>Thème de la campagne</h2></div>
					<div class="accordion-heading"><a class="accordiong-toggle" href="#identite" data-toggle="collapse">Identité</a></div>
					<div class="collapse" id="identite">
						<div class="span3 no-margin"><img src="http://fakeimg.pl/270x184/?text=Illustration"/></div>
						<div class="span7">
							<form id="form-identite" class="form-horizontal well">
								<fieldset>
									<label for="nom" class="input-prepend">
										<span class="add-on">Nom</span>
										<input type="text" name="nom" id="nom" placeholder="Nom du personnage" class="input-xlarge"/>
									</label>
									<div class="btn-group" data-toggle="buttons-radio">
										<button type="button" id="sexe_f" class="btn">&#9794;</button>
										<button type="button" id="sexe_m" class="btn">&#9792;</button>
									</div>
									<label for="age" class="input-prepend input-append">
										<span class="add-on">Âge</span>
										<input type="text" name="age" id="age" class="input-xmini"/>
										<span class="add-on">ans</span>
									</label>
									<br/>
									<label for="poids" class="input-prepend input-append">
										<span class="add-on">Poids</span>
										<input type="text" name="poids" id="poids" class="input-xmini"/>
										<span class="add-on">kg</span>
									</label>
									<label for="taille" class="input-prepend input-append">
										<span class="add-on">Taille</span>
										<input type="text" name="taille" id="taille" class="input-xmini"/>
										<span class="add-on">m</span>

									</label>
									<label for="beaute" class="input-prepend input-append">
										<span class="add-on">Beauté</span>
										<input type="text" name="beaute" id="beaute" class="input-xxmini"/>
										<div class="btn-group btn-group-vertical btn-group-plusminus">
											<button type="button" class="btn"></button>
											<button type="button" class="btn"></button>
										</div>
									</label>
									<label for="tenue" class="input-prepend input-append">
										<span class="add-on">Tenue</span>
										<input type="text" name="tenue" id="tenue" class="input-xxmini"/>
										<div class="btn-group btn-group-vertical btn-group-plusminus">
											<button type="button" class="btn"></button>
											<button type="button" class="btn"></button>
										</div>
									</label>
									<br/>
									<label for="peuple" class="input-prepend">
										<span class="add-on">Peuple</span>
										<input type="text" name="peuple" id="peuple" placeholder="Peuple ou nationalité" class="input-xlarge"/>
									</label>
									<br/>
									<label for="foi-val" class="input-prepend input-append no-block">
										<span class="add-on">Foi</span>
										<input type="text" name="foi-val" id="foi-val" class="input-xxmini"/>
										<div class="btn-group btn-group-vertical btn-group-plusminus">
											<button type="button" class="btn"></button>
											<button type="button" class="btn"></button>
										</div>
									</label>
									<label for="foi" class="no-block">
										<input type="text" name="foi" id="foi" placeholder="Entité révérée" class="input-xlarge"/>
									</label>
								</fieldset>
							</form>
						</div>
					</div>
					
					
					<div class="accordion-heading"><a class="accordiong-toggle" href="#profile" data-toggle="collapse">Profil Psychologique</a></div>
					<div class="collapse" id="profile">
						<div class="row">
							<div class="span5">
								<form id="form-profil-qualite" class="form-horizontal well form-profil">
									<div class="form-legend">
										Qualités
										<button class="btn" type="button"><i class="icon-plus"></i></button>
									</div>
									<label for="qualite-1" class="input-prepend input-append">
										<span class="add-on">Courageux</span>
										<input type="text" name="qualite-1" id="qualite-1" class="input-xxmini"/>
										<div class="btn-group btn-group-vertical btn-group-plusminus">
											<button type="button" class="btn"></button>
											<button type="button" class="btn"></button>
										</div>
									</label>
								</form>
							</div>
							<div class="span5">
								<form id="form-profil-defaut" class="form-horizontal well form-profil">
									<div class="form-legend">
										Défauts
										<button class="btn" type="button"><i class="icon-plus"></i></button>
									</div>

								</form>
							</div>
						</div>
						<div class="row">
							<div class="span5">
								<form id="form-profil-gout" class="form-horizontal well form-profil">
									<div class="form-legend">
										Goûts
										<button class="btn" type="button"><i class="icon-plus"></i></button>
									</div>
								</form>
							</div>
							<div class="span5">
								<form id="form-profil-haine" class="form-horizontal well form-profil">
									<div class="form-legend">
										Haines
										<button class="btn" type="button"><i class="icon-plus"></i></button>
									</div>
								</form>
							</div>
						</div>
						<div class="row">
							<div class="span5">
								<form id="form-profil-reve" class="form-horizontal well form-profil">
									<div class="form-legend">
										Rêves
										<button class="btn" type="button"><i class="icon-plus"></i></button>
									</div>
								</form>
							</div>
							<div class="span5"> 
								<form id="form-profil-phobie" class="form-horizontal well form-profil">
									<div class="form-legend">
										Phobies
										<button class="btn" type="button"><i class="icon-plus"></i></button>
									</div>
								</form>
							</div>
						</div>
					</div>
					
                                        <div class="accordion-heading"><a class="accordiong-toggle" href="#caracteristique" data-toggle="collapse">Caractéristiques</a></div>
                                        <div class="collapse" id="caracteristique">
                                            <div class="row">
                                                <div class="span5">
                                                    <table id="carac-principale" class="table table-condensed table-carac">
                                                        <thead>
                                                            <tr>
                                                                <td></td>
                                                                <td>valeur</td>
                                                                <td>bonus</td>
                                                                <td>total</td>
                                                                <td class="left-border"></td>
                                                                <td>valeur</td>
                                                                <td>bonus</td>
                                                                <td>total</td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Mémoire</td>
                                                                <td>
                                                                    <div class="input-append no-block">
                                                                        <input type="text" name="memoire-val" id="memoire-val" class="input-xxmini"/>
                                                                        <div class="btn-group btn-group-vertical btn-group-plusminus">
                                                                                <button type="button" class="btn"></button>
                                                                                <button type="button" class="btn"></button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><input type="text" name="memoire-bonus" id="memoire-bonus" class="input-xxmini" readonly/></td>
                                                                <td><input type="text" name="memoire-total" id="memoire-total" class="input-xxmini" readonly/></td>
                                                                <td class="left-border">Perception</td>
                                                                <td>
                                                                    <div class="input-append no-block">
                                                                        <input type="text" name="perception-val" id="perception-val" class="input-xxmini"/>
                                                                        <div class="btn-group btn-group-vertical btn-group-plusminus">
                                                                                <button type="button" class="btn"></button>
                                                                                <button type="button" class="btn"></button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><input type="text" name="perception-bonus" id="perception-bonus" class="input-xxmini" readonly/></td>
                                                                <td><input type="text" name="perception-total" id="perception-total" class="input-xxmini" readonly/></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Diplomatie</td>
                                                                <td>
                                                                    <div class="input-append no-block">
                                                                        <input type="text" name="diplomatie-val" id="diplomatie-val" class="input-xxmini"/>
                                                                        <div class="btn-group btn-group-vertical btn-group-plusminus">
                                                                                <button type="button" class="btn"></button>
                                                                                <button type="button" class="btn"></button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><input type="text" name="diplomatie-bonus" id="diplomatie-bonus" class="input-xxmini" readonly/></td>
                                                                <td><input type="text" name="diplomatie-total" id="diplomatie-total" class="input-xxmini" readonly/></td>
                                                                <td class="left-border">Force</td>
                                                                <td>
                                                                    <div class="input-append no-block">
                                                                        <input type="text" name="force-val" id="force-val" class="input-xxmini"/>
                                                                        <div class="btn-group btn-group-vertical btn-group-plusminus">
                                                                                <button type="button" class="btn"></button>
                                                                                <button type="button" class="btn"></button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><input type="text" name="force-bonus" id="force-bonus" class="input-xxmini" readonly/></td>
                                                                <td><input type="text" name="force-total" id="force-total" class="input-xxmini" readonly/></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Intellect</td>
                                                                <td>
                                                                    <div class="input-append no-block">
                                                                        <input type="text" name="intellect-val" id="intellect-val" class="input-xxmini"/>
                                                                        <div class="btn-group btn-group-vertical btn-group-plusminus">
                                                                                <button type="button" class="btn"></button>
                                                                                <button type="button" class="btn"></button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><input type="text" name="intellect-bonus" id="intellect-bonus" class="input-xxmini" readonly/></td>
                                                                <td><input type="text" name="intellect-total" id="intellect-total" class="input-xxmini" readonly/></td>
                                                                <td class="left-border">Endurance</td>
                                                                <td>
                                                                    <div class="input-append no-block">
                                                                        <input type="text" name="endurance-val" id="endurance-val" class="input-xxmini"/>
                                                                        <div class="btn-group btn-group-vertical btn-group-plusminus">
                                                                                <button type="button" class="btn"></button>
                                                                                <button type="button" class="btn"></button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><input type="text" name="endurance-bonus" id="endurance-bonus" class="input-xxmini" readonly/></td>
                                                                <td><input type="text" name="endurance-total" id="endurance-total" class="input-xxmini" readonly/></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Volonté</td>
                                                                <td>
                                                                    <div class="input-append no-block">
                                                                        <input type="text" name="volonte-val" id="volonte-val" class="input-xxmini"/>
                                                                        <div class="btn-group btn-group-vertical btn-group-plusminus">
                                                                                <button type="button" class="btn"></button>
                                                                                <button type="button" class="btn"></button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><input type="text" name="volonte-bonus" id="volonte-bonus" class="input-xxmini" readonly/></td>
                                                                <td><input type="text" name="volonte-total" id="volonte-total" class="input-xxmini" readonly/></td>
                                                                <td class="left-border">Adresse</td>
                                                                <td>
                                                                    <div class="input-append no-block">
                                                                        <input type="text" name="adresse-val" id="adresse-val" class="input-xxmini"/>
                                                                        <div class="btn-group btn-group-vertical btn-group-plusminus">
                                                                                <button type="button" class="btn"></button>
                                                                                <button type="button" class="btn"></button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><input type="text" name="adresse-bonus" id="adresse-bonus" class="input-xxmini" readonly/></td>
                                                                <td><input type="text" name="adresse-total" id="adresse-total" class="input-xxmini" readonly/></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Charisme</td>
                                                                <td>
                                                                    <div class="input-append no-block">
                                                                        <input type="text" name="charisme-val" id="charisme-val" class="input-xxmini"/>
                                                                        <div class="btn-group btn-group-vertical btn-group-plusminus">
                                                                                <button type="button" class="btn"></button>
                                                                                <button type="button" class="btn"></button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><input type="text" name="charisme-bonus" id="charisme-bonus" class="input-xxmini" readonly/></td>
                                                                <td><input type="text" name="charisme-total" id="charisme-total" class="input-xxmini" readonly/></td>
                                                                <td class="left-border">Rapidité</td>
                                                                <td>
                                                                    <div class="input-append no-block">
                                                                        <input type="text" name="rapidite-val" id="rapidite-val" class="input-xxmini"/>
                                                                        <div class="btn-group btn-group-vertical btn-group-plusminus">
                                                                                <button type="button" class="btn"></button>
                                                                                <button type="button" class="btn"></button>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td><input type="text" name="rapidite-bonus" id="rapidite-bonus" class="input-xxmini" readonly/></td>
                                                                <td><input type="text" name="rapidite-total" id="rapidite-total" class="input-xxmini" readonly/></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="span3">
                                                    <table id="carac-secondaire" class="table table-condensed table-carac">
                                                        <thead>
                                                            <tr><td></td><td>valeur</td><td>rang</td><td>details</td></tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Init. physique</td>
                                                                <td><input type="text" name="initphys-rang" id="initphys-rang" class="input-xxmini" readonly/></td>
                                                                <td><input type="text" name="initphys-passif" id="initphys-passif" class="input-xxmini" readonly/></td>
                                                                <td><input type="text" name="initphys-detail" id="initphys-detail" class="input-init" readonly/></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Init. mentale</td>
                                                                <td><input type="text" name="initment-rang" id="initment-rang" class="input-xxmini" readonly/></td>
                                                                <td><input type="text" name="initment-passif" id="initment-passif" class="input-xxmini" readonly/></td>
                                                                <td><input type="text" name="initment-detail" id="initment-detail" class="input-init" readonly/></td>
                                                            </tr>
                                                            <tr class="font-mini">
                                                                <td>Vitesse de course</td>
                                                                <td><input type="text" name="vitesse-val" id="vitesse-val" class="input-xxmini" readonly/></td>
                                                                <td colspan="2"><input type="text" name="vitesse-detail" id="vitesse-detail" class="input-vitenc" readonly/></td>
                                                            </tr>
                                                            <tr class="font-mini">
                                                                <td>Encombrement</td>
                                                                <td><input type="text" name="encombrement-val" id="encombrement-val" class="input-xxmini" readonly/></td>
                                                                <td colspan="2"><input type="text" name="encombrement-detail" id="encombrement-detail" class="input-vitenc" readonly/></td>
                                                            </tr>
                                                            <tr class="font-mini">
                                                                <td>Engagement</td>
                                                                <td colspan="3"><input type="text" name="engagement-detail" id="engagement-detail" class="input-distance" readonly/></td>
                                                            </tr>
                                                            <tr class="font-mini">
                                                                <td>Distance de saut</td>
                                                                <td colspan="3"><input type="text" name="saut-detail" id="saut-detail" class="input-distance" readonly/></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <div class="span2">
                                                    <table id="niveau" class="table table-condensed table-carac">
                                                        <thead>
                                                            <tr><td></td><td>valeur</td></tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>Niveau de départ</td>
                                                                <td><input type="text" name="niveau-val" id="niveau-val" class="input-xlmini" readonly/></td>
                                                            </tr>
                                                            <tr class="font-mini">
                                                                <td>Carac. augmentées</td>
                                                                <td><input type="text" name="caracaugm-val" id="caracaugm-val" class="input-xlmini" readonly/></td>
                                                            </tr>
                                                            <tr class="font-mini">
                                                                <td>Comp. augmentées</td>
                                                                <td><input type="text" name="compaugm-val" id="compaugm-val" class="input-xlmini"readonly/></td>
                                                            </tr>
                                                            <tr class="font-mini">
                                                                <td>Avant. augmentés</td>
                                                                <td><input type="text" name="avantaug-val" id="avantaug-val" class="input-xlmini" readonly/></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Niveau actuel</td>
                                                                <td><input type="text" name="niveauactuel-val" id="niveauactuel-val" class="input-xlmini"readonly/></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Expérience</td>
                                                                <td><input type="text" name="xp-val" id="xp-val" class="input-xlmini" readonly/></td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
				
					
                                        <div class="accordion-heading"><a class="accordiong-toggle" href="#competence" data-toggle="collapse">Compétences</a></div>
                                        <div class="collapse" id="competence">
                                            <div class="span-10">
                                                <table class="table table-condensed table-carac">
                                                    <thead>
                                                        <tr><td></td><td>valeur</td><td>don</td><td>passif</td></tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td>Résistance Corporelle</td>
                                                            <td>
                                                                <div class="input-append no-block">
                                                                    <input type="text" name="rapidite-val" id="rapidite-val" class="input-xxmini"/>
                                                                    <div class="btn-group btn-group-vertical btn-group-plusminus">
                                                                            <button type="button" class="btn"></button>
                                                                            <button type="button" class="btn"></button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                            <td>
                                                                <div class="input-append no-block">
                                                                    <input type="text" name="rapidite-val" id="rapidite-val" class="input-xxmini"/>
                                                                    <div class="btn-group btn-group-vertical btn-group-plusminus">
                                                                            <button type="button" class="btn"></button>
                                                                            <button type="button" class="btn"></button>
                                                                    </div>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
					
					<div class="span10 no-margin">
						<div class="accordion-heading"><a class="accordiong-toggle" href="#avantage" data-toggle="collapse">Avantages et Handicaps</a></div>
						<div class="collapse" id="avantage">
							
						</div>
					</div>
					
					<div class="span10 no-margin">
						<div class="accordion-heading"><a class="accordiong-toggle" href="#sante" data-toggle="collapse">Santé</a></div>
						<div class="collapse" id="sante">
							
						</div>
					</div>
					
					<div class="span10 no-margin">
						<div class="accordion-heading"><a class="accordiong-toggle" href="#inventaire" data-toggle="collapse">Inventaire</a></div>
						<div class="collapse" id="inventaire">
							
						</div>
					</div>
				</section>
				<footer class="span12">footer</footer>
			</div>
		</div>
		
		<script src="jquery.js"></script>
		<script src="bootstrap/js/bootstrap.js"></script>
		<script src="main.js"></script>
	</body>
</html>