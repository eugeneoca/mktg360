<?php

namespace App\Http\Controllers;

use App\OrganizationUser;
use App\User;
use App\Utils\CurrentUser;
use App\Utils\S3FileUploader;
use Illuminate\Http\Request;

class MeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     */
    public function getDetails(Request $request)
    {
        $user = auth()->user();
        if ($request->query('with') == 'organizations') {
            $orgs = OrganizationUser::with('organization')
                ->where('user_id', $user->id)
                ->get();

            $orgNames = [];
            foreach ($orgs as $org) {
                $orgNames[] = $org->organization;
            }
            $user->organizations = $orgNames;
        }
        return response()->json($user);
    }

    public function getOrganizations()
    {
        $userId = CurrentUser::id();
        $orgs = OrganizationUser::with('organization')
            ->where('user_id', $userId)
            ->get();

        $orgNames = [];
        foreach ($orgs as $org) {
            $orgNames[] = $org->organization;
        }

        return response()->json($orgNames);
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateAccount(Request $request)
    {
        $user = auth()->user();
        $data = $request->validate([
            'full_name' => 'string',
            'email' => 'email',
            'phone' => 'string',
            'timezone' => 'timezone'
        ]);
        $updateUser = User::find($user->id);
        $updateUser->fill($data);
        $updateUser->save();
        return response()->json($updateUser);
    }

    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function updateProfile(Request $request)
    {
        try {
            $user = auth()->user();
            $data = $request->validate([
                'title' => 'string',
                'display_name' => 'string',
                'profile_photo' => 'image',
                'timezone' => 'timezone'
            ]);
            $photoLink = S3FileUploader::uploadToAssets($request, 'profile_photo');
            if ($photoLink) {
                $data['profile_photo'] = $photoLink;
            }
            $updateOrgUser = OrganizationUser::findOrFail($user->organizationUser->id);
            $updateOrgUser->fill($data);
            $updateOrgUser->save();

            return response()->json($updateOrgUser);
        } catch (\Exception $error) {
            return response()->json(['code' => 'FORBIDDEN'], 403);
        }
    }
}
