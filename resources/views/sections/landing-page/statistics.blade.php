<div class="flex flex-row text-han-purple mx-auto max-w-4xl justify-between">
    @include('partials.landing-page.statistics-item', [
        'icon' => 'icons.time',
        'amount' => '60,000+',
        'stat' => 'Hours content',
    ])
    @include('partials.landing-page.statistics-item', [
        'icon' => 'icons.silhouette',
        'amount' => '100,000+',
        'stat' => 'Students',
    ])
    @include('partials.landing-page.statistics-item', [
        'icon' => 'icons.globe',
        'amount' => '110+',
        'stat' => 'Countries',
    ])
    {{-- <div class="bg-white">@include('icons.time') 60,000+ Hours content</div>
    <div class="bg-white">@include('icons.silhouette') 100,000+ Students</div>
    <div class="bg-white">@include('icons.globe') 110+ Countries</div> --}}
</div>