        <div>
            <label for="user-input">
                <h2 class="centered">markdown goes here:</h2>
            </label>
            <form action="index.php" method="post">
                <textarea id="user-input" name="user-input" style="width: 50rem; height: 25.5rem;"><?php echo $_SESSION['user-input'] ?? ''; ?></textarea>
                <div class="centered">
                    <button type="submit" name="compile">create presentation</button>
                </div>
            </form>
            <br><br>
