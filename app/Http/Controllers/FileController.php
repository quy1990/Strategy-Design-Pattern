<?php

namespace App\Http\Controllers;

use App\Http\Services\Files\ExportContext;
use App\Http\Services\Files\ExportJPG;
use App\Http\Services\Files\ExportPDF;
use App\Http\Services\Files\ExportPNG;

class FileController extends Controller
{
    public function index()
    {
        $exportContext = new ExportContext(new ExportJPG());
        echo $exportContext->createArchive('abc.txt');
        $exportContext->setStrategy(new ExportPDF());
        echo $exportContext->createArchive('abc.txt');
        $exportContext->setStrategy(new ExportPNG());
        echo $exportContext->createArchive('abc.txt');
    }
}
