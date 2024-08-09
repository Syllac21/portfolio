
<h2 class="text-4xl font-bold mb-4 mt-24">Mes projets</h2>

<div class="relative w-full">
    <!-- Carrousel Container -->
    <div id="carousel" class="relative overflow-hidden">
        <!-- Slide 1 -->
        <div class="carousel-slide flex h-94">
            <img src="../image/bujangasana.jpg" alt="Position du cobra" class="w-1/2 h-96">
            <div class="w-1/2 ml-4 bg-black">
                <h3 class="text-xl font-semibold">Ma séance de yoga</h3>
                <p><ul class="mx-4">
                    <li>objectif :
                        <p class="ml-4">Ce site est prévu pour permettre à un professeur de yoga de choisir la succession de posture d'une séance en fonction des bienfaits recherchés</p>
                    </li>
                    <li>Technologie :
                        <p class="mx-4 pr-8">Dans ce projet, j'ai voulu commencer à mettre en application la POO et le MCV</p>
                        <ul class="mx-8">
                            <li>Tailwind</li>
                            <li>PHP</li>
                            <li>MYSQL</li>
                            <li>MCV</li>
                            <li>POO</li>
                        </ul>
                        <a href="https://github.com/Syllac21/ma_seance_de_yoga" class="text-blue-400">Lien Githhub</a>
                    </li>
                </ul></p>
            </div>
        </div>
        <!-- Slide 2 -->
        <div class="carousel-slide flex h 94 hidden">
            <img src="../image/bamboo-161448_1280.png" alt="Plan de bambou" class="h-96 w-1/2">
            <div class="w-1/2 p-4 bg-black">
                <h3 class="text-xl font-semibold">Chifoumi</h3>
                <p><ul class="mx-4">
                    <li>objectif :
                        <p class="mx-4">Jeu Pierre Feuille Ciseaux</p>
                    </li>
                    <li>Technologie :
                        <p class="mx-4">Le but de ce projet était de me familiariser avec Java Script tout en utilisant HTML et CSS</p>
                        <a href="https://github.com/Syllac21/jeu-chifoumi" class="text-blue-400">Lien Githhub</a>
                    </li>
                </ul></p>
            </div>
        </div>
        <!-- Slide 3 -->
        <div class="carousel-slide flex h 94 hidden">
            <img src="../image/sar-tambour.jpg" alt="Plan de bambou" class="h-96 w-1/2">
            <div class="w-1/2 p-4 bg-black">
                <h3 class="text-xl font-semibold">Mon site de plongée</h3>
                <p><ul class="mx-4">
                    <li>objectif :
                        <p class="mx-4">Suivie des plongées</p>
                    </li>
                    <li>Technologie :
                        <p class="mx-4">Le but de ce projet est de pouvoir enregistrer ses spots de plongée et de pouvoir revoir les différents poissons que l'on a vu.</p>
                        <a href="https://github.com/Syllac21/plongee_mvc" class="text-blue-400">Lien Githhub</a>
                    </li>
                </ul></p>
            </div>
        </div>
        <!-- ajouter des slides -->
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
