<div class="card mb-3">
    <div class="card-header">
        <h2 class="card-title mb-0">{!! $news->displayName !!}</h2>
        <small>
            Posted {!! $news->post_at ? format_date($news->post_at) : format_date($news->created_at) !!} by {!! $news->user->displayName !!}
        </small>
    </div>
    <div class="card-body">
        <div class="parsed-text">
            {!! $news->parsed_text !!}
        </div>
    </div>
    <?php $commentCount = Laravelista\Comments\Comment::where('commentable_type', 'App\Models\News')->where('commentable_id', $news->id)->count(); ?>
    @if(!$page)
        <div class="text-right mb-2 mr-2">
            <a class="btn" href="{{ $news->url }}"><i class="fas fa-comment"></i> {{ $commentCount }} Comment{{ $commentCount != 1 ? 's' : ''}}</a>
        </div>
    @else
        <div class="text-right mb-2 mr-2">
            <span class="btn"><i class="fas fa-comment"></i> {{ $commentCount }} Comment{{ $commentCount != 1 ? 's' : ''}}</span>
        </div>
    @endif
</div>