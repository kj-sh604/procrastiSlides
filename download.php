<?php session_start(); ?>
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
      <p class="centered">this website is inspired from the suckless's presentation tool (<a target="_blank" href="https://tools.suckless.org/sent">sent</a>)
        and Luke Smith's <a target="_blank" href="https://youtu.be/dum7q6UXiCE">video</a> on creating presentations using markdown and LaTeX beamer.
      We would like to personally thank them for all the educational resources (for suckless, it's the source code 😂) that they have shared with the open
    souce community throughout the years… <b>🙌 Thank you! 🤗</b> </p>
      <hr>

      <?php include "includes/nav-header.php" ?>
      <br>

      <h3 class="centered">🎉 your procrastiSlides .pdf presentation has been generated successfully!!! 🍾
      </h3>

      <h3 class="centered">📂 your download link is below: 🗃
      </h3>
      <div class="centered">
        <?php

        if(isset($_POST['compile']))
        {
          $_SESSION['pres'] = uniqid('pres', true) . '.md';
          $_SESSION['push'] = uniqid('push', true)  . '.md';
          $_SESSION['convert'] = uniqid('convert', true)  . '.md';
          $_SESSION['filename'] = uniqid('procrastiSlides_', true) . '.pdf';

          $pres = $_SESSION['pres']; // filename of the template file with metadata
          $push = $_SESSION['push']; // filename of where the user data is stored
          $convert = $_SESSION['convert']; // concatanated file to be converted to .pdf
          $filename = $_SESSION['filename']; // output file name


          $userMarkdown = $_POST['user-input'];
          $_SESSION['user-input'] = $_POST['user-input'];
          $conversion = "pandoc -f markdown+hard_line_breaks output/'$convert' -t beamer -o output/'$filename' --pdf-engine=xelatex";

          shell_exec("echo '$userMarkdown' > output/'$push'");
          shell_exec("cat output/pres.md output/'$push' > output/'$convert'");
          shell_exec($conversion);
          // sleep(1); ?>

          <h2><a href="output/<?php echo $_SESSION['filename']; ?>">download presentation</a></h2>

         <?php } ?>

      </div>


         <br><br>
      <footer>

        <?php include "includes/nav-footer.php" ?>

      </footer>
   </body>
</html>
