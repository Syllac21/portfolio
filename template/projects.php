<h2 class="text-4xl font-bold mb-4 mt-24">Mes projets</h2>

<div class="relative w-full">
    <!-- Cartes projet -->
    <section class="md:grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 px-4">

        <!-- première carte -->   
        <article class="project-card rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300"
        style="background: radial-gradient(circle, #15BFA0 0%, #020726 100%);" data-title="Chifoumi" data-description="Le but de ce projet était de me familiariser avec JavaScript tout en utilisant HTML et CSS." data-image="/image/bamboo-161448_1280.png">
            <img class="w-full object-cover h-48" src="/image/bamboo-161448_1280.png" alt="plan de bambou" />
            <div class="p-6">
                <h2 class="text-2xl mb-2 text-white font-semibold">Chifoumi</h2>
                <p class="text-gray-200">
                    <span class="font-bold">Détails :</span> Le but de ce projet était de me familiariser avec JavaScript tout en utilisant HTML et CSS.
                    <a href="https://github.com/Syllac21/jeu-chifoumi" class="text-blue-300 hover:underline">Lien GitHub</a>
                </p>
            </div>
        </article>

        <!-- deuxième carte -->   
        <article class="project-card rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300"
        style="background: radial-gradient(circle, #15BFA0 0%, #020726 100%);" data-title="Ma séance de yoga" data-description="Premier projet POO et MVC. Utilisation de PHP et MYSQL" data-image="/image/bujangasana.jpg">
            <img class="w-full object-cover h-48" src="/image/bujangasana.jpg" alt="posture de yoga" />
            <div class="p-6">
                <h2 class="text-2xl mb-2 text-white font-semibold">Ma séance de yoga</h2>
                <p class="text-gray-200">
                    <span class="font-bold">Détails :</span> Premier projet POO et MVC. Utilisation de PHP et MYSQL.
                    <a href="https://github.com/Syllac21/ma_seance_de_yoga" class="text-blue-300 hover:underline">Lien GitHub</a>
                </p>
            </div>
        </article>

        <!-- troisième carte -->   
        <article class="project-card rounded-lg overflow-hidden shadow-lg transform hover:scale-105 transition-transform duration-300"
        style="background: radial-gradient(circle, #15BFA0 0%, #020726 100%);" data-title="Mes plongées" data-description="Utilisation d'API. Premier projet MYSQL" data-image="/image/sar-tambour.jpg">
            <img class="w-full object-cover h-48" src="/image/sar-tambour.jpg" alt="Sar tambour" />
            <div class="p-6">
                <h2 class="text-2xl mb-2 text-white font-semibold">Mes plongées</h2>
                <p class="text-gray-200">
                    <span class="font-bold">Détails :</span> Utilisation d'API. Premier projet MYSQL.
                    <a href="https://github.com/Syllac21/plongee_mvc" class="text-blue-300 hover:underline">Lien GitHub</a>
                </p>
            </div>
        </article>

    </section>
</div>

<!-- Modale plein écran -->
<div id="projectModal" class="fixed inset-0 bg-black bg-opacity-75 flex items-center justify-center hidden z-50">
    <div class="rounded-lg overflow-hidden w-3/4 max-w-3xl bg-indigo-900 rounded-md bg-clip-padding backdrop-filter backdrop-blur-sm bg-opacity-50 border border-gray-100">
        <button id="closeModal" class="text-white text-lg absolute top-0 right-0 m-4 p-2 bg-blue-900 rounded-full">X</button>
        <img id="modalImage" src="" alt="Project Image" class="w-full h-64 object-cover">
        <div class="p-6">
            <h2 id="modalTitle" class="text-3xl font-bold mb-4"></h2>
            <p id="modalDescription" class="text-gray-7*200"></p>
        </div>
    </div>
</div>

<!-- JavaScript -->
<script>
    const modal = document.getElementById('projectModal');
    const modalImage = document.getElementById('modalImage');
    const modalTitle = document.getElementById('modalTitle');
    const modalDescription = document.getElementById('modalDescription');
    const closeModal = document.getElementById('closeModal');

    document.querySelectorAll('.project-card').forEach(card => {
        card.addEventListener('click', () => {
            const title = card.getAttribute('data-title');
            const description = card.getAttribute('data-description');
            const image = card.getAttribute('data-image');

            modalTitle.textContent = title;
            modalDescription.textContent = description;
            modalImage.src = image;

            modal.classList.remove('hidden');
        });
    });

    closeModal.addEventListener('click', () => {
        modal.classList.add('hidden');
    });

    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });
</script>
