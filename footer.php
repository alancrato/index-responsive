<!-- START FOOTER -->
<footer class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="row">
                    <img src="img/logo.png" alt="" class="logo-dark" height="80" />
                </div>
                <div class="row">
                    <div class="col-9">
                        <div class="subtitle-about mt-4">Necessitando de um olhar especial para seu caso de dor de ombro, fico a disposição para atendê-lo</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <ul class="social-list list-inline mt-3">
                            <li class="list-inline-item text-center">
                                <a href="https://api.whatsapp.com/send?1=pt_BR&phone=5585991303003&text=Olá,%20encontrei%20o%20contato%20do%20Dr.%20Alan%20no%20site,%20gostaria%20de%20tirar%20uma%20dúvida." target="_blank" class="social-list-item"><i class="fab fa-whatsapp-square"></i></a>
                            </li>
                            <li class="list-inline-item text-center">
                                <a href="https://www.instagram.com/dr.alanarruda" target="_blank" class="social-list-item"><i class="fab fa-instagram"></i></a>
                            </li>
                            <li class="list-inline-item text-center">
                                <a href="mailto:contato@dralanarruda.com.br?subject=Olá,%20encontrei%20o%20contato%20do%20Dr.%20Alan%20no%20site,%20gostaria%20de%20tirar%20uma%20dúvida." target="_blank" class="social-list-item"><i class="fas fa-envelope"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 mt-3 mt-lg-0">

                <div class="row">
                    <div class="col-12">
                        <div class="term-about">Entre em Contato</div>
                        <div class="border-title-location"></div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <ul class="list-unstyled pl-0 mb-0 mt-2">
                            <li class="mt-2 item-footer-bold">Endereço</li>
                            <li class="mt-4"><a href="#localizacao" class="item-footer">
                                    <i class="fas fa-map-marker-alt mr-2"></i> Rua Prof. Dias da Rocha, 1511. Dionísio Torres - Fortaleza - Ce
                                </a>
                            </li>
                            <li class="mt-3"><a href="#localizacao" class="item-footer">
                                    <i class="fas fa-clock mr-2"></i>Seg - Sex 08:00 às 18:00
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-6 col-lg-6">
                        <ul class="list-unstyled pl-0 mb-0 mt-2">
                            <li class="mt-2 item-footer-bold mt-sm-item-footer">Contatos</li>
                            <li class="mt-4"><a href="mailto:contato@dralanarruda.com.br?subject=Olá,%20encontrei%20o%20contato%20do%20Dr.%20Alan%20no%20site,%20gostaria%20de%20tirar%20uma%20dúvida." target="_blank" class="item-footer">
                                    <i class="fas fa-envelope mr-2"></i>contato@dralanarruda.com.br
                                </a>
                            </li>
                            <li class="mt-3"><a href="https://api.whatsapp.com/send?1=pt_BR&phone=5585991303003&text=Olá,%20encontrei%20o%20contato%20do%20Dr.%20Alan%20no%20site,%20gostaria%20de%20tirar%20uma%20dúvida." target="_blank" class="item-footer">
                                    <i class="fas fa-phone-alt mr-2"></i>(85) 9 91303003 | (85) 3046.3040
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <div class="mt-5">
                    <div class="copy border-top">
                        <div class="mt-4 text-center mb-0">
                            © Dr. Alan Arruda <?php date('Y'); ?> - Todos os direitos reservados
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="https://getbootstrap.com/docs/4.3/assets/js/vendor/jquery-slim.min.js"><\/script>')</script><script src="https://getbootstrap.com/docs/4.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-xrRywqdh3PHs8keKZN+8zzc5TX0GRTLCcmivcbNJWm2rs5C8PRhcEn3czEjhAO9o" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.7.1/slick.js"></script>
<script>
    $('.carousel').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 4,
        slidesToScroll: 3,
        autoplay: true,
        autoplaySpeed: 5000,
        responsive: [
            {
                breakpoint: 1250,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }
        ]
    });
</script>
<script>
    $(function () {
        //incluso essa variavel para setar atributos do css depois
        var navbar = $('.navbar');

        $(window).scroll(function () {
            //distancia que o scroll devera rolar para aparecer o box da div
            if ($(this).scrollTop() > 270){
                //bloco incluso para setar o css
                navbar.css({
                    'position': 'fixed',
                    'background-color': '#fff',
                    'padding': '0.5rem 1rem'
                });
            } else {
                navbar.css({
                    'position': 'fixed',
                    'background-color': 'transparent',
                    'padding': '1.5rem 1rem'
                });
            }

        });

    });
</script>
<script>!function($_x,_s,id){var js,fjs=$_x.getElementsByTagName(_s)[0];if(!$_x.getElementById(id)){js = $_x.createElement(_s);js.id = id;js.src = "//platform.docplanner.com/js/widget.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","zl-widget-s");</script>
</body>
</html>
