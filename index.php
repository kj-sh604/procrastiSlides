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
    include "includes/nav-header.php";
    ?>
    <?php if (isset($_POST["compile"])) {
        $_SESSION["user-input"] = $_POST["user-input"]; ?>
        <div class="centered">
            <h3>🎨 please select your presentation theme 🎭</h3>
            <form class="" action="download.php" method="post">
                <table class="centered">
                    <th>
                        <h2>preview</h2>
                    </th>
                    <th>
                        <h2>select</h2>
                    </th>
                    <tr>
                        <td><img loading="lazy" class=theme-select src="img/90sMakeUpCommercial.webp" alt="90sMakeUpCommercial"><br></td>
                        <td><button type="submit" name="90sMakeUpCommercial">90sMakeUpCommercial</button></td>
                    </tr>
                    <tr>
                        <td><img loading="lazy" class=theme-select src="img/chicagoOlives.webp" alt="chicagoOlives"><br></td>
                        <td><button type="submit" name="chicagoOlives">chicagoOlives</button></td>
                    </tr>
                    <tr>
                        <td><img loading="lazy" class=theme-select src="img/cleanMetropolis.webp" alt="cleanMetropolis"><br></td>
                        <td><button type="submit" name="cleanMetropolis">cleanMetropolis</button></td>
                    </tr>
                    <tr>
                        <td><img loading="lazy" class=theme-select src="img/earlyCupertino.webp" alt="earlyCupertino"><br></td>
                        <td><button type="submit" name="earlyCupertino">earlyCupertino</button></td>
                    </tr>
                    <tr>
                        <td><img loading="lazy" class=theme-select src="img/ohioCustard.webp" alt="ohioCustard"><br></td>
                        <td><button type="submit" name="ohioCustard">ohioCustard</button></td>
                    </tr>
                    <tr>
                        <td><img loading="lazy" class=theme-select src="img/raleighAroundMe.webp" alt="raleighAroundMe"><br></td>
                        <td><button type="submit" name="raleighAroundMe">raleighAroundMe</button></td>
                    </tr>
                    <tr>
                        <td><img loading="lazy" class=theme-select src="img/defaultIsKing.webp" alt="defaultIsKing"><br></td>
                        <td><button type="submit" name="defaultIsKing">defaultIsKing</button></td>
                    </tr>
                    <tr>
                        <td><img loading="lazy" class=theme-select src="img/cuppertinoIsh.webp" alt="Cuppertino-Ish"><br></td>
                        <td><button type="submit" name="cuppertinoIsh">cuppertinoIsh</button></td>
                    </tr>
                    <tr>
                        <td><img loading="lazy" class=theme-select src="img/lazyProfessor.webp" alt="lazyProfessor"><br></td>
                        <td><button type="submit" name="lazyProfessor">lazyProfessor</button></td>
                    </tr>
                    <tr>
                        <td><img loading="lazy" class=theme-select src="img/redmond2003.webp" alt="redmond2003"><br></td>
                        <td><button type="submit" name="redmond2003">redmond2003</button></td>
                    </tr>
                    <tr>
                        <td><img loading="lazy" class=theme-select src="img/strengthInNumbers.webp" alt="strengthInNumbers"><br></td>
                        <td><button type="submit" name="strengthInNumbers">strengthInNumbers</button></td>
                    </tr>
                    <tr>
                        <td><img loading="lazy" class=theme-select src="img/thatMagazine.webp" alt="thatMagazine"><br></td>
                        <td><button type="submit" name="thatMagazine">thatMagazine</button></td>
                    </tr>
                </table>
            </form>
        </div>
        <br>
    <?php
    } ?>
    <?php if (!isset($_POST["compile"])) { ?>
        <div>
            <br>
            <details>
                <summary style="font-size: 1.125rem;"><strong>← expand to use the markdown editor 📝</strong></summary>
                <p>
                    <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
                <form class="" action="index.php" method="post">
                    <textarea id="user-input" name="user-input" rows="8" cols="80"><?php echo $_SESSION["user-input"]; ?></textarea>
                    <div class="centered">
                        <button type="submit" name="compile">create presentation</button>
                    </div>
                </form>
                <script type="text/javascript">
                    var simplemde = new SimpleMDE({
                        element: document.getElementById("user-input")
                    });
                </script>
                </p>
            </details>
            <br>
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
                <p class="centered"> <i>It's highly recommended that you use markdown lists rather than plain text lists</i> </p><br>
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
</body>

</html>
