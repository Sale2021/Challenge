<?php

declare(strict_types=1);

namespace App\Enum;

enum PlanningEnum: string
{
    case EN_ATTENTE = 'En attente';
    case EN_COURS = 'En cours';
    case TERMINE = 'Terminé';
    case NON_TERMINE = 'Non terminé';
}
