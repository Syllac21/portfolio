<header class="bg-black text-white py-4">
    <div class="container mx-auto flex justify-between items-center">
        <!-- Logo / Title -->
        <div class="text-lg font-bold">Mon Portfolio</div>

        <!-- Burger Button (Visible on Mobile) -->
        <button id="burger-menu" class="block md:hidden text-white focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Navigation Menu (hidden by default on mobile) -->
        <nav id="menu" class="hidden md:block w-full md:w-auto">
            <ul class="flex flex-col md:flex-row md:space-x-4 mt-4 md:mt-0 space-y-2 md:space-y-0">
                <li><a href="index.php?page=about" class="hover:underline">À propos de moi</a></li>
                <li><a href="index.php?page=diplomas" class="hover:underline">Mes diplômes</a></li>
                <li><a href="index.php?page=experience" class="hover:underline">Mon parcours professionnel</a></li>
                <li><a href="index.php?page=projects" class="hover:underline">Mes projets</a></li>
            </ul>
        </nav>
    </div>
</header>

<script>
    // Burger Menu Toggle
    document.getElementById('burger-menu').addEventListener('click', function () {
        var menu = document.getElementById('menu');
        menu.classList.toggle('hidden');
        menu.classList.toggle('flex');
    });
</script>
