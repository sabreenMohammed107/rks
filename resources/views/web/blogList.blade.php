

  @foreach ($blogs as $blog)
<div class="about-author d-flex mb-4">
    <div class="bio">
        <img src="{{ asset('uploads/blogs') }}/{{ $blog->image ?? '' }}" alt="Image placeholder" class="img-blog">
    </div>
    <div class="desc dir text-dir pr-3 pl-3 block-blog">
        <h3 class="clr-blue pb-2 pt-3"> <a href="{{ LaravelLocalization::localizeUrl('/single-blog/'.$blog->id.'/'.$blog->slug) }}" >
            @if (LaravelLocalization::getCurrentLocale() === 'en')
            {!! $blog->title_en ?? '' !!}
        @else
            {!! $blog->title_ar ?? '' !!}
        @endif</a> </h3>
        <p>@if (LaravelLocalization::getCurrentLocale() === 'en')
            {{ strip_tags(str_limit($blog->text_en ?? '', $limit = 100, $end = '...')) }}

        @else
        {{ strip_tags(str_limit($blog->text_ar ?? '', $limit = 100, $end = '...')) }}

        @endif</p>
    </div>
</div>

@endforeach

<nav class="blog-pagination justify-content-center d-flex">
    <ul class="pagination">
        @for ($i = 1; $i <= $blogs->lastPage(); $i++)
        <!-- a Tag for another page -->
        <li class="page-item ml-2  {{ $blogs->currentPage() == $i ? ' active' : '' }}"> <a
                href="{{ $blogs->url($i) }}" class="page-link">{{ $i }}</a></li>
    @endfor

    </ul>
</nav>
