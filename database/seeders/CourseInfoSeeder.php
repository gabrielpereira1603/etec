<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CourseInfo;

class CourseInfoSeeder extends Seeder
{
    public function run(): void
    {
        $infos = [
            [
                'course_id' => 1, // Administração
                'headline' => 'Transforme seu futuro com Administração',
                'intro' => 'Curso voltado para quem deseja atuar em diversas áreas administrativas.',
                'objectives' => 'Preparar profissionais para atuar em planejamento, organização e controle de empresas.',
                'profile' => 'Profissional com visão estratégica, habilidades em gestão e tomada de decisão.',
                'certifications' => 'Auxiliar Administrativo, Assistente Administrativo e Técnico em Administração.',
                'job_areas' => 'RH, financeiro, logística, setor público, marketing e muito mais.',
                'differentials' => 'Parcerias com empresas, corpo docente qualificado, foco em inovação.',
                'enrollment_info' => 'Inscrições abertas anualmente por meio do Vestibulinho da ETEC.',
                'cover_image' => 'images/courses/admin.jpg',
                'promo_video_url' => 'https://www.youtube.com/watch?v=xxxxxxx',
            ],
            [
                'course_id' => 2, // Desenvolvimento de Sistemas
                'headline' => 'Tecnologia que move o mundo',
                'intro' => 'Curso técnico que prepara para criar softwares, aplicativos e soluções digitais.',
                'objectives' => 'Formar desenvolvedores com domínio em programação, banco de dados e web.',
                'profile' => 'Profissional criativo, analítico e conectado às inovações tecnológicas.',
                'certifications' => 'Auxiliar de Desenvolvimento, Programador, Técnico em Desenvolvimento.',
                'job_areas' => 'TI, startups, indústrias, empresas de software, consultorias.',
                'differentials' => 'Parcerias com IBM, laboratórios modernos e projetos práticos.',
                'enrollment_info' => 'Acesse o site da ETEC para participar do processo seletivo.',
                'cover_image' => 'images/courses/dev.jpg',
                'promo_video_url' => 'https://www.youtube.com/watch?v=yyyyyyy',
            ],
        ];

        foreach ($infos as $info) {
            CourseInfo::create($info);
        }
    }
}
