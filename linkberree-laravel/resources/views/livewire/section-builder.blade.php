
<div>
    <form wire:submit.prevent="save">
        <div>
            <label>Section Type</label>
            <select wire:model="section_type">
                <option value="video">Video</option>
                <option value="image">Image</option>
                <option value="text">Text</option>
            </select>
        </div>

        <div>
            <label>Hero Copy Line 1</label>
            <input type="text" wire:model="hero_copy_line_1">
        </div>

        <div>
            <label>Hero Copy Line 2</label>
            <input type="text" wire:model="hero_copy_line_2">
        </div>

        <div>
            <label>Link CTA Copy</label>
            <input type="text" wire:model="link_cta_copy">
        </div>

        <div>
            <label>Link URL</label>
            <input type="url" wire:model="link_url">
        </div>

        <div x-data="{ preview: null }">
            <label>Media Upload:</label>
            <input type="file" wire:model="media" accept="image/*,video/*" x-on:change="let file = $event.target.files[0]; preview = URL.createObjectURL(file);">
            <img x-show="preview" x-bind:src="preview" alt="Media preview" width="200">
        </div>

        <div>
            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Save
            </button>
        </div>
    </form>
</div>
