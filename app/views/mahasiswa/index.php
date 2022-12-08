<?php foreach ($data['mhs']['data'] as $mhs) : ?>
  <ul>
    <li><?= $mhs['fullName']; ?></li>
    <li><?= $mhs['address']; ?></li>
    <li><?= $mhs['email']; ?></li>
    <li><?= $mhs['phone']; ?></li>
  </ul>
<?php endforeach; ?>