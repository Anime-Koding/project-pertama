<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Flugg\Responder\Responder;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    private function typeIsExist($type)
    {
        $types = config('morph_aliases');

        if (!array_key_exists($type, $types)) {
            abort(404);
        }

        return $types[$type];
    }

    public function index($type, $typeId, Responder $responder)
    {
        $model = $this->typeIsExist($type);

        $dataModel = $model::findOrFail($typeId);

        if ($dataModel) {
            $dataModel->load('certificates');
        }

        return $responder->success($dataModel);
    }

    public function store($type, $typeId, Request $request, Responder $responder)
    {

        $model = $this->typeIsExist($type);

        // ensure item exists
        $model::findOrFail($typeId);

        // Favorite::create([
        //     'favoriteable_id' => $id,
        //     'favoriteable_type' => $type,
        //     // ...
        // ]);
    }
}
