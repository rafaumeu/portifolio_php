<!DOCTYPE html>
<html lang="pt_br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    <title>Meu Portfólio</title>
</head>

<body class="bg-slate-900 text-gray-200">
    <?php include 'components/header.php'; ?>
    <main class="mx-auto max-w-screen-lg px-3 py-6">
        <?php include 'components/hero.php'; ?>
        <section class="space-y-3 py-6" id="projetos">
            <div>
                <h2 class="text-2xl font-bold">Meus Projetos</h2>
            </div>
            <?php include 'components/projects.php'; ?>
        </section>
    </main>
    <footer class="mx-auto max-w-screen-lg min-h-20">
        <div class="border-t border-gray-600 pt-6 px-3 text-gray-400 text-sm">
            &copy Copyright <?= date('Y'); ?>. Construido &hearts; por mim mesmo :).
        </div>
    </footer>
</body>

</html>