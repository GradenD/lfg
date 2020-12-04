<?php 
    require_once 'tmp/header.php';
?>
<main role="main" class="wrapper">
<?php 
	if (isset($_GET['page'])){
        $page=Router::render($_GET['page']);
    }
    else{
        $page=Router::render('index');
    }
?>
</main>
<?php
    require_once 'tmp/footer.php';
?>
