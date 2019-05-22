<?php
$delimiter = explode("/", $_SERVER["REQUEST_URI"]);
$filename = end($delimiter);
$menus = [
    [
        "item" => "Accueil",
        "url" => "index.php"
    ],
    [
        "item" => "Qui sommes-nous ?",
        "url" => ""
    ],
    [
        "item" => "Services",
        "url" => ""
    ],
    [
        "item" => "Témoignages",
        "url" => ""
    ],
    [
        "item" => "Contact",
        "url" => "contact.php"
    ]
];
?>
<nav class="main-nav container">

    <div class="header-logo"><a href="index.php"><img src="./images/logo-digital-hair.png" alt="Digital Hair"></a></div>

    <ul>
        <?php foreach ($menus as $menu) : ?>
            <li>
                <a href="<?= $menu["url"]; ?>" class="<?php if ($filename == $menu["url"]) : ?>active<?php endif; ?>">
                    <?= $menu["item"]; ?>
                </a>
            </li>
        <?php endforeach; ?>
    </ul>

</nav>