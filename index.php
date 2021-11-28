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
      <link rel="stylesheet" href="https://cdn.rawgit.com/xcatliu/simplemde-theme-dark/master/dist/simplemde-theme-dark.min.css
         ">
      <script src="https://cdn.jsdelivr.net/simplemde/latest/simplemde.min.js"></script>
      <title>procrastiSlides v0.01</title>
      <meta name="description" content="Hello World! Only a simple coffee site (but respects your dark mode setting and has responsive web design). No ads, no tracking, nothing but basic coffee and good service.">
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

       <div>
         <h2 class="centered">plain text or markdown goes here:</h2>
         <form class="" action="download.php" method="post">
           <textarea id="user-input" name="user-input" rows="8" cols="80" value= <?php echo $_SESSION['user-input']; ?>></textarea>
            <div class="centered">
              <button type="submit" name="compile">compile</button>
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

      <br>
      <footer>

        <?php include "includes/nav-footer.php" ?>

      </footer>
   </body>
</html>
