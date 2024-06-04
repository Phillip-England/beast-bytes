<?php

class Template {

    public static function base(string $title, callable $content) {
        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <script src="https://unpkg.com/htmx.org@1.9.12"></script>
                <link rel="stylesheet" href="/static/css/output.css">
                <script src='/static/js/index.js'></script>
                <title><?= $title . " - Beast Bytes" ?></title>
            </head>
            <body hx-boost='true'>
                <div>
                    <?= Component::header() ?>
                    <?= Component::navMenu() ?>
                    <?= $content() ?>
                    <?= Component::navOverlay() ?>
                </div>
                <?php
                
                    // for ($i = 0; $i < 100; $i++) {
                    //     echo "<p>hello</p>";
                    // }

                ?>
            </body>
            </html>
        <?php

    }

}

?>