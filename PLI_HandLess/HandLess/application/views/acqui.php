<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * Created by PhpStorm.
 * User: T3i
 * Date: 04/07/2018
 * Time: 15:29
 */
?>
<script>
    var speech = new webkitSpeechRecognition ();
    speech.lang = 'en-EN';
    speech.continuous = true;
    speech.start();
    speech.onresult = function (e){$('#cmd').html(e.results[e.results.length - 1][0].transcript);e.results[e.results.length - 1][0].transcript.split(' ').forEach(function (c){action(c);});;}

    var mixedMode = {
        name: "htmlmixed",
        scriptTypes: [{matches: /\/x-handlebars-template|\/x-mustache/i,
            mode: null},
            {matches: /(text|application)\/(x-)?vb(a|script)/i,
                mode: "vbscript"}]
    };

    var edit1;

    $.ajax({
        type: "POST",
        url: 'index.php/file/html',
        data: {},
        success: function(val) {
            area1.append('<div id="editeur1"></div>');
            edit1 = CodeMirror(document.getElementById("editeur1"), {
                lineNumbers: true,
                matchBrackets: true,
                value: val,
                mode: mixedMode,
                theme: theme
        });
        }
    });

    var edit2

    $.ajax({
        type: "POST",
        url: 'index.php/file/javascript',
        data: {},
        success: function(val) {
            area2.append('<div id="editeur2"></div>');
            edit2 = CodeMirror(document.getElementById("editeur2"), {
                lineNumbers: true,
                matchBrackets: true,
                value: val,
                mode: 'javascript',
                theme: theme
            });
        }
    });

    var edit3

    $.ajax({
        type: "POST",
        url: 'index.php/file/css',
        data: {},
        success: function(val) {
            area3.append('<div id="editeur3"></div>');
            edit3 = CodeMirror(document.getElementById("editeur3"), {
                lineNumbers: true,
                value: val,
                mode: 'css',
                theme: theme
            });
        }
    });

    function save() {
        $.ajax({
            type: "POST",
            url: 'index.php/file/save',
            data: {html:edit1.getValue(), js:edit2.getValue(), css:edit3.getValue()},
            success: function(save) {
                iframe.empty();
                iframe.append('<iframe src="tmp" class="iframe"/>')
            }
        });
    }
</script>
<? include_once('code.php'); ?>
