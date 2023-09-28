<?php require __DIR__ . '/header.php'; ?> <!-- Header -->

<body>
    <h1>Some teams</h1>
    <p>There are <?php require __DIR__ . '/teams.php'; ?> teams. </p> <!-- Number of teams in the data -->

    <table>
        <tr>
            <th>Team</th>
            <th>League</th>
            <th>Last time champions</th>
            <th>City</th>
            <th>Nickname</th>
            <th>Website</th>
        </tr>
        <?php require __DIR__ . '/table.php'; ?> <!-- Start loop for data table-->
    </table>
</body>
</html>

