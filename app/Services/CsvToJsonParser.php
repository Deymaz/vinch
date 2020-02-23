<?php


namespace App\Services;

use Illuminate\Http\UploadedFile;

class CsvToJsonParser
{
    public function parse(UploadedFile $file): string
    {
        if ('csv' !== $extension = $file->getClientOriginalExtension()) {
            throw new \InvalidArgumentException(
                sprintf('Unsupported file extension %s. Only csv available', $extension)
            );
        }

        $csvData = [];
        $file = $file->openFile('r');

        while (!$file->eof()) {
            $line = array_filter($file->fgetcsv());
            if (!empty($line)) {
                $csvData[] = $line;
            }
        }

       return json_encode($csvData, JSON_FORCE_OBJECT);
    }
}
