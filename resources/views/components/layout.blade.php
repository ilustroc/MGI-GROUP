<!DOCTYPE html>
<html lang="es" class="scroll-smooth"> {{-- Importante para el efecto de bajada suave --}}
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MGI Group</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-montserrat bg-white text-mgi-black antialiased">
    
    <nav class="fixed top-0 w-full bg-[#0E0E0E]/95 backdrop-blur-sm z-50 border-b border-white/5 h-16">
        <div class="max-w-7xl mx-auto px-6 h-full flex items-center justify-between">
            <a href="#inicio" class="text-white font-bold tracking-[4px] text-sm uppercase">
                MGI <span class="text-mgi-orange">GROUP</span>
            </a>

            <div class="hidden md:flex items-center space-x-10">
                <div class="space-x-8 text-[10px] font-medium tracking-[2px] uppercase text-white/45">
                    <a href="#inicio" class="hover:text-white transition">Inicio</a>
                    <a href="#nosotros" class="hover:text-white transition">Nosotros</a>
                    <a href="#recovery" class="hover:text-white transition">MGI Recovery</a>
                    <a href="#soluciones" class="hover:text-white transition">Soluciones</a>
                </div>
                <a href="#contacto" class="bg-mgi-red text-white px-5 py-2.5 text-[10px] font-bold tracking-[2px] uppercase hover:bg-mgi-red-dark transition">CONTACTO</a>
            </div>
        </div>
    </nav>

    <main>
        {{ $slot }}
    </main>

    <footer class="bg-[#0E0E0E] py-10 px-6 md:px-12 border-t border-white/5">
        <div class="max-w-7xl mx-auto flex flex-col md:flex-row items-center justify-between gap-8 md:gap-4">
            
            <div class="ft-logo">
                MGI <span class="text-[#C4622D]">GROUP</span>
            </div>

            <div class="flex flex-wrap justify-center gap-6 md:gap-8">
                <a href="#inicio" class="ft-link">INICIO</a>
                <a href="#nosotros" class="ft-link">NOSOTROS</a>
                <a href="#recovery" class="ft-link">MGI RECOVERY</a>
                <a href="#soluciones" class="ft-link">SOLUCIONES</a>
                <a href="#contacto" class="ft-link font-bold text-white/40">CONTACTO</a>
                <a href="https://www.linkedin.com/company/mgi-groupperu/" target="_blank" class="ft-link">LINKEDIN</a>
            </div>

            <p class="ft-copy">
                MGI Group © 2026 · Lima, Perú
            </p>
        </div>
    </footer>
</body>
</html>