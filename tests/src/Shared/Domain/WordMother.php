<?php

declare(strict_types = 1);

namespace CodelyTv\Test\Shared\Domain;

final class WordMother
{
    public static function random()
    {
        return MotherCreator::random()->word;
    }
}
