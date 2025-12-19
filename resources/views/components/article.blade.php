<article>
    <h3>{{ $title }}</h3>
    <p>{{ str($description)->limit(30, '...') }}</p>
</article>
