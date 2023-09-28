<?php require __DIR__ . '/data.php'; ?>

  <?php foreach($teams as $team => $key): ?>
  <tr>
    <td> <?php echo $team?> </td>
    <td> <?php echo $key['league']?> </td>
    <td> <?php echo $key['last-time-champions']?> </td>
    <td> <?php echo $key['city']?> </td>
    <td><!-- Insert keys with nickname value --></td>
    <td> <a href= "<?php echo $key['url']?>"><?php echo $key['url']?></a></td>
  </tr>
  <?php endforeach; ?>

