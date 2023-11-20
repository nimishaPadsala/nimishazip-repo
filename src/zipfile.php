<?php

namespace Ziplaravelpro\Ziplaravelconvertpro;

use Illuminate\Support\Facades\Http;
use ZipArchive;


class Zip {
    // public function justDoIt() {
    //     $response = Http::get('https://inspiration.goprogram.ai/');

    //     return $response['quote'] . ' -' . $response['author'];
    // }


public function createZip()
{
    // Define the folder you want to zip
    $sourceFolder = public_path(getcwd()); // Update with the actual folder path

    // Define the name for the ZIP file
    $zipFileName = 'project-zip.zip'; // You can change the file name

    // Create a new ZipArchive instance
    $zip = new ZipArchive();

    if ($zip->open(public_path($zipFileName), ZipArchive::CREATE) === TRUE) {
        // Add all files and subdirectories in the source folder to the ZIP file
        $this->addFolderToZip($sourceFolder, $sourceFolder, $zip);

        // Close the ZIP file
        $zip->close();

        // Return the ZIP file as a response
        return response()->download(public_path($zipFileName))->deleteFileAfterSend(true);
    } else {
        return 'Failed to create the ZIP file';
    }
}

private function addFolderToZip($folder, $rootPath, $zip)
{
    $files = new RecursiveIteratorIterator(
        new RecursiveDirectoryIterator($folder),
        RecursiveIteratorIterator::SELF_FIRST
    );

    foreach ($files as $file) {
        $file = realpath($file);
        if (is_dir($file)) {
            $zip->addEmptyDir(str_replace($rootPath, '', $file));
        } else {
            $zip->addFile($file, str_replace($rootPath, '', $file));
        }
    }
}

}
