<?php
$items = [
    ['href' => '',  'alt' => 'Facebook Logo', 'src' => 'img/facebook.png'],
    ['href' => '',  'alt' => 'Linkedin Logo', 'src' => 'img/linkedin.png'],
    ['href' => '',  'alt' => 'Twitter Logo', 'src' => 'img/twitter.png'],
    ['href' => '',  'alt' => 'Youtube Logo', 'src' => 'img/youtube.png'],
]
?>
<section class="flex flex-col-reverse md:flex-row gap-x-3 items-center">
  <div class="w-full md:w-2/3">
    <h1 class="text-3xl font-bold">Oi, meu nome é Rafael.</h1>
    <p class="text-xl leading-6 mt-6">Transformando lógica em soluções reais. Aqui apresento meus projetos desenvolvidos em PHP e MySQL, demonstrando minha capacidade de estruturar sistemas web e resolver desafios técnicos com criatividade e organização.</p>
    <ul class="flex gap-x-3 mt-3">
      <?php foreach ($items as $item): ?>
        <li><a href="<?= $item['href'] ?>" target="_blank"><img class="h-8 hover:animate-bounce" src="<?= $item['src'] ?>" alt="<?= $item['alt'] ?>"></a></li>
      <?php endforeach; ?>
    </ul>
  </div>
  <div class="w-full md:w-1/3 flex item-center justify-center mb-6 md:mb-0">
    <img class="h-60 -mt-4 hover:animate-pulse" src="img/avatar.svg" alt="Avatar">
  </div>
</section>