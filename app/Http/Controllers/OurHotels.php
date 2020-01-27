<?php


namespace App\Http\Controllers;


class OurHotels
{

    private $data;
    private $goTo;

    public function __construct($data = [], $goTo = '*')
    {
$this->goTo = $goTo;
$this->data = $data;
    }

    public function manageData(TopHotel $topHotel, BestHotel $bestHotel){
        if ($this->goTo == '*'){
            //get our request
            $bestHotelRequest = [
                'fromDate' => '19-3-2020',
                'toDate' => '19-4-2020',
                'city' => 'cairo',
                'numberOfAdults' => 5
            ];
            $topHotelRequest = [
                'from' => '19-3-2020',
                'to' => '19-4-2020',
                'city' => 'cairo',
                'adultsCount' => 5
            ];
            //get our request
//            get data from to classes top and best hotels
            $topHotel = collect($topHotel->getData($topHotelRequest));
            $bestHotel = collect($bestHotel->getData($bestHotelRequest));
//            get data from to classes top and best hotels
//            merge data from two hotels
            $allData = $topHotel->merge($bestHotel);
//            return response
            return response()->json(compact('allData'),200);


        }
    }
}