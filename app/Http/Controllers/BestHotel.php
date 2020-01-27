<?php


namespace App\Http\Controllers;


class BestHotel implements HotelInterface
{
//    dummy data
    private $fakeData = [
        ['hotel' => 'nile',
            'hotelRate' => 5,
            'hotelFare' => 5454.25,
            'roomAmenities' => 'first, second, third'
        ], ['hotel' => 'dusit',
            'hotelRate' => 5,
            'hotelFare' => 2872.25,
            'roomAmenities' => 'first, second, third'
        ], ['hotel' => 'masa',
            'hotelRate' => 5,
            'hotelFare' => 1313.25,
            'roomAmenities' => 'first, second, third'
        ], ['hotel' => 'diamond',
            'hotelRate' => 5,
            'hotelFare' => 1414.25,
            'roomAmenities' => 'first, second, third'
        ],
    ];
//    dummy data

//get data and manage return
    public function getData($data = [])
    {
        // TODO: Implement getData() method.
//        get our data from request best hotels whatever where after using $data in request
//use fake data to return our data what we want

       $fakeData = collect($this->fakeData)->map(function ($row) {

            return [
                'provider' => 'Best Hotel',
                'hotelName' => $row['hotel'],
                'fare' => $row['hotelFare'],
                'amenities' => $row['roomAmenities']
            ];
            return $fakeData;

        });



        return $this->fakeData;
    }

}