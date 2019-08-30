<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Post as PostResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TathamContactController extends Controller
{

    /**
     * User submitted contact information
     * Record it and queue a confirmation email
     */
    public function contact(Request $request)
    {
        return redirect('contact_submitted');
    }
}
