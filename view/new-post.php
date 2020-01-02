<?php
    include 'modules/header.php';
?>

<div class="m-5 p-5 row justify-content-center">
    <form class="form-group p-3 mb-2 bg-light text-dark rounded col-md-4" method="post" action="core/topost.php">
        <fieldset>
            <legend><b>Aggiungi Post</b></legend>
            <label><b>Titolo:</b></label>
            <input type="text" name="title" size="30" class="form-control">
            <br>
            <label><b>Contenuto:</b></label>
            <textarea name="content" id="" cols="30" rows="8" class="form-control">Scrivi qui il tuo post</textarea>
            <br>
            <label><b>Tag:</b></label>
            <input type="text" name="tag" size="30" class="form-control">
            <br>
            <button type="submit" class="btn btn-secondary btn-lg">Aggiungi</button>
        </fieldset>
    </form>
</div> 

<?php
    include 'modules/footer.php';
?>