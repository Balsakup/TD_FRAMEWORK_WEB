<form action="#" method="POST">

    <div class="panel panel-default">
        <header class="panel-heading">Ajouter un joueur</header>
        <section class="panel-body">
            <div class="form-group">
                <label for="nom" class="form-label">Nom du joueur</label>
                <input type="text" class="form-control" name="nom" id="nom" placeholder="Nom du joueur" required>
            </div>

            <div class="form-group">
                <label for="prenom" class="form-label">Prénom du joueur</label>
                <input type="text" class="form-control" name="prenom" id="prenom" placeholder="Prénom du joueur" required>
            </div>

            <div class="form-group">
                <label for="codePays" class="form-label">Pays du joueur</label>
                <select class="form-control" name="codePays" id="codePays">
                    {% for pays in pays %}
                    <option value="{{ pays.code }}">{{ pays.libelle | capitalize }}</option>
                    {% endfor %}
                </select>
            </div>
        </section>
        <footer class="panel-footer">
            <button type="submit" class="btn btn-success">Ajouter</button>
            <button type="reset" class="btn btn-danger">Effacer</button>
        </footer>
    </div>

</form>