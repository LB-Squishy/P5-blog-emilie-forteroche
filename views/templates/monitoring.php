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
                <th>
                    <div class="articleSort">
                        <p>Titre de l'Article</p>
                        <div class="articleSort__arrow">
                            <a class="articleSort__arrow--btn <?= $sortName == 'title' && $sortOrder == 'ASC' ? 'articleSort__arrow--active' : '' ?>" href="index.php?action=monitoring&sortName=title&sortOrder=ASC">
                                <i class="fa-solid fa-sort-up"></i>
                            </a>
                            <a class="articleSort__arrow--btn <?= $sortName == 'title' && $sortOrder == 'DESC' ? 'articleSort__arrow--active' : '' ?>" href="index.php?action=monitoring&sortName=title&sortOrder=DESC">
                                <i class="fa-solid fa-sort-down"></i>
                            </a>
                        </div>
                    </div>
                </th>
                <th>
                    <div class="articleSort">
                        <p>Date de Publication</p>
                        <div class="articleSort__arrow">
                            <a class="articleSort__arrow--btn <?= $sortName == 'date_creation' && $sortOrder == 'ASC' ? 'articleSort__arrow--active' : '' ?>" href="index.php?action=monitoring&sortName=date_creation&sortOrder=ASC">
                                <i class="fa-solid fa-sort-up"></i></a>
                            <a class="articleSort__arrow--btn <?= $sortName == 'date_creation' && $sortOrder == 'DESC' ? 'articleSort__arrow--active' : '' ?>" href="index.php?action=monitoring&sortName=date_creation&sortOrder=DESC">
                                <i class="fa-solid fa-sort-down"></i>
                            </a>
                        </div>
                    </div>
                </th>
                <th>
                    <div class="articleSort">
                        <p>Nombre de Vues</p>
                        <div class="articleSort__arrow">
                            <a class="articleSort__arrow--btn <?= $sortName == 'view_count' && $sortOrder == 'ASC' ? 'articleSort__arrow--active' : '' ?>" href="index.php?action=monitoring&sortName=view_count&sortOrder=ASC">
                                <i class="fa-solid fa-sort-up"></i></a>
                            <a class="articleSort__arrow--btn <?= $sortName == 'view_count' && $sortOrder == 'DESC' ? 'articleSort__arrow--active' : '' ?>" href="index.php?action=monitoring&sortName=view_count&sortOrder=DESC">
                                <i class="fa-solid fa-sort-down"></i>
                            </a>
                        </div>
                    </div>
                </th>
                <th>
                    <div class="articleSort">
                        <p>Nombre de Commentaires</p>
                        <div class="articleSort__arrow">
                            <a class="articleSort__arrow--btn <?= $sortName == 'comment_count' && $sortOrder == 'ASC' ? 'articleSort__arrow--active' : '' ?>" href="index.php?action=monitoring&sortName=comment_count&sortOrder=ASC">
                                <i class="fa-solid fa-sort-up"></i></a>
                            <a class="articleSort__arrow--btn <?= $sortName == 'comment_count' && $sortOrder == 'DESC' ? 'articleSort__arrow--active' : '' ?>" href="index.php?action=monitoring&sortName=comment_count&sortOrder=DESC">
                                <i class="fa-solid fa-sort-down"></i>
                            </a>
                        </div>
                    </div>
                </th>
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
                        <a class="commentsLink-btn" href="index.php?action=commentArticle&idArticle=<?= $article->getId() ?>&titleArticle=<?= $article->getTitle() ?>"><i class="fa fa-pen-to-square"></i></a>
                    </div>
                </td>
            </tr>
            <?php $lignColorClass = ($lignColorClass == 'lightbackground') ? 'darkbackground' : 'lightbackground'; ?>
        <?php } ?>
        </tbody>
    </table>
</div>