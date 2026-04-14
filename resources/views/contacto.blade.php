<x-layout>
    <section id="contacto" class="bg-[#0E0E0E] min-h-screen flex items-stretch">
        <div class="grid grid-cols-1 lg:grid-cols-2 w-full">
            
            <div class="bg-[#7A0000] p-12 md:p-24 flex flex-col justify-between relative overflow-hidden">
                <div class="absolute -bottom-12 -left-10 text-[15rem] font-black text-white/5 leading-none select-none pointer-events-none uppercase">
                    MGI
                </div>

                <div class="relative z-10 animate-fade-in-up">
                    <h2 class="text-white text-6xl md:text-7xl font-black uppercase leading-[0.85] tracking-tighter mb-12">
                        ESCRÍBENOS,<br>
                        <span class="text-[#C4622D]">TE RESPONDEMOS.</span>
                    </h2>
                    
                    <p class="text-white/60 text-sm md:text-base font-light max-w-sm mb-20 leading-relaxed font-merriweather italic">
                        Si tienes una deuda que recuperar, quieres explorar una alianza o necesitas información sobre alguna de nuestras empresas, cuéntanos.
                    </p>

                    <div class="space-y-10">
                        <div class="border-b border-white/10 pb-4">
                            <p class="text-[#C4622D] text-[10px] font-bold tracking-[3px] uppercase mb-1">Sede Miraflores</p>
                            <p class="text-white text-sm font-medium tracking-wide uppercase">Av. Petit Thouars 4653, Of. 302</p>
                            <p class="text-white/30 text-[10px] font-light uppercase tracking-wider italic">Previa cita</p>
                        </div>
                        <div class="border-b border-white/10 pb-4">
                            <p class="text-[#C4622D] text-[10px] font-bold tracking-[3px] uppercase mb-1">Sede Santa Beatriz</p>
                            <p class="text-white text-sm font-medium tracking-wide uppercase">Jr. Manuel del Pino 222, Of. 201 - 206</p>
                            <p class="text-white/30 text-[10px] font-light uppercase tracking-wider italic">Previa cita</p>
                        </div>
                        <div>
                            <p class="text-[#C4622D] text-[10px] font-bold tracking-[3px] uppercase mb-1">Horario</p>
                            <p class="text-white text-sm font-medium tracking-wide uppercase">Lunes a Viernes</p>
                            <p class="text-white/30 text-[10px] font-light uppercase tracking-wider italic">9:00 am – 6:00 pm</p>
                        </div>
                    </div>
                </div>

                <div class="relative z-10 mt-20 pt-8 border-t border-white/5">
                    <p class="text-[9px] font-bold tracking-[2px] text-white/20 uppercase mb-6">Empresas del grupo</p>
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-y-6">
                        <div class="space-y-2">
                            <p class="text-white/60 text-[9px] font-bold tracking-widest uppercase">Justo Paz</p>
                            <a href="https://www.justopaz.pe" target="_blank" class="text-[9px] text-white/40 hover:text-[#C4622D] transition-colors tracking-widest uppercase block">JUSTOPAZ.PE →</a>
                        </div>
                        <div class="space-y-2">
                            <p class="text-white/60 text-[9px] font-bold tracking-widest uppercase">Consorcio de Abogados</p>
                            <a href="https://www.consorcioabogadosperu.com" target="_blank" class="text-[9px] text-white/40 hover:text-[#C4622D] transition-colors tracking-widest uppercase block">CONSORCIOABOGADOSPERU.COM →</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bg-white p-12 md:p-24 flex items-center justify-center">
                <div class="w-full max-w-md animate-fade-in-up" style="animation-delay: 0.2s">
                    <form action="#" method="POST" class="space-y-12">
                        @csrf
                        <div class="group">
                            <label class="block text-[9px] font-bold uppercase tracking-[2px] text-gray-400 group-focus-within:text-[#C4622D] transition-colors mb-2">Nombre</label>
                            <input type="text" name="nombre" placeholder="Tu nombre" class="w-full border-b border-gray-200 py-2 outline-none focus:border-[#C4622D] transition-all font-light text-sm text-gray-700 placeholder-gray-300">
                        </div>

                        <div class="group">
                            <label class="block text-[9px] font-bold uppercase tracking-[2px] text-gray-400 group-focus-within:text-[#C4622D] transition-colors mb-2">Apellidos</label>
                            <input type="text" name="apellidos" placeholder="Tus apellidos" class="w-full border-b border-gray-200 py-2 outline-none focus:border-[#C4622D] transition-all font-light text-sm text-gray-700 placeholder-gray-300">
                        </div>

                        <div class="group">
                            <label class="block text-[9px] font-bold uppercase tracking-[2px] text-gray-400 group-focus-within:text-[#C4622D] transition-colors mb-2">Correo electrónico</label>
                            <input type="email" name="email" placeholder="tu@correo.com" class="w-full border-b border-gray-200 py-2 outline-none focus:border-[#C4622D] transition-all font-light text-sm text-gray-700 placeholder-gray-300">
                        </div>

                        <div class="group">
                            <label class="block text-[9px] font-bold uppercase tracking-[2px] text-gray-400 group-focus-within:text-[#C4622D] transition-colors mb-2">Motivo de contacto</label>
                            <select name="motivo" class="w-full border-b border-gray-200 py-2 outline-none focus:border-[#C4622D] transition-all font-light text-sm text-gray-400 bg-transparent cursor-pointer appearance-none">
                                <option value="">Selecciona una opción</option>
                                <option>Tengo una deuda que recuperar</option>
                                <option>Información sobre servicios</option>
                            </select>
                        </div>

                        <div class="group">
                            <label class="block text-[9px] font-bold uppercase tracking-[2px] text-gray-400 group-focus-within:text-[#C4622D] transition-colors mb-2">Mensaje</label>
                            <textarea name="mensaje" rows="2" placeholder="Cuéntanos brevemente tu caso o consulta" class="w-full border-b border-gray-200 py-2 outline-none focus:border-[#C4622D] transition-all font-light text-sm text-gray-700 resize-none placeholder-gray-300"></textarea>
                        </div>

                        <div class="pt-4">
                            <button type="submit" class="w-full bg-[#B00000] text-white py-5 text-[10px] font-bold uppercase tracking-[3px] hover:bg-[#0E0E0E] transition-all duration-500">
                                ENVIAR MENSAJE
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-layout>