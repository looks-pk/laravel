<div id="{{ $id }}" class="tab-content {{ isset($active) ? 'active':'' }}">

@forelse($areas as $area)

<div class="area-card">

<div class="area-map">
<div class="absolute inset-0 bg-black/30 flex items-end p-4">
<h3 class="text-white font-bold">
{{ ucwords(str_replace('-',' ',$area)) }}
</h3>
</div>
</div>

<div class="card-body">

<h3>Home2stay {{ ucwords(str_replace('-',' ',$area)) }}</h3>

<p>
Professional accessibility solutions for
{{ ucwords(str_replace('-',' ',$area)) }} residents.
</p>

<a href="{{ route('areas.show',$area) }}" class="btn-primary mt-auto">
Learn More →
</a>

</div>
</div>

@empty
<p>No locations available.</p>
@endforelse

</div>