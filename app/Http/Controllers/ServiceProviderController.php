<?php

namespace App\Http\Controllers;

use App\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ServiceProviderController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function index()
    {
        return ServiceProvider::all(['id', 'latitude', 'longitude']);
    }

    public function create(Request $request)
    {
//        $this->validate($request, array(
//             'name' => ['required'],
//            'password' => ['required','min:6'],
//            //'phone_number'=> ['required', 'min:10','max:10']
//        ));

        ServiceProvider::create([
//           'name' => $request['name'],
//            'email'=> $request['email'],
//            'password'=> Hash::make($request['password']),
//            'phone_number'=> $request['phone_number'],
//            'date_of_birth'=> $request['date_of_birth'],
//            'company_name' => $request['company_name'],
//            'location' => $request['location'],
//            'services' => $request['services'],
//            'customer_gender' => $request['customer_gender'],
//            'working_hours' => $request['working_hours'],
            'latitude' => $request['latitude'],
            'longitude' => $request['longitude']
        ]);
    }
}
