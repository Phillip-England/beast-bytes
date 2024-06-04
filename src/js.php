<?php

class Js {

    public static function toggleNavMenu(string $targetElement) {
        ?>
            <script>
                qs('<?= $targetElement ?>').addEventListener("click", function() {
                    qs("#nav-menu").classList.toggle("hidden");
                    qs("#nav-overlay").classList.toggle("hidden");
                });
            </script>
        <?php
    }

}