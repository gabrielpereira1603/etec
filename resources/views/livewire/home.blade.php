
<div>
    <div class="relative w-full h-screen bg-fixed bg-cover bg-scroll sm:bg-center"
         style="background-image: url({{ asset('home/bg-home-1.png') }});">

        <div id="tsparticles" class="absolute inset-0 h-full w-full -z-10"></div>

        <div class="mt-6 absolute inset-0 flex flex-col justify-start sm:items-start items-center px-6 sm:px-28 py-12 gap-6 sm:gap-5 z-10">
            <p class="text-gray-100 text-2xl font-light font-sans">
                Bem Vindo(a) à Etec
            </p>

            <h1 class="w-3/4 sm:text-start text-center sm:w-2/4 font-sans text-3xl sm:text-5xl font-bold text-gray-100 drop-shadow-[2px_2px_4px_rgba(0,0,0,0.7)]">
                It is a long established fact that a reader will be
            </h1>

            <p class="w-full sm:text-start text-center sm:w-2/5 font-sans text-base sm:text-xl font-bold text-gray-100 mb-2">
                It is a long established fact that a reader will be distracted by the readable content...
                It is a long established fact that a reader will be distracted by the readable content
                of a page when looking at its layout. The point of using Lorem Ipsum is that it has a
                more-or-less normal distribution of letters, as opposed to using
            </p>

            <button class="bg-yellow-300 p-3 sm:p-5 rounded-md transition-colors duration-200 hover:bg-yellow-400">
                <p class="font-sans tracking-widest text-sm sm:text-lg font-semibold">
                    ACTION ACTION
                </p>
            </button>
        </div>
    </div>

    <livewire:components.home.motivation-study/>
    <livewire:components.home.promotion-banner/>
    <livewire:components.banner-social-media/>
    <livewire:components.useful-links/>
    <livewire:components.events-calendar/>
</div>
