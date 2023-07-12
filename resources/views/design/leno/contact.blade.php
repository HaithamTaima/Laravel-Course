@extends('design.leno.layout.parent')
@section('title','Contact')
@section('content')

    <!-- Header -->
    <header class="ex-header bg-dark-blue mb-4">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h1>Contact info</h1>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </header> <!-- end of ex-header -->
    <!-- end of header -->


    <!-- Form -->
    <div class="ex-form-1 pt-5 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <p class="mb-5">Duis at consectetur lorem donec. Dignissim enim sit amet venenatis urna cursus eget nunc scelerisque vromo sepa direc <a href="mailto:contact@site.com">contact@site.com</a> noto vonter rica <a href="tel:123-456-7890">+123-456-7890</a></p>

                    <!-- Contact Form -->
                    <form>
                        <div class="mb-4 form-floating">
                            <input type="text" class="form-control" id="floatingInput4" placeholder="Name">
                            <label for="floatingInput4">Name</label>
                        </div>
                        <div class="mb-4 form-floating">
                            <input type="email" class="form-control" id="floatingInput5" placeholder="name@example.com">
                            <label for="floatingInput5">Email</label>
                        </div>
                        <div class="mb-4 form-floating">
                            <textarea class="form-control" id="floatingTextarea1" placeholder="Your message here" rows="6"></textarea>
                            <label for="floatingTextarea1">Message</label>
                        </div>
                        <div class="mb-4 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck2">
                            <label class="form-check-label" for="exampleCheck2">Quis varius quam quisque id diam enim facilisis <a href="privacy.blade.php">Privacy Policy</a> sine <a href="terms.blade.php">Terms & Conditions</a></label>
                        </div>
                        <button type="submit" class="form-control-submit-button">Submit</button>
                    </form>
                    <!-- end of contact form -->

                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-form-1 -->
    <!-- end of form -->


    <!-- Basic -->
    <div class="ex-basic-1 pt-4 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <h2 class="mb-4">Office location</h2>
                    <p class="mb-5">Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis. Eget magna fermentum iaculis eu non diam. Faucibus nisl tincidunt eget nullam non. Erat velit scelerisque in dictum non consectetur a. Imperdiet dui accumsan sit amet nulla facilisi. Sem et tortor consequat id porta nibh. Velit aliquet sagittis id consecteur des mamo lica ter.</p>

                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1241.5303553091994!2d-0.14076024298621118!3d51.51210217963597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487604d502268421%3A0x6a7d62889992f993!2sRegent+St%2C+Soho%2C+London+W1B+5TH%2C+UK!5e0!3m2!1sen!2sro!4v1476174541049" allowfullscreen></iframe>
                    </div>

                    <p class="mb-5">Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis. Eget magna fermentum iaculis eu non diam. Faucibus nisl tincidunt eget nullam non. Erat velit scelerisque in dictum non consectetur a. Imperdiet dui accumsan sit amet nulla facilisi. Sem et tortor consequat id porta nibh. Velit aliquet sagittis id consecteur des mamo lica ter.</p>
                    <a class="btn-solid-reg mb-5" href="index.blade.php">Download</a>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
    </div> <!-- end of ex-basic-1 -->
    <!-- end of basic -->

@endsection
