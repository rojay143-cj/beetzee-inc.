<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class milestone extends Controller
{
    public function milestone(Request $request)
    {
        $path = public_path('WebJSON/Milestones');
        $imagePath = $path . '/web_images';
        $filePath = $path . '/milestone.json';

        $validate = $request->validate([
            'milestone_title' => 'nullable|string|max:255',
            'milestone_bg' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'bullet1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'bullet2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'bullet3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'bullet4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'bullet5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'bullet6' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'bullet7' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'bullet8' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'desc1' => 'nullable|string',
            'desc2' => 'nullable|string',
            'desc3' => 'nullable|string',
            'desc4' => 'nullable|string',
            'desc5' => 'nullable|string',
            'desc6' => 'nullable|string',
            'desc7' => 'nullable|string',
            'desc8' => 'nullable|string',
            'mile_img1' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'mile_img2' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'mile_img3' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'mile_img4' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'mile_img5' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'mile_img6' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'mile_img7' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
            'mile_img8' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg',
        ]);

        if (!file_exists($path)) {
            mkdir($path, 0777, true);
        }
        if (!file_exists($imagePath)) {
            mkdir($imagePath, 0777, true);
        }

        $web_content = file_exists($filePath) ? json_decode(file_get_contents($filePath), true) : [];

        function handleImageUpload($request, $key, &$web_content, $imagePath)
        {
            if ($request->hasFile($key)) {
                if (!empty($web_content[$key])) {
                    $oldImage = str_replace(url('/'), public_path(), $web_content[$key]);
                    if (file_exists($oldImage)) {
                        unlink($oldImage);
                    }
                }
                $file = $request->file($key);
                $filename = time() . '_' . $key . '.' . $file->getClientOriginalExtension();
                $file->move($imagePath, $filename);
                $web_content[$key] = 'WebJSON/Milestones/web_images/' . $filename;
            }
        }

        $imageFields = [
            'milestone_bg',
            'bullet1',
            'bullet2',
            'bullet3',
            'bullet4',
            'bullet5',
            'bullet6',
            'bullet7',
            'bullet8',
            'mile_img1',
            'mile_img2',
            'mile_img3',
            'mile_img4',
            'mile_img5',
            'mile_img6',
            'mile_img7',
            'mile_img8'
        ];

        foreach ($imageFields as $field) {
            handleImageUpload($request, $field, $web_content, $imagePath);
        }

        $textFields = ['desc1', 'desc2', 'desc3', 'desc4', 'desc5', 'desc6', 'desc7', 'desc8'];
        foreach ($textFields as $field) {
            $web_content[$field] = $request->input($field);
        }
        if ($request->has('milestone_title') && !empty($request->input('milestone_title'))) {
            $web_content['milestone_title'] = $request->input('milestone_title');
        }
        file_put_contents($filePath, json_encode($web_content, JSON_PRETTY_PRINT));

        return redirect()->back()->with('success', 'Milestone content updated successfully.');
    }
}
