<?php


?>
<script>
    function css (act) {
        if (act === 'down') {
            edit3.execCommand('goLineDown');
        }
        else if (act === 'bot') {
            edit3.execCommand('goDocEnd');
        }
        else if (act === 'up') {
            edit3.execCommand('goLineUp');
        }
        else if (act === 'left') {
            edit3.execCommand('goCharLeft');
        }
        else if (act === 'right' || act === 'white') {
            edit3.execCommand('goCharRight');
        }
        else if (act === 'top') {
            edit3.execCommand('goDocStart');
        }
        else if (act === 'javascript') {
            edit3.focus();
        }
        else if (act === 'space' || act === 'Space'){
            edit3.replaceRange(' ', edit3.getCursor());
        }
        else {
            edit3.replaceRange(act, edit3.getCursor());
        }
    }
</script>
