<?php
   session_start();

    ?>
<!DOCTYPE html>
<html lang=en>
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
      <link rel="stylesheet" href="css/style.css?v=<?=time();?>">
      <link rel = "icon" href = "img/site-icon.webp" type = "image/x-icon">
      <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
      <title>procrastiSlides: great for procratinators who need to get a presentation out, quick! 😆</title>
      <meta name="description" content="create presentations from markdown or plain text! 🤗 procrastiSlides is a simple presentation(s) site that respects your dark mode setting and has responsive web design.
         non-intruisive ads, no tracking, nothing but quick slides from plain text/markdown. 🏫 try copy and pasting your school notes! that might even work 😂">
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
      <?php 
         include "includes/nav-header.php";
         $_SESSION['user-input'] = null;
      ?>
      <?php if(isset($_POST['compile']))
         {

           $_SESSION['user-input'] = $_POST['user-input'];

           ?>
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
            <textarea id="user-input" name="user-input" rows="8" cols="80"><?php echo $_SESSION['user-input']; ?></textarea>
            <div class="centered">
               <button type="submit" name="compile">create presentation</button>
            </div>
         </form>
         <script type="text/javascript">
            var simplemde = new SimpleMDE({ element: document.getElementById("user-input") });

         </script>
         <br>
         <a name="how-to">
            <h2 class="centered">quick read how-to:</h2>
         </a>
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
         <h2 class="centered">short video how-to:</h2>
         </a><br>
         <div class="responsive-video">
            <iframe class="video" height="854px" width="480px" src="https://www.youtube.com/embed/Cj-NkNKFnN8" title="YouTube video player" frameborder="0" allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
         </div>
         <br>
      </div>
      <?php } ?>
      <br>
      <footer>
         <?php include "includes/nav-footer.php" ?>
      </footer>
   </body>
</html>
