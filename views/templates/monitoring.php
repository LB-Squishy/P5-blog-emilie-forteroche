<?php 
    /** 
     * Affichage de la partie monitoring : liste des articles avec le nombre de vue et de commentaires.
     * Ainsi qu'un bouton "modifier" pour administrer les commentaires. 
     */
?>

<h2>Statistiques des articles</h2>

<div class="adminArticle">
    <table>
        <thead>
            <tr>
                <th>
                    <?= Utils::tableSort("Titre de l'Article", "title", $currentSortName, $sortOrder, "index.php?action=monitoring") ?>          
                </th>
                <th>
                    <?= Utils::tableSort("Date de Publication", "date_creation", $currentSortName, $sortOrder, "index.php?action=monitoring") ?>
                </th>
                <th>
                    <?= Utils::tableSort("Nombre de Vues", "view_count", $currentSortName, $sortOrder, "index.php?action=monitoring") ?>
                </th>
                <th>
                    <?= Utils::tableSort("Nombre de Commentaires", "comment_count", $currentSortName, $sortOrder, "index.php?action=monitoring") ?>
                </th>
            </tr>
        </thead>
        <tbody>
        <?php $lignColorClass = 'lightbackground' ?>
        <?php foreach ($articles as $article) { ?>
            <tr class = "<?= $lignColorClass ?>">
                <td><?= htmlspecialchars($article->getTitle()) ?></td>
                <td><?= ucfirst(Utils::convertDateToFrenchFormat($article->getDateCreation())) ?></td>
                <td><?= htmlspecialchars($article->getViewCount()) ?></td>
                <td>
                    <div class="commentsLink">
                        <?= htmlspecialchars($article->getCommentCount()) ?>
                        <a class="commentsLink-btn" href="index.php?action=commentArticle&idArticle=<?= htmlspecialchars($article->getId()) ?>&titleArticle=<?= htmlspecialchars($article->getTitle()) ?>"><i class="fa fa-pen-to-square"></i></a>
                    </div>
                </td>
            </tr>
            <?php $lignColorClass = ($lignColorClass == 'lightbackground') ? 'darkbackground' : 'lightbackground'; ?>
        <?php } ?>
        </tbody>
    </table>
</div>