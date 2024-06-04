<?php

class Template {

    public static function base(string $title, callable $content) {
        ?>
            <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <link rel="stylesheet" href="/static/css/output.css">
                <title><?= $title . " - Beast Bytes" ?></title>
            </head>
            <body>
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
                <script src='/static/js/index.js'></script>
            </body>
            </html>
        <?php

    }

}

?>