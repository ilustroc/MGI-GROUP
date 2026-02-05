<x-layout>
    {{-- HERO --}}
    <section class="relative h-[60vh] min-h-[620px] flex items-center justify-center overflow-hidden">
        {{-- Fondo --}}
        <div class="absolute inset-0 bg-[url('https://xn--invitacin-xv-fer-dvb.my.canva.site/mgi-group/_assets/media/bbf6c07f47c0d3a98f89c6904b93c0ed.jpg')] bg-cover bg-center"></div>
        <div class="absolute inset-0 bg-black/20"></div>

        {{-- ISOLOGO arriba izquierda (como Contáctanos) --}}
        <div class="absolute top-6 left-6 z-20">
            <img
                src="{{ asset('img/Isologo_MGI_blanco.png') }}"
                alt="MGI Isologo"
                class="h-8 md:h-16 w-auto object-contain"
            />
        </div>

        {{-- LOGO 1: MGI_Group_negro.png --}}
        <div class="relative animate-fade-in-up">
            <img
                src="{{ asset('img/MGI_Group.png') }}"
                alt="MGI Group"
                class="h-[70px] md:h-[180px] w-auto object-contain"
            />
        </div>
    </section>

    {{-- BLOQUE LOGO + TEXTO (más simétrico y centrado) --}}
    <section class="py-16 md:py-24 px-6 md:px-10 lg:px-12">
        <div class="mx-auto max-w-5xl">

            <div class="grid md:grid-cols-2 items-center gap-8 md:gap-10">
                {{-- LOGO --}}
                <div class="mx-auto w-full max-w-md">
                    <div class="h-24 md:h-32 flex items-center justify-center overflow-hidden">
                        <img
                            src="{{ asset('img/MGI_Group_negro.png') }}"
                            alt="MGI Group"
                            class="h-full w-auto object-contain
                                scale-[1.08] md:scale-[1.10]"
                        />
                    </div>
                </div>

                {{-- TEXTO --}}
                <div class="mx-auto w-full max-w-md">
                    <p class="text-center text-base md:text-lg text-gray-700 leading-relaxed font-light">
                        MGI Group es un grupo empresarial que acompaña a empresas y personas en la toma de decisiones clave,
                        combinando gestión financiera y comercial, soporte legal y ejecución estratégica para generar valor y
                        sostenibilidad en el tiempo.
                    </p>
                </div>
            </div>

            {{-- BOTONES --}}
            <div class="mt-10 flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="{{ route('recovery') }}"
                class="inline-flex min-w-[220px] justify-center border border-mgi-red bg-mgi-red px-10 py-4
                        text-sm font-semibold uppercase tracking-[0.25em] text-white shadow-sm transition hover:opacity-95">
                    RECOVERY
                </a>

                <a href="{{ route('services') }}"
                class="inline-flex min-w-[220px] justify-center border border-mgi-red bg-mgi-red px-10 py-4
                        text-sm font-semibold uppercase tracking-[0.25em] text-white shadow-sm transition hover:opacity-95">
                    SERVICES
                </a>
            </div>

            {{-- LOGOS --}}
            <div class="mt-10 flex flex-wrap items-center justify-center gap-10">
                <img src="{{ asset('img/Justo-Paz.png') }}" alt="Logo 1"
                    class="h-10 w-auto object-contain filter grayscale contrast-125 opacity-70" />
                <img src="{{ asset('img/Consorcio.png') }}" alt="Logo 2"
                    class="h-10 w-auto object-contain filter grayscale contrast-125 opacity-70" />
                <img src="{{ asset('img/Impulse.png') }}" alt="Logo 3"
                    class="h-10 w-auto object-contain filter grayscale contrast-125 opacity-70" />
                <img src="{{ asset('img/ImpulseLaw.png') }}" alt="Logo 4"
                    class="h-10 w-auto object-contain filter grayscale contrast-125 opacity-70" />
                <img src="{{ asset('img/Edu-Eju.png') }}" alt="Logo 5"
                    class="h-10 w-auto object-contain filter grayscale contrast-125 opacity-70" />
            </div>

        </div>
    </section>

    {{-- NUESTRA EXPERIENCIA --}}
    <section class="bg-mgi-red text-white py-16 px-6">
        <div class="mx-auto max-w-6xl">

            {{-- FILA: logo pequeño arriba-izquierda + título centrado --}}
            <div class="mb-10 grid grid-cols-[auto_1fr_auto] items-start">
                {{-- LOGO --}}
                <div class="pt-1">
                    <img
                        src="{{ asset('img/MGI_Group_blanco.png') }}"
                        alt="MGI Group"
                        class="h-10 md:h-24 w-auto object-contain"
                    />
                </div>

                {{-- TÍTULO --}}
                <h2 class="text-center text-5xl md:text-7xl font-light tracking-tight leading-none">
                    Nuestra experiencia
                </h2>

                {{-- ESPACIADOR (mismo ancho aprox del logo para centrar real) --}}
                <div class="w-10 md:w-24"></div>
            </div>

            {{-- Cuadros más juntos --}}
            <div class="mx-auto max-w-4xl">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-3 md:gap-4 place-items-center">
                    <div class="w-full max-w-[240px] border-2 border-white px-10 py-12 text-center animate-fade-in-up" style="animation-delay: 0.2s">
                        <p class="text-sm uppercase tracking-widest mb-4">Años</p>
                        <p class="text-6xl font-bold">+30</p>
                    </div>

                    <div class="w-full max-w-[240px] border-2 border-white px-10 py-12 text-center animate-fade-in-up" style="animation-delay: 0.4s">
                        <p class="text-sm uppercase tracking-widest mb-4">Clientes B2B</p>
                        <p class="text-6xl font-bold">+45</p>
                    </div>

                    <div class="w-full max-w-[240px] border-2 border-white px-10 py-12 text-center animate-fade-in-up" style="animation-delay: 0.6s">
                        <p class="text-sm uppercase tracking-widest mb-4">Deudas Atendidas</p>
                        <p class="text-6xl font-bold">+1M</p>
                    </div>
                </div>
            </div>

        </div>
    </section>
</x-layout>
