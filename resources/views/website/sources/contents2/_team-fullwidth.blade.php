@extends('layouts.website')
@section('bodyClass')class="page"@endsection
@section('content')
        <main id="uix-maincontent">
<!-- Content   
====================================================== -->
<section class="uix-spacing--s uix-spacing--no-bottom">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Team Fullwidth</h3>
                <hr>
            </div>
        </div>
        <!-- .row end -->
    </div>
    <!-- .container end -->
</section>    
           <!-- Content  
====================================================== -->
<section class="uix-spacing--s">
    <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="uix-team--fullwidth">
                        <div class="uix-list-abreast-img">
                            <div class="uix-list-abreast-img__item">
                                <div class="uix-list-abreast-img__item__left">
                                    <div class="uix-list-abreast-img__item__img uix-border--circle uix-border--circle-only-img"> 
                                        <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar-r-1.jpg" alt="Jone Smmith"> 
                                    </div>
                                </div>
                                <div class="uix-list-abreast-img__item__right">
                                    <h4>Jone Smmith</h4>
                                    <div class="uix-list-abreast-img__item-social"> 
                                        <em>CEO</em>
                                        <a href="#" class="uix-social-btn uix-social-btn--small uix-social-btn--thin"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="uix-social-btn uix-social-btn--small uix-social-btn--thin"><i class="fa fa-twitter"></i></a>
                                        <a href="#" class="uix-social-btn uix-social-btn--small uix-social-btn--thin"><i class="fa fa-google-plus"></i></a>
                                    </div>
                                    <div class="uix-list-abreast-img__item__desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sin aliud quid voles, postea. Quamquam te quidem video minime esse deterritum. Ita multa dicunt, quae vix intellegam. Ergo hoc quidem apparet, nos ad agendum esse natos.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.uix-list-abreast-img__item -->
                            <div class="uix-list-abreast-img__item">
                                <div class="uix-list-abreast-img__item__left">
                                    <div class="uix-list-abreast-img__item__img uix-border--circle uix-border--circle-only-img"> 
                                        <img src="{{$commonAssetUrl}}/website/assets/images/demo/avatar-r-2.jpg" alt="Donny Kiu" > 
                                    </div>
                                </div>
                                <div class="uix-list-abreast-img__item__right">
                                    <h4>Donny Kiu</h4>
                                    <div class="uix-list-abreast-img__item-social"> 
                                        <em>Photographer</em> 
                                        <a href="#" class="uix-social-btn uix-social-btn--small uix-social-btn--thin"><i class="fa fa-facebook"></i></a>
                                        <a href="#" class="uix-social-btn uix-social-btn--small uix-social-btn--thin"><i class="fa fa-twitter"></i></a>
                                    </div>
                                    <div class="uix-list-abreast-img__item__desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sin aliud quid voles, postea. Quamquam te quidem video minime esse deterritum. Ita multa dicunt, quae vix intellegam. Ergo hoc quidem apparet, nos ad agendum esse natos. Utrum igitur tibi litteram videor an totas paginas commovere? Duo Reges: constructio interrete.</p>
                                        <p>Estne, quaeso, inquam, sitienti in bibendo voluptas? Nos commodius agimus. Semper enim ex eo, quod maximas partes continet latissimeque funditur, tota res appellatur. At quicum ioca seria, ut dicitur, quicum arcana, quicum occulta omnia? Immo vero, inquit, ad beatissime vivendum parum est, ad beate vero satis. Itaque in rebus minime obscuris non multus est apud eos disserendi labor. Haec bene dicuntur, nec ego repugno, sed inter sese ipsa pugnant. Non autem hoc: igitur ne illud quidem.</p>
                                    </div>
                                </div>
                            </div>
                            <!-- /.uix-list-abreast-img__item -->
                        </div>
                        <!-- /.uix-list-abreast-img -->
                    </div>
                    <!-- /.uix-team--fullwidth -->
                </div>
            </div>
            <!-- .row end -->
    </div>
    <!-- .container end -->
</section>   
        </main>
@endsection
