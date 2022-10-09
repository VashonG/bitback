<!DOCTYPE html>
<html  lang="{{ app()->getLocale() }}">
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <title>404</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <section class="section-404 text-center">
            <div class="container">
                <div class="404-img mb-4">
                    <img src="{{ asset('images/404-img.png') }}" class="img-fluid" width="450">
                </div>
                <h3 class="mb-4 text-purple">{{__('public.error.title')}}</h3>
                <p class="mb-4 fw-medium">{{__('public.error.subtitle')}}</p>
                <p>
                    <a href="{{ route('home') }}" class="btn md-btn mr-3 home">{{__('public.error.home')}}</a>
                    <a href="{{ route('contact') }}" class="btn md-btn contact">{{__('public.error.contact_us')}}</a>
                </p>
            </div>
        </section>
    </body>
</html>


