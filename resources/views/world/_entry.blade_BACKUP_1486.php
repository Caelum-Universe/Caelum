<div class="row world-entry">
    @if($imageUrl)
<<<<<<< .merge_file_ZJ9tqg
        <div class="col-md-3 world-entry-image"><a href="{{ $imageUrl }}" data-lightbox="entry" data-title="{{ $name }}"><img src="{{ $imageUrl }}" class="world-entry-image" /></a></div>
=======
        <div class="col-md-3 world-entry-image"><a href="{{ $imageUrl }}" data-lightbox="entry" data-title="{{ $name }}">
            <img src="{{ $imageUrl }}" class="world-entry-image" alt="{{ $name }}" />
        </a></div>
>>>>>>> .merge_file_Q9Nj25
    @endif
    <div class="{{ $imageUrl ? 'col-md-9' : 'col-12' }}">
        <h3>{!! $name !!} @if(isset($searchUrl) && $searchUrl) <a href="{{ $searchUrl }}" class="world-entry-search text-muted"><i class="fas fa-search"></i></a>  @endif</h3>
        <div class="world-entry-text">
            {!! $description !!}
        </div>
    </div>
<<<<<<< .merge_file_ZJ9tqg
</div>
=======
</div>
>>>>>>> .merge_file_Q9Nj25