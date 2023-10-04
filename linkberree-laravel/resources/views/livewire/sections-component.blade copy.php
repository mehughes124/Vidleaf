<div>
    <x-app-layout>
        <x-slot name="header">
            {{ __('Dashboard') }}
        </x-slot>

        <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-sm sm:rounded-lg p-6 text-gray-900">
                {{ __("You're logged in!") }}

                <div class="mt-6 text-center">
                    <a href="/section-builder" class="bg-blue-500 hover:bg-blue-700 text-black font-bold py-2 px-4 rounded-full transition duration-300 ease-in-out">
                        Add Section +
                    </a>
                </div>

                <div id="sortable-sections" class="mt-6 space-y-4">
                    @if(count($sections))
                        @foreach($sections as $section)
                            <div class="bg-gray-100 p-4 rounded-md shadow">
                                <h3 class="text-xl font-semibold mb-4">{{ parse_url($section->link_url, PHP_URL_HOST) }}</h3>
                                <ul class="text-gray-700">
                                    <li><strong>Section Type:</strong> {{ ucfirst($section->section_type) }}</li>
                                    <li><strong>Hero Copy Line 1:</strong> {{ $section->hero_copy_line_1 }}</li>
                                    <li><strong>Hero Copy Line 2:</strong> {{ $section->hero_copy_line_2 }}</li>
                                    <li><strong>Link CTA Copy:</strong> {{ $section->link_cta_copy }}</li>
                                    <li><strong>Link URL:</strong> {{ $section->link_url }}</li>
                                    <li><strong>Order:</strong> <span class="section-order">{{ $section->order }}</span></li>
                                </ul>
                            </div>
                        @endforeach
                    @else
                        <div class="text-center">
                            No sections yet.
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </x-app-layout>
</div>

