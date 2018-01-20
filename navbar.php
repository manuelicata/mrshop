<!DOCTYPE html>
<html lang="it">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
<body>
    
<?php 

//var_dump($_SERVER['PHP_SELF']);

?>
    
<nav class="navbar navbar-expand-md navbar-light bg-faded border">
    <a href="index.php" class="navbar-brand">MR SHOP</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar1">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="navbar-collapse collapse" id="navbar1">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link <?= stristr($_SERVER['PHP_SELF'],'smartphone')?'active':''?>" href="smartphone.php">SMARTPHONE</a> <!-- vedi NOTA 1 a fine pagina -->
            </li>
            <li class="nav-item">
                <a class="nav-link <?= stristr($_SERVER['PHP_SELF'],'notebook')?'active':''?>" href="notebook.php">NOTEBOOK</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= stristr($_SERVER['PHP_SELF'],'fotografia')?'active':''?>" href="fotografia.php">FOTOGRAFIA</a>
            </li>
            <li class="nav-item">
                <a class="nav-link <?= stristr($_SERVER['PHP_SELF'],'audio')?'active':''?>" href="audio.php">AUDIO</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link <?= stristr($_SERVER['PHP_SELF'],'accessori')?'active':''?>" href="accessori.php">ACCESSORI</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link <?= stristr($_SERVER['PHP_SELF'],'contatti')?'active':''?>" href="contatti.php">CONTATTI</a>
            </li>
        </ul>
        <form class="mx-2 my-auto d-inline w-100" method="GET" action="index.php">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="..." name="search" id="search" value="<?= $search ?>">
                <span class="input-group-btn">
                    <button class="btn btn-outline-secondary" type="button">CERCA</button>
                </span>
            </div>
        </form>
    </div>
</nav>
</body>
</html> 