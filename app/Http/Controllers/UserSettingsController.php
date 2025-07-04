<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserSettingsController extends Controller
{
    public function edit()
    {
        $user = Auth::user();
        return view('user.settings', compact('user'));
    }

    public function update(Request $request)
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')
                ->withErrors(['You must be logged in to update your profile.']);
        }

        // Validate the request
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name'  => 'required|string|max:255',
            'email'      => 'required|email|unique:users,email,' . $user->id,
            'phone'      => 'nullable|string|max:20',
            'image'      => 'nullable|image|max:2048',
            // Billing fields...
            'billing_country' => 'nullable|string|max:255',
            'billing_first_name' => 'nullable|string|max:255',
            'billing_last_name' => 'nullable|string|max:255',
            'billing_email' => 'nullable|email',
            'billing_phone' => 'nullable|string|max:20',
            'billing_pin_code' => 'nullable|string|max:20',
            'billing_landmark' => 'nullable|string|max:255',
            'billing_city' => 'nullable|string|max:255',
            'billing_state' => 'nullable|string|max:255',
        ]);

        // Update user info
        $user->name = $validated['first_name'] . ' ' . $validated['last_name'];
        $user->email = $validated['email'];
        $user->phone = $validated['phone'] ?? $user->phone;

        // Update billing address as JSON
        $user->billing_address = json_encode([
            'country' => $validated['billing_country'] ?? '',
            'first_name' => $validated['billing_first_name'] ?? '',
            'last_name' => $validated['billing_last_name'] ?? '',
            'email' => $validated['billing_email'] ?? '',
            'phone' => $validated['billing_phone'] ?? '',
            'pin_code' => $validated['billing_pin_code'] ?? '',
            'landmark' => $validated['billing_landmark'] ?? '',
            'city' => $validated['billing_city'] ?? '',
            'state' => $validated['billing_state'] ?? '',
        ]);

        // Handle profile image upload
        if ($request->hasFile('image')) {
            if ($user->image) {
                Storage::delete('public/profile_images/' . $user->image);
            }

            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->storeAs('public/profile_images', $imageName);
            $user->image = $imageName;
        }

        $user->save();

        return redirect()->route('user.settings.edit')->with('success', 'Profile updated successfully!');

    }
}
