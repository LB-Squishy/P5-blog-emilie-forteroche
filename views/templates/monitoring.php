<?php 
    /** 
     * Affichage de la partie admin : liste des articles avec un bouton "modifier" pour chacun. 
     * Et un formulaire pour ajouter un article. 
     */
    // var_dump($articles);
    // exit;
?>

<h2>Statistiques des articles</h2>

<div class="adminArticle">
    <table>
        <thead>
            <tr>
                <th>Titre de l'Article</th>
                <th>Date de Publication</th>
                <th>Nombre de Vues</th>
                <th>Nombre de Commentaires</th>
            </tr>
        </thead>
        <tbody>
        <?php $lignColorClass = 'lightbackground' ?>
        <?php foreach ($articles as $article) { ?>
            <tr class = "<?= $lignColorClass ?>">
                <td><?= $article->getTitle() ?></td>
                <td><?= ucfirst(Utils::convertDateToFrenchFormat($article->getDateCreation())) ?></td>
                <td><?= $article->getViewCount() ?></td>
                <td>
                    <div class="commentsLink">
                        <?= $article->getCommentCount() ?>
                        <a class="commentsLink-btn" href="#"><i class="fa fa-pen-to-square"></i></a>
                    </div>
                </td>
            </tr>
            <?php $lignColorClass = ($lignColorClass == 'lightbackground') ? 'darkbackground' : 'lightbackground'; ?>
        <?php } ?>
        </tbody>
    </table>
</div>