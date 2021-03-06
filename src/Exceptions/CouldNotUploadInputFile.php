<?php

namespace Telegram\Bot\Exceptions;

/**
 * Class CouldNotUploadInputFile.
 */
class CouldNotUploadInputFile extends TelegramSDKException
{
    /**
     * @param $file
     *
     * @return static
     */
    public static function fileDoesNotExistOrNotReadable($file)
    {
        return new static("File: `{$file}` does not exist or is not readable!");
    }

    /**
     * @param $path
     *
     * @return static
     */
    public static function filenameNotProvided($path)
    {
        $file = is_string($path) ? $path : "the resource that you're trying to upload";

        return new static(
            "Filename not provided for {$file}. ".
            'Remote or Resource file uploads require a filename. Refer Docs for more information.'
        );
    }

    /**
     * @param $path
     *
     * @return static
     */
    public static function couldNotOpenResource($path)
    {
        return new static("Failed to create InputFile entity. Unable to open resource: {$path}.");
    }

    /**
     * @param $property
     *
     * @return static
     */
    public static function resourceShouldBeInputFileEntity($property)
    {
        return new static("Resource file should be uploaded using `Telegram\Bot\FileUpload\InputFile::create(\$resourceOrRemoteUrl, \$filename)` for `{$property}` property.");
    }
}
