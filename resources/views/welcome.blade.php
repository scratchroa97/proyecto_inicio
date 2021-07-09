<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Celulares</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <style>
    #opcion:hover {
        transform: scale(1.1);
        transition: .3s;
    }
    </style>
</head>

<body>
    <div class="container">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <a class="navbar-brand" href="#">
                <img src="https://getbootstrap.com/docs/4.5/assets/brand/bootstrap-solid.svg" width="30" height="30"
                    class="d-inline-block align-top" alt="" loading="lazy">
            </a>
            <div class="collapse navbar-collapse justify-content-end" id="navbar">
                <ul class="navbar-nav list-inline mt-2 mr-3 mt-lg-0">
                    <li class="list-inline-item active">
                        <a class="nav-link" href="#">Home</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="nav-link" href="#">Quienes somos</a>
                    </li>
                    <li class="list-inline-item">
                        <a class="nav-link" href="#">Contacto</a>
                    </li>
                    @guest
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Registro') }}</a>
                    </li>
                    @endif
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Iniciar sesión') }}</a>
                    </li>
                    @endif


                    @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                </ul>
            </div>
        </nav>

        <!-- End Navbar -->

        <!-- Carrusel -->
        <div class="row">
            <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active" style="height: 500px;">
                        <img src="https://i.pinimg.com/originals/80/a5/1a/80a51a0b7293317a273207178aa12358.jpg"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Accesorios</h5>
                            <p>Conoce todos nuestra linea de accesorios para tu móvil.</p>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 500px;">
                        <img src="https://i.pinimg.com/originals/80/a5/1a/80a51a0b7293317a273207178aa12358.jpg"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Celulares</h5>
                            <p>Conoce los diferentes móviles al mejor precio del mercado.</p>
                        </div>
                    </div>
                    <div class="carousel-item" style="height: 500px;">
                        <img src="https://i.pinimg.com/originals/80/a5/1a/80a51a0b7293317a273207178aa12358.jpg"
                            class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Servicios</h5>
                            <p>Conoce nuestros diferentes servicios para tu celular.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <!-- End Carrusel -->

        <div class="row">
            <div class="jumbotron col-12">
                <h1 class="text-center">Productos destacados</h1>
            </div>
        </div>

        <!-- Listado mejores productos 1 -->
        <div class="row">
            <div class="card col-sm-12 col-md-4 col-lg-3">
                <img src="data:image/jpeg;base64,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"
                    class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Iphone 12 </h5>
                    <p class="card-text">$1.500.000</p>
                    <a href="#" class="btn btn-primary">¡Lo quiero!</a>
                </div>
            </div>

            <div class="card col-sm-12 col-md-4 col-lg-3">
                <img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/2wCEAAkGBw8QEBAPEBAPEBAQEA8QEA8QEA8QDQ8PFREWFhURFRUYHSggGBolGxYVITEhJSkrLi4vFx8zODMsNygtLisBCgoKDg0OGRAQGi0fHiAtKystKysuNy0rKy0tLTYtLS4tKy0tKzAwLS0rLi0rLTAtLS03LS0tKystLS0tLS0rLf/AABEIAOEA4QMBIgACEQEDEQH/xAAcAAEAAQUBAQAAAAAAAAAAAAAABwEDBAUGAgj/xABOEAACAgADAgYNBgsFCQAAAAAAAQIDBAURITEGBxJBUWETFCIyM3FzgZGhsbLSI0JSdJLBFyU1U1VicoKTwtEWNERksxVDRVSDlKLD8f/EABoBAQACAwEAAAAAAAAAAAAAAAABAwIEBQb/xAAtEQEAAgIABAQEBgMAAAAAAAAAAQIDEQQSITEUMlGxQXGB8BMiQlJhoSMzkf/aAAwDAQACEQMRAD8AnEAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAGvzfNI0JLTl2S15ENdNi3yk+ZGguzfEPbK5QT3KEYxS88tWy2mK1usDrwcb/tSx/4mz017f/E9LMbP+Zs9Nfwmfhreo7AHJwxVz2rEWvxOr4Sxj80sprlZZibIwgm5NupJJfujw9vUdmCC1xjZvi5zWV0Turi+T2e9xjXr1d6vXr1F/wD29wu+jg1+9D4yv8Kfh1E2g+Z8VxxZ5VZOqbw6nXOUJrsbekotprVS6UW/w1Zz9LD/AMKXxGGh9OA+ZPw0Z104f+DP4iq46M66cP8Awp/END6aB8x/hqzn6WH/AIUviOiybhtwoxdMb6Y4OVc+UouWkW9Ho3o5670ya15ukCegQj/bThTh+7twmHvrS1lGrSU9PNNv0I7/AIAcPcNm1cuQnVfX4SiXfLrXSibUmO468AGAAAAAAAAAAAAAAAAA4vM7uVffN7eTLkRXVBbF55a+kj7htw2swV3a2GhCd/JUrLZpuMU3sSS0e3bs10S036ne4zwl3ln/AKqIz4x+C2KeL7bw8HapxjGcItKyLinyZx137Glpv2G9bcUjQyeBnGBiL7u18SoxscZShKHKUJqK1lHkybako6vfo9GSX2z3PKb0XS3sIe4FcFsU8VHE3wdfIjNQhJp2SlODg5SS71KLe/a3oS5HD8qPI5PK2bvETSZ5dz/ZC5Y1o5retr0+dHn1I844MTN00YWEtO2L4Vt9X/3QkD5s1u0i1p0EbcaktLMtfP21B+buCcnlkdRg41YaquipKNdUVGKXVzvpbe1vrPNmP6zVVzttk1XFyfPp3q8bexGfVk/Pdb+7X98n/Q29RHRm4jhFwNoxN874Xypdjcpx7GrIub3yXdLTXz7zVLi9i92Lb8WH1/8AYSrCvDV7q4t9Mu7frPbzJLdovFsKZ4ekzvRpFi4up82Jt/7WXxj8HrjteLnHXY9cM1s89hJ7zXrKxzbrHhaen9nKi2vi8r1WuMbWu3ShJ6ePsmwkHJ414amvD1aqFcdFrtk9urk+ttt+c2TxVU+/hCXW4rX0lqeXUT7yUq31PlQ9D2+sypjrSekGlyOL6zklNYLP8FiKe5jjNYXRWxSmtjenX3Hn16TeYnA31bdOyQ+lDV6LrW9ew5XNbuXmeUdV796BjxGpp/xEvo8FEVOUxAAAAAAAAAAAAAAAAcNi38pf5d/6sTlOH3DuvA2KiFfZrnFScdVGEI7tZPR9ezTmOqxabsv02vstjS6WpapelIiTjKybELGdu11ztqshBNwi5ShKO5tLbo1pt6dUb15mKRMDo+CPDpYqbqnX2KxJyUdVKMore4vRbVv0a3a9BIuDxHJ7pJPZu10IO4A5HiJ4qGIlVZVXVGcYucXB2TlW69ie9JSbb3bOsm3D16RSFPz11ZMSpNNqyT01knsW5bNxGnGfo7srT2rtuCa6VrDUk7EbIS6ZLkx62yLeNbZbl3VivvgTePy6gdRdj4wXJglGK3RitEa2/MX0mqvxXWeYYa+zvKrJLp5MuT6XsOlFIhZEejLsxz6THnjX0h5LjHupf26l/MY1+UYyO10Wv9hdk9zUy3X1Ty29F14zrCxfWaiyxxfJknFrfGSakvMzz2cnSG/rxr6TLpx76TmI4gv14kjlS7TC5m1znNcKZQlmmTzjFKUr5cprZyny69G+s8U4swMwu5WZZT1X/wA8DV4qmqb+XuxtHR9KIqURU4ysAAAAAAAAAAAAAAABw1kk7bmtzts94t2Ua7npt1a0Uot9Oj3PxCPf2+Vs95l1M6le0C1VTKO6UF/01/UyFKz6a+wiiZ6TAJPe25PpemxdSWxEZ8aqTty5PXR4vR6b9NayTNSMONeWlmX9WKb/ANMwyeVMd26plVV3kIp/SfdT9L3eYuvMW+c5ueM6y3251m7au3XjUdnVRx/WZFeO6zkYYzrMurGdZXNFkadTZZXauTbCFkeicVJLxa7jQ5nwRqmnLDS7FL83NuVT6lLfH1nujF9ZsKMUYxa1exbDW/eEd4yi2mbrthKE1zPnXSnua60eI3El4/B04qvsdy1+hNadkrl0xf3bmRxnGW24S11WbeeFi7yyH0l965vW9rFki/zaGXBOP5Ltd5ZjZrmWV9WIXvQMaFgwstcxy7y696JXxcf4p+nuov2fVUHqk+lJnot0d5H9mPsLhwVIAAAAAAAAAAAAAAADgE+7t8rZ7zLqZbtjpdcui2z3j1qdSvaBcTKpltM9Jkj3qRdxuPusC/8AMS/kJP1Iu43n/cvLz9kCvJ5Uw0s7zyrzClYeHYdKYbn4jZwxBs8uw913gq5zX0ktIfaew85JlUUlbiFrrthS92nTP4fT0HUQzHYktElsSWxJdCRRkvrs2MfNLGoyPFc6gupzWvqMjtDEQ2uttdMWpezaZdWN6zPw+LNK2a0Nqu4avD4guZrl8MZS6ZaKXfVT+hZzeZ7mbbEYSu5a97Pmmt/n6TWRUq5OEtjXofWuoyx5dzuO7OYi8alFltcoSlCacZQk4yi96kno0Uy5/jDL/Lx96J1HD/AJTrxUVst+Ts8pFdzLzxWn7hyuVbcxy/6xD3om5xNubBv5e7jZqckzV9X0d5H9mPsLh5rWiS6EkejhNYAAAAAAAAAAAAAAABwOJ8Pf5az2jUpivD3+Ws9o1OnXtA9aldTwVMh71Iv439+D8tP2QJpyKqKi7NE5NtJ9CS5iJuPvwmC8pL+U1r5NzyjgJSM3I6FOzlS2xrSk1zOXzV6m/Ma+TNzlD5NLfPKbfmSSX3+k7Mr6dbNpbi23vLtOINTyy/VYa96t6l2/oxBssPec7RabHD2mjlo2onbpsLiDIzGtTr5a76G3xx5195pcLcbvBWarR7mtH4iisTE7T/Ln+ENHZsFfHnhHssenWt8p+rVecjbKH+Mcu+sQ96JKtMdYzg+eM4PzpoijJfyhl31iv3om/ef8Ex/Me7R4+NTEvrVFSiKnIc0AAAAAAAAAAAAAAABH+K8Pf5az2lNSuL8PiPLT9p5OnXtA9alTyNTIbXKMTprB871Xj50RZx6y1ngvKT/lO/1Iy43dvafl5+yBr5Mep5hx0zZ5fZ8lp0Sl9z+8180XMFZo3Hml7VuOxE9WcTqWcpl+uRhSehdqmV3hs47tpTMz6LDUVTM6mZq3rtvUs3uFsN9l8zmMG9dDcYi/sdP61ncxXPp85+j2oqjGvjsYW3ZOb3aTl5tGyLcl/KGXfWK/eiSDmWI7Fg757m63XH9qfcr2+oj/ACb8o5f9Yh78S/NGsM/OPdocfbrEPrRFSiKnGc0AAAAAAAAAAAAAAABH2M8PiPLT9p5PWN8Pf5aftPB069oFSup5KmQ9EacbX+D8vP2QJJ1I242P8F9Yl7IFeTykOVnEtOBnTqLTrOlK61FK7Ndj39PSXYxaLXYy9U5LxdD2iZ33K1mGTTqbLCwbMCm9r5kfWZkMdZ81Rj1pav1lU023MdtN7TKFMeXY9OiK7+T6l95ZjfO+zlS2c0YrdGPQjV1RlN6ttt723qzcRsrw1Mr7N0Vsjzzm90F1smuPTarb4y1PDjG6KrCxe75Wz0NQj7z9BzWS/lHL/rEPfiWsTip22Ttm9Zzk5S6OpLqS0S6kXck/KOXfWIe/Ew4qNYp+nu5WbJ+JabPrRFSiKnDUAAAAAAAAAAAAAAAAI9xvh8R5aZ41PeO8PiPLTLWp069oHoannUrqZCupHXGktXgF/mWvcJEI94zJJTy9y2JYvVvoXyepXk8qa94a23CliWHOr7ShYuVXKM49MWnp4+gxLMtfQdaau5fh4nrHVzvYCqpN28vfQI5e+gx5VPh5amFRlUYds2tOVS3taJb29yMPHZ5hMNqoNYi36Nb+TT/Wnu9GpOtd0zSuON2nTNrqrpg7rpKEI72+d8yS531HGZ9nU8VYno4VQ1VVfR+tLpk/Vu8ePmmaXYmXKtlsXeQjsrgv1V972mJFENDPxHP+WvSPd7iZWR/lLLvrNfvxMeKMnJPyll31mv34lHF/6p+nu131oipRFTgoAAAAAAAAAAAAAAAAR5jvD4jy0y0Xcd4fEeWmWjp17QAAMgI7401/cfrMvZAkQj3jOa1wLbSXbT1b2JLSGrZXl8o0b5UHyoylCX0otxl6UZdfCPGQ/wB6proshCXr05XrMrF4LnW1PamtqaNVfh2joxJTLavlnTNfC/Ffm8M/HXZ90zHu4W41rROmvrhVHVfb5RrrKyzKBn1WzxOWf1SY3MMRd4W6yxfRlJ8j7K2L0GJyS+4DkE8qqZmesrSie1E9qBchUZxSUPEYl/J1+Msu+sQ9+JcrobLmCr5OZZauftiDa513cSrjaawTPy9x9VIqURU82kAAAAAAAAAAAAAAABHuYL5e/n+Wn7SwZObVuGJxEXz2ctfsySa+/wBBjHTr5YAAGQEc8bK+Twv1iez9yJIxH3GvQ3h6rEtVVfFy6oyi1r6VFecry+Ucdgc0uo2QlrH83Luq/RzeY29We0WbLIyql0ru6/VtXo85z2/atz2o8uJtxEx2Vup7FXZtrnCf7Mk36CzPBPoOacC9Xibo97ZYv35aF9cuu8Jhungn0FVgX0GqWY4n87P1f0KvG4h77bPNJr2F8Zo/aybdYFra9Eul7EW530Q3y5T6Id1693rNQ4Sltk3J9Mm2/WXYUGcZLT2jSdMi3MZy2QSrXTvm/PzHnIY/jLL9XvxEW29r75FYUmZwWwjvzjA0wWrhNTlp81b9voXpNXjomMO7T8Y92WtQ+p0VAPOMQAAAAAAAAAAAAAAAGl4QZJ2xpZW1G6C0Tfezjv5MvuZyt2AxEHpOi1dajy4+Zx1JEBdTNasaEb9hs/NW/wAKz+g7BZ+at/hWf0JIBn4mfQRv2C381b/Ds/oYOa5TK+uVc6bJRnFxlF12bU/MSsB4mfQfL+N4u8yqb7VhK6vXZCyLrtj1ay0i/Gn5kYv9is7/AEfL7dXxn1UCI4i8dImYHyr/AGJzv9Hy+3X8ZX+xOefo+X26/jPqkE+Kyes/f0HyuuBWefo6X26/jKrgbnn6Ol9qv4z6nBPi8v7p+/oPlpcEc8/R0vtQ+M9Lgrni/wCGy+1D4j6jBMcdmj9U/f0TuXzJhuBWf3PkxwSp1+fOUNF637CWuLLi4jlalfdNXYuxd1P5ta51H+pIIK8vEZMnmnZsABQgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB/9k="
                    class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Iphone 13</h5>
                    <p class="card-text">$1.500.000</p>
                    <a href="#" class="btn btn-primary">¡Lo quiero!</a>
                </div>
            </div>

            <div class="card col-sm-12 col-md-4 col-lg-3">
                <img src="data:image/jpeg;base64,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"
                    class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Iphone 14</h5>
                    <p class="card-text">$1.500.000</p>
                    <a href="#" class="btn btn-primary">¡Lo quiero!</a>
                </div>
            </div>

            <div class="card col-sm-12 col-md-4 col-lg-3">
                <img src="data:image/jpeg;base64,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"
                    class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Iphone 15</h5>
                    <p class="card-text">$1.500.000</p>
                    <a href="#" class="btn btn-primary">¡Lo quiero!</a>
                </div>
            </div>
        </div>
        <!-- End Listado mejores productos 1-->

        <!-- Listado mejores productos 2 -->
        <div class="row mt-3">
            <div class="card col-lg-3">
                <img src="data:image/jpeg;base64,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"
                    class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Iphone 16</h5>
                    <p class="card-text">$1.500.000</p>
                    <a href="#" class="btn btn-primary">¡Lo quiero!</a>
                </div>
            </div>

            <div class="card col-sm-12 col-md-4 col-lg-3">
                <img src="data:image/jpeg;base64,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"
                    class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Iphone 17</h5>
                    <p class="card-text">$1.500.000</p>
                    <a href="#" class="btn btn-primary">¡Lo quiero!</a>
                </div>
            </div>

            <div class="card col-sm-12 col-md-4 col-lg-3">
                <img src="data:image/jpeg;base64,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"
                    class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Iphone 18</h5>
                    <p class="card-text">$1.500.000</p>
                    <a href="#" class="btn btn-primary">¡Lo quiero!</a>
                </div>
            </div>

            <div class="card col-sm-12 col-md-4 col-lg-3">
                <img src="data:image/jpeg;base64,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"
                    class="card-img-top" alt="...">
                <div class="card-body text-center">
                    <h5 class="card-title">Iphone 19</h5>
                    <p class="card-text">$1.500.000</p>
                    <a href="#" class="btn btn-primary">¡Lo quiero!</a>
                </div>
            </div>
        </div>
        <!-- End Listado mejores productos 2-->

    </div>
    <!-- Footer -->
    <footer class="page-footer font-small bg-dark mt-3">
        <div style="background-color: #6351ce;">
            <div class="container">
                <!-- Grid row-->
                <div class="row py-4 d-flex align-items-center text-white">
                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0">Siguenos en nustras redes sociales!</h6>
                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!-- Facebook -->
                        <a href="" class="fb-ic">
                            <i class="fab fa-facebook-f text-white mr-4"> </i>
                        </a>
                        <!-- Twitter -->
                        <a href="" class="tw-ic">
                            <i class="fab fa-twitter text-white mr-4"> </i>
                        </a>
                        <!-- Google +-->
                        <a href="" class="gplus-ic">
                            <i class="fab fa-google-plus-g text-white mr-4"> </i>
                        </a>
                        <!--Linkedin -->
                        <a href="" class="li-ic">
                            <i class="fab fa-linkedin-in text-white mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a href="" class="ins-ic">
                            <i class="fab fa-instagram text-white"> </i>
                        </a>
                    </div>
                    <!-- Grid column -->
                </div>
                <!-- Grid row-->
            </div>
        </div>

        <!-- Footer Links -->
        <div class="container text-center text-md-left mt-5 text-white">
            <!-- Grid row -->
            <div class="row mt-3">
                <!-- Grid column -->
                <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                    <!-- Content -->
                    <h6 class="text-uppercase font-weight-bold">Cell Shop</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit
                        amet,
                        consectetur
                        adipisicing elit.</p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Products</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="form_battery.php">Baterias</a>
                    </p>
                    <p>
                        <a href="formularios/form_screen_size.php">Tamaño de Pantalla</a>
                    </p>
                    <p>
                        <a href="#!">Servicio Remoto</a>
                    </p>
                    <p>
                        <a href="#!">Soporte técnico</a>
                    </p>

                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Enlaces útiles</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Mi cuenta</a>
                    </p>
                    <p>
                        <a href="#!">Registrarme</a>
                    </p>
                    <p>
                        <a href="#!">Tarifas de envío</a>
                    </p>
                    <p>
                        <a href="#!">Ayuda</a>
                    </p>
                </div>
                <!-- Grid column -->

                <!-- Grid column -->
                <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                    <!-- Links -->
                    <h6 class="text-uppercase font-weight-bold">Contacto</h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fas fa-home mr-3"></i> Bogotá, Calle 123&nbsp;#&nbsp;45-123 CO
                    </p>
                    <p>
                        <i class="fas fa-envelope mr-3"></i> celphone@example.com
                    </p>
                    <p>
                        <i class="fas fa-phone mr-3"></i> + 01 234 567 88
                    </p>
                    <p>
                        <i class="fas fa-mobile mr-3"></i> + 57 313 365 3643
                    </p>

                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        <!-- Footer Links -->
        <!-- Copyright -->
        <div class="footer-copyright text-center text-white py-3">© 2020 Copyright
            <a href="https://mdbootstrap.com/"> Grupo 3</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- End Footer -->

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
</body>

</html>