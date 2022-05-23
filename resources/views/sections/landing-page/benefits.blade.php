<div class="flex flex-row bg-deep-violet text-white my-40">
    <div class="w-7/12">
        <img class="-mt-8 -mb-16 mx-auto" src="@asset('images/benefits-1.png')" alt="">
    </div>
    <div class="w-5/12">
        <h2>Benefits from our online learning</h2>
        @include('partials.landing-page.benefits-item', [
            'icon' => 'award',
            'label' => 'Online Degrees',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim',
        ])
        @include('partials.landing-page.benefits-item', [
            'icon' => 'load',
            'label' => 'Short courses',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim',
        ])
        @include('partials.landing-page.benefits-item', [
            'icon' => 'user',
            'label' => 'Expert Training',
            'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam, purus sit amet luctus venenatis, lectus magna fringilla urna, porttitor rhoncus dolor purus non enim',
        ])
    </div>
</div>