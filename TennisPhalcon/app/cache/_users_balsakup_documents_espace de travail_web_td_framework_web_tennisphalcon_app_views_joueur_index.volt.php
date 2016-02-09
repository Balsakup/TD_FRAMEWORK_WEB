<section class="page-header">
    <h3>Liste des joueurs</h3>
</section>

<div class="panel panel-default">
    <header class="panel-heading">
        <div class="row">
            <div class="col-xs-12 col-md-4">
                <a href="<?php echo $this->url->get('joueur/add'); ?>" class="btn btn-success">Ajouter un joueur</a>
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
                        <a href="<?php echo $this->url->get('joueur/index/' . $page . '/nom/asc'); ?>" class="btn btn-default btn-xs">
                            <span class="glyphicon glyphicon-chevron-up"></span>
                        </a>
                        <a href="<?php echo $this->url->get('joueur/index/' . $page . '/nom/desc'); ?>" class="btn btn-default btn-xs">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                    </div>
                </th>
                <th>
                    Prénom
                    <div class="btn-group">
                        <a href="<?php echo $this->url->get('joueur/index/' . $page . '/prenom/asc'); ?>" class="btn btn-default btn-xs">
                            <span class="glyphicon glyphicon-chevron-up"></span>
                        </a>
                        <a href="<?php echo $this->url->get('joueur/index/' . $page . '/prenom/desc'); ?>" class="btn btn-default btn-xs">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                    </div>
                </th>
                <th>
                    Pays
                    <div class="btn-group">
                        <a href="<?php echo $this->url->get('joueur/index/' . $page . '/codePays/asc'); ?>" class="btn btn-default btn-xs">
                            <span class="glyphicon glyphicon-chevron-up"></span>
                        </a>
                        <a href="<?php echo $this->url->get('joueur/index/' . $page . '/codePays/desc'); ?>" class="btn btn-default btn-xs">
                            <span class="glyphicon glyphicon-chevron-down"></span>
                        </a>
                    </div>
                </th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($joueurs as $joueur) { ?>
            <tr>
                <td><?php echo $joueur->id; ?></td>
                <td><?php echo Phalcon\Text::upper($joueur->nom); ?></td>
                <td><?php echo ucwords($joueur->prenom); ?></td>
                <td><?php echo ucwords($joueur->pays->libelle); ?></td>
                <td>
                    <?php echo $this->tag->linkTo(array('joueur/view/' . $joueur->id, '<span class="glyphicon glyphicon-eye-open"></span>', 'class' => 'btn btn-xs btn-info')); ?>
                    <?php echo $this->tag->linkTo(array('joueur/delete/' . $joueur->id, '<span class="glyphicon glyphicon-trash"></span>', 'class' => 'btn btn-xs btn-danger', 'onclick' => 'return confirm("Voulez-vous vraiment supprimer ce joueur ?")')); ?>
                </td>
            </tr>
            <?php } ?>
            </tbody>
        </table>
    </section>
    <footer class="panel-footer">
        <nav>
            <ul class="pagination pagination-sm">
                <li class="<?php echo ($page <= 1 ? 'disabled' : ''); ?>">
                    <?php if ($page <= 1) { ?>
                    <a>&laquo;</a>
                    <?php } else { ?>
                    <?php echo $this->tag->linkTo(array('joueur/index/' . ($page - 1) . '/' . $col . '/' . $order, '&laquo;')); ?>
                    <?php } ?>
                </li>

                <?php foreach (range(1, $nbPage) as $i) { ?>
                <li class="<?php echo ($page == $i ? 'active' : ''); ?>"><?php echo $this->tag->linkTo(array('joueur/index/' . $i . '/' . $col . '/' . $order, $i)); ?></li>
                <?php } ?>


                <li class="<?php echo ($page >= $nbPage ? 'disabled' : ''); ?>">
                    <?php if ($page >= $nbPage) { ?>
                    <a>&raquo;</a>
                    <?php } else { ?>
                    <?php echo $this->tag->linkTo(array('joueur/index/' . ($page + 1) . '/' . $col . '/' . $order, '&raquo;')); ?>
                    <?php } ?>
                </li>
            </ul>
        </nav>
    </footer>
</div>