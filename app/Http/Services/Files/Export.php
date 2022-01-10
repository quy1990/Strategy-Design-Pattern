<?php

namespace App\Http\Services\Files;

interface Export
{
    public function exportFile(string $fileName): string;
}
