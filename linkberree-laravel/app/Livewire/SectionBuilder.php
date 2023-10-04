<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Section;
use Illuminate\Support\Facades\Http;
use Livewire\WithFileUploads; 



class SectionBuilder extends Component
{
    use WithFileUploads;

    public $section_type;
    public $hero_copy_line_1;
    public $hero_copy_line_2;
    public $link_cta_copy;
    public $link_url;
    public $media_url;
    public $order;
    public $media;

    public function mount()
    {
        $this->order = auth()->user()->sections->count() + 1;
    }

    public function save()
    {
        \Log::info('Save method called'); // This should log when you hit "Save"

        try {
            $this->validate([
                'section_type' => 'required|in:video,image,text',
                'hero_copy_line_1' => 'required|string',
                'hero_copy_line_2' => 'required|string',
                'link_cta_copy' => 'required|string',
                'link_url' => 'required|url',
                'media' => 'required|file|max:204800',
            ]);
        } catch (\Illuminate\Validation\ValidationException $e) {
            \Log::error('Validation failed: ' . $e->getMessage());
            throw $e; // Re-throw the exception after logging
        }

        \Log::info('Validation passed');

         // Generate one-time upload URL
        $uploadDetails = $this->generateCloudflareUploadUrl();

        // Use the one-time URL to upload the media
        $this->uploadDirectlyToCloudflare($this->media->getRealPath(), $uploadDetails['uploadURL']);

        Section::create([
            'user_id' => auth()->id(),
            'section_type' => $this->section_type,
            'hero_copy_line_1' => $this->hero_copy_line_1,
            'hero_copy_line_2' => $this->hero_copy_line_2,
            'link_cta_copy' => $this->link_cta_copy,
            'link_url' => $this->link_url,
            'media_url' => '',
            'media_id' => $uploadDetails['uid'],
            'order' => $this->order,
        ]);

        // $section = Section::where('media_id', $uploadDetails['uid'])->first();
        // $section->update([
        //     'media_url' => $mediaDetails['playback']['hls'], // or whichever format you prefer
        // ]);

        \Log::info('Save method completed');

        // You can add a session flash message, redirect, or any other post-save action here
        return redirect('/sections');
    }

    private function generateCloudflareUploadUrl()
    {
        $response = Http::withHeaders([
            'Authorization' => 'Bearer ' . config('services.cloudflare.stream_api_key'),
        ])->post("https://api.cloudflare.com/client/v4/accounts/" . config('services.cloudflare.account_id') . "/stream/direct_upload", [
            'maxDurationSeconds' => 3600
        ]);

        if ($response->successful() && $response->json()['success']) {
            return $response->json()['result'];
        } else {
            throw new Exception("Failed to generate Cloudflare upload URL.");
        }
    }

    private function uploadDirectlyToCloudflare($mediaPath, $uploadUrl)
    {
        $response = Http::attach('file', file_get_contents($mediaPath), 'video.mp4')->post($uploadUrl);

        if ($response->successful()) {
            return true;
        } else {
            throw new Exception("Failed to upload media to Cloudflare using direct upload.");
        }
    }


    public function render()
    {
        return view('livewire.section-builder')->layout('layouts.app');
    }
}

