<?php 
    /** 
     * Affichage des commentaires d'un article : liste des commentaires avec un bouton "supprimer" pour chacun. 
     */
?>

<h2>Commentaires de l'article :<br><br>"<?php echo $titleArticle ?>"</h2>

<div class="adminArticle">
    <table>
        <thead>
            <tr>
                <th>
                    <p>Nom de l'auteur</p>
                </th>
                <th>
                    <p>Contenu</p>
                </th>
                <th>
                    <p>Date de Publication</p>
                </th>
                <th>
                    <p>Supprimer</p>
                </th>
            </tr>
        </thead>
        <tbody>
        <?php $lignColorClass = 'lightbackground' ?>
        <?php foreach ($comments as $comment) { ?>
            <tr class = "<?= $lignColorClass ?>">
                <td><?= $comment->getPseudo() ?></td>
                <td><?= $comment->getContent() ?></td>
                <td><?= ucfirst(Utils::convertDateToFrenchFormat($comment->getDateCreation())) ?></td>
                <td>
                    <div class="delete-btn">
                        <a class="commentsLink-btn" href="index.php?action=deleteComment&idComment=<?= $comment->getId() ?>&idArticle=<?= $idArticle ?>"<?= Utils::askConfirmation("Êtes-vous sûr de vouloir supprimer ce commentaire ?") ?>>
                            <i class="fa fa-trash"></i>
                        </a>     
                    </div>
                </td>
            </tr>
            <?php $lignColorClass = ($lignColorClass == 'lightbackground') ? 'darkbackground' : 'lightbackground'; ?>
        <?php } ?>
        </tbody>
    </table>
</div>