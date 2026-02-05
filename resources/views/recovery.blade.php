<x-layout>
    <section class="flex flex-col md:flex-row min-h-[85vh]">

        {{-- IZQUIERDA: Fondo Recovery --}}
        <div class="md:w-51/100 relative bg-cover bg-center flex items-center p-12"
            style="background-image: url('{{ asset('img/fondo-recovery.jpg') }}');">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>

            <div class="relative w-full flex items-center justify-center animate-fade-in-up">
                <img
                    src="{{ asset('img/MGI_Recovery.png') }}"
                    alt="MGI Recovery"
                    class="w-[340px] md:w-[420px] h-auto object-contain"
                />
            </div>
        </div>

        {{-- DERECHA: Cards --}}
        <div class="md:w-49/100 bg-[rgb(229,229,229)] p-12 flex flex-col justify-center">
            <div class="-mx-12 mb-8">
                <div class="bg-mgi-red/95 text-white inline-flex items-center justify-center
                            w-[218.5px] h-[49.3px] font-montserrat text-[26.0694px] uppercase">
                    RECOVERY
                </div>
            </div>

            @php
                $recovery = [
                    [
                        'title' => 'JUSTO PAZ',
                        'desc'  => 'Servicios de conciliación a Personas Naturales, Personas Jurídicas y conciliaciones con el Estado',
                        'logo'  => asset('img/Justo-Paz.png'),
                        'url'   => 'https://www.justopaz.pe/',
                    ],
                    [
                        'title' => 'CONSORCIO DE ABOGADOS DEL PERÚ',
                        'desc'  => 'Servicios de asesoría preventiva, diagnóstico de casos. Expertos con amplia experiencia en el mercado legal.',
                        'logo'  => asset('img/Consorcio-menos.png'),
                        'url'   => 'https://www.consorcioabogadosperu.com/',
                    ],
                ];
            @endphp

            <div class="space-y-8">
                @foreach($recovery as $i => $r)
                    <div class="animate-fade-in-up" style="animation-delay: {{ $i * 0.1 }}s">
                        <div
                        class="bg-[rgba(255,255,255,0.35)] rounded-2xl px-4 py-6 flex items-center gap-8
                                max-w-[560px] w-full"
                        >
                        <div class="w-[75%]">
                            <div class="flex items-center gap-3">
                            <svg
                                class="h-3.5 w-3.5 shrink-0 text-[rgb(134,134,134)] origin-center rotate-[45deg]"
                                viewBox="0 0 10 9" fill="currentColor" aria-hidden="true"
                            >
                                <path d="M5 0L10 5H0L5 0Z" />
                                <path d="M3.5 5.2L5 9L6.5 5.2H3.5Z" />
                            </svg>

                            <h3 class="font-akzidenz font-extrabold text-[13.4107px] leading-[17px] tracking-[0] text-[rgb(134,134,134)]">
                                {{ $r['title'] }}
                            </h3>
                            </div>

                            <p class="font-akzidenz mt-1 ml-[26px] font-normal text-[16.0823px] leading-[20px] tracking-[0] text-[rgb(134,134,134)]">
                            {!! nl2br(e($r['desc'])) !!}
                            </p>
                        </div>

                        <div class="w-[25%] flex flex-col items-end justify-center gap-2">
                            <img src="{{ $r['logo'] }}" alt="{{ $r['title'] }}"
                                class="h-12 w-auto object-contain" />

                            <a href="{{ $r['url'] }}"
                            class="text-mgi-red text-[10px] font-bold hover:underline">
                            Ir a la web
                            </a>
                        </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>
