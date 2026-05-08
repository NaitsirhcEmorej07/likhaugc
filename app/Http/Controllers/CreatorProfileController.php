<?php

namespace App\Http\Controllers;

use App\Models\UgcCreatorProfile;
use Illuminate\Http\Request;

class CreatorProfileController extends Controller
{
    public function storeStep1(Request $request)
    {
        $validated = $request->validate([

            'full_name' => 'nullable|string|max:255',
            'username' => 'nullable|string|max:255',
            'email' => 'nullable|email|max:255',

            'niches' => 'nullable|array',

            'bio' => 'nullable|string',

            'avatar' => 'nullable|string',

            'tiktok' => 'nullable|string|max:255',
            'instagram' => 'nullable|string|max:255',
            'facebook' => 'nullable|string|max:255',
            'youtube' => 'nullable|string|max:255',

        ]);

        $creatorProfile = UgcCreatorProfile::updateOrCreate(

            [
                'id' => $request->creator_profile_id
            ],

            $validated

        );

        return response()->json([

            'success' => true,

            'message' => 'Step 1 saved successfully',

            'id' => $creatorProfile->id,

        ]);
    }

    public function storeStep2(Request $request)
    {
        $validated = $request->validate([

            'primary_color' => 'nullable|string|max:50',
            'secondary_color' => 'nullable|string|max:50',
            'font_style' => 'nullable|string|max:100',
            'button_radius' => 'nullable|string|max:100',

        ]);

        $creatorProfile = UgcCreatorProfile::find(
            $request->creator_profile_id
        );

        if (!$creatorProfile) {

            return response()->json([

                'success' => false,

                'message' => 'Creator profile not found',

            ], 404);
        }

        $creatorProfile->update($validated);

        return response()->json([

            'success' => true,

            'message' => 'Step 2 saved successfully',

        ]);
    }

    public function storeStep3(Request $request)
    {
        $validated = $request->validate([

            'portfolio_sections' => 'nullable|array',

            'drive_link' => 'nullable|string',

        ]);

        $creatorProfile = UgcCreatorProfile::find(
            $request->creator_profile_id
        );

        if (!$creatorProfile) {

            return response()->json([

                'success' => false,

                'message' => 'Creator profile not found',

            ], 404);
        }

        $creatorProfile->update($validated);

        return response()->json([

            'success' => true,

            'message' => 'Step 3 saved successfully',

        ]);
    }

    public function storeStep4(Request $request)
    {
        $validated = $request->validate([

            'contact_email' => 'nullable|email|max:255',

            'mobile_number' => 'nullable|string|max:255',

            'additional_notes' => 'nullable|string',

        ]);

        $creatorProfile = UgcCreatorProfile::find(
            $request->creator_profile_id
        );

        if (!$creatorProfile) {

            return response()->json([

                'success' => false,

                'message' => 'Creator profile not found',

            ], 404);
        }

        $validated['status'] = 'submitted';

        $creatorProfile->update($validated);

        return response()->json([

            'success' => true,

            'message' => 'Final submission successful',

        ]);
    }
}
