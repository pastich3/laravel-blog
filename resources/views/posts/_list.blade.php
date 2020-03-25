<div class="card-columns d-flex flex-wrap">
    @each('posts/_show', $posts, 'post', 'posts/_empty')
</div>

<div class="d-flex justify-content-center">
    {{ $posts->links() }}
</div>
