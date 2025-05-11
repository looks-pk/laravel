@if(isset($post->sections) && is_array($post->sections) && count($post->sections) > 0)
    <div class="dynamic-sections mt-8">
        @foreach($post->sections as $section)
            @if($section['type'] === 'one-column')
                <div class="section-one-column mb-10">
                    <div class="prose max-w-none">
                        {!! $section['content']['html'] ?? '' !!}
                    </div>
                </div>
            @elseif($section['type'] === 'two-column')
                <div class="section-two-column mb-10 grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="column prose max-w-none overflow-hidden">
                        {!! $section['content']['left']['html'] ?? '' !!}
                    </div>
                    <div class="column prose max-w-none overflow-hidden">
                        {!! $section['content']['right']['html'] ?? '' !!}
                    </div>
                </div>
            @elseif($section['type'] === 'three-column')
                <div class="section-three-column mb-10 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="column prose max-w-none overflow-hidden">
                        {!! $section['content']['left']['html'] ?? '' !!}
                    </div>
                    <div class="column prose max-w-none overflow-hidden">
                        {!! $section['content']['middle']['html'] ?? '' !!}
                    </div>
                    <div class="column prose max-w-none overflow-hidden">
                        {!! $section['content']['right']['html'] ?? '' !!}
                    </div>
                </div>
            @elseif($section['type'] === 'text-image')
                @php
                    $layout = $section['content']['layout'] ?? 'text-image';
                    $textColumnClass = 'md:col-span-7';
                    $imageColumnClass = 'md:col-span-5';
                @endphp
                
                <div class="section-text-image mb-10">
                    <div class="grid grid-cols-1 md:grid-cols-12 gap-6 items-center">
                        @if($layout === 'image-text')
                            @if(isset($section['content']['image']) && isset($section['content']['image']['data']))
                                <div class="image-column {{ $imageColumnClass }}">
                                    <img src="{{ $section['content']['image']['data'] }}" alt="Section image" class="rounded-lg w-full">
                                </div>
                            @endif
                            
                            <div class="text-column {{ $textColumnClass }} prose max-w-none overflow-hidden">
                                {!! $section['content']['text']['html'] ?? '' !!}
                            </div>
                        @else
                            <div class="text-column {{ $textColumnClass }} prose max-w-none overflow-hidden">
                                {!! $section['content']['text']['html'] ?? '' !!}
                            </div>
                            
                            @if(isset($section['content']['image']) && isset($section['content']['image']['data']))
                                <div class="image-column {{ $imageColumnClass }}">
                                    <img src="{{ $section['content']['image']['data'] }}" alt="Section image" class="rounded-lg w-full">
                                </div>
                            @endif
                        @endif
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endif 