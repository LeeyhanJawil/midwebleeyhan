<?php
namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Registration;
use Illuminate\Http\Request;
use Flash;
use Response;

class UsersController extends Controller {

    public $successStatus = 200;

    public function testQuery() {
        $registration = Registration::all();

        if (count($registration) > 0) {
            return response()->json($registration, $this->successStatus);
        } else {
            return response()->json(['Error' => 'There is no registrations in the database'], 404);
        }
    }
}
?>