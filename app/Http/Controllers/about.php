<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class about extends Controller
{
    public function aboutus(Request $request)
    {
        $path = public_path('WebJSON/About');
        $imagePath = $path . '/web_images';
        $filePath = $path . '/about.json';

        $validate = $request->validate([
            'aboutus_title' => 'nullable|string|max:255',
            'aboutus_description' => 'nullable|string',
            'aboutus_bg' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',

            'aboutcontent1_title1' => 'nullable|string|max:255',
            'aboutcontent1_img1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'content1_description1' => 'nullable|string',

            'aboutcontent2_title2' => 'nullable|string|max:255',
            'content2_img2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'content2_description2' => 'nullable|string',

            'aboutcontent3_title3' => 'nullable|string|max:255',
            'content3_img3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'content3_description3' => 'nullable|string',
        ]);

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if (!file_exists($imagePath)) {
            mkdir($imagePath, 0777, true);
        }

        $web_content = file_exists($filePath)
            ? json_decode(file_get_contents($filePath), true)
            : [
                'aboutus_title' => 'Default Title',
                'aboutus_description' => 'Default Description',
                'service_images' => [
                    'aboutus_bg' => null,
                    'aboutcontent1_img1' => null,
                    'content2_img2' => null,
                    'content3_img3' => null,
                ],
                'aboutcontent1_title1' => 'Default Title',
                'content1_description1' => 'Default Description',
                'aboutcontent2_title2' => 'Default Title',
                'content2_description2' => 'Default Description',
                'aboutcontent3_title3' => 'Default Title',
                'content3_description3' => 'Default Description',
            ];

        foreach ($validate as $key => $value) {
            if (isset($value)) {
                $web_content[$key] = $value;
            }
        }

        foreach (['aboutus_bg', 'aboutcontent1_img1', 'content2_img2', 'content3_img3'] as $key) {
            if ($request->hasFile($key)) {
                if (!empty($web_content['service_images'][$key])) {
                    $oldImagePath = public_path($web_content['service_images'][$key]);
                    if (File::exists($oldImagePath)) {
                        File::delete($oldImagePath);
                    }
                }
                $imageFile = $request->file($key);
                $imageName = time() . '_' . $key . '.' . $imageFile->getClientOriginalExtension();
                $imageFile->move($imagePath, $imageName);
                $web_content['service_images'][$key] = 'WebJSON/About/web_images/' . $imageName;
            }
        }

        file_put_contents($filePath, json_encode($web_content, JSON_PRETTY_PRINT));

        return redirect()->back()->with('success', 'About us content updated successfully.');
    }
}
