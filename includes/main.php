<main>
    <div id="container">

        <div>

            <svg viewbox="0 0 120 120">
                <defs>
                    <clipPath id="fade-cut-out">
                        <path d="M 95 65 L 60 100 L 25 65 A 25 25 90 0 1 60 29 A 25 25 90 0 1 95 65 Z" />
                    </clipPath>
                </defs>
                <path class="f" d="M 57 100 H 63 V 98 H 55 V 96 H 67 V 94 H 51 V 92 H 71 V 90 H 47 V 88 H 75 V 86 H 43 V 84 H 79 V 82 H 39 V 80 H 83 V 78 H 35 V 76 H 87 V 74 H 31 V 72 H 91 V 70 H 27 V 68 H 95 V 66 H 23 V 64 H 99 V 62 H 20 V 60 H 101 V 58 H 18 V 56 H 103 V 54 H 17 V 52 H 103 V 50 H 17 V 48 H 103 V 46 H 17 V 44 H 103 V 42 H 17 V 40 H 103 V 38 H 18 V 36 H 101 V 34 H 20 V 32 H 99 V 30 H 23 V 28 H 95 V 26 H 27 V 24 H 89 V 22 H 31" fill="none" stroke="red" stroke-width="2" stroke-dasharray="2520" stroke-dashoffset="2520" clip-path="url(#fade-cut-out)">
                    <animate attributeName="stroke-dashoffset" dur="30s" values="2520; 0" repeatCount="indefinite" />
                </path>

                <path d="M-5 -11 H 5 L 1 -1 H -1Z" fill="silver">
                    <animateMotion dur="30s" repeatCount="indefinite" path="M 57 100 H 63 V 98 H 55 V 96 H 67 V 94 H 51 V 92 H 71 V 90 H 47 V 88 H 75 V 86 H 43 V 84 H 79 V 82 H 39 V 80 H 83 V 78 H 35 V 76 H 87 V 74 H 31 V 72 H 91 V 70 H 27 V 68 H 95 V 66 H 23 V 64 H 99 V 62 H 20 V 60 H 101 V 58 H 18 V 56 H 103 V 54 H 17 V 52 H 103 V 50 H 17 V 48 H 103 V 46 H 17 V 44 H 103 V 42 H 17 V 40 H 103 V 38 H 18 V 36 H 101 V 34 H 20 V 32 H 99 V 30 H 23 V 28 H 95 V 26 H 27 V 24 H 89 V 22 H 31" />
                </path>
                <path d="M -13 -11 H 13 V -28 H -13 Z" fill="#333">
                    <animateMotion dur="30s" repeatCount="indefinite" path="M 57 100 H 63 V 98 H 55 V 96 H 67 V 94 H 51 V 92 H 71 V 90 H 47 V 88 H 75 V 86 H 43 V 84 H 79 V 82 H 39 V 80 H 83 V 78 H 35 V 76 H 87 V 74 H 31 V 72 H 91 V 70 H 27 V 68 H 95 V 66 H 23 V 64 H 99 V 62 H 20 V 60 H 101 V 58 H 18 V 56 H 103 V 54 H 17 V 52 H 103 V 50 H 17 V 48 H 103 V 46 H 17 V 44 H 103 V 42 H 17 V 40 H 103 V 38 H 18 V 36 H 101 V 34 H 20 V 32 H 99 V 30 H 23 V 28 H 95 V 26 H 27 V 24 H 89 V 22 H 31" />
                </path>
                <path d="M -13 -11 H 13 V -28 H -13 Z M -120 -28 H 120 V -36 H -120 Z" fill="#555">
                    <animateMotion dur="30s" repeatCount="indefinite" path="M 57 100 H 63 V 98 H 55 V 96 H 67 V 94 H 51 V 92 H 71 V 90 H 47 V 88 H 75 V 86 H 43 V 84 H 79 V 82 H 39 V 80 H 83 V 78 H 35 V 76 H 87 V 74 H 31 V 72 H 91 V 70 H 27 V 68 H 95 V 66 H 23 V 64 H 99 V 62 H 20 V 60 H 101 V 58 H 18 V 56 H 103 V 54 H 17 V 52 H 103 V 50 H 17 V 48 H 103 V 46 H 17 V 44 H 103 V 42 H 17 V 40 H 103 V 38 H 18 V 36 H 101 V 34 H 20 V 32 H 99 V 30 H 23 V 28 H 95 V 26 H 27 V 24 H 89 V 22 H 31" />
                </path>
            </svg>
        </div>
    </div>
    </div>


    <h4 id="main">Welcome to the Main</h4>

    <?php


    // Syntaxe conventionnelle
    // if (isset($_GET['page'])) {
    //     $page = $_GET['page'];
    //     debug($_GET);
    // } else {
    //     $page = "accueil";
    // }

    // Operateur ternaire
    // $page = isset($_GET['page']) ? $_GET['page'] : "accueil";

    // Null coalescent operator
    $page = $_GET['page'] ?? "accueil";
    autoInclude($page);




    ?>
</main>