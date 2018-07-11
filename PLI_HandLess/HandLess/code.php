<?php

?>

<script>

    var area;

        function action(act) {
            console.log(act);
            if (act === 'HTML') {
                edit1.focus();
                area = 1;
            }
            else if (act === 'JavaScript') {
                edit2.focus();
                area = 2;
            }
            else if (act === 'CSS') {
                edit3.focus();
                area = 3;
            }
            else if (act === 'navigation' || act === 'save') {
                save();
            }
            else if (area === 1) {
                html(act);
            }
            else if (area === 2) {
                js (act);
            }
            else if (area === 3) {
                css (act);
            }

        }

        // action ('HTML');
</script>
<? require_once 'html.php'; require_once 'js.php'; require_once 'css.php'; ?>


