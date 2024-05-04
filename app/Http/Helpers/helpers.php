<?php

/**
 * Upload Path
 *
 * @return string
 */
function uploadpath()
{
    return 'photos';
}

/**
 * Get Image
 *
 * @param $filename
 * @return string
 */
function getimg($filename)
{
    return asset($filename);
}



////////////////////////////////////////////////////////////////////////

function uploadImage($file, $img)
{
    return '/storage/' . \Storage::disk('public')->putFile($file, $img);
}

function deleteImage($file, $img)
{
    \Storage::disk('public')->delete($file, $img);

    return true;
}

function getImgPath($img)
{
    return asset($img);
}

/////////////////////////////////////////////////////////////////////////////////////////////





