<x-layout>

 @if (Route::has('login'))
                <nav class="flex items-center justify-end gap-4">
                    @auth
                        <a
                            href="{{ url('/dashboard') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#000000] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal"
                        >
                            Dashboard
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="inline-block px-5 py-1.5 dark:text-[#000000] text-[#1b1b18] border border-transparent hover:border-[#19140035] dark:hover:border-[#3E3E3A] rounded-sm text-sm leading-normal"
                        >
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="inline-block px-5 py-1.5 dark:text-[#000000] border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] dark:border-[#3E3E3A] dark:hover:border-[#62605b] rounded-sm text-sm leading-normal">
                                Register
                            </a>
                        @endif
                    @endauth
                    @endif
                </nav>
  <h1>hello  world</h1>

<section class="top_postshome py-5">
    <div class="container-fluid px-0">
        <div class="row g-3">

            <!-- Exemple d'article -->
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="#" title="Soldes d'hiver Steam : Les 14 meilleures pépites à moins de 10€" class="text-decoration-none">
                    <div class="homepostTopBlock position-relative overflow-hidden rounded">
                        <img src="{{ asset('images/firstLayers/koko.png') }}" alt="Soldes d'hiver Steam" class="img-fluid w-100">
                        <div class="homepostOverlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end p-3">
                            <div class="homepostTitle text-white">
                                Soldes d'hiver Steam : Les 14 meilleures pépites à moins de 10€
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="#" title="Soldes d'hiver Steam : Les 14 meilleures pépites à moins de 10€" class="text-decoration-none">
                    <div class="homepostTopBlock position-relative overflow-hidden rounded">
                        <img src="{{ asset('images/firstLayers/koko.png') }}" alt="Soldes d'hiver Steam" class="img-fluid w-100">
                        <div class="homepostOverlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end p-3">
                            <div class="homepostTitle text-white">
                                Soldes d'hiver Steam : Les 14 meilleures pépites à moins de 10€
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="#" title="Soldes d'hiver Steam : Les 14 meilleures pépites à moins de 10€" class="text-decoration-none">
                    <div class="homepostTopBlock position-relative overflow-hidden rounded">
                        <img src="{{ asset('images/firstLayers/koko.png') }}" alt="Soldes d'hiver Steam" class="img-fluid w-100">
                        <div class="homepostOverlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end p-3">
                            <div class="homepostTitle text-white">
                                Soldes d'hiver Steam : Les 14 meilleures pépites à moins de 10€
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="#" title="Soldes d'hiver Steam : Les 14 meilleures pépites à moins de 10€" class="text-decoration-none">
                    <div class="homepostTopBlock position-relative overflow-hidden rounded">
                        <img src="{{ asset('images/firstLayers/koko.png') }}" alt="Soldes d'hiver Steam" class="img-fluid w-100">
                        <div class="homepostOverlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end p-3">
                            <div class="homepostTitle text-white">
                                Soldes d'hiver Steam : Les 14 meilleures pépites à moins de 10€
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="#" title="Soldes d'hiver Steam : Les 14 meilleures pépites à moins de 10€" class="text-decoration-none">
                    <div class="homepostTopBlock position-relative overflow-hidden rounded">
                        <img src="{{ asset('images/firstLayers/koko.png') }}" alt="Soldes d'hiver Steam" class="img-fluid w-100">
                        <div class="homepostOverlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end p-3">
                            <div class="homepostTitle text-white">
                                Soldes d'hiver Steam : Les 14 meilleures pépites à moins de 10€
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="#" title="Soldes d'hiver Steam : Les 14 meilleures pépites à moins de 10€" class="text-decoration-none">
                    <div class="homepostTopBlock position-relative overflow-hidden rounded">
                        <img src="{{ asset('images/firstLayers/koko.png') }}" alt="Soldes d'hiver Steam" class="img-fluid w-100">
                        <div class="homepostOverlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end p-3">
                            <div class="homepostTitle text-white">
                                Soldes d'hiver Steam : Les 14 meilleures pépites à moins de 10€
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="#" title="Soldes d'hiver Steam : Les 14 meilleures pépites à moins de 10€" class="text-decoration-none">
                    <div class="homepostTopBlock position-relative overflow-hidden rounded">
                        <img src="{{ asset('images/firstLayers/koko.png') }}" alt="Soldes d'hiver Steam" class="img-fluid w-100">
                        <div class="homepostOverlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end p-3">
                            <div class="homepostTitle text-white">
                                Soldes d'hiver Steam : Les 14 meilleures pépites à moins de 10€
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="#" title="Soldes d'hiver Steam : Les 14 meilleures pépites à moins de 10€" class="text-decoration-none">
                    <div class="homepostTopBlock position-relative overflow-hidden rounded">
                        <img src="{{ asset('images/firstLayers/koko.png') }}" alt="Soldes d'hiver Steam" class="img-fluid w-100">
                        <div class="homepostOverlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end p-3">
                            <div class="homepostTitle text-white">
                                Soldes d'hiver Steam : Les 14 meilleures pépites à moins de 10€
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="#" title="Soldes d'hiver Steam : Les 14 meilleures pépites à moins de 10€" class="text-decoration-none">
                    <div class="homepostTopBlock position-relative overflow-hidden rounded">
                        <img src="{{ asset('images/firstLayers/koko.png') }}" alt="Soldes d'hiver Steam" class="img-fluid w-100">
                        <div class="homepostOverlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end p-3">
                            <div class="homepostTitle text-white">
                                Soldes d'hiver Steam : Les 14 meilleures pépites à moins de 10€
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="#" title="Soldes d'hiver Steam : Les 14 meilleures pépites à moins de 10€" class="text-decoration-none">
                    <div class="homepostTopBlock position-relative overflow-hidden rounded">
                        <img src="{{ asset('images/firstLayers/koko.png') }}" alt="Soldes d'hiver Steam" class="img-fluid w-100">
                        <div class="homepostOverlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end p-3">
                            <div class="homepostTitle text-white">
                                Soldes d'hiver Steam : Les 14 meilleures pépites à moins de 10€
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <a href="#" title="Soldes d'hiver Steam : Les 14 meilleures pépites à moins de 10€" class="text-decoration-none">
                    <div class="homepostTopBlock position-relative overflow-hidden rounded">
                        <img src="{{ asset('images/firstLayers/koko.png') }}" alt="Soldes d'hiver Steam" class="img-fluid w-100">
                        <div class="homepostOverlay position-absolute top-0 start-0 w-100 h-100 d-flex align-items-end p-3">
                            <div class="homepostTitle text-white">
                                Soldes d'hiver Steam : Les 14 meilleures pépites à moins de 10€
                            </div>
                        </div>
                    </div>
                </a>
            </div>
          </section>


<style>
.homepostTopBlock {
    cursor: pointer;
    transition: transform 0.3s, box-shadow 0.3s;
}

.homepostTopBlock img {
    display: block;
    width: 100%;
    height: auto;
    transition: transform 0.5s;
}

.homepostTopBlock:hover img {
    transform: scale(1.1);
}

.homepostOverlay {
    background: linear-gradient(to top, rgba(0,0,0,0.7), rgba(0,0,0,0));
    opacity: 0;
    transition: opacity 0.3s;
}

.homepostTopBlock:hover .homepostOverlay {
    opacity: 1;
}

.homepostTitle {
    font-weight: 600;
    font-size: 0.9rem;
    line-height: 1.2;
}
</style>


     


</x-layout>