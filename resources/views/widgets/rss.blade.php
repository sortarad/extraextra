<div class="card p-0">
    <div class="p-2">
        <h2>RSS: {{ $title }}</h2>
    </div>
    @if ( $items )
        @include('sortarad::partials.content')
    @else
        <p class="px-2 pb-2">
            No feed items.
        </p>
    @endif
</div>
