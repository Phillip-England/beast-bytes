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
                <title><?= $title ?></title>
            </head>
            <body>
                <?= Component::header() ?>
                <div>
                    <?= $content() ?>
                </div>
            </body>
            </html>
        <?php

    }

}

?>