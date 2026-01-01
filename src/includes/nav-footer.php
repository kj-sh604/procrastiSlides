<hr />
<a href="../">home</a> &nbsp;
<a href="../info.php">info</a> &nbsp;
<a href="../licenses.php">licenses</a>
<br>
<p>all site content is in the public domain</p>
<p><small>my other stuff: <a href="https://aedrielkylejavier.me/" target="_blank">website link →</a></small></p>
<p><small><code>version: <?php
$version_file = __DIR__ . '/../VERSION';
if (file_exists($version_file)) {
    echo htmlspecialchars(trim(file_get_contents($version_file)), ENT_QUOTES, 'UTF-8');
} else {
    echo 'unknown';
}
?></code></small></p>