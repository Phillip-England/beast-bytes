<?php


class View {

    public static function home() {
        Template::base("Home", function() {
            $ParsedownExtra = new ParsedownExtra();
            $content = file_get_contents("./docs/index.md");
            $html = $ParsedownExtra->text($content);
            ?>
                <?= $html ?>
            <?php
        });
    }

    public static function articles() {
        Template::base("Articles", function() {
            ?>

            <?php
        });
    }

    public static function contact() {
        Template::base("Contact", function() {
            ?>

            <?php
        });
    }

}


