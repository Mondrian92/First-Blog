<?php
    include 'modules/header.php';    
?>

<div class="m-1 pt-2">    
    <div class="card bg-dark text-white mb-3 col-md-12">
        <div class="card-header"><h2>Ultimi Post</h2></div>
        <?php foreach ($newrepo->getAll() as $post): ?>
            <div class="card-body text-white">
                <h3 class="card-title"><?php echo($post["title"]); ?></h3>
                <p class="card-text"><?php echo($post["content"]); ?></p>
                <p class="card-text">Tags
                    <? foreach($post["tag"] as $tag) ?>
                        <a href=""><?php echo($tag); ?></a>
                </p>
            </div>
        <?php endforeach; ?>
    </div>
</div>
<?php
    include 'modules/footer.php';
?>