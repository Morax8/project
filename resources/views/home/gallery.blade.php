@extends('layout.main')
@section('title', 'Gallery')
@section('container')
<div class="container">
    <h1>Gallery</h1>
</div>
<section class="page-section-no-padding">
    <!-- /Gallery -->
    <div class="filter-section">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-xs-12">
                    <h1>Gallery</h1>
                    <div class="filter-container isotopeFilters">
                        <ul class="list-inline filter">
                            <li class="active">
                                <a href="#" data-filter="*">All </a><span>/</span>
                            </li>
                            <li>
                                <a href="#" data-filter=".tip">TIP</a><span>/</span>
                            </li>
                            <li>
                                <a href="#" data-filter=".tm">TM</a><span>/</span>
                            </li>
                            <li>
                                <a href="#" data-filter=".tsm">TSM</a><span>/</span>
                            </li>
                            <li><a href="#" data-filter=".tp">TP</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="portfolio-section port-col">
        <div class="row">
            <div class="isotopeContainer">
                @foreach ($gallery as $item)
                <div class="col-md-3 isotopeSelector {{ $item->type }}">
                    <article class="">
                        <figure>
                            <img src="{{ asset('images/' . $item->image) }}" alt="{{ $item->nama }}" />
                            <div class="overlay-background">
                                <div class="inner"></div>
                            </div>
                            <div class="overlay">
                                <div class="inner-overlay">
                                    <div class="row margin-0 project-content">
                                        <div class="col-md-12 info-head">
                                            <h3>{{ $item->nama }}</h3>
                                            <h4>{{ $item->type }}</h4>
                                        </div>
                                        <div class="col-md-12 info">
                                            <p>
                                                {!! $item->text !!}
                                                <a title="Project Image" class="fancybox-pop fancybox.image"
                                                    href="{{ asset('images/' . $item->image) }}"><i
                                                        class="fa fa-search fa-border fa-2x"></i></a>

                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </article>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<div class="d-flex justify-content-center">
    {{ $gallery->links() }}
</div>







<style>
    /* Default styles for larger screens */
    .isotopeSelector {
        display: flex;
        flex-wrap: wrap;
        gap: 10px;
    }

    .isotopeSelector .article {
        flex: 0 0 calc(33.33% - 20px);
    }

    /* Media query for smaller screens, e.g., portrait mode */
    @media screen and (max-width: 768px) {
        .isotopeSelector .article {
            flex: 0 0 calc(50% - 10px);
            /* Adjust column width for smaller screens */
        }
    }
</style>

@endsection