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

            function myCall() {
                 $.ajax({
type: "POST",
url: "../php/captura.php",
data: { url_archivo:'../class/minimailchimp.php' }
})
.done(function( msg ) {
$('#codigo').hide(function (){
               
            });
  $( "#codigo >pre" ).text( msg );
  SyntaxHighlighter.highlight();
  $('#codigo').show(function (){
               
            });
});
            }
        </script>
        
         <div id="jkjk"  style="background-color:#bbb ">
        pruebas pruebas
            <br>
            <br>
            <br>
            <pre></pre>
        </div>
        <input type="button" value="ver codigo presentable" onclick="myCall()" />
        <div id="codigo">
        <pre  class="brush: php;">

        </pre>
        </div>
       
    </body>
</html>
