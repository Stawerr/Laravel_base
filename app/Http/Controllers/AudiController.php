<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AudiController extends Controller
{
    public function index()
    {
        $imagesCarousel=[
            'https://media.gettyimages.com/photos/audi-a4-quattro-sedans-picture-id459005525?s=2048x2048',
            'https://media.gettyimages.com/photos/audi-a3-quattro-steering-wheel-picture-id157728351?s=2048x2048',
            'https://media.gettyimages.com/photos/audi-vehicles-on-the-parking-picture-id615509902?s=2048x2048',
            'https://media.gettyimages.com/photos/white-audi-a6-in-charleston-usa-picture-id459014029?s=2048x2048'
        ];
        $imagesText=[
            'https://media.gettyimages.com/photos/audi-a4-quattro-sedans-picture-id459005525?s=2048x2048',
            'https://media.gettyimages.com/photos/audi-a4-quattro-sedans-picture-id459005525?s=2048x2048'
        ];
        $imagesCard=[
            'https://www.capitalone.co.uk/cloud_assets/png/hp-3Dcard.png',
            'https://www.capitalone.co.uk/cloud_assets/png/hp-3Dcard.png',
            'https://www.capitalone.co.uk/cloud_assets/png/hp-3Dcard.png'
        ];
        return view('audi.index',[
            'imagesCarousel'=>$imagesCarousel,
            'imagesText'=>$imagesText,
            'imagesCard'=>$imagesCard
        ]);
    }
}
