<div class="blog_right_sidebar position-sticky" style="top:110px">
    <aside class="single_sidebar_widget tag_cloud_widget">
        <h4 class="widget_title">Tags</h4>
        <ul class="list">
            @foreach ($tags as $tag)
                <li>
                    <a href="/search?q={{ $tag }}">{{ $tag }}</a>
                </li>
            @endforeach
        </ul>
    </aside>
</div>
