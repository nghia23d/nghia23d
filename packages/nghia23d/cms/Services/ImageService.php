<?php

namespace  nghia23d\cms\Services;


class ImageService
{
    public function deleteThumb($thumbName)
    {   
        Storage::disk('admin_storage_image')->delete("$this->folderUpload/".$thumbName);
    }

    public function uploadThumb($thumb)
    {
        $thumbName = $thumb->getClientOriginalName();
        $thumb->storeAs("$this->folderUpload", $thumbName, 'admin_storage_image');
        return $thumbName;
    }
}
