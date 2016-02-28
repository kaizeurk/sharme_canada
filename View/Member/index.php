<?php
$prenomNom = $this->clean($member['prenom']) . ' ' . $this->clean($member['nom']);
$this->title = $prenomNom;
?>


<h2 class="text-center">Informations personnelles de <?= $prenomNom ?></h2>
<div class="well">
    <form class="form-horizontal" role="form" action="member/modifier" method="post">
        <div class="form-group">
            <label class="col-sm-4 col-md-5 control-label">Nom</label>
            <div class="col-sm-6 col-md-4">
                <input name="nom" type="text" class="form-control" required value="<?= $this->clean($member['nom']) ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-md-5 control-label">Prénom</label>
            <div class="col-sm-6 col-md-4">
                <input name="prenom" type="text" class="form-control" required value="<?= $this->clean($member['prenom']) ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-md-5 control-label">Adresse</label>
            <div class="col-sm-6 col-md-4">
                <input name="adresse" type="text" class="form-control" required value="<?= $this->clean($member['adresse']) ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-md-5 control-label">Code postal</label>
            <div class="col-sm-3 col-md-2">
                <input name="codePostal" type="text" class="form-control" required value="<?= $this->clean($member['codePostal']) ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-md-5 control-label">Ville</label>
            <div class="col-sm-6 col-md-4">
                <input name="ville" type="text" class="form-control" required value="<?= $this->clean($member['ville']) ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-md-5 control-label">Courriel</label>
            <div class="col-sm-6 col-md-4">
                <input name="courriel" type="email" class="form-control" required value="<?= $this->clean($member['courriel']) ?>">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-4 col-md-5 control-label">Mot de passe</label>
            <div class="col-sm-6 col-md-4">
                <input name="mdp" type="password" class="form-control" required value="<?= $this->clean($member['motDePasse']) ?>">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-5">
                <button type="submit" class="btn btn-default btn-primary"><span class="glyphicon glyphicon-edit"></span> Mettre à jour</button>
            </div>
        </div>
    </form>
</div>


