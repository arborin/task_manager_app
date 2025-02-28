<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        $user = User::findOrFail(auth()->id());

        return view('profile.edit', [
            'user' => $user
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        $user = User::findOrFail(auth()->id());

        $validated = $request->validate([
            'name'     => 'required|string|max:255',
            'password' => 'nullable|string|min:6|confirmed',
            'image'    => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $user->name = $validated['name'];

        if (!empty($validated['password'])) {
            $user->password = Hash::make($validated['password']);
        }

        // dd($request->toArray());
        // image upload if exists
        if ($request->hasFile('image')) {
            if ($user->image) {
                Storage::delete('public/profiles/' . $user->image);
            }


            $imagePath = $request->file('image')->store('public/profiles');
            // dd($imagePath);
            $user->image = basename($imagePath);
        }

        $user->save();

        return redirect()->back()->with(['message' => 'Profile updated successfully']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
