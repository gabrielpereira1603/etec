<?php

namespace App\Enums;

enum PeriodEnum: string
{
    case MATUTINO = 'matutino';
    case VESPERTINO = 'vespertino';
    case NOTURNO = 'noturno';
    case INTEGRAL = 'integral';
    case FLEXIVEL = 'flexível';
}
