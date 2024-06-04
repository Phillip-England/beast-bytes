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
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/styles/default.min.css">
                <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/highlight.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/11.9.0/languages/php.min.js"></script>
                <script>hljs.highlightAll();</script>
                <script src='/static/js/index.js'></script>
                <title><?= $title . " - Beast Bytes" ?></title>
            </head>
            <body hx-boost='true'>
                <div>
                    <?= Component::header() ?>
                    <?= Component::navMenu() ?>
                    <?= Component::navOverlay() ?>
                    <article class='p-4'>
                        <?= $content() ?>
                    </article>
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