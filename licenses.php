<!DOCTYPE html>
<html lang=en>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/site-icon.webp" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.rawgit.com/xcatliu/simplemde-theme-dark/master/dist/simplemde-theme-dark.min.css
         ">
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <title>procrastiSlides: great for procratinators who need to get a presentation out, quick! 😆</title>
    <meta name="description" content="create presentations from markdown or plain text! 🤗 procrastiSlides is a simple presentation(s) site that respects your dark mode setting and has responsive web design.
         non-intruisive ads, no tracking, nothing but quick slides from plain text/markdown. 🏫 try copy and pasting your school notes! that might even work 😂">
</head>

<body>
    <div class=banner>
        <h1>🏛 licenses 🧑‍⚖️</h1>
        <hr />
    </div>
    <p class="centered">this website is inspired from the suckless's presentation tool (<a target="_blank" href="https://tools.suckless.org/sent">sent</a>). it uses pandoc and LaTeX beamer for the backend. <br><br><b>latest feature update:</b> addition of 16:9 themes</p>
    <hr>

    <?php include "includes/nav-header.php"; ?>

    <h3>licenses</h3>
    <ul>
        <li> <a href="gpl2.php"> pandoc's license (gnu gpl v2)</a> </li>
        <li><a href="LaTeX.php"> The LaTeX Project Public License (1.3)</a></li>
        <li><a href="mit.php"> SimpleMDE's license (mit)</a></li>
        <li><a href="isc.php"> suckless sent's license (isc)</a></li>

    </ul>

    <h3>related links</h3>
    <ul>
        <li> <a target="_blank" href="https://pandoc.org/">pandoc.org</a> </li>
        <li>SimpleMDE's <a target="_blank" href="https://github.com/sparksuite/simplemde-markdown-editor">github</a> </li>
        <li> <a target="_blank" href="https://www.latex-project.org/">LaTex-project.org</a> </li>
        <li>build of suckless sent with pdf export by <a target="_blank" href="https://github.com/BigHeadGeorge/sent-pdf">BigHeadGeorge</a> </li>
    </ul>
    </div>

    <br><br><br>
    <footer>

        <?php include "includes/nav-footer.php"; ?>

    </footer>
</body>

</html>
