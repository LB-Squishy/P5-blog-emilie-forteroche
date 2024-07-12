<?php
    /**
     * Affichage de Liste des articles. 
     */
?>

<div class="articleList">
    <?php foreach($articles as $article) { ?>
        <article class="article">
            <h2><?= Utils::format($article->getTitle()) ?></h2>
            <span class="quotation">«</span>
            <p><?= Utils::format($article->getContent(400)) ?></p>
            
            <div class="footer">
                <span class="info"> <?= ucfirst(Utils::convertDateToFrenchFormat($article->getDateCreation())) ?></span>
                <a class="info" href="index.php?action=showArticle&id=<?= $article->getId() ?>">Lire +</a>
            </div>
        </article>
    <?php } ?>
</div>