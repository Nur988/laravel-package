<?php

namespace threedpcadmin\LaravelFileManager\Events;

use Illuminate\Http\Request;
use Log;

class FilesUploading
{
    /**
     * @var string
     */
    private $disk;

    /**
     * @var string
     */
    private $path;

    /**
     * @var \Illuminate\Http\UploadedFile
     */
    private $files;

    /**
     * @var string|null
     */
    private $overwrite;
    private $metadata;

    /**
     * FilesUploading constructor.
     *
     * @param Request $request
     */
    public function __construct(Request $request)
    {   Log::debug($request);
        $this->disk = $request->input('disk');
        $this->path = $request->input('path');
        $this->files = $request->file('files');
        $this->overwrite = $request->input('overwrite');
        $this->metadata=$request->input('metadata');
    }

    /**
     * @return string
     */
    public function disk()
    {
        return $this->disk;
    }

    /**
     * @return string
     */
    public function path()
    {
        return $this->path;
    }

    /**
     * @return array
     */
    public function files()
    {
        return array_map(function ($file) {
            return [
                'name'      => $file->getClientOriginalName(),
                'path'      => $this->path.'/'.$file->getClientOriginalName(),
                'extension' => $file->extension(),
            ];
        }, $this->files);
    }

    /**
     * @return bool
     */
    public function overwrite()
    {
        return !!$this->overwrite;
    }
}
