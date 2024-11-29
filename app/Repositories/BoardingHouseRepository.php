<?php

// namespace App\Repositories;

// use App\Interfaces\BoardingHouseRepositoryInterface;
// use App\Models\BoardingHouse;


// class BoardingHouseRepository implements BoardingHouseRepositoryInterface 

// {
//     public function getAllBoardingHouses($search = null, $city = null, $category = null,)
//     {

//     }
// }
namespace App\Repositories;

use App\Interfaces\BoardingHouseRepositoryInterface;
use App\Models\BoardingHouse;

class BoardingHouseRepository implements BoardingHouseRepositoryInterface
{
    public function getPopularBoardingHouses()
    {
        // Logika untuk mendapatkan kost populer
    }

    public function getBoardingHouseByCitySlug($citySlug)
    {
        // Logika untuk mendapatkan kost berdasarkan slug kota
    }

    public function getBoardingHouseByCategorySlug($categorySlug)
    {
        // Logika untuk mendapatkan kost berdasarkan slug kategori
    }

    // Implementasi metode lain jika ada...
}
