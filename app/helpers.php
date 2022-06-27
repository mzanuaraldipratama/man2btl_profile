<?php

function deleteImage($image) {
  if(file_exists(storage_path('app/public/' . $image))) {
    try {
      unlink(storage_path('app/public/' . $image));
    } catch (\Throwable $th) {
      return false;
    }
  }
}