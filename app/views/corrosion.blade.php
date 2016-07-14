@extends('website')
@section('contents')

    <section class="pageheader-default text-center">
        <div class="semitransparentbg">
            <h1 class="animated fadeInLeftBig notransition">Corrosion Treatment</h1>
            <p class="animated fadeInRightBig notransition container page-description">
                This protection
                can be the introduction of certain elements into the
                base metal, creating a corrosion resistant alloy, or the
                addition of a surface coating of a chemical conver-
                sion coating, metal or paint.
            </p>
        </div>
    </section>
    <div class="wrapsemibox">
        <div class="semiboxshadow text-center">
            <img src="{{asset('img/shp.png')}}" class="img-responsive" alt="">
        </div>
        <!-- PROJECT SLIDER
================================================== -->
        <div class="animated fadeInLeft notransition" style="margin-top:-40px;">
            <div class="carousel carousel-fade slide carousel-featuredwork projectdetail" id="carousel-featuredwork">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-featuredwork" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-featuredwork" data-slide-to="1" class=""></li>
                    <li data-target="#carousel-featuredwork" data-slide-to="2" class=""></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="{{asset('img/sandblastin3.jpg')}}" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('img/protective.jpg')}}" style="width: 100%; height: 100%" alt="">
                    </div>
                    <div class="item">
                        <img src="{{asset('img/protective2.jpg')}}"  style="width: 100%; height: 100%" alt="">
                    </div>
                </div>
                <!-- /.carousel-inner -->
            </div>
        </div>
        <!-- PROJECT DESCRIPTION
================================================== -->
        <section class="container">
            <div class="row">
                <div class="col-md-8 animated fadeInLeft notransition">
                    <h1 class="smalltitle">
                        <span>Project Description</span>
                    </h1>
                    <p>
                        <span class="drop-cap round">F</span>rom the moment the metal is manufac-
                        tured, it must be protected from the deleterious effects
                        of the environment that surrounds it. This protection
                        can be the introduction of certain elements into the
                        base metal, creating a corrosion resistant alloy, or the
                        addition of a surface coating of a chemical conver-
                        sion coating, metal or paint. While in use, additional
                        moisture barriers, such as viscous lubricants and pro-
                        tectants may be added to the surface.</p>
                    <p>
                        Much has been done to improve the corrosion resis-
                        tance: Improvements in materials, surface
                        treatments, insulation, and in particular, modern
                        protective finishes.
                    </p>
                    <div class="row col-md-6">
                        <h1 class="smalltitle">
                            <span>Abrasive Blasting</span>
                        </h1>
                        <p>
                            Abrasive blasting is the operation of forcibly propelling a stream of abrasive material against
                            a surface under high pressure to smooth a rough surface, roughen a smooth surface, shape a surface,
                            or remove surface contaminants. A pressurized fluid, typically compressed air, or a centrifugal wheel
                            is used to propel the blasting material (often called the media).
                        </p>
                    </div>
                    <div class="row col-md-6">
                        <h1 class="smalltitle">
                            <span>Protective Coating</span>
                        </h1>
                        <p>Concrete structures may be the buildings, bridges, primary & secondary containments and
                            other reinforced concrete structures must need protective coating against rain, natural air
                            & pollution, aggressive marine environment conditions and chemicals that affects adversely
                            on the designed service life of the structures leads to an expensive refurbishments works.
                        </p>

                    </div>
                </div>
                <div class="col-md-4 animated fadeInRight notransition">
                    <h1 class="smalltitle">
                        <span>Testimonial</span>
                    </h1>
                    <blockquote>
                        <p style="color: #F44828">
                            This is what the client of the project said
                        </p>
                        <p>
                            I am grateful to have found George at George Wingety Ltd. He provided excellent designs and work product.
                            His level of responsiveness and client service was exceptional. And he was a pleasure to work with.
                            I am incredibly happy with the designs and strongly recommend George Wingety Ltd to others.
                        </p>
                        <p>
                            <small>Mr Nchimbi , Client of Project</small>
                        </p>
                    </blockquote>
                </div>
            </div>
        </section>
        <!--CALL TO ACTION PANEL
@stop