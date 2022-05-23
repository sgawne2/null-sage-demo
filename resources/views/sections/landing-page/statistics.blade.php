<div class="flex flex-row text-han-purple mx-auto max-w-4xl justify-between">
    @include('partials.landing-page.statistics-item', [
        'icon' => 'time',
        'amount' => '60,000+',
        'stat' => 'Hours content',
    ])
    @include('partials.landing-page.statistics-item', [
        'icon' => 'silhouette',
        'amount' => '100,000+',
        'stat' => 'Students',
    ])
    @include('partials.landing-page.statistics-item', [
        'icon' => 'globe',
        'amount' => '110+',
        'stat' => 'Countries',
    ])
</div>