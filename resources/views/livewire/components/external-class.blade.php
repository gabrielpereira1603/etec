<!-- Painel Extraclasse -->
<div class="w-[50%] bg-gray-100 py-10 px-6 sm:px-16">
    <h1 class="text-center text-xl sm:text-2xl font-bold text-[#015724] uppercase mb-10">
        Extraclasse
    </h1>

    <div class="w-full flex bg-gray-100 rounded-[10px] overflow-hidden">
        <!-- Menu Lateral -->
        <ul id="menu-items" class="w-2/5 bg-[#015724] text-white font-medium rounded-l-[10px] flex flex-col">
            <li id="item-1" class="menu-item cursor-pointer p-4 hover:bg-green-700 transition-colors flex gap-2 items-center">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round"
                                               d="M12 8v4l3 3m6 1a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                Senar e-Tec 10 Anos: Paixão por ensinar transforma vidas
            </li>
            <li id="item-2" class="menu-item cursor-pointer p-4 hover:bg-green-700 transition-colors flex gap-2 items-center">
                <svg class="w-5 h-5 text-white" fill="none" stroke="currentColor" stroke-width="2"
                     viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round"
                                               d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
                Item 2
            </li>
        </ul>

        <!-- Área de Conteúdo -->
        <div class="w-full p-5 relative rounded-r-[10px] transition-all duration-500 ease-in-out bg-white">
            <!-- Descrição 1 -->
            <div id="description-item-1" class="description fade-in">
                <h1 class="font-bold text-[#015724] text-xl text-center mb-3">
                    Senar e-Tec 10 Anos: Paixão por ensinar transforma vidas
                </h1>
                <div class="w-full flex justify-center mb-4">
                    <img src="https://placehold.co/500x250?text=Em%5CnDesenvolvimento" class="max-w-[500px] max-h-[250px] rounded shadow">
                </div>
                <p class="text-justify text-gray-800 leading-relaxed">
                    It is a long established fact that a reader will be distracted by the readable content...
                    It is a long established fact that a reader will be distracted by the readable
                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                    it has a more-or-less normal distribution of letters, as opposed to using.
                </p>
                <div class="flex justify-center">
                    <button class="bg-[#015724] p-2 px-5 py-2 rounded-[4px] text-white mt-4 hover:bg-[#024d1f] transition-all">
                        Visualizar
                    </button>
                </div>
            </div>

            <!-- Descrição 2 -->
            <div id="description-item-2" class="description hidden fade-in">
                <h1 class="font-bold text-[#015724] text-xl text-center mb-3">
                    Outro Conteúdo do Item 2
                </h1>
                <div class="w-full flex justify-center mb-4">
                    <img src="https://placehold.co/500x250?text=Outro%5CnConteúdo" class="max-w-[500px] max-h-[250px] rounded shadow">
                </div>
                <p class="text-justify text-gray-800 leading-relaxed">
                    Aqui vai o conteúdo referente ao item 2. Você pode adicionar mais informações detalhadas sobre o tema,
                    mantendo sempre o texto alinhado e com visual limpo. Texto justificado, seguindo padrão formal.
                </p>
                <div class="flex justify-center">
                    <button class="bg-[#015724] p-2 px-5 py-2 rounded-[4px] text-white mt-4 hover:bg-[#024d1f] transition-all">
                        Visualizar
                    </button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .fade-in {
            animation: fadeIn 0.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .active-item {
            background-color: #ffffff !important;
            color: #015724 !important;
            border-left: 5px solid #015724;
            border-radius: 0 0px 0px 0;
        }
    </style>

    <script>
        const menuItems = document.querySelectorAll(".menu-item");
        const descriptions = document.querySelectorAll(".description");

        menuItems.forEach((item, index) => {
            item.addEventListener("click", () => {
                // Esconde todas descrições
                descriptions.forEach(desc => {
                    desc.classList.add("hidden");
                    desc.classList.remove("fade-in");
                });

                // Mostra descrição correspondente com animação
                const activeDesc = document.getElementById(`description-item-${index + 1}`);
                activeDesc.classList.remove("hidden");
                activeDesc.classList.add("fade-in");

                // Remove estilos anteriores
                menuItems.forEach(i => i.classList.remove("active-item"));
                // Aplica estilo ativo no item clicado
                item.classList.add("active-item");
            });
        });
    </script>

</div>
