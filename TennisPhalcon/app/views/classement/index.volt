<header class="page-header">
    <h1>Classemenet des joueurs</h1>
</header>

<table class="table table-striped">
    <thead>
        <tr>
            <th>#</th>
            <th>Rang</th>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Pays</th>
            <th>Points</th>
            <th>Diff</th>
            <th>nbMathcs</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        {% for classement in classement %}
            <tr>
                <td>{{ classement.joueur.id }}</td>
                <td>{{ classement.rang }}</td>
                <td>{{ classement.joueur.nom | upper }}</td>
                <td>{{ classement.joueur.prenom | capitalize }}</td>
                <td>{{ classement.joueur.pays.libelle | capitalize }}</td>
                <td>{{ classement.points }}</td>
                <td>{{ classement.diff }}</td>
                <td>{{ classement.nbMatchs }}</td>
                <td></td>
            </tr>
        {% endfor %}
    </tbody>
</table>