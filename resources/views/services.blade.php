<x-layout>
    <section class="bg-mgi-gray py-24 px-6 min-h-screen">
        <div class="max-w-6xl mx-auto">
            <div class="flex justify-between items-end mb-16 border-b border-mgi-black/10 pb-8">
                <h2 class="text-mgi-black text-5xl font-black uppercase tracking-tighter">MGI Services</h2>
                <span class="bg-mgi-red text-white px-4 py-1 text-[10px] font-bold uppercase tracking-widest">Services</span>
            </div>

            <div class="grid md:grid-cols-3 gap-6">
                @php
                $svcs = [
                    ['tag'=>'Inmobiliaria', 'title'=>'IMPULSE BOUTIQUE', 'desc'=>'Agencia de intermediación orientada a mercados de Lima Moderna y Lima Top.'],
                    ['tag'=>'Marketing Legal', 'title'=>'IMPULSE LAW', 'desc'=>'Servicios de marketing especializado para abogados independientes.'],
                    ['tag'=>'Capacitación', 'title'=>'EDUMAS', 'desc'=>'Oportunidades de capacitación y actualización para profesionales.'],
                ];
                @endphp

                @foreach($svcs as $i => $s)
                <div class="bg-white p-10 border border-black/5 animate-fade-in-up shadow-sm hover:shadow-xl transition-all duration-500" style="animation-delay: {{ $i * 0.1 }}s">
                    <p class="text-mgi-orange text-[8px] font-bold tracking-widest uppercase mb-4">{{ $s['tag'] }}</p>
                    <h3 class="text-mgi-black text-xl font-bold mb-4 leading-tight">{{ $s['title'] }}</h3>
                    <p class="text-mgi-black/40 text-sm font-light leading-relaxed mb-10">{{ $s['desc'] }}</p>
                    <a href="#" class="text-mgi-red text-[10px] font-black uppercase tracking-widest hover:text-mgi-orange transition-colors">Ir a la web →</a>
                </div>
                @endforeach
            </div>
        </div>
    </section>
</x-layout>