<?php

namespace App\Http\Services\Files;

class ExportContext
{
    private $export;

    public function __construct(Export $export)
    {
        $this->export = $export;
    }

    public function setStrategy(Export $export): void
    {
        $this->export = $export;
    }

    public function createArchive(string $fileName): string
    {
        return $this->export->exportFile($fileName);
    }
}
