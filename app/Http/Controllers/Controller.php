<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private function storeRequest(Request $request, Model $modelClass) {
        return response()->json(['success' => (bool) $modelClass::create($request->all()) ] );
    }

    private function updateRequest(Request $request, Model $model) {
        return response()->json(['success' => (bool) $model->update($request->post()) ] );
    }

    private function destroyRequest(Model $model) {
        return response()->json(['success' => (bool) $model->delete() ] );
    }
}
