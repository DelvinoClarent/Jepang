<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekomendasi Tour Jepang</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-white font-sans text-gray-900">

    <!-- Navbar -->
    <nav class="bg-blue-500 shadow-md">
        <div class="max-w-7xl mx-auto px-4 py-5 flex justify-between items-center">
            <a href="#" class="text-white text-3xl font-semibold">TourJepang</a>
            <div class="space-x-6">
                <a href="#destinasi" class="text-white hover:text-blue-200">Destinasi</a>
                <a href="#tours" class="text-white hover:text-blue-200">Paket Tour</a>
                <a href="#contact" class="text-white hover:text-blue-200">Kontak</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="bg-blue-50 text-center py-16">
        <h1 class="text-4xl font-semibold text-gray-800 mb-4">Temukan Liburan Impianmu di Jepang</h1>
        <p class="text-xl text-gray-600 mb-6">Jelajahi destinasi terbaik, budaya kaya, dan pengalaman tak terlupakan di Jepang.</p>
        <a href="#tours" class="bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-600 transition duration-300">Lihat Paket Tour</a>
    </section>

    <!-- Destinasi Section -->
    <section id="destinasi" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-semibold text-gray-800 mb-10">Destinasi Populer di Jepang</h2>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Destinasi 1 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/400x300" alt="Tokyo" class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-2xl font-semibold text-gray-800">Tokyo</h3>
                    <p class="text-gray-600">Kota metropolitan yang menawarkan berbagai budaya, belanja, dan tempat wisata modern.</p>
                </div>
                <!-- Destinasi 2 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/400x300" alt="Kyoto" class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-2xl font-semibold text-gray-800">Kyoto</h3>
                    <p class="text-gray-600">Tempat yang penuh dengan sejarah, kuil kuno, dan taman indah untuk dijelajahi.</p>
                </div>
                <!-- Destinasi 3 -->
                <div class="bg-gray-100 p-6 rounded-lg shadow-lg">
                    <img src="https://via.placeholder.com/400x300" alt="Hokkaido" class="w-full h-48 object-cover rounded-md mb-4">
                    <h3 class="text-2xl font-semibold text-gray-800">Hokkaido</h3>
                    <p class="text-gray-600">Nikmati keindahan alam dengan pemandangan pegunungan, danau, dan salju.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Paket Tour Section -->
    <section id="tours" class="py-20 bg-blue-100">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-semibold text-gray-800 mb-10">Paket Tour Eksklusif</h2>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Paket Tour 1 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x300" alt="Tour 1" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Tour Tokyo & Kyoto</h3>
                        <p class="text-gray-600 mb-4">Jelajahi dua kota paling terkenal di Jepang dengan pengalaman wisata yang lengkap.</p>
                        <a href="#" class="text-blue-500 font-semibold hover:underline">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <!-- Paket Tour 2 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x300" alt="Tour 2" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Tour Hokkaido Winter</h3>
                        <p class="text-gray-600 mb-4">Nikmati keindahan musim dingin di Hokkaido dengan salju yang indah dan aktivitas luar ruangan.</p>
                        <a href="#" class="text-blue-500 font-semibold hover:underline">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <!-- Paket Tour 3 -->
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="https://via.placeholder.com/400x300" alt="Tour 3" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-4">Tour Jepang Selatan</h3>
                        <p class="text-gray-600 mb-4">Eksplorasi kota-kota indah di selatan Jepang dengan budaya yang unik.</p>
                        <a href="#" class="text-blue-500 font-semibold hover:underline">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <h2 class="text-3xl font-semibold text-gray-800 mb-10">Hubungi Kami</h2>
            <p class="text-gray-600 mb-6">Ingin memulai perjalananmu? Hubungi kami untuk informasi lebih lanjut tentang paket tour yang tersedia.</p>
            <a href="mailto:info@tourjepang.com" class="bg-blue-500 text-white py-2 px-6 rounded-lg hover:bg-blue-600 transition duration-300">Email Kami</a>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-blue-500 text-white py-6">
        <div class="max-w-7xl mx-auto px-4 text-center">
            <p>&copy; 2024 TourJepang. Semua hak cipta dilindungi.</p>
        </div>
    </footer>

</body>
</html>
