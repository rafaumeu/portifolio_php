<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Meu Portfólio</title>
</head>

<body class="bg-slate-900 text-gray-200">
    <header class="mx-auto max-w-screen-lg px-3 py-6 flex items-center justify-between">
        <div class="font-bold font-mono text-cyan-600">
            🐧Meu Portfólio
        </div>
        <div>
            <ul class="flex gap-x-3 text-gray-200 font-medium">
                <li><a href="#projetos" class="hover:underline">Projetos</a></li>
                <li><a href="#" class="hover:underline">GitHub</a></li>
                <li><a href="#" class="hover:underline">Linkedin</a></li>
                <li><a href="#" class="hover:underline">Twitter</a></li>
            </ul>
        </div>
    </header>
    <main class="mx-auto max-w-screen-lg px-3 py-6">
        <section class="flex gap-x-3">
            <div class="w-2/3">
                <h1 class="text-3xl font-bold">Oi, meu nome é Rafael.</h1>
                <p class="text-xl leading-6 mt-6">Transformando lógica em soluções reais. Aqui apresento meus projetos desenvolvidos em PHP e MySQL, demonstrando minha capacidade de estruturar sistemas web e resolver desafios técnicos com criatividade e organização.</p>
                <ul class="flex gap-x-3 mt-3">
                    <li><a href="#" target="_blank"><img class="h-8 hover:animate-bounce" src="img/facebook.png" alt="Facebook Logo"></a></li>
                    <li><a href="#" target="_blank"><img class="h-8 hover:animate-bounce" src="img/linkedin.png" alt="Linkedin Logo"></a></li>
                    <li><a href="#" target="_blank"><img class="h-8 hover:animate-bounce" src="img/twitter.png" alt="Twitter Logo"></a></li>
                    <li><a href="#" target="_blank"><img class="h-8 hover:animate-bounce" src="img/youtube.png" alt="Youtube Logo"></a></li>
                </ul>
            </div>
            <div class="w-1/3 flex item-center justify-center">
                <img class="h-60 -mt-4 hover:animate-pulse" src="img/avatar.svg" alt="Avatar">
            </div>
        </section>
        <section class="space-y-3 py-6" id="projetos">
            <div>
                <h2 class="text-2xl font-bold">Meus Projetos</h2>
            </div>
            <div class="flex bg-slate-800 rounded-lg p-3 items-center">
                <div class="w-1/5"></div>
                <div class="w-4/5 space-y-3">
                    <div class="flex gap-3 justify-between">
                        <h3 class="text-lg font-semibold">
                            ✅ Projeto 1 <span class="text-xs text-gray-400 opacity-50 italic">(finalizado em 2024)</span>
                        </h3>
                        <div>
                            <span class="bg-sky-400 text-sky-900 rounded-md font-semibold px-2 py-1 text-xs">PHP</span>
                            <span class="bg-lime-400 text-lime-900 rounded-md font-semibold px-2 py-1 text-xs">Javascript</span>
                            <span class="bg-fuchsia-400 text-fuchsia-900 rounded-md font-semibold px-2 py-1 text-xs">HTML</span>
                            <span class="bg-rose-400 text-rose-900 rounded-md font-semibold px-2 py-1 text-xs">CSS</span>
                        </div>
                    </div>
                    <p class="leading-6">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores blanditiis id, dicta amet qui, quisquam vel odio, fuga officiis ipsum quis minus facere ullam. Numquam nam laudantium enim pariatur expedita.
                    </p>
                </div>
            </div>
        </section>
    </main>
    <footer class="mx-auto max-w-screen-lg min-h-20">
        <div class="border-t border-gray-600 pt-6 px-3 text-gray-400 text-sm">
            &copy Copyright 2026. Construido &hearts; por mim mesmo :).
        </div>
    </footer>
</body>

</html>