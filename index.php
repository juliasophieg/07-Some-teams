<?php require __DIR__ . '/header.php'; ?> <!-- Fetching code for the header -->

<body>
    <h1 class="logo">Some teams</h1>
    <main>
        <div class="container">
            <div class="intro">
                <h2>Hi!</h2>
                <p>Below you can find a <b>nice table</b> with information about <?php require __DIR__ . '/teams.php'; ?> football teams.</p><!-- Fetching data for team count-->
            </div>
            <div class="cities">
                <h3>The team's homecities are:</h3>
                <div class="city-buttons">
                    <?php require __DIR__ . '/cities.php'; ?> <!-- Fetching data for the unique cities-->
                </div> 
            </div>
        </div>
            <table>
                <thead>
                    <tr>
                        <th>Team</th>
                        <th>League</th>
                        <th>Last time champions</th>
                        <th>City</th>
                        <th>Nickname</th>
                        <th>Website</th>
                    </tr>
                </thead>
                <tbody>
                    <?php require __DIR__ . '/table.php'; ?> <!-- Fetching data for the table-->
                </tbody>
            </table>  
    </main>
</body>
</html>

