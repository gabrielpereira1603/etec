<div class="bg-gray-200">
    <h1 class="text-center text-xl sm:text-2xl py-12 font-bold text-gray-800 uppercase">
        Nossos Cursos <span class="text-[#015724]">Úteis</span>
    </h1>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 px-8 sm:px-32 gap-6 pb-12">
        @php
            $cards = [
                'Administração' => 'https://example.com/concurso-publico',
                'Agropecuária' => 'https://example.com/processo-seletivo',
                'Desenvolvimento de Sistemas' => 'https://example.com/vagas-remanescentes',
                'Informática para Internet' => 'https://example.com/vestibulinho',
                'Logística' => 'https://example.com/calendario-escolar',
                'Recursos Humanos' => 'https://example.com/nsa',
                'Serviços Jurídicos' => 'https://example.com/email-institucional',
            ];
        @endphp

        @foreach ($cards as $title => $link)
            <a href="{{ $link }}" target="_blank" class="group relative backdrop-blur-md bg-white/70 rounded-md shadow-md px-10 py-8 flex flex-col items-center justify-between text-center transition-all duration-300 ease-in-out hover:shadow-lg hover:-translate-y-1 no-underline">
                <!-- Top border effect on hover -->
                <div class="absolute top-0 left-0 w-full h-1 bg-transparent group-hover:bg-[#015724] transition-all duration-300 rounded-t-md"></div>

                <div class="flex flex-col items-center">
                    <span class="mb-4">
                        <x-workshop-icon width="50px" height="50px" color="#015724" />
                    </span>
                    <h2 class="text-gray-900 font-semibold text-lg">{{ $title }}</h2>
                </div>
            </a>
        @endforeach
    </div>
</div>
