<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\CompanyDetail;
use Faker\Provider\ar_EG\Company;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\ProfileUpdateRequest;
use App\Traits\ImageHandling;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    use ImageHandling;

    public function index(){
        $companyDetails = CompanyDetail::all();

        $formattedDetails = [];
        foreach ($companyDetails as $details) {
            $formattedDetails = $details->formatted_details;
        }

        return view('admin.pages.profile.overview', [
            'details' => $formattedDetails
        ]);
    }

    public function edit(){
        $companyDetails = CompanyDetail::all();

        $formattedDetails = [];
        foreach ($companyDetails as $details) {
            $formattedDetails = $details->formatted_details;
        }

        return view('admin.pages.profile.settings', [
            'details' => $formattedDetails
        ]);
    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request, CompanyDetail $details){
        $validation = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'nullable|string|email',
            'logo' => 'nullable|image|max:1024',
            'phone' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'facebook' => 'nullable|url|string|max:255',
            'twitter' => 'nullable|url|string|max:255',
            'linkedin' => 'nullable|url|string|max:255',
            'whatsapp' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',
            'map' => 'nullable|string',
            'CEO_name' => 'nullable|string|max:255',
            'CEO_image' => 'nullable|image|max:1024',
            'CEO_message' => 'nullable|string',
        ]);

        //update the logo and CEO_image
        $details->where('detail_name', 'logo')->update([
            'detail_value' => $this->updateImage('logo', 'other', $details->where('detail_name', 'logo')->first()->detail_value)
        ]);

        //update the logo and CEO_image
        $details->where('detail_name', 'CEO_image')->update([
            'detail_value' => $this->updateImage('CEO_image', 'other', $details->where('detail_name', 'CEO_image')->first()->detail_value)
        ]);

        //unset the logo and CEO_image from the validation
        unset($validation['logo']);
        unset($validation['CEO_image']);

        //update the rest of the details
        foreach($validation as $key => $value){
            $details->where('detail_name', $key)->update([
                'detail_value' => $value
            ]);
        }

        return Redirect::back()->with('success', 'Profile updated successfully');
    }

    /**
     * Update the user's email address.
     */
    public function updateEmail(Request $request): RedirectResponse
    {
        $request->validate([
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        /** @var APP\Model\User $user */
        $user = Auth::user();
        $matchPassword = Hash::check($request->password, $user->password);
        
        if(!$matchPassword){
            return Redirect::back()->with('error', 'Wrong Password');
        }
        
        $user->email = $request->email;
        $user->save();


        return Redirect::back()->with('success', 'Email updated successfully');
    }
    
    /**
     * Update the user's email address.
     */
    public function updatePassword(Request $request): RedirectResponse
    {
        $request->validate([
            'current_password' => 'required',
            'password' => 'required|confirmed'
        ]);

        /** @var APP\Model\User $user */
        $user = Auth::user();
        $matchPassword = Hash::check($request->current_password, $user->password);
        
        if(!$matchPassword){
            return Redirect::back()->with('error', 'Wrong Password');
        }
        
        $user->password = bcrypt($request->password);
        $user->save();

        return Redirect::back()->with('success', 'Password updated successfully');
    }

    /**
     * Delete the user's account.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
