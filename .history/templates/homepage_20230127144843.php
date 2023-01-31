<?php $title = "Le blog de l'AVBN"; ?>

<?php ob_start(); ?>
<h1>Le super blog de l'AVBN !</h1>
<p>Derniers billets du blog :</p>

<?php
foreach ($posts as $post) {
?>
    <div class="news">
        <h3>
            <?= htmlspecialchars($post['title']); ?>
            <em>le <?= $post['french_creation_date']; ?></em>
        </h3>
        <p>
            <?= nl2br(htmlspecialchars($post['content'])); ?>
            <br />
            <em><a href=".php?action=post&id=<?= urlencode($post['identifier']) ?>">Commentaires</a></em>
            <!-- Cette fonction est utile lors de l'encodage d'une chaîne de caractères à utiliser dans la partie d'une URL, comme façon simple de passer des variables vers la page suivante -->
        </p>
    </div>
<?php
}
?>
<?php $content = ob_get_clean(); ?>

<?php require('layout.php') ?>

