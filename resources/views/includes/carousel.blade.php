<div data-aos="fade-up" data-aos-anchor-placement="bottom-bottom" class="multiple-items">
    <img class="rounded-s-lg rounded-e-lg m-5" src="https://static.arenalte.com/uploads/2019/03/Warpin1.jpg" alt="">
    <img class="rounded-s-lg rounded-e-lg m-5" src="https://awsimages.detik.net.id/community/media/visual/2019/01/30/eb07772a-12ef-4fb3-9960-51838d6e1d84_169.jpeg?w=620" alt="">
    <img class="rounded-s-lg rounded-e-lg m-5" src="https://awsimages.detik.net.id/visual/2019/01/30/226a3abe-2fa2-4ffe-a838-b8c693863390_169.jpeg?w=650" alt="">
    <img class="rounded-s-lg rounded-e-lg m-5" src="https://foto.kontan.co.id/mttLsDW-FB2-PqJUO4trCzqvSJQ=/640x360/smart/2018/02/09/161427876p.jpg" alt="">
    <img class="rounded-s-lg rounded-e-lg m-5" src="https://hybrid.co.id/wp-content/uploads/2018/08/30ece6838b015bd8edeb42ecac1e9ae6_WP_Photo1.jpg" alt="">
    <img class="rounded-s-lg rounded-e-lg m-5" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTC0tyIYV9ploXkuHEOqR3huj_uEYXFOjyDZyg6XD7eVTo7t9dzOPsD2I035g3A3dveDjs&usqp=CAU" alt="">
</div>
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="{{ asset('slick-1.8.1/slick/slick.min.js') }}"></script>
    <script type="text/javascript">
        $('.multiple-items').slick({
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 3,
        arrows: true,
        swipe: true, // pastikan swipe diaktifkan
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    arrows: true,
                    swipe: true, // pastikan swipe diaktifkan pada breakpoint
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    arrows: true,
                    swipe: true, // pastikan swipe diaktifkan pada breakpoint
                    dots: true,
                    speed: 500,
                    fade: true,
                    cssEase: 'linear',
                    autoplay: true,
                    autoplaySpeed: 2000 // Durasi transisi antar slide, 2000ms = 2 detik
                }
            }
        ]
    });
</script>