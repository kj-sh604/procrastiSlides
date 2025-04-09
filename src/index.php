<?php
session_start(); ?>
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
    include "includes/main-info.php";
    include "includes/nav-header.php"; ?>

    <link rel="stylesheet" href="/css/simplemde.css">
    <script type="text/javascript">
        function showGeneratingIndicator() {
            const generatingIndicator = document.getElementById('generating-indicator');
            generatingIndicator.style.display = 'block';
        }
    </script>
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>

    <?php
    if (isset($_POST["compile"])) {
        $_SESSION["user-input"] = $_POST["user-input"];
        include "includes/download-logic.php";
    } else {
        include "includes/markdown-editor.php";
        include "includes/quick-how-to.php";
        include "includes/video-how-to.php";
    } ?>
    <footer>
        <?php include "includes/nav-footer.php"; ?>
    </footer>

    <script type="text/javascript">
        var simplemde = new SimpleMDE({
            element: document.getElementById("user-input")
        });
    </script>
</body>

</html>
