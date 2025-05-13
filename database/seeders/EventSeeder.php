<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Event;

class EventSeeder extends Seeder
{
    public function run(): void
    {
        $events = [
            [
                'name' => 'Feira de Profissões',
                'event_date' => '2025-05-10',
                'event_description' => 'Uma oportunidade para estudantes conhecerem cursos técnicos e profissionais do mercado.',
                'image_event' => 'events/feira.jpg',
            ],
            [
                'name' => 'Palestra sobre Tecnologia',
                'event_date' => '2025-05-15',
                'event_description' => 'Especialistas da área de TI compartilham tendências e experiências.',
                'image_event' => 'events/tecnologia.jpg',
            ],
            [
                'name' => 'Semana do Meio Ambiente',
                'event_date' => '2025-06-01',
                'event_description' => 'Atividades e workshops voltados à sustentabilidade.',
                'image_event' => 'events/meio_ambiente.jpg',
            ],
        ];

        foreach ($events as $event) {
            Event::create($event);
        }
    }
}
