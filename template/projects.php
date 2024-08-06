<h2 class="text-4xl font-bold mb-4">Mes projets</h2>

<div class="relative w-full">
    <!-- Carrousel Container -->
    <div id="carousel" class="relative overflow-hidden">
        <!-- Slide 1 -->
        <div class="carousel-slide">
            <img src="projet1.jpg" alt="Projet 1" class="w-full h-auto">
            <div class="p-4 bg-white">
                <h3 class="text-xl font-semibold">Projet 1</h3>
                <p>Description du projet 1...</p>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-slide hidden">
            <img src="projet2.jpg" alt="Projet 2" class="w-full h-auto">
            <div class="p-4 bg-white">
                <h3 class="text-xl font-semibold">Projet 2</h3>
                <p>Description du projet 2...</p>
            </div>
        </div>
        <!-- Ajoutez d'autres slides ici -->
    </div>

    <!-- Navigation -->
    <button id="prev" class="absolute left-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-4 py-2">Précédent</button>
    <button id="next" class="absolute right-0 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white px-4 py-2">Suivant</button>
</div>

<!-- Script pour le carrousel -->
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const slides = document.querySelectorAll('.carousel-slide');
        let currentIndex = 0;

        document.getElementById('next').addEventListener('click', function () {
            slides[currentIndex].classList.add('hidden');
            currentIndex = (currentIndex + 1) % slides.length;
            slides[currentIndex].classList.remove('hidden');
        });

        document.getElementById('prev').addEventListener('click', function () {
            slides[currentIndex].classList.add('hidden');
            currentIndex = (currentIndex - 1 + slides.length) % slides.length;
            slides[currentIndex].classList.remove('hidden');
        });
    });
</script>