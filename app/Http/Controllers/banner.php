<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class banner extends Controller
{
    public function banner(Request $request){
        $path = public_path('WebJSON/Banner');
        $imagePath = $path . '/web_images';
        $filePath = $path . '/banner.json';

        $validate = $request->validate([
            'banner_title1' => 'nullable|string|max:255',
            'banner_title2' => 'nullable|string|max:255',
            'banner_title3' => 'nullable|string|max:255',
            'banner_description' => 'nullable|string',
            'banner_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            //Section 2
            'bansec2_title' => 'nullable|string|max:255',
            'bansec2_description' => 'nullable|string',
            'bansec2_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg'
        ]);

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if (!file_exists($imagePath)) {
            mkdir($imagePath, 0777, true);
        }

        if (file_exists($filePath)) {
            $web_content = json_decode(file_get_contents($filePath), true);
        } else {
            $web_content = [
                'title1' => 'Default Title',
                'title2' => 'Default Title',
                'title3' => 'Default Title',
                'ban_description' => 'Default Description',
                'banner_image' => null,
                //Section 2
                'bansec2_title' => 'Default Title',
                'bansec2_description' => 'Default Description',
                'bansec2_image' => null
            ];
        }

        $web_content['title1'] = $validate['banner_title1'] ?? $web_content['title1'];
        $web_content['title2'] = $validate['banner_title2'] ?? $web_content['title2'];
        $web_content['title3'] = $validate['banner_title3'] ?? $web_content['title3'];
        $web_content['ban_description'] = $validate['banner_description'] ?? $web_content['ban_description'];
        //Section 2
        $web_content['bansec2_title'] = $validate['bansec2_title'] ?? $web_content['bansec2_title'];
        $web_content['bansec2_description'] = $validate['bansec2_description'] ?? $web_content['bansec2_description'];

        if ($request->hasFile('banner_img')) {
            $bannerImage = $request->file('banner_img');

            if (!empty($web_content['banner_image']) && file_exists(public_path($web_content['banner_image']))) {
                unlink(public_path($web_content['banner_image']));
            }
    
            $imageName = time().'.'.$bannerImage->getClientOriginalExtension();
            $bannerImage->move($imagePath, $imageName);
            $web_content['image'] = 'WebJSON/web_images/' . $imageName;
        }
        
        if($request->hasFile('bansec2_img')){
            $bansec2Image = $request->file('bansec2_img');
            //Section 2
            if (!empty($web_content['bansec2_image']) && file_exists(public_path($web_content['bansec2_image']))) {
                unlink(public_path($web_content['bansec2_image']));
            }

            //Section 2
            $imageName2 = time().'.'.$bansec2Image->getClientOriginalExtension();
            $bansec2Image->move($imagePath, $imageName2);
            $web_content['bansec2_image'] = 'WebJSON/web_images/' . $imageName2;
        }
        file_put_contents($filePath, json_encode($web_content, JSON_PRETTY_PRINT));
    
        return redirect()->back()->with('success', 'Web Content Updated Successfully');
    }
}