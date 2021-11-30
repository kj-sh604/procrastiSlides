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
      <meta name="description" content="only a simple presentation(s) site that respects your dark mode setting and has responsive web design.
         non-intruisive ads, no tracking, nothing but quick slides from plain text/markdown. 🏃 great for procratinators who need to get a presentation out, quick! 👟. 🏫 try copy and pasting your school notes! that might even work 😂">
   </head>
   <body>
      <div class=banner>
         <h1>📑 procrastiSlides v0.01 info page 🎬</h1>
         <hr/>
      </div>
      <p class="centered">this website is inspired from the suckless's presentation tool (<a target="_blank" href="https://tools.suckless.org/sent">sent</a>)
        and Luke Smith's <a target="_blank" href="https://youtu.be/dum7q6UXiCE">video</a> on creating presentations using markdown and LaTeX beamer.
      We would like to personally thank them for all the educational resources (for suckless, it's the source code 😂) that they have shared with the open
    souce community throughout the years… <b>🙌 Thank you! 🤗</b> </p>
      <hr>

      <?php include "includes/nav-header.php" ?>

      <h3 class="centered">📑 procrastiSlides aims to provide a quick way for users to create elegant slideshow presentations using
        open source technologies 📂
      </h3>

         <h3>(non-)features</h3>
         <ul>
           <li>exports only to .pdf</li>
           <li>a presentation from just a simple text file or markdown.</li>
           <li>utf-8 is supported.</li>
           <li>images can be displayed (no text on the same slide).</li>
           <li>no animations</li>
           <li>slides with exuberant amount of lines or characters produce rendering glitches intentionally to prevent you from holding bad presentations.</li>
         </ul>

         <h3>planned features</h3>
         <ul>
           <li>unicode color emoji support (via <a target="_blank" href="https://fonts.google.com/noto/specimen/Noto+Sans">noto sans</a> )</li>
           <li>different font options</li>
           <li>presentation style templates</li>
         </ul>

         <h3>technologies utilized</h3>
         <ul>
           <li>gnu/linux and its coreutils</li>
           <li>pandoc</li>
           <li>LaTeX</li>
           <li>SimpleMDE</li>
           <li>build of suckless sent with pdf export by <a target="_blank" href="https://github.com/BigHeadGeorge/sent-pdf">BigHeadGeorge</a> </li>
         </ul>

         <h3>active developers</h3>
         <ul>
           <li>blistakanjo604 (<a href="https://github.com/blistakanjo604">github</a>) </li>
         </ul>

         <h3>related links</h3>
         <ul>
           <li> <a target="_blank" href="https://pandoc.org/">pandoc.org</a> </li>
           <li>SimpleMDE's <a target="_blank" href="https://github.com/sparksuite/simplemde-markdown-editor">github</a> </li>
           <li> <a target="_blank" href="https://www.latex-project.org/">LaTex-project.org</a> </li>
           <li>build of suckless sent with pdf export by <a target="_blank" href="https://github.com/BigHeadGeorge/sent-pdf">BigHeadGeorge</a> </li>
         </ul>
      </div>

      <br><br><br>
      <footer>

        <?php include "includes/nav-footer.php" ?>

      </footer>
   </body>
</html>
