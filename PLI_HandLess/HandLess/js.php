<?php
/**
 * Created by PhpStorm.
 * User: T3i
 * Date: 07/07/2018
 * Time: 14:53
 */
?>
<script>
    function js (act) {
        if (act === 'down') {
            edit2.execCommand('goLineDown');
        }
        else if (act === 'bot') {
            edit2.execCommand('goDocEnd');
        }
        else if (act === 'up') {
            edit2.execCommand('goLineUp');
        }
        else if (act === 'left') {
            edit2.execCommand('goCharLeft');
        }
        else if (act === 'right' || act === 'white') {
            edit2.execCommand('goCharRight');
        }
        else if (act === 'top') {
            edit2.execCommand('goDocStart');
        }
        else if (act === 'javascript') {
            edit2.focus();
        }
        else if (act === 'space' || act === 'Space'){
            edit2.replaceRange(' ', edit2.getCursor());
        }
        else {
            edit2.replaceRange(act, edit2.getCursor());
        }
    }
</script>
