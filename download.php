<?php session_start(); ?>
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
        <h1>📑 procrastiSlides v0.02 🎬</h1>
        <hr />
    </div>
    <p class="centered">this website is inspired from the suckless's presentation tool (<a target="_blank" href="https://tools.suckless.org/sent">sent</a>). it uses pandoc and LaTeX beamer for the backend. <br><br><b>latest feature update:</b> addition of 16:9 themes</p>
    <hr>

    <?php include "includes/nav-header.php"; ?>
    <br>

    <h3 class="centered">🎉 your procrastiSlides .pdf presentation has been generated successfully!!! 🍾
    </h3>

    <h3 class="centered">📂 your download link is below: 🗃
    </h3>
    <div class="centered">
        <?php

        function generatePresentation($templateFile)
        {
            $_SESSION["pres"] = uniqid("pres", true) . ".md";
            $_SESSION["push"] = uniqid("push", true) . ".md";
            $_SESSION["convert"] = uniqid("convert", true) . ".md";
            $_SESSION["filename"] = uniqid("procrastiSlides_", true) . ".pdf";

            $pres = $_SESSION["pres"]; // filename of the template file with metadata
            $push = $_SESSION["push"]; // filename of where the user data is stored
            $convert = $_SESSION["convert"]; // concatenated file to be converted to .pdf
            $filename = $_SESSION["filename"]; // output file name

            $userMarkdown = $_SESSION["user-input"];
            $conversion = "pandoc -f markdown+hard_line_breaks output/'$convert' -t beamer -o output/'$filename' --pdf-engine=lualatex --include-in-header=output/header.tex";

            shell_exec("echo '$userMarkdown' > output/'$push'");
            shell_exec("cat $templateFile output/'$push' > output/'$convert'");
            shell_exec($conversion);

            echo "<h2><a href=\"output/$filename\">download presentation</a></h2>";
        }

        if (isset($_POST["90sMakeUpCommercial"])) {
            generatePresentation("output/90sMakeUpCommercial.md");
        } elseif (isset($_POST["chicagoOlives"])) {
            generatePresentation("output/chicagoOlives.md");
        } elseif (isset($_POST["cleanMetropolis"])) {
            generatePresentation("output/cleanMetropolis.md");
        } elseif (isset($_POST["ohioCustard"])) {
            generatePresentation("output/ohioCustard.md");
        } elseif (isset($_POST["raleighAroundMe"])) {
            generatePresentation("output/raleighAroundMe.md");
        } elseif (isset($_POST["earlyCupertino"])) {
            generatePresentation("output/earlyCupertino.md");
        } elseif (isset($_POST["defaultIsKing"])) {
            generatePresentation("output/defaultIsKing.md");
        } elseif (isset($_POST["strengthInNumbers"])) {
            generatePresentation("output/strengthInNumbers.md");
        } elseif (isset($_POST["thatMagazine"])) {
            generatePresentation("output/thatMagazine.md");
        } elseif (isset($_POST["cuppertinoIsh"])) {
            generatePresentation("output/cuppertinoIsh.md");
        } elseif (isset($_POST["lazyProfessor"])) {
            generatePresentation("output/lazyProfessor.md");
        } elseif (isset($_POST["redmond2003"])) {
            generatePresentation("output/redmond2003.md");
        }

        ?>
    </div>
    <br><br>
    <footer>
        <?php include "includes/nav-footer.php"; ?>
    </footer>
</body>

</html>
