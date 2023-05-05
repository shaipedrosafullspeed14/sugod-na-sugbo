<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Services\FireStoreInterface;
use App\Services\Firestore\FirestoreRepository;

class InquiriesController extends Controller
{
    private $database;

    public function __construct() {
            $this->database = \App\Services\FirebaseService::connect();
    }

    public function createInquiries(Request $request) {
        $this->database
                ->getReference('sns/inquiries/' . $request['name'])
                ->set([
                        'name' => $request['name'],
                        'emailAddress' => $request['emailAddress'],
                        'message' => $request['message']
                ]);

        return response()->json('inquiry has been created');
    }

}