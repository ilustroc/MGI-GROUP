<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MGI Group</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
    <link rel="icon" type="image/png"
        href="{{ asset('img/Isologo_MGI_rojo.png?v=2') }}">
    <link rel="shortcut icon" type="image/png"
        href="{{ asset('img/Isologo_MGI_rojo.png?v=2') }}">    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-white antialiased">
    <nav class="fixed top-0 w-full bg-white/90 backdrop-blur-sm z-50 border-b border-gray-100">
        <div class="max-w-8xl mx-auto px-6 h-16 flex items-center justify-end space-x-10 text-xs font-bold tracking-widest text-gray-500">
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