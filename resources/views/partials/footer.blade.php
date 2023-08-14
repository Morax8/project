<!-- FOOTER  -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div>
                    <a href="index.html">
                        <img class="footer-logo" src="{{ asset('images/'.$footer->logo) }}" alt="logo" />
                    </a>
                </div>
                <div>
                    <address class="margin-bottom-30">
                        {!! $footer->address !!}
                    </address>
                </div>
                <div class="margin-bottom-30">
                    <p>
                        <i class="fa fa-phone"></i> {{ $footer->phone }}
                        <br />
                        <i class="fa fa-envelope"></i> {{ $footer->email }}
                    </p>
                </div>
                <div>
                    <a href="{{ $footer->web }}">{{ $footer->web }}</a>
                    <br />
                    <a href="mailto:{{ $footer->email }}">{{ $footer->email }}</a>
                </div>
            </div>
            <div class="col-md-3 footer-menu">
                {!! $footer->about_content !!}
                <a href="#">
                    <button class="btn btn-primary">Read More</button>
                </a>
            </div>
            <div class="col-md-5 footer-menu">
                <div id="map" class="img-responsive map-style" style="height: 400px; widht: 100%;"></div>
            </div>
        </div>
    </div>
</footer>