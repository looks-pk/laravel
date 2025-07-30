@props([
    'src' => '',
    'alt' => '',
    'class' => '',
    'style' => '',
    'width' => null,
    'height' => null,
    'placeholder' => true,
    'spinnerSize' => 'default' // default, small, large
])

@php
    $spinnerClass = match($spinnerSize) {
        'small' => 'w-4 h-4 border border-gray-300 border-t-blue-500',
        'large' => 'w-8 h-8 border-2 border-gray-300 border-t-blue-600',
        default => 'w-5 h-5 border border-gray-300 border-t-blue-500',
    };
    
    $containerStyle = '';
    if ($width) $containerStyle .= "width: {$width}px; ";
    if ($height) $containerStyle .= "height: {$height}px; ";
    if ($style) $containerStyle .= $style;
@endphp

<div class="image-container" @if($containerStyle) style="{{ $containerStyle }}" @endif>
    @if($placeholder)
        <div class="image-placeholder">
            <div class="loading-spinner {{ $spinnerClass }}"></div>
        </div>
    @endif
    
    <img 
        data-lazy="{{ $src }}" 
        alt="{{ $alt }}"
        class="lazy-image {{ $class }}"
        loading="lazy"
        @if($width) width="{{ $width }}" @endif
        @if($height) height="{{ $height }}" @endif
        {{ $attributes }}
    >
</div> 