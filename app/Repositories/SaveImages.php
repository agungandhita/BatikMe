<?php

namespace App\Repositories;

use Illuminate\Support\Facades\File;

class SaveImages
{



    public function saveImageSingle($imageData,$kategoriLokasi)
    {
        $lokasi = $kategoriLokasi;

        $extension = $imageData->getClientOriginalExtension();
        $name = hash('sha256', time()) . '.' . $extension;
        $imageData->move($lokasi, $name);
        return $name;

    }

    public function updateImageSingle($imageData,$kategoriLokasi,$oldImage){

        $lokasi = $kategoriLokasi;

        $extension = $imageData->getClientOriginalExtension();
        $name = hash('sha256', time()) . '.' . $extension;
        $up = $imageData->move($lokasi, $name);

        if($up){
            $storage = public_path($lokasi.'/'.$oldImage);
            if(File::exists($storage)){
                unlink($storage);
            }
        }
        return $name;

    }

    public function saveImageMultiple($imageData, $kategoriLokasi){
        $no = 0;
        $image = [];

        $lokasi = $kategoriLokasi;


        foreach ($imageData as $file) {
            //validasi 
            $images = $file->getClientOriginalExtension();
            if (!in_array($images, ['jpg', 'png', 'jpeg'])) {
                return redirect()->back()->with('imageError', 'The image you entered is invalid');
            }

            $extension = $file->getClientOriginalExtension();
            $name = hash('sha256', time()) . $no++ . '.' . $extension;
            $file->move($lokasi, $name);
            $image[] = $name;
        }
        return implode("|", $image);
    }

    public function updateImageMultiple($imageData, $kategoriLokasi, $oldImage){
        
        $lokasi = $kategoriLokasi;


        $no = 0;
        foreach ($imageData as $file) {
            $extension = $file->getClientOriginalExtension();
            $name = hash('sha256', time()) . $no++ . '.' . $extension;
            $storage2 = public_path($lokasi.'/'.$name);

            while (File::exists($storage2)) {
                $name = $no + 2;
            }
            
            $up = $file->move($lokasi, $name);
            $image[] = $name;
            if ($up) {
                $images_db = $oldImage;
                $img_explode = explode('|', $images_db);

                foreach ($img_explode as $img) {
                    $storage = public_path($lokasi.'/'. $img);
                    if (File::exists($storage)) {
                        unlink($storage);
                    }
                }       
            }
        }
        return implode("|", $image);
    }
}