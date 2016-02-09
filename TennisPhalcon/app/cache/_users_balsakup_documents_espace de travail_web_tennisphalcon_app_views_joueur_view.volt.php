<div class="panel panel-success">
    <header class="panel-heading">
        Vue de <?php echo $joueur->prenom; ?> <?php echo Phalcon\Text::upper($joueur->nom); ?>
    </header>
    <section class="panel-body">
        <div class="form-group">
            <label class="form-label">Nom du joueur</label>
            <input type="text" class="form-control" value="<?php echo Phalcon\Text::upper($joueur->nom); ?>" disabled>
        </div>
        <div class="form-group">
            <label class="form-label">Prénom du joueur</label>
            <input type="text" class="form-control" value="<?php echo $joueur->prenom; ?>" disabled>
        </div>
    </section>
</div>