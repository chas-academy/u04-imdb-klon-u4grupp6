<x-layout>
    <div class="bg-black min-h-screen">
        <div class="container px-4 max-w-full ml-8 mt-10">
            <!-- GRID STRUKTUR FÖR RUBRIKER OCH KORT -->
            <div class="grid grid-cols-2 gap-10 px-10">
                <!-- Vänster rubrik -->
                <div>
                    <h1 class="text-3xl font-bold text-white mb-4 text-left">I Fokus</h1>
                </div>
                <!-- Höger rubrik -->
                <div>
                    <h1 class="text-3xl font-bold text-white mb-4 text-left">Måste Kolla</h1>
                </div>

                <!-- Vänster kort -->
                <div class="bg-[#353002] rounded-lg p-6 w-[600px] h-[400px] shadow-lg">
                    <img src="images/bild1.jpg" class="w-100px h-40px object-cover rounded-lg">
                    <h2 class="text-xl font-semibold text-white mt-4 text-center">Title</h2>
                    <p class="text-md text-gray-200 mt-2 text-center">Beskrivning</p>
                </div>

                <!-- Höger kort - 6 bilder och rubriker -->
                <div class="bg-[#353002] rounded-lg p-6 w-[600px] h-auto shadow-lg">
                    <!-- Grid för 6 bilder -->
                    <div class="grid grid-cols-3 gap-4">
                        <!-- Bild 1 -->
                        <div class="text-center">
                            <img src="images/nedladdning.jpg">
                            <h3 class="text-white text-sm mt-2">Rubrik 1</h3>
                        </div>

                        <!-- Bild 2 -->
                        <div class="text-center">
                            <img src="images">
                            <h3 class="text-white text-sm mt-2">Rubrik 2</h3>
                        </div>

                        <!-- Bild 3 -->
                        <div class="text-center">
                            <img src="images">
                            <h3 class="text-white text-sm mt-2">Rubrik 3</h3>
                        </div>

                        <!-- Bild 4 -->
                        <div class="text-center">
                            <img src="images">
                            <h3 class="text-white text-sm mt-2">Rubrik 4</h3>
                        </div>

                        <!-- Bild 5 -->
                        <div class="text-center">
                            <img src="images">
                            <h3 class="text-white text-sm mt-2">Rubrik 5</h3>
                        </div>

                        <!-- Bild 6 -->
                        <div class="text-center">
                            <img src="images">
                            <h3 class="text-white text-sm mt-2">Rubrik 6</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
