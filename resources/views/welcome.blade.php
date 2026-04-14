<x-layout>
    <section id="inicio" class="min-h-screen grid grid-cols-1 md:grid-cols-2">
        <div class="bg-mgi-black flex flex-col justify-end p-12 md:p-20 relative overflow-hidden">
            <div class="relative z-10 animate-fade-in-up">
                <p class="text-mgi-orange text-[9px] font-bold tracking-[4px] uppercase mb-8">MGI Group · Lima, Perú</p>
                <h1 class="text-white text-5xl md:text-8xl font-black uppercase leading-[0.95] mb-8">
                    Decisiones.<br>Estrategia.<br><span class="font-extralight text-white/20">Resultados.</span>
                </h1>
                <p class="font-merriweather italic font-light text-white/45 text-sm max-w-sm mb-12">Acompañamos a empresas y personas en la toma de decisiones clave, combinando gestión financiera y comercial.</p>
                <div class="flex flex-col gap-3 max-w-xs">
                    <a href="#recovery" class="btn-mgi-primary flex justify-between items-center">Solución en deudas <span>→</span></a>
                    <a href="#soluciones" class="btn-mgi-secondary flex justify-between items-center">Soluciones especializadas <span>→</span></a>
                </div>
            </div>
        </div>
        <div class="relative h-64 md:h-auto">
            <img src="https://images.unsplash.com/photo-1600880292089-90a7e086ee0c?w=900&q=85&fit=crop" class="w-full h-full object-cover filter grayscale-[20%]" alt="Team">
            <div class="absolute bottom-0 w-full bg-mgi-gray grid grid-cols-3 divide-x divide-black/5 text-center">
                <div class="py-6">
                    <p class="text-2xl font-black text-mgi-orange">+11</p>
                    <p class="text-[8px] text-mgi-black/40 font-bold uppercase tracking-widest">Años Firma</p>
                </div>
                <div class="py-6 text-mgi-black/40"><p class="text-2xl font-black text-mgi-orange">+30</p><p class="text-[8px] font-bold uppercase tracking-widest">Experiencia</p></div>
                <div class="py-6 text-mgi-black/40"><p class="text-2xl font-black text-mgi-orange">+45</p><p class="text-[8px] font-bold uppercase tracking-widest">B2B</p></div>
            </div>
        </div>
    </section>

    <section id="nosotros" class="py-24 px-6 border-b border-mgi-gray">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-12 gap-12 items-center">
            <div class="md:col-span-1 hidden md:block">
                <span class="text-[9px] font-bold text-mgi-black/30 uppercase tracking-[4px] rotate-180 [writing-mode:vertical-lr]">NOSOTROS · 01</span>
            </div>
            <div class="md:col-span-6 animate-fade-in-up">
                <p class="font-merriweather text-3xl md:text-5xl font-light italic leading-tight text-mgi-black">
                    Un grupo con un propósito: <strong class="text-mgi-orange font-bold not-italic">brindarle solución a lo que importa.</strong>
                </p>
                <div class="mt-12 space-y-6 text-mgi-black/60 font-light text-sm leading-relaxed">
                    <p>Somos un grupo empresarial con especialistas en gestión de deudas, conciliación e intermediación.</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 mt-8">
                        <div class="border-l-2 border-mgi-orange pl-4"><h4 class="font-bold text-mgi-black text-xs">Confianza</h4><p class="text-[11px]">Confidencialidad absoluta.</p></div>
                        <div class="border-l-2 border-mgi-orange pl-4"><h4 class="font-bold text-mgi-black text-xs">Resultados</h4><p class="text-[11px]">Foco en la recuperación.</p></div>
                    </div>
                </div>
            </div>
            <div class="md:col-span-5 bg-mgi-gray p-10 md:p-16">
                <h4 class="text-mgi-orange text-[9px] font-bold tracking-[3px] uppercase mb-8">Propuesta de Valor</h4>
                <div class="space-y-8">
                    @foreach(['Soluciones a medida', 'Solidez y confianza', 'Experiencia'] as $i => $val)
                    <div class="border-b border-mgi-black/5 pb-4">
                        <span class="text-[9px] font-bold text-mgi-orange">0{{ $i+1 }}</span>
                        <h5 class="text-sm font-bold mt-1">{{ $val }}</h5>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="recovery" class="bg-mgi-black text-white py-24 px-6 overflow-hidden relative">
        <div class="absolute bottom-0 left-0 text-[12rem] font-black text-white/[0.02] leading-none select-none">RECOVERY</div>
        <div class="max-w-7xl mx-auto relative z-10">
            <div class="grid md:grid-cols-2 gap-16 border-b border-white/10 pb-16 mb-16 items-end">
                <div class="animate-fade-in-up">
                    <span class="border border-mgi-orange/40 text-mgi-orange text-[8px] font-bold tracking-[3px] px-3 py-1.5 uppercase inline-block mb-6">MGI RECOVERY · 02</span>
                    <h2 class="text-6xl font-black uppercase leading-none">MGI RECOVERY</h2>
                    <p class="font-merriweather italic text-mgi-orange text-xl mt-4">Transformamos deuda en liquidez estratégica.</p>
                </div>
                <div class="grid grid-cols-2 gap-10">
                    <div class="border-2 border-white/10 p-8 text-center"><p class="text-5xl font-black text-mgi-orange">+1M</p><p class="text-[8px] text-white/30 uppercase mt-2">Atendidas</p></div>
                    <div class="border-2 border-white/10 p-8 text-center"><p class="text-5xl font-black text-mgi-orange">+30</p><p class="text-[8px] text-white/30 uppercase mt-2">Años</p></div>
                </div>
            </div>
            
            <div class="grid md:grid-cols-2 gap-px bg-white/10 border border-white/10">
                <div class="bg-mgi-black p-12 hover:bg-mgi-orange transition-all duration-500 group">
                    <span class="text-mgi-orange group-hover:text-white text-[8px] font-bold tracking-widest uppercase">Conciliación</span>
                    <h3 class="text-2xl font-bold mt-4">Justo Paz</h3>
                    <p class="text-white/40 group-hover:text-white/80 text-sm mt-4 font-light leading-relaxed">Resolución de conflictos de deuda con fuerza de sentencia judicial.</p>
                </div>
                <div class="bg-mgi-black p-12 hover:bg-mgi-orange transition-all duration-500 group">
                    <span class="text-mgi-orange group-hover:text-white text-[8px] font-bold tracking-widest uppercase">Asesoría Legal</span>
                    <h3 class="text-2xl font-bold mt-4">Consorcio de Abogados</h3>
                    <p class="text-white/40 group-hover:text-white/80 text-sm mt-4 font-light leading-relaxed">Representación legal especializada en negociación comercial.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="soluciones" class="bg-mgi-gray py-24 px-6">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-start md:items-end mb-16 gap-8 border-b border-mgi-black/10 pb-8">
                <div>
                    <span class="text-mgi-black/30 text-[9px] font-bold uppercase tracking-[4px]">Soluciones · 03</span>
                    <h2 class="text-mgi-black text-5xl font-black uppercase mt-2">Especializadas</h2>
                </div>
                <p class="text-mgi-black/40 text-sm font-light max-w-sm">Servicios que complementan el ecosistema del grupo: inmobiliaria, marketing legal y educación.</p>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                @php
                $svcs = [
                    ['tag'=>'Inmobiliaria', 'title'=>'IMPULSE BOUTIQUE', 'img'=>'https://images.unsplash.com/photo-1560518883-ce09059eeffa?w=600&q=75'],
                    ['tag'=>'Marketing Legal', 'title'=>'IMPULSE LAW', 'img'=>'https://images.unsplash.com/photo-1551434678-e076c223a692?w=600&q=75'],
                    ['tag'=>'Capacitación', 'title'=>'EDUMAS', 'img'=>'https://images.unsplash.com/photo-1524178232363-1fb2b075b655?w=600&q=75'],
                ];
                @endphp
                @foreach($svcs as $i => $s)
                <div class="bg-white border border-black/5 animate-fade-in-up overflow-hidden group hover:shadow-2xl transition-all duration-500" style="animation-delay: {{ $i * 0.1 }}s">
                    <img src="{{ $s['img'] }}" class="h-48 w-full object-cover grayscale group-hover:grayscale-0 transition-all duration-500" alt="{{ $s['title'] }}">
                    <div class="p-8 text-center">
                        <p class="text-mgi-orange text-[8px] font-bold tracking-widest uppercase mb-4">{{ $s['tag'] }}</p>
                        <h3 class="text-mgi-black text-lg font-bold mb-8 tracking-tight">{{ $s['title'] }}</h3>
                        <a href="#" class="text-mgi-red text-[10px] font-black uppercase tracking-widest border-b-2 border-mgi-red pb-1">Ir a la web</a>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    @include('contacto')
</x-layout>