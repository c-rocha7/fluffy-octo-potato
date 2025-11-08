<!DOCTYPE html>
<html lang="pt-BR" class="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Gerenciador de Tarefas')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-900 min-h-screen">
    <!-- Header -->
    <header class="bg-gray-800 shadow-sm border-b border-gray-700">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-16">
                <div class="flex items-center">
                    <a href="{{ route('tasks.index') }}" class="text-2xl font-bold text-indigo-400 hover:text-indigo-300 transition">
                        📋 Task Manager
                    </a>
                </div>
                <div class="flex items-center gap-4">
                    <a href="{{ route('tasks.index') }}"
                       class="text-gray-300 hover:text-indigo-400 px-3 py-2 rounded-md text-sm font-medium transition {{ request()->routeIs('tasks.index') ? 'bg-indigo-900/30 text-indigo-400' : '' }}">
                        Todas as Tarefas
                    </a>
                    <a href="{{ route('tasks.create') }}"
                       class="text-gray-300 hover:text-indigo-400 px-3 py-2 rounded-md text-sm font-medium transition {{ request()->routeIs('tasks.create') ? 'bg-indigo-900/30 text-indigo-400' : '' }}">
                        Nova Tarefa
                    </a>
                    <a href="{{ route('tasks.trashed') }}"
                       class="text-gray-300 hover:text-indigo-400 px-3 py-2 rounded-md text-sm font-medium transition {{ request()->routeIs('tasks.trashed') ? 'bg-indigo-900/30 text-indigo-400' : '' }}">
                        Lixeira
                    </a>
                </div>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
        @include('partials.flash-messages')

        @yield('content')
    </main>

    <!-- Footer -->
        <!-- Footer -->
    <footer class="bg-gray-800 border-t border-gray-700 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
            <p class="text-center text-gray-400 text-sm">
                © {{ date('Y') }} Task Manager. Todos os direitos reservados.
            </p>
        </div>
    </footer>

    <script>
        // Theme toggle functionality
        window.toggleTheme = function() {
            const html = document.documentElement;
            const isDark = html.classList.contains('dark');

            if (isDark) {
                html.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            } else {
                html.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            }

            // Atualizar ícones
            updateThemeIcons();
        };

        window.updateThemeIcons = function() {
            const html = document.documentElement;
            const darkIcon = document.getElementById('theme-toggle-dark-icon');
            const lightIcon = document.getElementById('theme-toggle-light-icon');

            if (!darkIcon || !lightIcon) return;

            if (html.classList.contains('dark')) {
                darkIcon.classList.add('hidden');
                lightIcon.classList.remove('hidden');
            } else {
                darkIcon.classList.remove('hidden');
                lightIcon.classList.add('hidden');
            }
        };

        // Inicializar ícones quando o DOM carregar
        if (document.readyState === 'loading') {
            document.addEventListener('DOMContentLoaded', updateThemeIcons);
        } else {
            updateThemeIcons();
        }
    </script>
</body>
</html>
