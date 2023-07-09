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
        <?php if (isset($_POST["90sMakeUpCommercial"])) {

            $_SESSION["pres"] = uniqid("pres", true) . ".md";
            $_SESSION["push"] = uniqid("push", true) . ".md";
            $_SESSION["convert"] = uniqid("convert", true) . ".md";
            $_SESSION["filename"] = uniqid("procrastiSlides_", true) . ".pdf";

            $pres = $_SESSION["pres"]; // filename of the template file with metadata
            $push = $_SESSION["push"]; // filename of where the user data is stored
            $convert = $_SESSION["convert"]; // concatanated file to be converted to .pdf
            $filename = $_SESSION["filename"]; // output file name

            $userMarkdown = $_SESSION["user-input"]; // this used to be _POST['user-input']
            // $_SESSION['user-input'] = $_POST['user-input'];
            $conversion = "pandoc -f markdown+hard_line_breaks output/'$convert' -t beamer -o output/'$filename' --pdf-engine=pdflatex";

            shell_exec("echo '$userMarkdown' > output/'$push'");
            shell_exec(
                "cat output/90sMakeUpCommercial.md output/'$push' > output/'$convert'"
            );
            shell_exec($conversion);

            // sleep(1);
        ?>

            <h2><a href="output/<?php echo $_SESSION["filename"]; ?>">download presentation</a></h2>

        <?php
        } ?>

        <?php if (isset($_POST["chicagoOlives"])) {

            $_SESSION["pres"] = uniqid("pres", true) . ".md";
            $_SESSION["push"] = uniqid("push", true) . ".md";
            $_SESSION["convert"] = uniqid("convert", true) . ".md";
            $_SESSION["filename"] = uniqid("procrastiSlides_", true) . ".pdf";

            $pres = $_SESSION["pres"]; // filename of the template file with metadata
            $push = $_SESSION["push"]; // filename of where the user data is stored
            $convert = $_SESSION["convert"]; // concatanated file to be converted to .pdf
            $filename = $_SESSION["filename"]; // output file name

            $userMarkdown = $_SESSION["user-input"]; // this used to be _POST['user-input']
            // $_SESSION['user-input'] = $_POST['user-input'];
            $conversion = "pandoc -f markdown+hard_line_breaks output/'$convert' -t beamer -o output/'$filename' --pdf-engine=pdflatex";

            shell_exec("echo '$userMarkdown' > output/'$push'");
            shell_exec(
                "cat output/chicagoOlives.md output/'$push' > output/'$convert'"
            );
            shell_exec($conversion);

            // sleep(1);
        ?>

            <h2><a href="output/<?php echo $_SESSION["filename"]; ?>">download presentation</a></h2>

        <?php
        } ?>

        <?php if (isset($_POST["cleanMetropolis"])) {

            $_SESSION["pres"] = uniqid("pres", true) . ".md";
            $_SESSION["push"] = uniqid("push", true) . ".md";
            $_SESSION["convert"] = uniqid("convert", true) . ".md";
            $_SESSION["filename"] = uniqid("procrastiSlides_", true) . ".pdf";

            $pres = $_SESSION["pres"]; // filename of the template file with metadata
            $push = $_SESSION["push"]; // filename of where the user data is stored
            $convert = $_SESSION["convert"]; // concatanated file to be converted to .pdf
            $filename = $_SESSION["filename"]; // output file name

            $userMarkdown = $_SESSION["user-input"]; // this used to be _POST['user-input']
            // $_SESSION['user-input'] = $_POST['user-input'];
            $conversion = "pandoc -f markdown+hard_line_breaks output/'$convert' -t beamer -o output/'$filename' --pdf-engine=pdflatex";

            shell_exec("echo '$userMarkdown' > output/'$push'");
            shell_exec(
                "cat output/cleanMetropolis.md output/'$push' > output/'$convert'"
            );
            shell_exec($conversion);

            // sleep(1);
        ?>

            <h2><a href="output/<?php echo $_SESSION["filename"]; ?>">download presentation</a></h2>

        <?php
        } ?>

        <?php if (isset($_POST["ohioCustard"])) {

            $_SESSION["pres"] = uniqid("pres", true) . ".md";
            $_SESSION["push"] = uniqid("push", true) . ".md";
            $_SESSION["convert"] = uniqid("convert", true) . ".md";
            $_SESSION["filename"] = uniqid("procrastiSlides_", true) . ".pdf";

            $pres = $_SESSION["pres"]; // filename of the template file with metadata
            $push = $_SESSION["push"]; // filename of where the user data is stored
            $convert = $_SESSION["convert"]; // concatanated file to be converted to .pdf
            $filename = $_SESSION["filename"]; // output file name

            $userMarkdown = $_SESSION["user-input"]; // this used to be _POST['user-input']
            // $_SESSION['user-input'] = $_POST['user-input'];
            $conversion = "pandoc -f markdown+hard_line_breaks output/'$convert' -t beamer -o output/'$filename' --pdf-engine=pdflatex";

            shell_exec("echo '$userMarkdown' > output/'$push'");
            shell_exec(
                "cat output/ohioCustard.md output/'$push' > output/'$convert'"
            );
            shell_exec($conversion);

            // sleep(1);
        ?>

            <h2><a href="output/<?php echo $_SESSION["filename"]; ?>">download presentation</a></h2>

        <?php
        } ?>

        <?php if (isset($_POST["raleighAroundMe"])) {

            $_SESSION["pres"] = uniqid("pres", true) . ".md";
            $_SESSION["push"] = uniqid("push", true) . ".md";
            $_SESSION["convert"] = uniqid("convert", true) . ".md";
            $_SESSION["filename"] = uniqid("procrastiSlides_", true) . ".pdf";

            $pres = $_SESSION["pres"]; // filename of the template file with metadata
            $push = $_SESSION["push"]; // filename of where the user data is stored
            $convert = $_SESSION["convert"]; // concatanated file to be converted to .pdf
            $filename = $_SESSION["filename"]; // output file name

            $userMarkdown = $_SESSION["user-input"]; // this used to be _POST['user-input']
            // $_SESSION['user-input'] = $_POST['user-input'];
            $conversion = "pandoc -f markdown+hard_line_breaks output/'$convert' -t beamer -o output/'$filename' --pdf-engine=pdflatex";

            shell_exec("echo '$userMarkdown' > output/'$push'");
            shell_exec(
                "cat output/raleighAroundMe.md output/'$push' > output/'$convert'"
            );
            shell_exec($conversion);

            // sleep(1);
        ?>

            <h2><a href="output/<?php echo $_SESSION["filename"]; ?>">download presentation</a></h2>

        <?php
        } ?>

        <?php if (isset($_POST["earlyCupertino"])) {

            $_SESSION["pres"] = uniqid("pres", true) . ".md";
            $_SESSION["push"] = uniqid("push", true) . ".md";
            $_SESSION["convert"] = uniqid("convert", true) . ".md";
            $_SESSION["filename"] = uniqid("procrastiSlides_", true) . ".pdf";

            $pres = $_SESSION["pres"]; // filename of the template file with metadata
            $push = $_SESSION["push"]; // filename of where the user data is stored
            $convert = $_SESSION["convert"]; // concatanated file to be converted to .pdf
            $filename = $_SESSION["filename"]; // output file name

            $userMarkdown = $_SESSION["user-input"]; // this used to be _POST['user-input']
            // $_SESSION['user-input'] = $_POST['user-input'];
            $conversion = "pandoc -f markdown+hard_line_breaks output/'$convert' -t beamer -o output/'$filename' --pdf-engine=pdflatex";

            shell_exec("echo '$userMarkdown' > output/'$push'");
            shell_exec(
                "cat output/earlyCupertino.md output/'$push' > output/'$convert'"
            );
            shell_exec($conversion);

            // sleep(1);
        ?>

            <h2><a href="output/<?php echo $_SESSION["filename"]; ?>">download presentation</a></h2>

        <?php
        } ?>


        <?php if (isset($_POST["defaultIsKing"])) {

            $_SESSION["pres"] = uniqid("pres", true) . ".md";
            $_SESSION["push"] = uniqid("push", true) . ".md";
            $_SESSION["convert"] = uniqid("convert", true) . ".md";
            $_SESSION["filename"] = uniqid("procrastiSlides_", true) . ".pdf";

            $pres = $_SESSION["pres"]; // filename of the template file with metadata
            $push = $_SESSION["push"]; // filename of where the user data is stored
            $convert = $_SESSION["convert"]; // concatanated file to be converted to .pdf
            $filename = $_SESSION["filename"]; // output file name

            $userMarkdown = $_SESSION["user-input"]; // this used to be _POST['user-input']
            // $_SESSION['user-input'] = $_POST['user-input'];
            $conversion = "pandoc -f markdown+hard_line_breaks output/'$convert' -t beamer -o output/'$filename' --pdf-engine=pdflatex";

            shell_exec("echo '$userMarkdown' > output/'$push'");
            shell_exec(
                "cat output/defaultIsKing.md output/'$push' > output/'$convert'"
            );
            shell_exec($conversion);

            // sleep(1);
        ?>

            <h2><a href="output/<?php echo $_SESSION["filename"]; ?>">download presentation</a></h2>

        <?php
        } ?>

        <?php if (isset($_POST["strengthInNumbers"])) {

            $_SESSION["pres"] = uniqid("pres", true) . ".md";
            $_SESSION["push"] = uniqid("push", true) . ".md";
            $_SESSION["convert"] = uniqid("convert", true) . ".md";
            $_SESSION["filename"] = uniqid("procrastiSlides_", true) . ".pdf";

            $pres = $_SESSION["pres"]; // filename of the template file with metadata
            $push = $_SESSION["push"]; // filename of where the user data is stored
            $convert = $_SESSION["convert"]; // concatanated file to be converted to .pdf
            $filename = $_SESSION["filename"]; // output file name

            $userMarkdown = $_SESSION["user-input"]; // this used to be _POST['user-input']
            // $_SESSION['user-input'] = $_POST['user-input'];
            $conversion = "pandoc -f markdown+hard_line_breaks output/'$convert' -t beamer -o output/'$filename' --pdf-engine=pdflatex";

            shell_exec("echo '$userMarkdown' > output/'$push'");
            shell_exec(
                "cat output/strengthInNumbers.md output/'$push' > output/'$convert'"
            );
            shell_exec($conversion);

            // sleep(1);
        ?>

            <h2><a href="output/<?php echo $_SESSION["filename"]; ?>">download presentation</a></h2>

        <?php
        } ?>

        <?php if (isset($_POST["thatMagazine"])) {

            $_SESSION["pres"] = uniqid("pres", true) . ".md";
            $_SESSION["push"] = uniqid("push", true) . ".md";
            $_SESSION["convert"] = uniqid("convert", true) . ".md";
            $_SESSION["filename"] = uniqid("procrastiSlides_", true) . ".pdf";

            $pres = $_SESSION["pres"]; // filename of the template file with metadata
            $push = $_SESSION["push"]; // filename of where the user data is stored
            $convert = $_SESSION["convert"]; // concatanated file to be converted to .pdf
            $filename = $_SESSION["filename"]; // output file name

            $userMarkdown = $_SESSION["user-input"]; // this used to be _POST['user-input']
            // $_SESSION['user-input'] = $_POST['user-input'];
            $conversion = "pandoc -f markdown+hard_line_breaks output/'$convert' -t beamer -o output/'$filename' --pdf-engine=pdflatex";

            shell_exec("echo '$userMarkdown' > output/'$push'");
            shell_exec(
                "cat output/thatMagazine.md output/'$push' > output/'$convert'"
            );
            shell_exec($conversion);

            // sleep(1);
        ?>

            <h2><a href="output/<?php echo $_SESSION["filename"]; ?>">download presentation</a></h2>

        <?php
        } ?>

        <?php if (isset($_POST["cuppertinoIsh"])) {

            $_SESSION["pres"] = uniqid("pres", true) . ".md";
            $_SESSION["push"] = uniqid("push", true) . ".md";
            $_SESSION["convert"] = uniqid("convert", true) . ".md";
            $_SESSION["filename"] =
                uniqid("procrastiSlides_", true) . ".pdf";

            $pres = $_SESSION["pres"]; // filename of the template file with metadata
            $push = $_SESSION["push"]; // filename of where the user data is stored
            $convert = $_SESSION["convert"]; // concatanated file to be converted to .pdf
            $filename = $_SESSION["filename"]; // output file name

            $userMarkdown = $_SESSION["user-input"]; // this used to be _POST['user-input']
            // $_SESSION['user-input'] = $_POST['user-input'];
            $conversion = "pandoc -f markdown+hard_line_breaks output/'$convert' -t beamer -o output/'$filename' --pdf-engine=pdflatex";

            shell_exec("echo '$userMarkdown' > output/'$push'");
            shell_exec(
                "cat output/cuppertinoIsh.md output/'$push' > output/'$convert'"
            );
            shell_exec($conversion);

            // sleep(1);
        ?>

            <h2><a href="output/<?php echo $_SESSION["filename"]; ?>">download presentation</a></h2>

        <?php
        } ?>

        <?php if (isset($_POST["lazyProfessor"])) {

            $_SESSION["pres"] = uniqid("pres", true) . ".md";
            $_SESSION["push"] = uniqid("push", true) . ".md";
            $_SESSION["convert"] = uniqid("convert", true) . ".md";
            $_SESSION["filename"] =
                uniqid("procrastiSlides_", true) . ".pdf";

            $pres = $_SESSION["pres"]; // filename of the template file with metadata
            $push = $_SESSION["push"]; // filename of where the user data is stored
            $convert = $_SESSION["convert"]; // concatanated file to be converted to .pdf
            $filename = $_SESSION["filename"]; // output file name

            $userMarkdown = $_SESSION["user-input"]; // this used to be _POST['user-input']
            // $_SESSION['user-input'] = $_POST['user-input'];
            $conversion = "pandoc -f markdown+hard_line_breaks output/'$convert' -t beamer -o output/'$filename' --pdf-engine=pdflatex";

            shell_exec("echo '$userMarkdown' > output/'$push'");
            shell_exec(
                "cat output/lazyProfessor.md output/'$push' > output/'$convert'"
            );
            shell_exec($conversion);

            // sleep(1);
        ?>

            <h2><a href="output/<?php echo $_SESSION["filename"]; ?>">download presentation</a></h2>

        <?php
        } ?>

        <?php if (isset($_POST["redmond2003"])) {

            $_SESSION["pres"] = uniqid("pres", true) . ".md";
            $_SESSION["push"] = uniqid("push", true) . ".md";
            $_SESSION["convert"] = uniqid("convert", true) . ".md";
            $_SESSION["filename"] =
                uniqid("procrastiSlides_", true) . ".pdf";

            $pres = $_SESSION["pres"]; // filename of the template file with metadata
            $push = $_SESSION["push"]; // filename of where the user data is stored
            $convert = $_SESSION["convert"]; // concatanated file to be converted to .pdf
            $filename = $_SESSION["filename"]; // output file name

            $userMarkdown = $_SESSION["user-input"]; // this used to be _POST['user-input']
            // $_SESSION['user-input'] = $_POST['user-input'];
            $conversion = "pandoc -f markdown+hard_line_breaks output/'$convert' -t beamer -o output/'$filename' --pdf-engine=pdflatex";

            shell_exec("echo '$userMarkdown' > output/'$push'");
            shell_exec(
                "cat output/redmond2003.md output/'$push' > output/'$convert'"
            );
            shell_exec($conversion);

            // sleep(1);
        ?>

            <h2><a href="output/<?php echo $_SESSION["filename"]; ?>">download presentation</a></h2>

        <?php
        } ?>
    </div>
    <br><br>
    <footer>
        <?php include "includes/nav-footer.php"; ?>
    </footer>
</body>

</html>
