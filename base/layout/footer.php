<?php
require_once "model/database.php";
$services = getAllRows("service");
?>
<footer class="page-footer">

    <div class="container">

        <div class="footer-logo">
            <a href="index.php"><img src="./images/logo-digital-hair-w.png" alt="Digital Hair"></a>
        </div>

        <nav class="footer-services">
            <ul>
                <?php foreach ($services as $service) : ?>
                    <li><?= $service["label"]; ?></li>
                <?php endforeach; ?>
            </ul>
        </nav>

        <nav class="footer-nav">

            <ul>
                <li><a class="btn-rs btn-fb" href="" title="Notre page Facebook" target="_blank">Facebook</a></li>
                <li><a class="btn-rs btn-g" href="" title="Notre page Google +" target="_blank">Google +</a></li>
                <li><a class="btn-rs btn-tw" href="" title="Notre page Twitter" target="_blank">Twitter</a></li>
                <li><a class="btn-rs btn-ins" href="" title="Notre page Instagram" target="_blank">Instagram</a></li>
            </ul>

            <p>DigitalHair<br>Digital Campus 2019</p>

        </nav>

    </div>

</footer><!-- .page-footer -->

</body>

</html>