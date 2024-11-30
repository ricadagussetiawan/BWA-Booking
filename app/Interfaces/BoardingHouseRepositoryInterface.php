<?php

namespace App\Interfaces;

interface BoardingHouseRepositoryInterface
{
    public function getAllBoardingHouses($search = null, $city = null, $category = null);
    public function getPopularBoardingHouses($limit = 5);
    public function getBoardingHouseByCitySlug($slug);
    public function getBoardingHouseByCategorySlug($slug);
    public function getBoardingHouseBySlug($slug);
}

// {
//     public function getPopularBoardingHouses();
//     public function getBoardingHouseByCitySlug($citySlug);
//     public function getBoardingHouseByCategorySlug($categorySlug);
//     // public function getBoardingHouseBySlug($slug);
//     // Tambahan metode lain jika ada...
// }