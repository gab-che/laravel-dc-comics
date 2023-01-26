<?php 
$icons = [
    'footer-facebook.png',
    'footer-periscope.png',
    'footer-pinterest.png',
    'footer-twitter.png',
    'footer-youtube.png'
]
?>

<div class="secondary_footer py-3">
    <div class="container d-flex justify-content-between align-items-center">
        <button class="btn btn-dark">SIGN UP!</button>

        <div class="social_container d-flex gap-3 align-items-center">
            <span>FOLLOW US</span>
            <ul class="list-unstyled d-flex gap-3">
                @foreach ($icons as $icon)
                    <a href="#"><img src="{{Vite::asset('resources/images/' . $icon)}}" alt=""></a>    
                @endforeach
            </ul>
        </div>
    </div>
</div>