<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\HotelResource;
use App\Models\Hotel;

class ApiController extends Controller
{
    public function getHotelListing($id)
    {
        return HotelResource::make(Hotel::with('reviews')->where('status', 1)->findOrFail($id));
    }
}
