<?php
session_start();

 ?>
<!DOCTYPE html>
<html lang=en>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css">
      <link rel = "icon" href = "img/site-icon.webp" type = "image/x-icon">
      <!--link rel="stylesheet" href="https://cdn.rawgit.com/xcatliu/simplemde-theme-dark/master/dist/simplemde-theme-dark.min.css
         "-->
      <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
      <title>procrastiSlides v0.01</title>
      <meta name="description" content="only a simple presentation(s) site that respects your dark mode setting and has responsive web design. <br>
         non-intruisive ads, no tracking, nothing but quick slides from plain text/markdown. 🏃 great for procratinators who need to get a presentation out, quick! 👟. 🏫 try copy and pasting your school notes! that might even work 😂">
   </head>
   <body>
      <div class=banner>
         <h1>📑 procrastiSlides v0.01 🎬</h1>
         <hr/>
      </div>
      <p class="centered">only a simple presentation(s) site that respects your dark mode setting and has responsive web design. <br>
         non-intruisive ads, no tracking, nothing but quick slides from plain text/markdown. <br>
      </p>
      <h3 class="centered">🏃 great for procratinators who need to get a presentation out, quick! 👟</h3>
      <h3 class="centered">🏫 try copy and pasting your school notes! that might even work 😂</h3>
      <hr>

      <?php include "includes/nav-header.php" ?>

      <?php if(isset($_POST['compile']))
      {

        $_SESSION['user-input'] = $_POST['user-input'];

        ?>

        <div class="centered">
          <h3>🎨 please select your presentation theme 🎭</h3>

          <form class="" action="download.php" method="post">
<table class="centered">


            <th><h2>preview</h2></th>
            <th><h2>select</h2></th>
            <tr>
              <td><img class=theme-select src="img/defaultIsKing.webp" alt="defaultIsKing"><br></td>
              <td><button type="submit" name="defaultIsKing">defaultIsKing</button></td>
            </tr>
            <tr>
              <td><img class=theme-select src="img/cuppertinoIsh.webp" alt="Cuppertino-Ish"><br></td>
              <td><button type="submit" name="cuppertinoIsh">cuppertinoIsh</button></td>
            </tr>
            <tr>
              <td><img class=theme-select src="img/lazyProfessor.webp" alt="lazyProfessor"><br></td>
              <td><button type="submit" name="lazyProfessor">lazyProfessor</button></td>
            </tr>
            <tr>
              <td><img class=theme-select src="img/redmond2003.webp" alt="redmond2003"><br></td>
              <td><button type="submit" name="redmond2003">redmond2003</button></td>
            </tr>
            <tr>
              <td><img class=theme-select src="img/strengthInNumbers.webp" alt="strengthInNumbers"><br></td>
              <td><button type="submit" name="strengthInNumbers">strengthInNumbers</button></td>
            </tr>
            <tr>
              <td><img class=theme-select src="img/thatMagazine.webp" alt="thatMagazine"><br></td>
              <td><button type="submit" name="thatMagazine">thatMagazine</button></td>
            </tr>
            </table>
          </form>
        </div>


      <br>
      <?php } ?>

      <?php if(!isset($_POST['compile']))
      { ?>

       <div>
         <h2 class="centered">plain text or markdown goes here:</h2>
         <form class="" action="index.php" method="post">
           <textarea id="user-input" name="user-input" rows="8" cols="80" value= <?php echo $_SESSION['user-input']; ?>></textarea>
            <div class="centered">
              <button type="submit" name="compile">create presentation</button>
            </div>
         </form>

         <script type="text/javascript">
            var simplemde = new SimpleMDE({ element: document.getElementById("user-input") });

         </script>

         <br>

                  <a name="how-to"><h2 class="centered">how to:</h2></a>
                  <ul>
                    <li>type '#' to indicate that you are starting a new slide</li>
                    <li>you can add a "section title" after each '#' to name that portion of your presentation</li>
                    <li>type/format text underneath the '#' for the slide contents</li>
                  </ul>
                  <br>

                  <p class="centered"> <i>It's highly recommended that you use markdown lists rather than plain text lists</i> </p>


               </div>
<?php } ?>


      <br>
      <footer>

        <?php include "includes/nav-footer.php" ?>

      </footer>
   </body>
</html>
