<?php

namespace By\Otc\Support;

use By\Otc\Models\File;
use By\Otc\Contracts\Cdn\UrlGenerator as FileUrlGeneratorContract;

abstract class CdnUrlGenerator implements FileUrlGeneratorContract
{
    /**
     * File data model.
     *
     * @var \By\Otc\Models\File
     */
    protected $file;

    /**
     * Get file data model.
     *
     * @return \By\Otc\Models\File
     * @author Seven Du <shiweidu@outlook.com>
     */
    protected function getFile(): File
    {
        return $this->file;
    }

    /**
     * Set file data model.
     *
     * @param \By\Otc\Models\File $file
     * @author Seven Du <shiweidu@outlook.com>
     */
    protected function setFile(File $file)
    {
        $this->file = $file;

        return $this;
    }
}
