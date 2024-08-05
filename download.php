<?php session_start(); ?>
<!DOCTYPE html>
<html lang=en>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv='cache-control' content='no-cache'>
    <meta http-equiv='expires' content='0'>
    <meta http-equiv='pragma' content='no-cache'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>procrastiSlides: great for procratinators who need to get a presentation out, quick! 😆</title>
    <meta name="description" content="create .pdf presentations from markdown! 🤗 procrastiSlides is a simple presentation(s) site that respects your dark mode setting and has responsive web design.
         non-intruisive ads, no tracking, nothing but quick slides from plain text/markdown. 🏫 try copy and pasting your school notes! that might even work 😂">
    <?php include "includes/link-tags-in-head.php"; ?>
    <meta name="color-scheme" content="light dark"> 
</head>

<body>
    <?php
    include "includes/procrastislides-banner.php";
    include "includes/secondary-info.php";
    include "includes/nav-header.php";
    ?>
    <br>

    <h3 class="centered">🎉 your procrastiSlides .pdf presentation has been generated successfully!!! 🍾
    </h3>

    <h3 class="centered">📂 your download link is below: 🗃
    </h3>
    <div class="centered">
        <?php

        function generatePresentation($templateFile)
        {
            $pres = $_SESSION["pres"] = uniqid("pres", true) . ".md"; // filename of the template file with metadata
            $push = $_SESSION["push"] = uniqid("push", true) . ".md"; // filename of where the user data is stored
            $convert = $_SESSION["convert"] = uniqid("convert", true) . ".md"; // concatenated file to be converted to .pdf
            $filename = $_SESSION["filename"] = uniqid("procrastiSlides_", true) . ".pdf"; // output file name

            $userMarkdown = escapeshellarg($_SESSION["user-input"]);
            $conversion = "pandoc -f markdown+hard_line_breaks output/'$convert' -t beamer -o output/'$filename' --pdf-engine=pdflatex --include-in-header=output/header.tex";
            $createPushFile = "echo $userMarkdown | iconv -c -t ASCII//TRANSLIT | sed 's/'\"'\"'/’/g' > output/'$push'";
            $createConvertFile = "cat $templateFile output/'$push' > output/'$convert'";

            shell_exec($createPushFile);
            shell_exec($createConvertFile);
            shell_exec($conversion);

            echo "<h2><a href=\"output/$filename\" target=_blank>download presentation</a></h2>";
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
