    <nav x-data="{ open: false }" class="bg-white border-b border-gray-100  sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 py-4 lg:px-8">
            <div class="flex justify-between items-center h-16">

                <!-- Esquerda: Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}" wire:navigate>
                        <img src="{{ asset('navigation/etec_ra_aracatuba_andradina_sebastina_augusta_de_moraes_cor.png') }}" width="90px" height="70px">
                    </a>
                </div>

                <!-- Direita: Menu Desktop -->
                <div class="hidden sm:flex items-center space-x-6">
                    @php
                        $dropdowns = [
                            [
                                'label' => 'Institucional',
                                'icon' => 'company-icon',
                                'items' => ['Sobre Nós', 'Missão']
                            ],
                               [
                                'label' => 'Senar E-tec',
                                'icon' => 'company-icon',
                                'items' => ['Sobre Nós', 'Missão']
                            ],
                            [
                                'label' => 'Nossos Cursos',
                                'icon' => 'course-icon',
                                'items' => ['Curso 1', 'Curso 2']
                            ],
                            [
                                'label' => 'Instituição Auxiliar',
                                'icon' => 'company-icon',
                                'items' => ['Parcerias', 'Convênios']
                            ]
                        ];
                    @endphp
                @foreach ($dropdowns as $dropdown)
                        <div class="relative group">
                            <button class="text-[1rem] font-light text-gray-700 group-hover:text-[#015724] focus:outline-none p-2">
                                {{ $dropdown['label'] }}
                            </button>

                            <div
                                class="absolute right-0 mt-2 w-56 bg-white rounded-md shadow-lg z-50 opacity-0 pointer-events-none group-hover:opacity-100 group-hover:pointer-events-auto transition-all duration-200"
                                style="border-top: 4px solid #015724; border-right: 1px solid #015724; border-left: 1px solid #015724; border-bottom: 1px solid #015724; border-radius: 0.5rem;"
                            >
                                @foreach ($dropdown['items'] as $item)
                                    <a href="#"
                                       class="block px-4 py-2 text-sm text-gray-700">
                                        {{ $item }}
                                    </a>
                                @endforeach
                            </div>
                        </div>
                    @endforeach

                    <button class="bg-[#015724] p-4 rounded-md hover:bg-gray-600 transition-colors duration-200">
                        <p class="font-bold text-white">Área do Aluno</p>
                    </button>
                </div>

                <!-- Botão Hamburger (mobile) -->
                <div class="sm:hidden">
                    <button @click="open = !open" class="text-gray-700 dark:text-white focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="green" stroke-width="2"
                             viewBox="0 0 24 24" stroke-linecap="round" stroke-linejoin="round">
                            <path x-show="!open" d="M4 6h16M4 12h16M4 18h16"/>
                            <path x-show="open" d="M6 18L18 6M6 6l12 12"/>
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <!-- Dropdown Mobile -->
        <div x-show="open" x-transition class="sm:hidden bg-white dark:bg-gray-800 border-l-4 border-[#015724] px-4 py-6 shadow-md">
            @foreach ($dropdowns as $dropdown)
                <div class="mb-4">
                    <p class="flex items-center gap-2 text-gray-800 dark:text-white font-semibold mb-2">
                        @if (isset($dropdown['icon']))
                            <x-dynamic-component :component="$dropdown['icon']" width="20px" height="20px" color="currentColor" />
                        @endif
                        {{ $dropdown['label'] }}
                    </p>

                    <ul class="space-y-2 pl-4 border-l-2 border-[#015724]">
                        @foreach ($dropdown['items'] as $item)
                            <li>
                                <a href="#"
                                   class="block text-gray-600 dark:text-gray-300 hover:text-[#015724] transition duration-150">
                                    {{ $item }}
                                </a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endforeach

            <div class="mt-6">
                <button class="w-full bg-[#015724] p-3 rounded-md hover:bg-gray-600 transition-colors duration-200">
                    <p class="text-center text-white font-bold">Área do Aluno</p>
                </button>
            </div>
        </div>
    </nav>
