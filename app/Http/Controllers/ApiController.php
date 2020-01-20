<?php

namespace App\Http\Controllers;
use Keygen;
use App\User;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function showAllUsers(Request $request)
    {
        
    }

    public function createNewUser(Request $request)
    {
        $user = new User;
        // Generate unique ID
        $user->id = $this->generateID();

        // Collect data from request input
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');

        // Save the user record in the database
        $user->save();

        return $user;
    }

    public function showOneUser(Request $request, $id)
    {}

            //generate function
            // modified generateNumericKey() method
            // Ensures non-zero integer at beginning of key
        protected function generateNumericKey()
        {
            // prefixes the key with a random integer between 1 - 9 (inclusive)
            return Keygen::numeric(7)->prefix(mt_rand(1, 9))->generate(true);
        }

        // generateID() method

        protected function generateID()
        {
        $id = $this->generateNumericKey();

        // Ensure ID does not exist
        // Generate new one if ID already exists
        while (User::whereId($id)->count() > 0) {
        $id = $this->generateNumericKey();
        }

            return $id;
        }
}
