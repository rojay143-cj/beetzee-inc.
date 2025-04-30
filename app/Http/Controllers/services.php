<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class Services extends Controller
{
    public function service(Request $request)
    {
        $path = public_path('WebJSON/Services');
        $imagePath = $path . '/web_images';
        $filePath = $path . '/services.json';

        $validate = $request->validate([
            'service_title' => 'nullable|string|max:255',
            'service_description' => 'nullable|string',
            'serve_img1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'serve_img2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'serve_img3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'serve_text1' => 'nullable|string',
            'serve_text2' => 'nullable|string',
            'serve_text3' => 'nullable|string',
            //Section 2
            'servesec2_title' => 'nullable|string|max:255',
            'servesub_title' => 'nullable|string',
            'price_img1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'price_img2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            //Section 3
            'servesec3_title1' => 'nullable|string|max:255',
            'servesec3_title2' => 'nullable|string|max:255',
            'servesec3_src1' => 'nullable|string|max:255',
            'servesec3_src2' => 'nullable|string|max:255',
        ]);

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if (!file_exists($imagePath)) {
            mkdir($imagePath, 0777, true);
        }

        // Load existing content
        $web_content = file_exists($filePath) 
            ? json_decode(file_get_contents($filePath), true) 
            : [
                'service_title' => 'Default Title',
                'service_description' => 'Default Description',
                'service_images' => [
                    'serve_img1' => null,
                    'serve_img2' => null,
                    'serve_img3' => null,
                ],
                'serve_text1' => 'Default Text',
                'serve_text2' => 'Default Text',
                'serve_text3' => 'Default Text',

                //Section 2
                'servesec2_title' => 'Default Title',
                'servesub_title' => 'Default Title',
                'price_img1' => null,
                'price_img2' => null,
                //Section 3
                'servesec3_title1' => 'Default Title',
                'servesec3_title2' => 'Default Title',
                'servesec3_src1' => null,
                'servesec3_src2' => null
            ];

        $web_content['service_title'] = $validate['service_title'] ?? $web_content['service_title'];
        $web_content['service_description'] = $validate['service_description'] ?? $web_content['service_description'];
        $web_content['serve_text1'] = $validate['serve_text1'] ?? $web_content['serve_text1'];
        $web_content['serve_text2'] = $validate['serve_text2'] ?? $web_content['serve_text2'];
        $web_content['serve_text3'] = $validate['serve_text3'] ?? $web_content['serve_text3'];

        //Section 2
        $web_content['servesec2_title'] = $validate['servesec2_title'] ?? $web_content['servesec2_title'];
        $web_content['servesub_title'] = $validate['servesub_title'] ?? $web_content['servesub_title'];

        //Section 3
        $web_content['servesec3_title1'] = $validate['servesec3_title1'] ?? $web_content['servesec3_title1'];
        $web_content['servesec3_title2'] = $validate['servesec3_title2'] ?? $web_content['servesec3_title2'];
        $web_content['servesec3_src1'] = $validate['servesec3_src1'] ?? $web_content['servesec3_src1'];
        $web_content['servesec3_src2'] = $validate['servesec3_src2'] ?? $web_content['servesec3_src2'];

        // Process each image separately
        foreach (['serve_img1', 'serve_img2', 'serve_img3'] as $key) {
            if ($request->hasFile($key)) {
                // Delete the old image if it exists
                if (!empty($web_content['service_images'][$key])) {
                    $oldImagePath = public_path($web_content['service_images'][$key]);
                    if (File::exists($oldImagePath)) {
                        File::delete($oldImagePath);
                    }
                }

                // Save the new image
                $imageFile = $request->file($key);
                $imageName = time() . '_' . $key . '.' . $imageFile->getClientOriginalExtension();
                $imageFile->move($imagePath, $imageName);
                $web_content['service_images'][$key] = 'WebJSON/Services/web_images/' . $imageName;
            }
        }

        foreach (['price_img1', 'price_img2'] as $key) {
            if ($request->hasFile($key)) {
                // Delete the old image if it exists
                if (!empty($web_content[$key])) {
                    $oldImagePath = public_path($web_content[$key]);
                    if (File::exists($oldImagePath)) {
                        File::delete($oldImagePath);
                    }
                }

                // Save the new image
                $imageFile = $request->file($key);
                $imageName = time() . '_' . $key . '.' . $imageFile->getClientOriginalExtension();
                $imageFile->move($imagePath, $imageName);
                $web_content[$key] = 'WebJSON/Services/web_images/' . $imageName;
            }
        }

        file_put_contents($filePath, json_encode($web_content, JSON_PRETTY_PRINT));

        return redirect()->back()->with('success', 'Service updated successfully!');
    }
}
