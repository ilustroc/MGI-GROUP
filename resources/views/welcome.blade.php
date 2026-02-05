<x-layout>
    <section class="relative h-[60vh] flex items-center justify-center bg-slate-900 overflow-hidden">
        <div class="absolute inset-0 opacity-40 bg-[url('https://xn--invitacin-xv-fer-dvb.my.canva.site/mgi-group/_assets/media/bbf6c07f47c0d3a98f89c6904b93c0ed.jpg')] bg-cover bg-center"></div>
        <div class="relative text-center animate-fade-in-up">
            <h1 class="text-white text-8xl md:text-9xl font-bold tracking-tighter">MGI</h1>
            <p class="text-white text-2xl uppercase tracking-[0.4em] font-light text-left">group</p>
        </div>
    </section>

    <section class="py-28 px-6">
    <div class="mx-auto max-w-6xl text-center">

        <!-- BLOQUE: LOGO + TEXTO -->
        <div class="grid items-center gap-12 md:grid-cols-2 md:gap-16">

        <!-- LOGO -->
        <div class="flex justify-center">
            <div class="flex items-center gap-6">
            <!-- Ícono placeholder (cámbialo por tu logo real si quieres) -->
            <img
                src="https://placehold.co/120x120/png?text=LOGO"
                alt="MGI logo"
                class="h-24 w-24 object-contain"
            />

            <!-- Texto marca (MGI arriba, GROUP abajo) -->
            <div class="text-left leading-none">
                <div class="text-6xl tracking-tight text-slate-800">MGI</div>
                <div class="mt-2 text-lg font-medium uppercase tracking-tight text-mgi-red">
                GROUP
                </div>
            </div>
            </div>
        </div>

        <!-- TEXTO -->
        <div class="flex justify-center">
            <p class="max-w-xl text-center text-lg text-gray-700 leading-relaxed font-light">
            MGI Group es un grupo empresarial que acompaña a empresas y personas en la toma de decisiones clave,
            combinando gestión financiera y comercial, soporte legal y ejecución estratégica para generar valor y
            sostenibilidad en el tiempo.
            </p>
        </div>
        </div>

        <!-- BOTONES -->
        <div class="mt-14 flex flex-col sm:flex-row items-center justify-center gap-8">
        <a
            href="#"
            class="inline-flex min-w-[220px] justify-center border border-mgi-red bg-mgi-red px-10 py-4
                text-sm font-semibold uppercase tracking-[0.25em] text-white shadow-sm transition hover:opacity-95"
        >
            RECOVERY
        </a>

        <a
            href="#"
            class="inline-flex min-w-[220px] justify-center border border-mgi-red bg-mgi-red px-10 py-4
                text-sm font-semibold uppercase tracking-[0.25em] text-white shadow-sm transition hover:opacity-95"
        >
            SERVICES
        </a>
        </div>

        <!-- LOGOS (5) - BLANCO Y NEGRO SIEMPRE -->
        <div class="mt-12 flex flex-wrap items-center justify-center gap-10">
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

    <section class="bg-mgi-red text-white py-16 px-6">
    <div class="mx-auto max-w-6xl">

        <!-- FILA: logo arriba / título abajo (desalineados) -->
        <div class="mb-10 grid grid-cols-[auto_1fr_auto]">
        <!-- Logo: arriba -->
        <div class="self-start">
            <img
            src="https://placehold.co/120x40/png?text=MGI+LOGO"
            alt="MGI logo"
            class="h-10 w-auto object-contain"
            />
        </div>

        <!-- Título: abajo -->
        <h2 class="self-end text-5xl font-bold text-center tracking-tight">
            Nuestra experiencia
        </h2>

        <!-- Espaciador para mantener el título centrado -->
        <div class="w-[120px]"></div>
        </div>

        <!-- Cuadros más juntos -->
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