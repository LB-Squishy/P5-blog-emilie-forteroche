<?php 
    /** 
     * Affichage de la partie admin : liste des articles avec un bouton "modifier" pour chacun. 
     * Et un formulaire pour ajouter un article. 
     */
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
        <?php foreach ($articles as $article) { ?>
            <tr>
            <td><?= $article->getTitle() ?></td>
            <td><?= ucfirst(Utils::convertDateToFrenchFormat($article->getDateCreation())) ?></td>
            <td><?= $article->getViewCount() ?></td>
            <td>
                <div class="commentsLink">
                    <?= $commentManager->getCommentsCountByArticleId($article->getId()) ?>
                    <a class="commentsLink-btn" href="#"><i class="fa fa-pen-to-square"></i></a>
                </div>
            </td>
        </tr>
        <?php } ?>
        </tbody>
    </table>
</div>