<?php


class View {

    public static function home() {
        Template::base("Home", function() {
            ?>

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