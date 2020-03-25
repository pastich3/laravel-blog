<div style="max-width: 300px;" class="card w-100 h-100 mx-3 my-3 custom-blog-card">
  @if ($post->hasThumbnail())
    <a href="{{ route('posts.show', $post)}}">
      {{ Html::image($post->thumbnail->getUrl('thumb'), $post->thumbnail->name, [
          'class' => 'card-img-top',
          'style' => 'object-fit:contain; object-position:center;',
          'width' => '200',
          'height' => '200',
          'loading' => 'lazy'
        ])
      }}
    </a>
  @else
    <a href="{{ route('posts.show', $post)}}">
      {{ Html::image('/images/newfavicon.png', '', [
          'class' => 'card-img-top',
          'style' => 'object-fit:contain; object-position:center;',
          'width' => '200',
          'height' => '200',
          'loading' => 'lazy'
        ])
      }}
    </a>
  @endif

  <div class="d-flex align-items-end">
    <div class="card-body w-100">
      <h4 v-pre class="card-title" style="flex:1;min-width:0;white-space:nowrap;overflow:hidden;text-overflow:ellipsis;">
        <a
          title="{{$post->title}}"
          style="font-size:16px;"
          href="/posts/{{$post->slug}}"
        >
          {{$post->title}}
        </a>
        <!-- {{ link_to_route('posts.show', $post->title, $post) }} -->
      </h4>

      <!-- <p class="card-text"><small v-pre class="text-muted">{{ link_to_route('users.show', $post->author->fullname, $post->author) }}</small></p> -->

      <p class="card-text">
        <!-- <small class="text-muted">{{ humanize_date($post->posted_at) }}</small><br> -->
        <small class="text-muted">
          <i class="fa fa-comments-o" aria-hidden="true"></i> {{ $post->comments_count }}
          <like
            :likes-count="{{ $post->likes_count }}"
            :liked="{{ json_encode($post->isLiked()) }}"
            :item-id="{{ $post->id }}"
            item-type="posts"
            :logged-in="{{ json_encode(Auth::check()) }}"
          />
        </small>
      </p>
    </div>
  </div>
</div>
