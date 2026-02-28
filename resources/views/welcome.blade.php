<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pertemuan 1 - PWF</title>
    <!-- Fallback: Tailwind CDN agar tampilan langsung muncul tanpa running npm run dev -->
    <script src="https://cdn.tailwindcss.com"></script>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#000000] flex justify-center items-center min-h-screen font-sans">
    <div class="bg-[#1a1a1a] border border-[#333333] rounded-xl p-10 w-full max-w-lg shadow-2xl">
        <div class="mb-8 text-center sm:text-left">
            <h2 class="text-white text-2xl font-semibold mb-1">Notesa Aldinasari</h2>
            <p class="text-gray-400 text-base">20230140173</p>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-4">
            <a href="/about" class="inline-block px-6 py-3 bg-white text-black rounded-lg text-sm font-bold hover:bg-gray-200 transition-all duration-200 text-center shadow-lg active:scale-95">
                Buka Modul Pertemuan 1
            </a>
            <div class="flex items-center">
                <span class="text-[10px] text-gray-500 uppercase tracking-widest font-medium">Pengembangan Web Framework</span>
            </div>
        </div>
    </div>
</body>
</html>

