@extends('layout.main')
@section('title', 'Home')
@section('container')

<!-- Hero Header -->

<!-- Carousel -->
<div class="carousel-container">
    <div id="hero-carousel" class="carousel slide" data-ride="carousel" data-interval="3000">
        <!-- Slides -->
        <div class="carousel-inner">
            @foreach ($sliders as $key => $slider)
            <div class="item {{ $key === 0 ? 'active' : '' }}">
                <div class="hero-header" style="background-image: url('{{ asset('images/' . $slider->image) }}')"></div>
            </div>
            @endforeach
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#hero-carousel" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#hero-carousel" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="intro-text text-center">
        <div class="intro-lead-in">{{ $desc->header1 }}</div>
        <div class="intro-heading">{{ $desc->header2 }}</div>
        <a href="#intro" class="btn btn-primary btn-lg">See More</a>
    </div>

</div>
<!-- End Carousel -->


<!-- Intro -->
<section class="page-section" id="intro">
    <div class="container intro">
        <!-- First Row - Heading and Subheading -->
        <div class="row margin-bottom-50">
            <div class="col-md-12 text-center">
                <h1 class="title-section">
                    <span class="title-regular">{{ $desc->descspan }} <strong>{{ $desc->descstrong
                            }}</strong></span><br />
                    {{ $desc->desch1 }}
                </h1>
                <hr class="title-underline-center" />
                <p class="lead">
                    {!! $desc->desc !!}
                </p>
            </div>
        </div>

        <!-- Second Row - Three Columns -->
        <div class="row text-center">
            <!-- Column 1 -->
            <div class="col-md-4">
                <div>
                    <i class="fas fa-graduation-cap"></i>
                    <label><strong>{{ $desc->jmljurusan }}</strong> <br />{{ $desc->jurusan }}</label>
                    {!! $desc->descjurusan !!}
                </div>
            </div>

            <!-- Column 2 -->
            <div class="col-md-4">
                <div>
                    <i class="fas fa-users"></i>
                    <label><strong>{{ $desc->jmlsiswa }}</strong> <br />{{ $desc->siswa }}</label>
                    {!! $desc->descsiswa !!}
                </div>
            </div>

            <!-- Column 3 -->
            <div class="col-md-4">
                <div>
                    <i class="fas fa-users-cog"></i>
                    <label><strong>{{ $desc->jmlguru }}</strong> <br />{{ $desc->guru }}</label>
                    {!! $desc->descguru !!}
                </div>
            </div>
        </div>
    </div>
</section>


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
                <div class="col-md-3 isotopeSelector tm">
                    @foreach ($gallerytm as $item)
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
                                                <a title="Project Link" href="#"><i
                                                        class="fa fa-link fa-border fa-2x"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </article>
                    @endforeach
                </div>


                <div class="col-md-3 isotopeSelector tip">
                    @foreach ($gallerytip as $item)
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
                                                <a title="Project Link" href="#"><i
                                                        class="fa fa-link fa-border fa-2x"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </article>
                    @endforeach
                </div>


                <div class="col-md-3 isotopeSelector tp">
                    @foreach ($gallerytp as $item)
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
                                                <a title="Project Link" href="#"><i
                                                        class="fa fa-link fa-border fa-2x"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </article>
                    @endforeach
                </div>


                <div class="col-md-3 isotopeSelector tsm">
                    @foreach ($gallerytsm as $item)
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
                                                <a title="Project Link" href="#"><i
                                                        class="fa fa-link fa-border fa-2x"></i></a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </figure>
                    </article>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- END Columns Portfolio -->

    <div class="text-center">
        <button type="button" class="btn btn-primary">
            VIEW MORE <i class="fa fa-arrow-right"></i>
        </button>
    </div>
</section>

<!-- BLOG/LATEST NEWS-->
<section class="page-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2 class="title-section">
                    <span class="title-regular">LATEST</span><br />NEWS
                </h2>
                <hr class="title-underline" />
            </div>
        </div>
        <div class="row">
            @foreach ($posts as $post)
            <div class="col-md-4">
                <article>
                    <img class="img-thumbnail" src="https://source.unsplash.com/690x527?berita-sekolah" alt="" />
                    <h2>{{ $post->title }}</h2>
                    <hr class="title-underline" />
                    <p>
                        <small class="text-muted">
                            {{ $post->created_at->diffForHumans() }}
                        </small>
                    </p>
                    <p class="card-text">{{ $post->excerpt }}</p>

                    <a href="/news/{{ $post->slug }}" class="btn btn-xs btn-primary">Read more...</a>
                </article>
            </div>
            @endforeach
        </div>
    </div>
    <!-- Pagination links -->
    <div class="container text-center">
        <div class="d-flex mx-auto">
            {{ $posts->links() }}
        </div>
    </div>
    <div class="container text-center">
        <a href="/news" class="btn btn-primary">More News</a>
    </div>
</section>


<style>
    /* Hide the next and previous buttons */
    .carousel-control {
        display: none;
    }

    /* Position the carousel container */
    #hero-carousel {
        position: relative;
    }

    /* Ensure the carousel images cover the entire container */
    .hero-header {
        background-size: cover;
        background-position: center;
        height: 100vh;
        /* Adjust the height as needed */
    }

    /* Style the container for carousel and text */
    .carousel-container {
        position: relative;
    }

    /* Position the intro-text on top of the carousel images */
    .intro-text {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        text-align: center;
        width: 100%;
    }

    /* Optional: Add padding or margin to adjust the text position */
    .intro-heading {
        margin-bottom: 20px;
    }

    .intro-text .intro-lead-in {

        font-style: italic;
        font-size: 40px;
        line-height: 40px;
        margin-bottom: 25px;
        color: #fff;

    }

    .intro-text .intro-heading {
        font-weight: 700;
        font-size: 75px;
        line-height: 75px;
        margin-bottom: 50px;
        color: #fff;
    }

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