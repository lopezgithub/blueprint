<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>

            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
            <title>SyntaxHighlighter Build Test Page</title>
            <script type="text/javascript" src="../includes/syntaxhighlighter_2.1.382/scripts/shCore.js"></script>
            <script type="text/javascript" src="../includes/syntaxhighlighter_2.1.382/scripts/shBrushBash.js"></script>
            <script type="text/javascript" src="../includes/syntaxhighlighter_2.1.382/scripts/shBrushCpp.js"></script>
            <script type="text/javascript" src="../includes/syntaxhighlighter_2.1.382/scripts/shBrushCSharp.js"></script>
            <script type="text/javascript" src="../includes/syntaxhighlighter_2.1.382/scripts/shBrushCss.js"></script>
            <script type="text/javascript" src="../includes/syntaxhighlighter_2.1.382/scripts/shBrushDelphi.js"></script>
            <script type="text/javascript" src="../includes/syntaxhighlighter_2.1.382/scripts/shBrushDiff.js"></script>
            <script type="text/javascript" src="../includes/syntaxhighlighter_2.1.382/scripts/shBrushGroovy.js"></script>
            <script type="text/javascript" src="../includes/syntaxhighlighter_2.1.382/scripts/shBrushJava.js"></script>
            <script type="text/javascript" src="../includes/syntaxhighlighter_2.1.382/scripts/shBrushJScript.js"></script>
            <script type="text/javascript" src="../includes/syntaxhighlighter_2.1.382/scripts/shBrushPhp.js"></script>
            <script type="text/javascript" src="../includes/syntaxhighlighter_2.1.382/scripts/shBrushPlain.js"></script>
            <script type="text/javascript" src="../includes/syntaxhighlighter_2.1.382/scripts/shBrushPython.js"></script>
            <script type="text/javascript" src="../includes/syntaxhighlighter_2.1.382/scripts/shBrushRuby.js"></script>
            <script type="text/javascript" src="../includes/syntaxhighlighter_2.1.382/scripts/shBrushScala.js"></script>
            <script type="text/javascript" src="../includes/syntaxhighlighter_2.1.382/scripts/shBrushSql.js"></script>
            <script type="text/javascript" src="../includes/syntaxhighlighter_2.1.382/scripts/shBrushVb.js"></script>
            <script type="text/javascript" src="../includes/syntaxhighlighter_2.1.382/scripts/shBrushXml.js"></script>
            <link type="text/css" rel="stylesheet" href="../includes/syntaxhighlighter_2.1.382/styles/shCore.css"/>
            <link type="text/css" rel="stylesheet" href="../includes/syntaxhighlighter_2.1.382/styles/shThemeDefault.css"/>
            <script type="text/javascript">
                SyntaxHighlighter.config.clipboardSwf = '../includes/syntaxhighlighter_2.1.382/scripts/clipboard.swf';


            </script>

            <script type="text/javascript" src="../includes/jquery/jquery-2.1.1.min.js"></script>
        </title>
    </head>
    <body>

        <script>
          
                function borrar_crear_pre() {
                    $("#codigo").empty();
                    $("#codigo").append("<pre  class='brush: php;'></pre>");

                }
                $(document.body).on('click', '#buscar', function() {
                    var url = $('#url_nombre').val();
                    $.ajax({
                        type: "POST",
                        url: "../php/captura.php",
                        data: {url_archivo: '../' + url}

                    })
                   .done(function(msg) {
                       borrar_crear_pre();
                       $("#codigo >pre").text(msg);
                       SyntaxHighlighter.highlight();

                    });


                });
        </script>

        <div id="jkjk"  style="background-color:#bbb ">
        Escriba una ruta de un codigo para verlo ejemplos:
        <ul>
            <li>"inicio/pruebas_ajax.php"</li>
            <li>"class/minimailchimp.php"</li>
            <li>"php/captura.php"</li>
        </ul>
    
        </div>
        <input  type="text" id="url_nombre" name='url_blue' value="">
        <input type="button" value="ver codigo presentable" id='buscar' />

        <div id="codigo">
        
        </div>

    </body>
</html>
