<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProfileRequest;
use App\Http\Requests\updateProfileRequest;
use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Fetch all profiles from the database and return them as a JSON response.
        $profile = Profile::all();
        return response()->json($profile);
        //

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProfileRequest $request)
    {
        // Validate the request data using the StoreProfileRequest class.
        // Create a new profile with the validated attributes.

        $profile = Profile::create($request->validated());
        return response()->json($profile, 201);
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Fetch the profile with the given ID from the database and return it as a JSON response.   //
        $profile = Profile::find($id);
        if ($profile) {
            return response()->json($profile);
        } else {
            return response()->json(['error' => 'Profile not found'], 404);
        }
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(updateProfileRequest $request, string $id)
    {
        //
        // Validate the request data using the updateProfileRequest class.
        // Fetch the profile with the given ID from the database.
        // Update the profile's attributes with the validated attributes.
        // Save the updated profile to the database.
        $profile = Profile::find($id);
        if ($profile) {
            $profile->update($request->validated());
            return response()->json($profile , 200);
        } else {
            return response()->json(['error' => 'Profile not found'], 404);
        }
        //

        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        // Fetch the profile with the given ID from the database.
        // Delete the profile from the database.
        $profile = Profile::find($id);
        if ($profile) {
            $profile->delete();
            return response()->json(null, 204);
        } else {
            return response()->json(['error' => 'Profile not found'], 404);
        }
        //
        }
        public function getUser($id)
        {
            $user = Profile::find($id)->user;
            if ($user) {
                return response()->json($user);
            } else {
                return response()->json(['error' => 'User not found'], 404);
            }
            

            // Fetch the user with the given ID from the database.
            // $user = User::findOrFail($id);
            // if ($user) {
            //     return response()->json($user);
            // } else {
            //     return response()->json(['error' => 'User not found'], 404);
            // }
            
        }

    // Additional methods can be added to handle specific functionalities such as filtering, sorting, or pagination.
    // Make sure to follow the RESTful API design principles and handle errors appropriately.

    // Example of a method for filtering profiles by name:
        // public function filterByName(Request $request) {
        //     $name = $request->input('name');
        //     $profiles = Profile::where('name', 'like', '%'. $name. '%')->get();
        //     return response()->json($profiles);
        // }
        // // Example of a method for sorting profiles by age in descending order:
        //     public function sortByAge() {
        //     $profiles = Profile::orderBy('age', 'desc')->get();
        //     return response()->json($profiles);
        // }
        // // Example of a method for pagination with 10 profiles per page:
        //     public function paginateProfiles() {
        //     $profiles = Profile::paginate(10);
        //     return response()->json($profiles);
        // }
        // // Example of a method for retrieving the total number of profiles:
        //     public function getTotalProfiles() {
        //     $totalProfiles = Profile::count();
        //     return response()->json(['total_profiles' => $totalProfiles]);
        // }
        // // Example of a method for retrieving the average age of profiles:
        //     public function getAverageAge() {
        //     $averageAge = Profile::avg('age');
        //     return response()->json(['average_age' => $averageAge]);
        // }
        // // Example of a method for retrieving the oldest profile:
        //     public function getOldestProfile() {
        //     $oldestProfile = Profile::orderBy('age', 'asc')->first();
        //     return response()->json($oldestProfile);
        // }
        // // Example of a method for retrieving the youngest profile:
        //     public function getYoungestProfile() {
        //     $youngestProfile = Profile::orderBy('age', 'desc')->first();
        //     return response()->json($youngestProfile);
        // }
            
}
    

