<?php
    include 'modules/header.php';
?>
    
<div class="m-5 p-5 row justify-content-center">
    <form class="form-group p-3 mb-2 bg-light text-dark rounded col-md-4" action="www.example.com/login.php" method="POST">
        <fieldset>
            <legend> <b>Login Data </b></legend>
            <label><b>Email: </b></label>
            <input class="form-control" type="email" name="email">
            <br />
            <label><b>Password: </b></label>
            <input class="form-control" type="password" name="password">
            <br />
            <button type="submit" class="btn btn-secondary btn-lg">Submit</button>
        </fieldset>
    </form>
</div>

<?php
    include 'modules/footer.php';
?>