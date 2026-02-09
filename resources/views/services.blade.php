<x-layout>
    <section class="flex flex-col md:flex-row min-h-[85vh]">

        {{-- IZQUIERDA: Fondo Services --}}
        <div class="md:w-51/100 relative bg-cover bg-center flex items-center p-12"
            style="background-image: url('{{ asset('img/fondo-services.jpg') }}');">
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/20 to-transparent"></div>

            <div class="relative w-full flex items-center justify-center animate-fade-in-up">
                <img
                    src="{{ asset('img/MGI_Services.png') }}"
                    alt="MGI Services"
                    class="w-[340px] md:w-[420px] h-auto object-contain"
                />
            </div>
        </div>

        {{-- DERECHA: Cards --}}
        <div class="md:w-49/100 bg-[rgb(229,229,229)] p-12 flex flex-col justify-center">
            <div class="-mx-12 mb-8">
                <div class="bg-mgi-red/95 text-white inline-flex items-center justify-center
                            w-[218.5px] h-[49.3px] font-montserrat text-[26.0694px] uppercase">
                    SERVICES
                </div>
            </div>

            @php
                $services = [
                    [
                        'title' => 'IMPULSE BOUTIQUE INMOBILIARIA',
                        'desc'  => 'Agencia inmobiliaria de intermediación, orientada a una metodología boutique.',
                        'logo'  => asset('img/Impulse.png'),
                        'url'   => 'https://www.impulse-go.com/',
                    ],
                    [
                        'title' => 'IMPULSE LAW',
                        'desc'  => 'Servicios de marketing para abogados independientes.',
                        'logo'  => asset('img/ImpulseLaw.png'),
                        'url'   => 'https://www.impulselaw.com/',
                    ],
                    [
                        'title' => 'EDUMAS',
                        'desc'  => 'Centro de educación ejecutiva que ofrece oportunidades de capacitación.',
                        'logo'  => asset('img/Edu-Eju.png'),
                        'url'   => 'https://www.edumas.pe/',
                    ],
                ];
            @endphp

            <div class="space-y-8">
                @foreach($services as $i => $s)
                    <div class="animate-fade-in-up" style="animation-delay: {{ $i * 0.1 }}s">
                        <div
                            class="bg-[rgba(255,255,255,0.35)] rounded-2xl px-4 py-6 flex items-center gap-8
                                   max-w-[560px] w-full"
                        >
                            {{-- TEXTO (75%) --}}
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
                                        {{ $s['title'] }}
                                    </h3>
                                </div>

                                <p class="font-akzidenz mt-1 ml-[26px] font-normal text-[16.0823px] leading-[20px] tracking-[0] text-[rgb(134,134,134)]">
                                    {!! nl2br(e($s['desc'])) !!}
                                </p>
                            </div>

                            {{-- LOGO + LINK (25%) --}}
                            <div class="w-[25%] flex flex-col items-end justify-center gap-2">
                                <img
                                    src="{{ $s['logo'] }}"
                                    alt="{{ $s['title'] }}"
                                    class="h-12 w-auto object-contain"
                                />

                                <a href="{{ $s['url'] }}" target="_blank" rel="noopener noreferrer"
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
