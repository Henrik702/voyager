<?php

namespace App\Http\Controllers;

use App\Repositories\MailRepository;
use Illuminate\Http\Request;

class MailController extends Controller
{
    protected $repository;

    public function __construct(MailRepository $repository)
    {
        $this->repository = $repository;
    }

    public function sendEmail(Request $request){
        return response()->json([
            'success' => true,
            'message' => 'Send Mail has ben successfully',
            'data' => $this->repository->sendEmail($request->all()),
        ]);

    }
}
