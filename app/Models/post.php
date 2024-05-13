<?php 

namespace App\Models;

class post {
    public static function all(){
        return [
            [
                'id' => 1,
                'title' => 'Judul artikel pertama',
                'sumber' => 'Ahmad Bahrudin',
                'deskripsi' => 'ahmad bahrudin, merupakan seorang pejuang reformasi nasional dari bangsa penjajah jepang
          dia lahir di bandung pada awal bulan januari pada tahun 1000, dia merupakan seorang pejuang
          yang lahir di keluarga asederhana di desa amaterasu, yang terkenal akan kekayaan alamnya.',
                'link' => 'https://d6f6d0kpz0gyr.cloudfront.net/uploads/images/_1200x630_crop_center-center_82_none/tailwind-thumb.jpg?mtime=1609771799',
                'image' => 'https://d6f6d0kpz0gyr.cloudfront.net/uploads/images/_1200x630_crop_center-center_82_none/tailwind-thumb.jpg?mtime=1609771799'
            ],

            [
                'id' => '2',
                'title' => 'Judul artikel kedua',
                'sumber' => 'Ahmad kumang',
                'deskripsi' => 'ahmad bahrudin, merupakan seorang pejuang reformasi nasional dari bangsa penjajah jepang
          dia lahir di bandung pada awal bulan januari pada tahun 1000, dia merupakan seorang pejuang
          yang lahir di keluarga asederhana di desa amaterasu, yang terkenal akan kekayaan alamnya.',
                'link' => 'www.gramedia.com/literasi/pengertian-artikel/',
                'image' => 'https://d6f6d0kpz0gyr.cloudfront.net/uploads/images/_1200x630_crop_center-center_82_none/tailwind-thumb.jpg?mtime=1609771799'
            ]
        ];
    }
}

