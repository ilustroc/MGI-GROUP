<x-layout>
    <section class="min-h-[85vh] bg-mgi-red px-6 py-12">
        <div class="mx-auto w-full max-w-6xl">
            <div class="flex flex-col md:flex-row items-stretch gap-16">

                {{-- IZQUIERDA --}}
                <div class="md:w-1/2 flex flex-col">
                    {{-- Título arriba --}}
                    <div class="flex items-center gap-5 text-white">
                        <img
                            src="{{ asset('img/Isologo_MGI_blanco.png') }}"
                            alt="Isologo MGI"
                            class="h-12 w-12 md:h-16 md:w-16 object-contain"
                        />

                        <h2 class="font-akzidenz font-bold text-4xl md:text-5xl leading-none">
                            Contáctanos
                        </h2>
                    </div>

                    {{-- Logo grande CENTRADO --}}
                    <div class="flex-1 flex items-center justify-center">
                        <img
                            src="{{ asset('img/MGI_Group_blanco.png') }}"
                            alt="MGI Group"
                            class="w-[320px] md:w-[320px] h-auto object-contain"
                        />
                    </div>
                </div>

                {{-- DERECHA: FORM --}}
                <div class="md:w-1/2 flex items-center justify-center">
                    <div class="w-full max-w-[720px] bg-white p-10 md:p-8 rounded-sm shadow-2xl animate-fade-in-up">
                        {{-- menos separación general --}}
                        <form method="POST" action="{{ route('contacto.store') }}" class="space-y-4">
                            @csrf
                            <div>
                                {{-- menos separación label-input --}}
                                <label class="block font-akzidenz text-mgi-red font-bold text-base mb-2">
                                    Nombre:
                                </label>
                                <input
                                    type="text" name="nombre"
                                    class="w-full border border-gray-300 rounded-md px-2 py-3 focus:border-mgi-red focus:ring-0 outline-none transition"
                                >
                            </div>

                            <div>
                                <label class="block font-akzidenz text-mgi-red font-bold text-base mb-2">
                                    Correo:
                                </label>
                                <input
                                    type="email" name="correo"
                                    class="w-full border border-gray-300 rounded-md px-4 py-3 focus:border-mgi-red focus:ring-0 outline-none transition"
                                >
                            </div>

                            <div>
                                <label class="block font-akzidenz text-mgi-red font-bold text-base mb-2">
                                    Deja tu mensaje:
                                </label>
                                <textarea
                                    rows="3" name="mensaje"
                                    class="w-full border border-gray-300 rounded-md px-4 py-3 focus:border-mgi-red focus:ring-0 outline-none transition resize-none"
                                ></textarea>
                            </div>

                            <button
                                class="w-full bg-black text-white font-akzidenz font-bold py-4 hover:bg-mgi-red transition duration-500 tracking-widest uppercase text-sm"
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
