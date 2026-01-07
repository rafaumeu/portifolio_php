<?php
$projetos = [

  [
    "titulo" => "Meu Portfolio",
    "finalizado" => false,
    "ano" => 2021,
    "descricao" => "Meu primeiro Portfolio. Escrito em PHP e HTML.",
    "stack" => ["PHP", "HTML", "CSS", "JS"],
    "img" => 'img/portfolio.png'
  ],
  [
    "titulo" => "Lista de Tarefas",
    "finalizado" => true,
    "ano" => 2022,
    "descricao" => "Lista de Tarefas. Escrito em PHP e HTML.",
    "stack" => ["PHP", "HTML", "CSS", "JS"],
    "img" => ''
  ],
  [
    "titulo" => "Controle de Leitura de Vídeos",
    "finalizado" => true,
    "ano" => 2024,
    "descricao" => "Lista de Livros. Escrito em PHP e HTML.",
    "stack" => ["PHP", "HTML", "CSS", "JS"],
    "img" => ''
  ],
  [
    "titulo" => "Mais um Projeto",
    "finalizado" => false,
    "ano" => 2025,
    "descricao" => "Projeto secreto em andamento. Escrito em PHP e HTML.",
    "stack" => ["PHP", "HTML", "CSS", "JS"],
    "img" => ''
  ],
];
?>
<?php foreach ($projetos as $projeto) : ?>
  <div class="flex flex-col md:flex-row bg-slate-800 rounded-lg p-3 items-center space-y-3 md:space-x-3 md:space-y-0">
    <div class="w-full md:w-1/5 flex items-center justify-center">
      <img class="h-42 rounded-md shadow-md bg-slate-900" src="<?= $projeto['img'] ?>">
    </div>
    <div class="w-full md:w-4/5 space-y-3">
      <div class="flex flex-col sm:flex-row gap-2 sm:gap-3 justify-between">
        <h3 class="text-lg font-semibold">
          <?php if ($projeto['finalizado']): ?> ✅<?php endif; ?> <?= $projeto['titulo'] ?>
            <?php if ($projeto['finalizado']): ?>
              <span class="text-xs text-gray-400 opacity-50 italic">(finalizado em <?= $projeto['ano'] ?>)</span>
            <?php else: ?>
              <span class="text-xs text-gray-400 opacity-50 italic">(em desenvolvimento)</span>
            <?php endif; ?>
        </h3>
        <div class="space-x-1">
          <?php
          $colors = ['fuchsia', 'lime', 'sky', 'rose', 'amber', 'pink', 'purple', 'indigo', 'teal', 'amber'];
          foreach ($projeto['stack'] as $position => $tech):
          ?>
            <span class="bg-<?= $colors[$position] ?>-400 text-<?= $colors[$position] ?>-900 rounded-md font-semibold px-2 py-1 text-xs"><?= $tech ?></span>
          <?php endforeach; ?>
        </div>
      </div>
      <p class="leading-6">
        <?= $projeto['descricao'] ?>
      </p>
    </div>
  </div>
<?php endforeach; ?>