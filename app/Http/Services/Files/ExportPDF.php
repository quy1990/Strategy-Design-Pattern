<?php

namespace App\Http\Services\Files;

class ExportPDF implements Export
{
    public function exportFile(string $fileName): string
    {
        return "exported to file with PDF";
    }
}
