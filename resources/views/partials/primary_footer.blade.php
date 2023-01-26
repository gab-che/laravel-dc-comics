<?php 
$footer_links = [
    [
        'list_title' => 'dc comics',
        'list_links' => ['charachters', 'comics', 'movies', 'tv', 'games', 'videos', 'news']
    ],
    [
        'list_title' => 'shop',
        'list_links' => ['shop DC', 'shop DC collectibles']
    ],
    [
        'list_title' => 'dc',
        'list_links' => ['terms of use', 'privacy policy (New)', 'ad choices', 'advertising', 'jobs', 'subscriptions', 'talent workshops', 'CPSC certificates', 'ratings', 'shop help', 'contact us']
    ],
    [
        'list_title' => 'sites',
        'list_links' => ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa']
    ]
]
?>

<div class="primary_footer">
    <div class="container">
        <div class="row row-cols-2">
            <div class="col py-2">
                <div class="row row-cols-4">
                    @foreach ($footer_links as $footer_link)
                    <div class="col">

                        <h4>{{$footer_link['list_title']}}</h4>
                        <ul class="list-unstyled">
                            @foreach ($footer_link['list_links'] as $links)
                            <li><a href="#">{{$links}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                    @endforeach
                </div>
            </div>
            <div class="col">
                <div class="logo_container ms-auto">
                    <img src="{{Vite::asset('resources/images/dc-logo-bg.png')}}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>