<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\InitialNews;

class InitialNewsSeeder extends Seeder
{
    public function run(): void
    {
        $news = [
            [
                'title' => 'Inscrições Abertas para o Vestibulinho',
                'description' => 'Garanta sua vaga em um dos cursos técnicos mais procurados do estado!',
                'redirect_link' => 'https://www.vestibulinhoetec.com.br',
                'banner' => 'banners/vestibulinho.jpg',
            ],
            [
                'title' => 'ETEC Premiada em Inovação',
                'description' => 'Estudantes de Desenvolvimento de Sistemas criam solução premiada em evento nacional.',
                'redirect_link' => 'https://etec.sp.gov.br/noticias/inovacao',
                'banner' => 'banners/premio_inovacao.jpg',
            ],
            [
                'title' => 'Semana do Meio Ambiente',
                'description' => 'Participe da nossa programação especial com palestras e oficinas.',
                'redirect_link' => 'https://etec.sp.gov.br/eventos/meio-ambiente',
                'banner' => 'banners/semana_meio_ambiente.jpg',
            ],
        ];

        foreach ($news as $item) {
            InitialNews::create($item);
        }
    }
}
