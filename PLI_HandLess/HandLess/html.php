<?php
/**
 * Created by PhpStorm.
 * User: T3i
 * Date: 07/07/2018
 * Time: 14:52
 */
?>


<script>
    function html (act) {
        if (act === 'down') {
            edit1.execCommand('goLineDown');
        }
        else if (act === 'bot') {
            edit1.execCommand('goDocEnd');
        }
        else if (act === 'up') {
            edit1.execCommand('goLineUp');
        }
        else if (act === 'left') {
            edit1.execCommand('goCharLeft');
        }
        else if (act === 'right' || act === 'white') {
            edit1.execCommand('goCharRight');
        }
        else if (act === 'top') {
            edit1.execCommand('goDocStart');
        }
        else if (act === 'HTML') {
            edit1.focus();
        }
        else if (act === 'space' || act === 'Space') {
            edit1.replaceRange(' ', edit1.getCursor());
        }
        else {
            edit1.replaceRange(act, edit1.getCursor());
        }
    }
</script>