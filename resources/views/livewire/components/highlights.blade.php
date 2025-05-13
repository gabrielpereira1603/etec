<div class="bg-gray-100 py-10 px-6 sm:px-16">
    <h1 class="text-center text-xl sm:text-2xl font-bold text-gray-800 uppercase mb-10">
        Últimos <span class="text-[#015724]">Destaques</span>
    </h1>

    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-10">
        @php
            $highlights = [
                [
                    'title' => 'Administração em Alta no Mercado',
                    'description' => 'Saiba por que o curso técnico em Administração se tornou uma das opções mais buscadas.',
                    'image' => 'https://via.placeholder.com/400x250?text=Administração',
                    'url' => 'https://exemplo.com/noticia1',
                ],
                [
                    'title' => 'Novo Laboratório de Gestão Empresarial',
                    'description' => 'A ETEC inaugura espaço moderno para práticas de simulação empresarial.',
                    'image' => 'https://via.placeholder.com/400x250?text=Laboratório',
                    'url' => 'https://exemplo.com/noticia2',
                ],
                [
                    'title' => 'Alunos Desenvolvem Projeto de Impacto Social',
                    'description' => 'Iniciativa de estudantes de Administração promove ações de cidadania no bairro.',
                    'image' => 'https://via.placeholder.com/400x250?text=Projeto+Social',
                    'url' => 'https://exemplo.com/noticia3',
                ],
            ];
        @endphp

        @foreach ($highlights as $item)
            <div class="bg-white rounded-xl shadow-md overflow-hidden group hover:shadow-lg hover:-translate-y-1 transition-all duration-300">
                <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-full h-40 object-cover">

                <div class="p-6 flex flex-col justify-between h-full">
                    <a href="{{ $item['url'] }}" target="_blank" class="text-xl font-semibold text-[#015724] hover:underline mb-2">
                        {{ $item['title'] }}
                    </a>
                    <p class="text-gray-600 text-sm">{{ $item['description'] }}</p>
                </div>
            </div>
        @endforeach
    </div>

    <h1 class="text-center text-xl sm:text-sm font-bold text-gray-800 uppercase underline mt-5">
        <a href="#" class="text-[#015724]">Ver todas as notícias</a>
    </h1>
</div>
