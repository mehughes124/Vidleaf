<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Section;

class SectionOrderController extends Controller
{
    public function updateSectionOrder(Request $request)
{
    $orderUpdates = $request->input('orderUpdates');
    
    foreach ($orderUpdates as $update) {
        $sectionId = $update['id'];
        $newOrder = $update['newOrder'];

        // Add logging to see what's happening
        \Log::info("Updating Section ID: $sectionId with new order: $newOrder");

        // Update the order in the database
        Section::where('id', $sectionId)->update(['order' => $newOrder]);
    }

    return response()->json(['message' => 'Order updated successfully!']);
}


}
