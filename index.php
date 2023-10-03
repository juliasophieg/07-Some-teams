<?php require __DIR__ . '/header.php'; ?> <!-- Header -->

<body>
    <h1>Some teams</h1>
    <p>Here is a nice table with <?php require __DIR__ . '/teams.php'; ?> teams from <?php require __DIR__ . '/cities.php'; ?> </p> <!-- Number of teams in the data -->

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
</body>
</html>

