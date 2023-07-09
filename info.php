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
        <h1>📃 info 📬</h1>
        <hr />
    </div>
    <p class="centered">this website is inspired from the suckless's presentation tool (<a target="_blank" href="https://tools.suckless.org/sent">sent</a>). it uses pandoc and LaTeX beamer for the backend. <br><br><b>latest feature update:</b> addition of 16:9 themes</p>
    <hr>

    <?php include "includes/nav-header.php"; ?>
    <h3>(non-)features</h3>
    <ul>
        <li>exports only to .pdf</li>
        <li>a presentation from just a simple text file or markdown</li>
        <li>images can be displayed (no text on the same slide)</li>
        <li>no animations</li>
        <li>slides with exuberant amount of lines or characters produce rendering glitches intentionally to prevent you from holding bad presentations</li>
    </ul>

    <h3>planned features</h3>
    <ul>
        <li>unicode color emoji support (via <a target="_blank" href="https://fonts.google.com/noto/specimen/Noto+Sans">noto sans</a> )</li>
        <li><s>different font options </s>&nbsp;font selection will be a non-option</li>
        <li><s>more presentation style templates</s>&nbsp;new 16:9 themes have been added</li>
    </ul>

    <h3>technologies utilized</h3>
    <ul>
        <li>gnu/linux and its coreutils</li>
        <li>pandoc</li>
        <li>LaTeX</li>
        <li>SimpleMDE</li>
        <li>build of suckless sent with pdf export by <a target="_blank" href="https://github.com/BigHeadGeorge/sent-pdf">BigHeadGeorge</a> </li>
    </ul>

    <h3>active developers</h3>
    <ul>
        <li>kj_sh604 (<a href="https://github.com/kj-sh604">github</a>) </li>
    </ul>

    <h3>related links</h3>
    <ul>
        <li> <a target="_blank" href="https://pandoc.org/">pandoc.org</a> </li>
        <li>SimpleMDE's <a target="_blank" href="https://github.com/sparksuite/simplemde-markdown-editor">github</a> </li>
        <li> <a target="_blank" href="https://www.latex-project.org/">LaTex-project.org</a> </li>
        <li>build of suckless sent with pdf export by <a target="_blank" href="https://github.com/BigHeadGeorge/sent-pdf">BigHeadGeorge</a> </li>
    </ul><br>
    <h2 class="centered">backstory and demo:</h2>
    </a><br>
    <div class="responsive-video">
        <iframe class="video" width="854" height="480" src="https://www.youtube.com/embed/X-42ZqaiStw" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <br>
    </div>

    <br><br><br>
    <footer>

        <?php include "includes/nav-footer.php"; ?>

    </footer>
</body>

</html>
