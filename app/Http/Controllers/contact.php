<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contact extends Controller
{
    public function contact(Request $request)
{
    $path = public_path('WebJSON/Contact');
    $imagePath = $path . '/web_images';
    $filePath = $path . '/contact.json';

    $validate = $request->validate([
        'contact_img' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg'
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
            'image' => null,
        ];
    }

    if ($request->hasFile('contact_img')) {
        $file = $request->file('contact_img');

        if (!empty($web_content['image']) && file_exists(public_path($web_content['image']))) {
            unlink(public_path($web_content['image']));
        }

        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move($imagePath, $filename);
        $web_content['image'] = 'WebJSON/Contact/web_images/' . $filename;
    }
    file_put_contents($filePath, json_encode($web_content));

    return redirect()->back()->with('success', 'Contact Updated Successfully');
}

}
