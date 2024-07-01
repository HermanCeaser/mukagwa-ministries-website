@props(['link', 'image_url', 'alt'])
<a href="{{ $link ?? '#' }}">
    <img {{ $attributes->merge(['class' => 'w-[450px] h-[270px]']) }} src="{{ $image_url ?? 'https://via.placeholder.com/640x480.png/0033dd?text=posts+Awesome+Education' }}" alt="{{ $alt ?? 'Post Image' }}">
</a>
