@extends('layout.main')
@section('title', 'PPDB')
@section('container')

<section class="page-section-no-padding">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 contact-container">
                            <h2 class="title-section">
                                <span class="title-regular">CONTACT</span><br />US
                            </h2>
                            <hr class="title-underline" />
                            <p>
                                Maecenas luctus nisi in sem fermentum blat. In nec elit
                                solliudin, elementum, dictum pur quam volutpat suscipit
                                antena.
                            </p>
                            <form action="{{ route('contact.store') }}" method="POST">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="NAME" />
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="email" placeholder="EMAIL" />
                                </div>
                                <div class="form-group">
                                    <textarea id="file-picker" class="form-control" rows="5" name="message"
                                        placeholder="MESSAGE"></textarea>
                                </div>
                                <button type="submit" class="btn btn-default">SEND <i class="fas fa-envelope"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection