<?php 
    /** 
     * Affichage de la partie admin : liste des articles avec un bouton "modifier" pour chacun. 
     * Et un formulaire pour ajouter un article. 
     */
?>

<h2>Edition des articles</h2>

<div class="adminArticle">
    <table>
        <thead>
            <tr>
                <th>
                    <p>Nom de l'article</p>
                </th>
                <th>
                    <p>Contenu</p>
                </th>
                <th>
                    <p>Editer</p>
                </th>
                <th>
                    <p>Supprimer</p>
                </th>
            </tr>
        </thead>
        <tbody>
        <?php $lignColorClass = 'lightbackground' ?>
        <?php foreach ($articles as $article) { ?>
            <tr class = "<?= $lignColorClass ?>">
                <td><?= $article->getTitle() ?></td>
                <td><?= $article->getContent(200) ?></td>
                <td>
                    <div class="delete-btn">
                        <a class="submit" href="index.php?action=showUpdateArticleForm&id=<?= $article->getId() ?>"><i class="fa fa-pen-to-square"></i></a>
                    </div>
                </td>
                <td>
                    <div class="delete-btn">
                        <a class="submit" href="index.php?action=deleteArticle&id=<?= $article->getId() ?>" <?= Utils::askConfirmation("Êtes-vous sûr de vouloir supprimer cet article ?") ?> ><i class="fa fa-trash"></i></a>
                    </div>
                </td>
            </tr>
            <?php $lignColorClass = ($lignColorClass == 'lightbackground') ? 'darkbackground' : 'lightbackground'; ?>
        <?php } ?>
        </tbody>
    </table>
</div>

<a class="submit" href="index.php?action=showUpdateArticleForm">Ajouter un article</a>