<div class="relative bg-gray-200 overflow-hidden p-5">
    <div class="relative z-10">
        <style>
            .perspective {
                perspective: 1000px;
            }

            .flip-card-inner {
                position: relative;
                transform-style: preserve-3d;
            }

            .flip-card:hover .flip-card-inner {
                transform: rotateY(180deg);
            }

            .flip-card-front,
            .flip-card-back {
                backface-visibility: hidden;
            }

            .rotate-y-180 {
                transform: rotateY(180deg);
            }
        </style>
        <h1 class="text-center text-xl sm:text-2xl py-12 font-bold text-gray-800 uppercase">
            Motivos para estudar na ETEC
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 px-8 sm:px-32 gap-4 py-4">
            <!-- Card 1 -->
            <div class="flip-card w-full max-w-xs h-48 perspective mx-auto">
                <div class="flip-card-inner w-full h-full transition-transform duration-500 transform-style preserve-3d">
                    <div class="flip-card-front absolute w-full h-full bg-white rounded-none shadow-md flex flex-col items-center justify-center text-gray-800 font-bold text-base backface-hidden">
                        <span class="mb-5">
                            <x-workshop-icon width="50px" height="50px" color="currentColo"/>
                        </span>
                        <p class="text-center text-gray-900">
                            Excelentes professores
                        </p>
                        <p class="text-center text-gray-700 font-light">
                            Qualificados e sempre atualizados
                        </p>
                    </div>
                    <div class="flip-card-back absolute w-full h-full bg-[#b20000] text-white rounded-none shadow-md flex items-center justify-center text-sm backface-hidden rotate-y-180">
                        Professores capacitados e estrutura moderna!
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="flip-card w-full max-w-xs h-48 perspective mx-auto">
                <div class="flip-card-inner w-full h-full transition-transform duration-500 transform-style preserve-3d">
                    <div class="flip-card-front absolute w-full h-full bg-white rounded-none shadow-md flex flex-col items-center gap-1 justify-center text-gray-800 font-bold text-base backface-hidden">
                        <span class="mb-5">
                            <x-course-icon width="50px" height="50px" color="currentColo"/>
                        </span>
                        <p class="text-center text-gray-900">
                            Ensino de qualidade
                        </p>
                        <p class="text-center text-gray-700 font-light">
                            Aprovado por 100% dos nossos alunos
                        </p>
                    </div>
                    <div class="flip-card-back absolute w-full h-full bg-[#b20000] text-white rounded-none shadow-md flex items-center justify-center text-sm backface-hidden rotate-y-180">
                        Ensino técnico de qualidade totalmente gratuito!
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="flip-card w-full max-w-xs h-48 perspective mx-auto">
                <div class="flip-card-inner w-full h-full transition-transform duration-500 transform-style preserve-3d">
                    <div class="flip-card-front absolute w-full h-full bg-white rounded-none shadow-md flex flex-col items-center justify-center text-gray-800 font-bold text-base backface-hidden">
                        <span class="mb-5">
                            <x-teacher-icon width="50px" height="50px" color="currentColo"/>
                        </span>
                        <p class="text-center text-gray-900">
                            Oportunidades
                        </p>
                        <p class="text-center text-gray-700 font-light">
                            Alta empregabilidade e valorização no mercado!
                        </p>
                    </div>
                    <div class="flip-card-back absolute w-full h-full bg-[#b20000] text-white rounded-none shadow-md flex items-center justify-center text-sm backface-hidden rotate-y-180">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
