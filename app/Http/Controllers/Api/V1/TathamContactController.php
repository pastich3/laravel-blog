<?php

namespace App\Http\Controllers\Api\V1;

use App\Http\Controllers\Controller;
use App\Http\Resources\Post as PostResource;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

use App\Events\ContactFormSubmitted;
use App\Http\Requests\Api\ContactFormRequest;
use App\Models\ContactInfo;

class TathamContactController extends Controller
{

    /**
     * User submitted contact information
     * Record it and queue a confirmation email
     */
    public function contact(ContactFormRequest $request)
    {
        $data = $request->validated();

        try
        {
            $contact_info = ContactInfo::create([
                'name' => $data['name'],
                'email' => $data['email'],
                'company_name' => $data['company_name'] ?? '',
                'phone' => $data['phone'] ?? '',
                'message' => $data['message'] ?? '',
            ]);

            event(new ContactFormSubmitted($contact_info->id));
        }
        catch (\Exception $e)
        {
            // TODO maybe send an error here?
        }

        return redirect('contact_submitted');
    }
}
