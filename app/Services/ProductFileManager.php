<?php

namespace App\Services;

use App\Exceptions\UnsupportedImageFormatException;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

class ProductFileManager
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
        switch ($file->getMimeType()) {
            case 'image/png':
                $name .= '.png';
                break;
            default:
                throw new UnsupportedImageFormatException(sprintf(
                    '%s this file format does not support',
                    $file->getMimeType()
                    ));
        }

        return $file->storePubliclyAs('images', strtolower($name));
    }

    /**
     * @param string $oldName
     * @param string $newName
     * @return string
     */
    public static function editName(string $oldName, string $newName): string
    {
        $newName = self::DIR . $newName . '.' . self::getFileExtension($oldName);
        Storage::disk('public')->move($oldName, strtolower($newName));

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
