<div class="row world-entry">
    @if($imageUrl)
<<<<<<< .merge_file_S67ito
        <div class="col-md-3 world-entry-image"><a href="{{ $imageUrl }}" data-lightbox="entry" data-title="{{ $name }}"><img src="{{ $imageUrl }}" class="world-entry-image" /></a></div>
    @endif
    <div class="{{ $imageUrl ? 'col-md-9' : 'col-12' }}">
        <h3>{!! $name !!} 
        
=======
        <div class="col-md-3 world-entry-image"><a href="{{ $imageUrl }}" data-lightbox="entry" data-title="{{ $name }}"><img src="{{ $imageUrl }}" class="world-entry-image" alt="{{ $name }}" /></a></div>
    @endif
    <div class="{{ $imageUrl ? 'col-md-9' : 'col-12' }}">
        <h3>{!! $name !!}

>>>>>>> .merge_file_zQy2sP
        <div class="float-right small">
            @if(isset($searchFeaturesUrl) && $searchFeaturesUrl) <a href="{{ $searchFeaturesUrl }}" class="world-entry-search text-muted small"><i class="fas fa-search"></i> Traits</a>  @endif
            @if(isset($searchCharactersUrl) && $searchCharactersUrl) <a href="{{ $searchCharactersUrl }}" class="world-entry-search text-muted small ml-4"><i class="fas fa-search"></i> Characters</a>  @endif
        </div>
<<<<<<< .merge_file_S67ito
        
=======

>>>>>>> .merge_file_zQy2sP
        </h3>
        <div class="world-entry-text">
            {!! $description !!}
        </div>
    </div>
<<<<<<< .merge_file_S67ito
</div>
=======
</div>
>>>>>>> .merge_file_zQy2sP
