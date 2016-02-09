<div class="panel panel-success">
    <header class="panel-heading">
        Vue de {{ joueur.prenom }} {{ joueur.nom | upper }}
    </header>
    <section class="panel-body">
        <div class="form-group">
            <label class="form-label">Nom du joueur</label>
            <input type="text" class="form-control" value="{{ joueur.nom | upper }}" disabled>
        </div>
        <div class="form-group">
            <label class="form-label">Prénom du joueur</label>
            <input type="text" class="form-control" value="{{ joueur.prenom }}" disabled>
        </div>
    </section>
</div>