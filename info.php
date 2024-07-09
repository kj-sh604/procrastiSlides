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
    <meta name="color-scheme" content="light dark"> 
</head>

<body>
    <?php
    include "includes/link-tags.php";
    include "includes/info-banner.php";
    include "includes/secondary-info.php";
    include "includes/nav-header.php";
    ?>
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
        <li>gnu/linux</li>
        <li>pandoc</li>
        <li>LaTeX</li>
        <li>SimpleMDE</li>
        <li>sandboxed rust uutils (gnu coreutils re-write)</li>
    </ul>

    <h3>active developers</h3>
    <ul>
        <li>kj_sh604 (<a href="https://github.com/kj-sh604">github</a>) </li>
    </ul>

    <h3>related links</h3>
    <ul>
        <li> <a target="_blank" href="https://pandoc.org/">pandoc.org</a> </li>
        <li>SimpleMDE's <a target="_blank" href="https://github.com/sparksuite/simplemde-markdown-editor">github</a> </li>
        <li> <a target="_blank" href="https://www.latex-project.org/">LaTeX-project.org</a> </li>
        <li>rust <a target="_blank" href="https://github.com/uutils/coreutils/">uutils/coreutils</a> project</li>
    </ul><br>
    <br>
    </div>
    <footer>

        <?php include "includes/nav-footer.php"; ?>

    </footer>
</body>

</html>
