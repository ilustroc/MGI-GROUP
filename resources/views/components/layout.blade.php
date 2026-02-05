<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MGI Group</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white antialiased">
    <nav class="fixed top-0 w-full bg-white/95 backdrop-blur-sm z-50 border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-6 h-16 flex items-center justify-end space-x-8 text-xs font-bold tracking-widest text-gray-500">
            <a href="{{ route('home') }}" class="hover:text-mgi-red transition">HOME</a>
            <a href="{{ route('recovery') }}" class="hover:text-mgi-red transition">MGI Recovery</a>
            <a href="{{ route('services') }}" class="hover:text-mgi-red transition">MGI Services</a>
            <a href="{{ route('contacto') }}" class="hover:text-mgi-red transition">Contacto</a>
        </div>
    </nav>

    <main class="pt-16">
        {{ $slot }}
    </main>

    <footer class="bg-black text-[10px] text-white py-2 px-6 flex justify-between items-center tracking-tight">
        <div class="space-x-4">
            <a href="#">Términos y ayuda</a>
            <a href="#">Política de privacidad</a>
        </div>
    </footer>
</body>
</html>