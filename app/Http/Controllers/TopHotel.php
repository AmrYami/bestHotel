<?php


namespace App\Http\Controllers;


class TopHotel implements HotelInterface
{

//    dummy data
    private $fakeData = [
        ['hotelName' => 'nile',
            'rate' => 5,
            'price' => 5454.25,
            'discount' => '10%',
            'amenities' => 'first, second, third'
        ], ['hotelName' => 'dusit',
            'rate' => 5,
            'price' => 2872.25,
            'discount' => '10%',
            'amenities' => 'first, second, third'
        ], ['hotelName' => 'masa',
            'rate' => 5,
            'price' => 1313.25,
            'amenities' => 'first, second, third'
        ], ['hotelName' => 'diamond',
            'rate' => 5,
            'price' => 1414.25,
            'discount' => '10%',
            'amenities' => 'first, second, third'
        ],
    ];
//    dummy data

//get data and manage return
    public function getData($data = [])
    {
        // TODO: Implement getData() method.
//        get our data from request top hotels whatever where after using $data in request
//use fake data to return our data what we want
        $fakeData = collect($this->fakeData)->map(function ($row) {
            return [
                'provider' => 'Top Hotel',
                'hotelName' => $row['hotelName'],
                'fare' => $row['price'],
                'discount' => isset($row['discount']) ? $row['discount'] : '',
                'amenities' => $row['amenities']
            ];
            return $fakeData;

        });


//get data and manage return

        return $this->fakeData;
    }

}