<?php

namespace App\Http\Controllers\api;

use App\User;
use App\ContentCommune;
use App\Poll;
use App\Http\Controllers\ApiResponseController;
use App\Http\Controllers\Controller\api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ContentCommuneController extends ApiResponseController
{
    public function __construct(Request $request)
    {
        $this->user = User::from('users as c')
                        ->selectRaw('c.*, members.rol_id as rol_id, members.alliance_id as alliance_id')
                        ->leftJoin('members', 'members.user_id', '=', 'c.rut')
                        ->where('api_token', $request->api_token)
                        ->first();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $content_communes = ContentCommune::where('content_id', $id)->get();

        return $this->successResponse($content_communes);
    }
}