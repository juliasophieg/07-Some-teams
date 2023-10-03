<?php require __DIR__ . '/data.php'; ?>

  <?php foreach($teams as $team => $teamInfo): ?>

  <tr>
    <td> <?= $team ?></td>
    <td> <?= $teamInfo['league'] ?></td>
    <td> <?= $teamInfo['last-time-champions'] ?></td>
    <td> <?= $teamInfo['city']?> </td>
    <td> <?php if (array_key_exists('nickname', $teamInfo)){
                  echo $teamInfo['nickname'];
                  } else { } ?>
    </td>
    <td> <a href= "<?= $teamInfo['url']?>"><?= $team ?></a></td>
  </tr>
  <?php endforeach; ?>

