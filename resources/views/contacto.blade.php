<x-layout>
    <section class="min-h-[85vh] bg-mgi-red px-6 py-12">
        <div class="mx-auto w-full max-w-6xl">
            <div class="flex flex-col md:flex-row items-stretch gap-16">

                {{-- IZQUIERDA --}}
                <div class="md:w-1/2 flex flex-col justify-between">
                    {{-- Título arriba --}}
                    <div class="flex items-center gap-6 text-white">
                        <img
                            src="{{ asset('img/Isologo_MGI_blanco.png') }}"
                            alt="Isologo MGI"
                            class="h-14 w-14 md:h-20 md:w-20 object-contain"
                        />

                        <h2 class="font-akzidenz font-bold text-5xl md:text-6xl leading-none">
                            Contáctanos
                        </h2>
                    </div>

                    {{-- Logo grande al medio --}}
                    <div class="flex-1 flex items-center">
                        <img
                            src="{{ asset('img/MGI_Group_blanco.png') }}"
                            alt="MGI Group"
                            class="w-[360px] md:w-[520px] h-auto object-contain"
                        />
                    </div>
                </div>

                {{-- DERECHA: FORM --}}
                <div class="md:w-1/2 flex items-center justify-center">
                    <div class="w-full max-w-[720px] bg-white p-12 rounded-sm shadow-2xl animate-fade-in-up">
                        <form class="space-y-10">
                            <div>
                                <label class="block font-akzidenz text-mgi-red font-bold text-lg mb-3">
                                    Nombre:
                                </label>
                                <input
                                    type="text"
                                    class="w-full border border-gray-300 rounded-md px-4 py-4 focus:border-mgi-red focus:ring-0 outline-none transition"
                                >
                            </div>

                            <div>
                                <label class="block font-akzidenz text-mgi-red font-bold text-lg mb-3">
                                    Correo:
                                </label>
                                <input
                                    type="email"
                                    class="w-full border border-gray-300 rounded-md px-4 py-4 focus:border-mgi-red focus:ring-0 outline-none transition"
                                >
                            </div>

                            <div>
                                <label class="block font-akzidenz text-mgi-red font-bold text-lg mb-3">
                                    Deja tu mensaje:
                                </label>
                                <textarea
                                    rows="5"
                                    class="w-full border border-gray-300 rounded-md px-4 py-4 focus:border-mgi-red focus:ring-0 outline-none transition resize-none"
                                ></textarea>
                            </div>

                            <button
                                class="w-full bg-black text-white font-akzidenz font-bold py-5 hover:bg-mgi-red transition duration-500 tracking-widest uppercase text-sm"
                            >
                                Enviar
                            </button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
</x-layout>
