<div class="centered">
    <h3>🎨 please select your presentation theme 🎭</h3>
    <form action="download.php" method="post" onsubmit="showGeneratingIndicator()">
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
                    '90sMakeUpCommercial' => '90sMakeUpCommercial',
                    'chicagoOlives' => 'chicagoOlives',
                    'earlyCupertino' => 'earlyCupertino',
                    'ohioCustard' => 'ohioCustard',
                    'raleighAroundMe' => 'raleighAroundMe',
                    'redmond2013' => 'redmond2013',
                    'defaultIsKing' => 'defaultIsKing',
                    'cuppertinoIsh' => 'cuppertinoIsh',
                    'lazyProfessor' => 'lazyProfessor',
                    'redmond2003' => 'redmond2003',
                    'strengthInNumbers' => 'strengthInNumbers',
                    'thatMagazine' => 'thatMagazine',
                ];

                foreach ($themes as $key => $theme) {
                    echo "<tr>
                            <td>
                                <img loading='lazy' class='theme-select' src='img/{$key}.webp' alt='{$theme}'>
                            </td>
                            <td>
                                <button type='submit' name='{$key}'>{$theme}</button>
                            </td>
                          </tr>";
                }
                ?>
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
