<?php

?>
<?php foreach ($projetos as $projeto) : ?>
  <div class="flex flex-col md:flex-row bg-slate-800 rounded-lg p-3 items-center space-y-3 md:space-x-3 md:space-y-0">
    <div class="w-full md:w-1/5 flex items-center justify-center">
      <img class="h-42 rounded-md shadow-md bg-slate-900" src="<?= $projeto['image'] ?>">
    </div>
    <div class="w-full md:w-4/5 space-y-3">
      <div class="flex flex-col sm:flex-row gap-2 sm:gap-3 justify-between">
        <h3 class="text-lg font-semibold">
          <?php if ($projeto['finished']): ?> ✅<?php endif; ?> <?= $projeto['title'] ?>
            <?php if ($projeto['finished']): ?>
              <span class="text-xs text-gray-400 opacity-50 italic">(finalizado em <?= $projeto['year'] ?>)</span>
            <?php else: ?>
              <span class="text-xs text-gray-400 opacity-50 italic">(em desenvolvimento)</span>
            <?php endif; ?>
        </h3>
        <div class="space-x-1">
          <?php
          $colors = ['fuchsia', 'lime', 'sky', 'rose', 'amber', 'pink', 'purple', 'indigo', 'teal', 'amber'];

    foreach (explode(',', $projeto['stack']) as $position => $tech):
        ?>
            <span class="bg-<?= $colors[$position] ?>-400 text-<?= $colors[$position] ?>-900 rounded-md font-semibold px-2 py-1 text-xs"><?= $tech ?></span>
          <?php endforeach; ?>
        </div>
      </div>
      <p class="leading-6">
        <?= $projeto['description'] ?>
      </p>
    </div>
  </div>
<?php endforeach; ?>