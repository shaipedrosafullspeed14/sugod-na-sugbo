<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Charities;

class CharitiesController extends Controller
{
    private $database;

    public function __construct() {
            $this->database = \App\Services\FirebaseService::connect();
    }

    public function fetchCharities(Request $request)
    {
        return response()->json($this->database->getReference('sns/charities')->getValue());
    }

    public function createCharities(Request $request) {
        $this->database
                ->getReference('sns/charities/' . $request['id'])
                ->set([
                        'id' => $request['id'],
                        'title' => $request['title'],
                        'content' => $request['content'],
                        'imageUrl01' => $request['imageUrl01'],
                        'imageUrl02' => $request['imageUrl02']
                ]);

        return response()->json('charity has been created');
    }

    public function editCharities(Request $request) {
        $this->database->getReference('sns/charities/' . $request['id'])
                ->update([
                        'content/' => $request['content']
                ]);

        return response()->json('blog has been edited');
    }

}