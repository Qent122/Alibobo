<main>
    <h1>main</h1>

    <?php

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        debug($_GET);
    } else {
        $page = "accueil";
    }





    ?>
</main>