<?php

namespace App\Services;

use App\Exceptions\UnsupportedImageFormatException;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class FileManager
{
    public const DIR = 'images/';

    /**
     * @param UploadedFile $file
     * @param string $name
     *
     * @throws UnsupportedImageFormatException
     *
     * @return string
     */
    public static function save(UploadedFile $file, string $name): string
    {
        $name = str_replace(' ', '_', TransliterationService::translit($name));
        switch ($file->getMimeType()) {
            case 'image/png':
                $name .= '.png';
                break;
            case 'image/jpeg':
                $name .= '.jpeg';
                break;
            default:
                throw new UnsupportedImageFormatException(sprintf(
                    '%s this file format does not support',
                    $file->getMimeType()
                    ));
        }

        return $file->storePubliclyAs('images', $name);
    }

    /**
     * @param string $oldName
     * @param string $newName
     * @return string
     */
    public static function editName(string $oldName, string $newName): string
    {
        $newName = self::DIR . str_replace(' ', '_', TransliterationService::translit($newName)) .
            '.' . self::getFileExtension($oldName);
        Storage::disk('public')->move($oldName, $newName);

        return $newName;
    }

    /**
     * @param string $name
     * @return string
     * @throws \InvalidArgumentException
     */
    protected static function getFileExtension(string $name): string
    {
        $index = preg_match('/^.*\.(jpg|jpeg|png|gif)$/i', $name, $mathes);

        if (false !== $index) {
            return $mathes[$index];
        }

        throw new \InvalidArgumentException('Bad file name or file extension');
    }
}
