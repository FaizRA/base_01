<?php

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;

if (! function_exists('imgLink')) {
    function imgLink($img)
    {
        return url(Storage::url($img));
    }
}
if (! function_exists('assetLink')) {
    function assetLink($asset)
    {
        return URL::asset($asset);
    }
}
?>
