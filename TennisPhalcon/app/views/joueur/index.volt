<section class="page-header">
    <h3>Liste des joueurs</h3>
</section>

<div class="panel panel-default">
    <header class="panel-heading">
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <a href="{{ url('joueur/add') }}" class="btn btn-success">Ajouter un joueur</a>
            </div>

            <div class="col-xs-12 col-md-8">
                <div class="input-group">
                    <span class="input-group-addon">Filtre: </span>
                    <input type="text" class="form-control">
                <span class="input-group-btn">
                    <button class="btn btn-default" type="button">Appliquer</button>
                </span>
                </div>
            </div>
        </div>
    </header>
    <section class="panel-body">
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>
                    Nom
                    <div class="btn-group">
                        <a href="{{ url('joueur/index/' ~ page ~ '/nom/asc') }}" class="btn btn-default btn-xs">
                            <span class="glyphicon glyphicon-chevron-up"></span>
                        </a>
                        <a href="{{ url('joueur/index/' ~ page ~ '/nom/desc') }}" class="btn btn-default btn-xs">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                    </div>
                </th>
                <th>
                    Prénom
                    <div class="btn-group">
                        <a href="{{ url('joueur/index/' ~ page ~ '/prenom/asc') }}" class="btn btn-default btn-xs">
                            <span class="glyphicon glyphicon-chevron-up"></span>
                        </a>
                        <a href="{{ url('joueur/index/' ~ page ~ '/prenom/desc') }}" class="btn btn-default btn-xs">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                    </div>
                </th>
                <th>
                    Pays
                    <div class="btn-group">
                        <a href="{{ url('joueur/index/' ~ page ~ '/codePays/asc') }}" class="btn btn-default btn-xs">
                            <span class="glyphicon glyphicon-chevron-up"></span>
                        </a>
                        <a href="{{ url('joueur/index/' ~ page ~ '/codePays/desc') }}" class="btn btn-default btn-xs">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                    </div>
                </th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            {% for joueur in joueurs %}
            <tr>
                <td>{{ joueur.id }}</td>
                <td>{{ joueur.nom | upper }}</td>
                <td>{{ joueur.prenom | capitalize }}</td>
                <td>{{ joueur.pays.libelle | capitalize }}</td>
                <td>
                    {{ link_to('joueur/view/' ~ joueur.id, '<span class="glyphicon glyphicon-eye-open"></span>', 'class': 'btn btn-xs btn-info') }}
                    {{ link_to('joueur/delete/' ~ joueur.id, '<span class="glyphicon glyphicon-trash"></span>', 'class': 'btn btn-xs btn-danger', 'onclick': 'return confirm("Voulez-vous vraiment supprimer ce joueur ?")') }}
                </td>
            </tr>
            {% endfor %}
            </tbody>
        </table>
    </section>
    <footer class="panel-footer">
        <nav>
            <ul class="pagination pagination-sm">
                <li class="{{ page <= 1 ? 'disabled' : '' }}">
                    {% if page <= 1 %}
                    <a>&laquo;</a>
                    {% else %}
                    {{ link_to('joueur/index/' ~ (page - 1) ~ '/' ~ col ~ '/' ~ order, '&laquo;') }}
                    {% endif %}
                </li>

                {% for i in 1..nbPage %}
                <li class="{{ page == i ? 'active': '' }}">{{ link_to('joueur/index/' ~ i ~ '/' ~ col ~ '/' ~ order, i) }}</li>
                {% endfor %}


                <li class="{{ page >= nbPage ? 'disabled' : '' }}">
                    {% if page >= nbPage %}
                    <a>&raquo;</a>
                    {% else %}
                    {{ link_to('joueur/index/' ~ (page + 1) ~ '/' ~ col ~ '/' ~ order, '&raquo;') }}
                    {% endif %}
                </li>
            </ul>
        </nav>
    </footer>
</div>