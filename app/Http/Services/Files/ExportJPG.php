<?php

namespace App\Http\Services\Files;

class ExportJPG implements Export
{
    public function exportFile(string $fileName): string
    {
        return "exported to file with JPG";
    }
}
