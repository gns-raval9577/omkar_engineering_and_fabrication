@php
    $productTitle = $product?->title ?? '';
    $images = $product?->images ?? collect();
    $imageCount = $images->count();
@endphp

<div class="omkar-gallery-wrapper">
    <style>
        .omkar-gallery-wrapper svg {
            display: inline-block;
            vertical-align: middle;
            flex-shrink: 0;
        }
        .omkar-gallery-thumb {
            aspect-ratio: 1 / 1;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>

    @if(!$productId)
        <!-- State 1: No product selected yet -->
        <div class="flex items-center gap-3 p-4 rounded-lg bg-slate-50 dark:bg-slate-800/40 border border-slate-200/80 dark:border-slate-800 text-slate-500 dark:text-slate-400">
            <svg style="width: 20px; height: 20px; min-width: 20px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <circle cx="11" cy="11" r="8"/>
                <path d="m21 21-4.3-4.3"/>
            </svg>
            <span class="text-xs">Select a product in <strong>Step 1</strong> above to preview its existing gallery photos.</span>
        </div>
    @elseif($imageCount === 0)
        <!-- State 2: Product selected but 0 images -->
        <div class="flex items-center justify-between p-3.5 rounded-lg bg-sky-50/50 dark:bg-sky-950/20 border border-sky-100 dark:border-sky-900/40">
            <div class="flex items-center gap-2">
                <span class="inline-flex items-center px-2 py-0.5 rounded text-xs font-semibold bg-sky-100 dark:bg-sky-900 text-sky-800 dark:text-sky-300">
                    {{ $productTitle }}
                </span>
                <span class="text-xs text-slate-600 dark:text-slate-400">
                    currently has no photos in its gallery.
                </span>
            </div>
            <span class="text-xs text-sky-600 dark:text-sky-400 font-medium">
                Upload photos in Step 2 above to populate this gallery.
            </span>
        </div>
    @else
        <!-- State 3: Images exist for this product -->
        <div class="space-y-3">
            <div class="flex items-center justify-between pb-1">
                <div class="flex items-center gap-2">
                    <span class="text-xs font-medium text-slate-600 dark:text-slate-300">Existing photos for:</span>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-md text-xs font-semibold bg-sky-100 dark:bg-sky-950 text-sky-800 dark:text-sky-300 border border-sky-200 dark:border-sky-800">
                        {{ $productTitle }}
                    </span>
                </div>
                <span class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-xs font-semibold bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300">
                    <span class="w-1.5 h-1.5 rounded-full bg-sky-500"></span>
                    {{ $imageCount }} {{ Str::plural('Photo', $imageCount) }}
                </span>
            </div>

            <!-- Compact responsive 6-column photo grid -->
            <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-3">
                @foreach($images as $img)
                    <div class="group relative rounded-lg border border-slate-200 dark:border-slate-700 bg-white dark:bg-slate-800/60 p-1.5 overflow-hidden shadow-2xs hover:shadow-xs transition-all">
                        <div class="aspect-square w-full rounded-md overflow-hidden bg-slate-100 dark:bg-slate-800 relative">
                            <img 
                                src="{{ asset('storage/' . $img->image) }}" 
                                alt="{{ $img->title }}" 
                                class="omkar-gallery-thumb transition-transform duration-200 group-hover:scale-105"
                                loading="lazy"
                            />
                            
                            <!-- Quick Action Buttons Overlay -->
                            <div class="absolute inset-0 bg-slate-900/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center gap-2 p-1">
                                <a 
                                    href="{{ asset('storage/' . $img->image) }}" 
                                    target="_blank" 
                                    class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-white text-slate-700 hover:text-sky-600 shadow-sm transition"
                                    title="View Full Size"
                                >
                                    <svg style="width: 14px; height: 14px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z"/>
                                        <circle cx="12" cy="12" r="3"/>
                                    </svg>
                                </a>

                                <button 
                                    type="button" 
                                    wire:click="deleteExistingImage({{ $img->id }})" 
                                    wire:confirm="Permanently delete this photo from the product gallery?"
                                    class="inline-flex items-center justify-center w-7 h-7 rounded-full bg-rose-600 text-white hover:bg-rose-700 shadow-sm transition focus:outline-none"
                                    title="Delete Photo"
                                >
                                    <svg style="width: 14px; height: 14px;" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M3 6h18"/>
                                        <path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/>
                                        <path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <!-- Caption -->
                        <div class="mt-1 px-0.5">
                            <p class="text-[11px] font-medium text-slate-800 dark:text-slate-200 truncate" title="{{ $img->title }}">
                                {{ $img->title ?: 'Photo #' . $img->id }}
                            </p>
                            <p class="text-[10px] text-slate-400 dark:text-slate-500">
                                {{ $img->created_at ? $img->created_at->format('M d, Y') : '' }}
                            </p>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif
</div>
