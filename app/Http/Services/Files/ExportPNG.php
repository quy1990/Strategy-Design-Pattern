<?php

namespace App\Http\Services\Files;

class ExportPNG implements Export
{
    public function exportFile(string $fileName): string
    {
        return "exported to file with PNG";
    }
}
