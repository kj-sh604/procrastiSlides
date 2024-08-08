<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['compile'])) {
    $_SESSION['user-input'] = htmlspecialchars($_POST['user-input'], ENT_QUOTES, 'UTF-8');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>procrastiSlides: great for procratinators who need to get a presentation out, quick! 😆</title>
    <meta name="description" content="create .pdf presentations from markdown! 🤗 procrastiSlides is a simple presentation(s) site that respects your dark mode setting and has responsive web design.
        non-intrusive ads, no tracking, nothing but quick slides from plain text/markdown. 🏫 try copy and pasting your school notes! that might even work 😂">
    <?php include "includes/link-tags-in-head.php"; ?>
    <meta name="color-scheme" content="light dark">
</head>

<body>
    <?php
    include "includes/procrastislides-banner.php";
    include "includes/main-info.php";
    include "includes/nav-header.php";

    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['compile'])) { ?>
        <div class="centered">
            <h3>🎨 please select your presentation theme 🎭</h3>
            <form id="theme-form" action="download.php" method="post" onsubmit="showGeneratingIndicator()">
                <table class="centered">
                    <thead>
                        <tr>
                            <th>
                                <h2>preview</h2>
                            </th>
                            <th>
                                <h2>select</h2>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $themes = [
                            '90sMakeUpCommercial',
                            'chicagoOlives',
                            'cleanMetropolis',
                            'earlyCupertino',
                            'ohioCustard',
                            'raleighAroundMe',
                            'defaultIsKing',
                            'cuppertinoIsh',
                            'lazyProfessor',
                            'redmond2003',
                            'strengthInNumbers',
                            'thatMagazine'
                        ];

                        foreach ($themes as $theme) { ?>
                            <tr>
                                <td><img loading="lazy" class="theme-select" src="img/<?= $theme ?>.webp" alt="<?= $theme ?>"><br></td>
                                <td><button type="submit" name="<?= $theme ?>"><?= $theme ?></button></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
                <div id="generating-indicator" style="display: none;">
                    <p>📊</p>
                    <p>generating presentation...</p>
                    <p>please wait.</p>
                </div>
            </form>
        </div>
        <br>
    <?php } else { ?>
        <div>
            <label for="user-input">
                <h2 class="centered">markdown goes here:</h2>
            </label>
            <form action="index.php" method="post">
                <textarea id="user-input" name="user-input" rows="8" cols="80"><?php echo $_SESSION['user-input'] ?? ''; ?></textarea>
                <div class="centered">
                    <button type="submit" name="compile">create presentation</button>
                </div>
            </form>
            <br><br>
            <details>
                <summary style="font-size: 1.125rem;"><strong>← expand for a brief <emphasis>"how-to"</emphasis> 📖</strong></summary>
                <p>
                <ul>
                    <li>type '#' to indicate that you are starting a new slide and then press ↵ (enter/return) twice.</li>
                    <li>you can add a "slide title" after each '#' to name that portion of your presentation.</li>
                    <ul>
                        <li>a space between "#" and your slide title is required: <br><br> </li>
                        <ul class="no-bullets">
                            <li># [YOUR TITLE GOES HERE]</li>
                        </ul>
                        <br>
                    </ul>
                    <li>type/format text underneath the '#' for the slide contents.</li>
                    <ul>
                        <li>make sure to start typing your slide content two ↵'s ("enter key presses") away from the "#".</li>
                        <li>lists require to be formatted in this manner as well: <br><br> </li>
                        <ul class="no-bullets">
                            <li># slide title <br><br>
                                This is a list <br><br>
                                * item 1 <br>
                                * item 2 <br>
                                * item 3 <br>
                            </li>
                        </ul>
                    </ul>
                </ul>
                <br>
                <p class="centered"><i>It's highly recommended that you use markdown lists rather than plain text lists</i></p><br>
                </p>
            </details>
            <br>
            <details>
                <summary style="font-size: 1.125rem;"><strong>← expand for a quick video demo 🎬</strong></summary>
                <p>
                <div class="responsive-video">
                    <iframe loading="lazy" width="100%" height="480" src="https://www.youtube.com/embed/DGudYy0sfx8" title="procrastiSlides demo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
                </p>
            </details>
            <br>
        </div>
    <?php } ?>
    <br>
    <footer>
        <?php include "includes/nav-footer.php"; ?>
    </footer>

    <script type="text/javascript">
        function showGeneratingIndicator() {
            document.getElementById('generating-indicator').style.display = 'block';
            setTimeout(function() {
                document.getElementById('theme-form').submit();
            }, 200);
            return false;
        }
    </script>
    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
    <script type="text/javascript">
        var simplemde = new SimpleMDE({
            element: document.getElementById("user-input")
        });
    </script>
</body>
</html>
