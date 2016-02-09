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
        <?php foreach ($classement as $classement) { ?>
            <tr>
                <td><?php echo $classement->joueur->id; ?></td>
                <td><?php echo $classement->rang; ?></td>
                <td><?php echo Phalcon\Text::upper($classement->joueur->nom); ?></td>
                <td><?php echo ucwords($classement->joueur->prenom); ?></td>
                <td><?php echo ucwords($classement->joueur->pays->libelle); ?></td>
                <td><?php echo $classement->points; ?></td>
                <td><?php echo $classement->diff; ?></td>
                <td><?php echo $classement->nbMatchs; ?></td>
                <td></td>
            </tr>
        <?php } ?>
    </tbody>
</table>