<div class="bg-gray-100 py-10 px-6 sm:px-16">
    <h1 class="text-center text-xl sm:text-2xl font-bold text-gray-800 uppercase mb-10">
        Próximos <span class="text-[#b20000]">Eventos</span>
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        @php
            $events = [
                [
                    'title' => 'Feira de Profissões',
                    'description' => 'Uma oportunidade para estudantes conhecerem cursos técnicos e profissionais do mercado.',
                    'date' => '2025-05-10',
                    'location' => 'Auditório da ETEC',
                ],
                [
                    'title' => 'Palestra sobre Tecnologia',
                    'description' => 'Especialistas da área de TI compartilham tendências e experiências.',
                    'date' => '2025-05-15',
                    'location' => 'Sala Multimídia 2',
                ],
                [
                    'title' => 'Semana do Meio Ambiente',
                    'description' => 'Atividades e workshops voltados à sustentabilidade.',
                    'date' => '2025-06-01',
                    'location' => 'Pátio Principal',
                ],
            ];
        @endphp

        @foreach ($events as $event)
            <div class="bg-white rounded-xl shadow-md overflow-hidden group hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                <div class="bg-[#b20000] text-white px-6 py-4 flex items-center justify-between">
                    <div>
                        <p class="text-sm uppercase tracking-wide">Data</p>
                        <p class="text-xl font-bold">
                            {{ \Carbon\Carbon::parse($event['date'])->format('d M Y') }}
                        </p>
                    </div>
                    <div class="text-5xl font-black opacity-20 group-hover:opacity-30 transition-opacity">
                        📅
                    </div>
                </div>

                <div class="p-6 flex flex-col justify-between h-full">
                    <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $event['title'] }}</h3>
                    <p class="text-gray-600 text-sm mb-4">{{ $event['description'] }}</p>

                    <div class="flex justify-between items-center mt-auto">
                        <p class="text-sm font-medium text-gray-700">
                            📍 {{ $event['location'] }}
                        </p>
                        <a href="#" class="text-[#b20000] font-bold hover:underline transition-all text-sm">
                            Ver detalhes
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <h1 class="text-center text-xl sm:text-sm font-bold text-gray-800 uppercase underline mt-5">
         <a href="#" class="text-[#b20000]">Clique aqui para ver mais</a>
    </h1>
</div>
