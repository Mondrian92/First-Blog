<?php
    include 'modules/header.php';    
?>

<div class="m-1 pt-2">    
    <div class="card bg-dark text-white mb-3 col-md-12">
        <?php if (isset($_GET['tag'])) { ?>
            <div class="card-header"><h2>Ultimi Post con tag: <?= $_GET['tag']; ?></h2></div>
            <?php foreach ($newrepo->getAllByTag($_GET['tag']) as $post): ?>
                <div class="card-body text-white">
                    <h3 class="card-title"><?php echo($post["title"]); ?></h3>
                    <p class="card-text"><?php echo($post["content"]); ?></p>
                    <p class="card-text">Tags
                        <?php foreach($post["tag"] as $tag): ?>
                            <a href="index.php?tag=<?php echo $tag ?>"><?php echo($tag); ?></a>
                        <?php endforeach; ?>
                    </p>
                </div>
            <?php endforeach; ?>
        <?php } else { ?>
            <div class="card-header"><h2>Ultimi Post</h2></div>
            <?php foreach ($newrepo->getAll() as $post): ?>
                <div class="card-body text-white">
                    <h3 class="card-title"><?php echo($post["title"]); ?></h3>
                    <p class="card-text"><?php echo($post["content"]); ?></p>
                    <p class="card-text">Tags
                        <?php foreach($post["tag"] as $tag): ?>
                            <a href="index.php?tag=<?php echo $tag ?>"><?php echo($tag); ?></a>
                        <?php endforeach; ?>
                    </p>
                </div>
            <?php endforeach; ?>
        <?php } ?>
    </div>
</div>

<?php
    include 'modules/footer.php';
?>