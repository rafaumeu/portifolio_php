<?php
$items = [
  ['href' => '#projetos', 'texto' => 'Projetos'],
  ['href' => '', 'texto' => 'GitHub'],
  ['href' => '', 'texto' => 'Linkedin'],
  ['href' => '', 'texto' => 'Twitter'],
];
?>
<header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
  <div class="font-bold font-mono text-cyan-600">
    🐧Meu Portfólio
  </div>
  <div>
    <ul class="flex gap-x-3 text-gray-200 font-medium">
      <?php foreach ($items as $item): ?>
        <li><a href="<?= $item['href'] ?>" class="hover:underline"><?= $item['texto'] ?></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
</header>