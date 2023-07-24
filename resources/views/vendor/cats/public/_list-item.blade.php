<li class="cat-list-item">
    <a class="cat-list-item-link" href="{{ $cat->uri() }}" title="{{ $cat->title }}">
        <div class="cat-list-item-title">{{ $cat->title }}</div>
        <div class="cat-list-item-image-wrapper">
            <img class="cat-list-item-image" src="{{ $cat->present()->image(800, 600) }}" width="400" height="300" alt="{{ $cat->image?->alt_attribute }}" />
        </div>
    </a>
</li>
