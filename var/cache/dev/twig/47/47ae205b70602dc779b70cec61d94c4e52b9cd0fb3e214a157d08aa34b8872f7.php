<?php

/* basefront.html.twig */
class __TwigTemplate_d1fb04276b0ae02007abba30b7c8733dfa30e8100f409783ab9678ddb4a67fe6 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'title' => [$this, 'block_title'],
            'content' => [$this, 'block_content'],
            'footer' => [$this, 'block_footer'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basefront.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "basefront.html.twig"));

        // line 1
        $this->displayBlock('head', $context, $blocks);
        // line 237
        echo "</head>

<body id=\"naturecircle\" class=\"template-index\" ><div id=\"one-time-newsletter\" class=\"popup_wrapper\">
    ";
        // line 240
        $this->displayBlock('content', $context, $blocks);
        // line 461
        echo "  <!-- Mobile Menu Area End -->
</header>
<!-- Header Area End -->



<style>
  .theme-logo img{
    max-width: 160px;
  }
</style>

</div>
<main>

      <!-- BEGIN content_for_index -->
      <div id=\"shopify-section-1541245747444\" class=\"shopify-section\"><!-- Hero Area Start -->
      <div class=\"ht-hero-section fix\" id=\"section-1541245747444\">
      <div class=\"ht-hero-slider\">

    <!-- Single Slide Start -->
    <div class=\"ht-single-slide\" style=\"background-image: url(";
        // line 482
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/10bfe.jpg?v=1546757386"), "html", null, true);
        echo ");\">
      <div class=\"ht-hero-content-one container\">

        <h3>Cold Process Organic</h3>

        <h1 class=\"cssanimation leDoorCloseLeft sequence\">Savon Stories</h1>
        <p>We believe that healthy eating, clean air, and gentle character is the best start to genuine wellbeing.</p>
        <a href=\"collections.html\" class=\"default-btn large circle blue hover-blue uppercase\">Shop now</a>
      </div>
    </div>
    <!-- Single Slide End -->

    <!-- Single Slide Start -->
    <div class=\"ht-single-slide\" style=\"background-image: url(";
        // line 495
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/226ea.jpg?v=1546757406"), "html", null, true);
        echo ");\">
      <div class=\"ht-hero-content-one container\">

        <h3>Healthy life with</h3>

        <h1 class=\"cssanimation leDoorCloseLeft sequence\">Nature Organic</h1>

        <p>Vegetables are the edible parts of a plant that is used in cooking or can be eaten raw.</p>

        <a href=\"collections.html\" class=\"default-btn large circle blue hover-blue uppercase\">Shop now</a>

      </div>
    </div>
    <!-- Single Slide End -->


  </div>
</div>
<!-- Hero Area End --><style data-shopify>#section-1541245747444{padding-top: 0px;
    padding-bottom: 100px;}
  @media (min-width: 768px) and (max-width: 991px) {
    #section-1541245747444{padding-top: 0px;
      padding-bottom: 80px;}
  }
  @media (max-width: 767px) {
    #section-1541245747444{padding-top: 0px;
      padding-bottom: 60px;}
  }</style><script>

  /*-------------------------------------
\tHero Slider
\t----------------------------------------*/
\tvar heroSlider = \$('#section-1541245747444 .ht-hero-slider');
\theroSlider.slick({
\t\tarrows: true,
\t\tprevArrow:\"<button type='button' class='slick-prev'><i class='fa fa-angle-left'></i></button>\",
\t\tnextArrow:\"<button type='button' class='slick-next'><i class='fa fa-angle-right'></i></button>\",
\t\tautoplay: false,
\t\tautoplaySpeed: 5000,
\t\tdots: true,
\t\tpauseOnFocus: false,
\t\tpauseOnHover: false,fade: false,infinite: true,
\t\tslidesToShow: 1,
\t\tresponsive: [
\t\t\t{
\t\t\t  breakpoint: 767,
\t\t\t  settings: {
\t\t\t\t  arrows: false
\t\t\t  }
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 479,
\t\t\t\tsettings: {
\t\t\t\t\tarrows: false
\t\t\t\t}
\t\t\t}
\t\t]
\t});
\theroSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide){
\t\tvar sliderTitle = \$('.ht-hero-slider h1');
\t\tvar currentTitle = \$('.slick-current h1');
\t\tsliderTitle.removeClass('cssanimation leDoorCloseLeft sequence');
\t\tcurrentTitle.addClass('cssanimation leDoorCloseLeft sequence');
\t});
\theroSlider.on('afterChange', function(event, slick, currentSlide, nextSlide){
\t\tvar sliderTitle = \$('.ht-hero-slider h1');
\t\tvar currentTitle = \$('.slick-current h1');
\t\tsliderTitle.removeClass('cssanimation leDoorCloseLeft sequence');
\t\tcurrentTitle.addClass('cssanimation leDoorCloseLeft sequence');
\t});

</script>


</div><div id=\"shopify-section-1546835946117\" class=\"shopify-section\"><!-- Food Categry Area Start -->
<div class=\"food-category-area pb-70\" id=\"section-1546835946117\">
  <div class=\"container text-center\">

    <div class=\"section-title-img\">

      <img src=\"";
        // line 575
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/textaed4.png?v=1546835994"), "html", null, true);
        echo "\" alt=\"slider images\">


      <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui</p>

    </div>

  </div>
  <div class=\"container\">
    <div class=\"ht-food-slider row\">

      <div class=\"col text-center\">
        <div class=\"single-food-category\">
          <a href=\"#\" class=\"food-cat-img\">

            <img src=\"";
        // line 590
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/collections/tea_smallb034.png?v=1546836637"), "html", null, true);
        echo "\" alt=\"collection image\">

          </a>
          <img src=\"https://via.placeholder.com/70x1\" alt=\"\">
          <h4><a href=\"collections/tea.html\">Tea</a></h4>
          <span>(0)</span>
        </div>
      </div>

      <div class=\"col text-center\">
        <div class=\"single-food-category\">
          <a href=\"#\" class=\"food-cat-img\">


            <img src=\"";
        // line 604
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/collections/burger_small837f.png?v=1546839335"), "html", null, true);
        echo "\" alt=\"collection image\">

          </a>
          <img src=\"https://via.placeholder.com/70x1\" alt=\"\">
          <h4><a href=\"collections/bread.html\">bread</a></h4>
          <span>(10)</span>
        </div>
      </div>

      <div class=\"col text-center\">
        <div class=\"single-food-category\">
          <a href=\"#\" class=\"food-cat-img\">


            <img src=\"";
        // line 618
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/collections/fruit_smallce6c.png?v=1546839410"), "html", null, true);
        echo "\" alt=\"collection image\">

          </a>
          <img src=\"https://via.placeholder.com/70x1\" alt=\"\">
          <h4><a href=\"collections/fruits.html\">fruits</a></h4>
          <span>(10)</span>
        </div>
      </div>

      <div class=\"col text-center\">
        <div class=\"single-food-category\">
          <a href=\"#\" class=\"food-cat-img\">


            <img src=\"";
        // line 632
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/collections/drinks_smallaf65.png?v=1546839486"), "html", null, true);
        echo "\" alt=\"collection image\">

          </a>
          <img src=\"https://via.placeholder.com/70x1\" alt=\"\">
          <h4><a href=\"collections/juices.html\">juices</a></h4>
          <span>(10)</span>
        </div>
      </div>

      <div class=\"col text-center\">
        <div class=\"single-food-category\">
          <a href=\"#\" class=\"food-cat-img\">


            <img src=\"";
        // line 646
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/collections/vegetable_small62e2.png?v=1546839583"), "html", null, true);
        echo "\" alt=\"collection image\">

          </a>
          <img src=\"https://via.placeholder.com/70x1\" alt=\"\">
          <h4><a href=\"collections/vegetables.html\">vegetables</a></h4>
          <span>(10)</span>
        </div>
      </div>



      <div class=\"col text-center\">
        <div class=\"single-food-category\">
          <a href=\"#\" class=\"food-cat-img\">


            <img src=\"";
        // line 662
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/collections/tea_smallb034.png?v=1546836637"), "html", null, true);
        echo "\" alt=\"collection image\">

          </a>
          <img src=\"https://via.placeholder.com/70x1\" alt=\"\">
          <h4><a href=\"collections/tea.html\">Tea</a></h4>
          <span>(0)</span>
        </div>
      </div>


    </div>
  </div>
</div>
<!-- Food Categry Area End --><style data-shopify>#section-1546835946117{}
  @media (min-width: 768px) and (max-width: 991px) {
    #section-1546835946117{}
  }
  @media (max-width: 767px) {
    #section-1546835946117{}
  }</style><script>
  \t/*------------------------------------
\tFood Category Slider
\t--------------------------------------*/
\tvar foodSlider = \$('.ht-food-slider');
\tfoodSlider.slick({
\t\tinfinite: true,
\t\tarrows: false,slidesToShow: 5,
\t\tresponsive: [
\t\t\t{
\t\t\t\tbreakpoint: 1200,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 4,
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 991,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 3,
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 767,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 2,
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 479,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 1,
\t\t\t\t\tarrows: false,
\t\t\t\t\tdots: false,
\t\t\t\t}
\t\t\t}
\t\t]
\t});
</script>


</div>
<div id=\"shopify-section-1546842963628\" class=\"shopify-section\"><!-- Protuct Area Start -->
<div class=\"product-area bg-1 pt-110 pb-80\" id=\"section-1546842963628\">
  <div class=\"container\">

    <div class=\"section-title text-center\">
      <div class=\"section-img d-flex justify-content-center\">

        <img src=\"";
        // line 729
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/titlef59e.png?v=1546753447"), "html", null, true);
        echo "\" alt=\"slider images\">

      </div>
      <h2><span>Organic </span>featured products</h2>
    </div>


  </div>
  <div class=\"container\">
    <div class=\"product-tab-list nav\" role=\"tablist\">


      <a class=\"active\" href=\"#vegetables\" data-toggle=\"tab\" role=\"tab\" aria-selected=\"true\" aria-controls=\"vegetables\">vegetables</a>

      <a class=\"\" href=\"#fruits\" data-toggle=\"tab\" role=\"tab\" aria-selected=\"true\" aria-controls=\"fruits\">fruits</a>

      <a class=\"\" href=\"#juices\" data-toggle=\"tab\" role=\"tab\" aria-selected=\"true\" aria-controls=\"juices\">juices</a>

      <a class=\"\" href=\"#bread\" data-toggle=\"tab\" role=\"tab\" aria-selected=\"true\" aria-controls=\"bread\">bread</a>

    </div>
    <div class=\"tab-content text-center\">


      <div class=\"tab-pane fade show active\" id=\"vegetables\" role=\"tabpanel\">
        <div class=\"product-carousel\">



<div class=\"custom-col\">
            <div class=\"single-product-item 22279712014400\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-15%</span>




<span class=\"new-title\">New</span>



</div>
    <a href=\"products/1-new-and-sale-badge-product.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 779
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/1_large1d58.jpg?v=1547544027"), "html", null, true);
        echo "\" alt=\"1. New and sale badge product\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('1-new-and-sale-badge-product')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279712014400, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394984775744\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/1-new-and-sale-badge-product.html\">1. New and sale badge product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$110.00</span></span>

      <span class=\"old-price\"><span class=money>\$130.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279680360512\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">

<span class=\"new-title\">New</span>

</div>
    <a href=\"products/2-new-badge-product.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 833
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/4_8d90a229-c59e-43cb-b38e-7987d086216a_largea376.jpg?v=1547544059"), "html", null, true);
        echo "\" alt=\"2. New badge product\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('2-new-badge-product')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279680360512, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394982416448\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/2-new-badge-product.html\">2. New badge product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$80.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279645265984\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-18%</span>

</div>
    <a href=\"products/3-variable-product.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 890
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/5_f1b6a39a-df8a-4bfd-954d-b85a336fc61d_largeec70.jpg?v=1547544068"), "html", null, true);
        echo "\" alt=\"3. Variable product\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('3-variable-product')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279645265984, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394976649280\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/3-variable-product.html\">3. Variable product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$70.00</span></span>

      <span class=\"old-price\"><span class=money>\$85.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279624851520\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">
<span class=\"soldout-title\">Soldout</span>
</div>
    <a href=\"products/4-soldout-product.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 942
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/6_74ad24f4-47da-473d-a864-16de95815367_large1ddf.jpg?v=1547544076"), "html", null, true);
        echo "\" alt=\"4. Soldout product\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('4-soldout-product')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">

        <button class=\"cart-disable p-cart-btn\">
          <span class=\"cart-text\">Soldout</span>
        </button>

      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394976387136\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/4-soldout-product.html\">4. Soldout product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$29.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279622885440\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">


</div>
    <a href=\"products/5-simple-product.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 988
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/7_af41587b-4afc-4301-ba09-4a4a21eecdc5_large4353.jpg?v=1548148372"), "html", null, true);
        echo "\" alt=\"5. Simple product\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('5-simple-product')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279622885440, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394976321600\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/5-simple-product.html\">5. Simple product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$50.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279616036928\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-27%</span>

</div>
    <a href=\"products/6-variable-with-soldout-product.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 1045
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/8_7e2166e6-0d10-4984-94e4-0e2e75a52b57_large4997.jpg?v=1547544092"), "html", null, true);
        echo "\" alt=\"6. Variable with soldout product\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('6-variable-with-soldout-product')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279616036928, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394975371328\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/6-variable-with-soldout-product.html\">6. Variable with soldout product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$55.00</span></span>

      <span class=\"old-price\"><span class=money>\$75.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279612334144\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">

</div>
    <a href=\"products/7-sample-affiliate-product.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 1097
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/9_ec55d235-976a-4038-b731-71d3e8b19104_largebf13.jpg?v=1547544100"), "html", null, true);
        echo "\" alt=\"7. Sample affiliate product\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li>
</ul>

      <a href=\"https://affiliate-program.amazon.com/\" class=\"p-cart-btn\">
        <span class=\"cart-title\">Buy from amazon</span>
      </a><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394975141952\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/7-sample-affiliate-product.html\">7. Sample affiliate product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279608107072\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-35%</span>


</div>
    <a href=\"products/8-countdown-product.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 1143
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/10_4162efee-35e1-4e52-8bf1-f197dc65425e_largea365.jpg?v=1547544110"), "html", null, true);
        echo "\" alt=\"8. Countdown product\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('8-countdown-product')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279608107072, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">



        <div class=\"product-countdown timer-grid\" data-countdown=\"2019/05/24\"></div>

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394974388288\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/8-countdown-product.html\">8. Countdown product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$39.00</span></span>

      <span class=\"old-price\"><span class=money>\$60.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279596539968\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-10%</span>

</div>
    <a href=\"products/10-this-is-the-large-title-for-testing-large-title-and-there-is-an-image-for-testing.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 1206
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/2_1ff78ef6-6239-4f61-a0db-7bdb3501d8f3_large61e0.jpg?v=1547544042"), "html", null, true);
        echo "\" alt=\"10. This is the large title for testing large title and there is an image for testing\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('10-this-is-the-large-title-for-testing-large-title-and-there-is-an-image-for-testing')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279596539968, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394973405248\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/10-this-is-the-large-title-for-testing-large-title-and-there-is-an-image-for-testing.html\">10. This is the large title for testing large title and there is an image for testing</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$21.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279593164864\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



</div>
    <a href=\"products/11-product-with-video.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 1260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/3_751e665b-a90f-4569-a221-bd51e40a2fdc_large4e76.jpg?v=1547544050"), "html", null, true);
        echo "\" alt=\"11. Product with video\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('11-product-with-video')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279593164864, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394973110336\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/11-product-with-video.html\">11. Product with video</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$39.00</span></span>

    </div>
  </div>
</div>

          </div>

        </div>
      </div>


      <div class=\"tab-pane fade \" id=\"fruits\" role=\"tabpanel\">
        <div class=\"product-carousel\">



<div class=\"custom-col\">
            <div class=\"single-product-item 22279612334144\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">


</div>
    <a href=\"products/7-sample-affiliate-product.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 1321
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/9_ec55d235-976a-4038-b731-71d3e8b19104_largebf13.jpg?v=1547544100"), "html", null, true);
        echo "\" alt=\"7. Sample affiliate product\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li>
</ul>

      <a href=\"https://affiliate-program.amazon.com/\" class=\"p-cart-btn\">
        <span class=\"cart-title\">Buy from amazon</span>
      </a><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394975141952\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/7-sample-affiliate-product.html\">7. Sample affiliate product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279608107072\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-35%</span>


</div>
    <a href=\"products/8-countdown-product.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 1367
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/10_4162efee-35e1-4e52-8bf1-f197dc65425e_largea365.jpg?v=1547544110"), "html", null, true);
        echo "\" alt=\"8. Countdown product\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('8-countdown-product')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279608107072, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">



        <div class=\"product-countdown timer-grid\" data-countdown=\"2019/05/24\"></div>

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394974388288\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/8-countdown-product.html\">8. Countdown product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$39.00</span></span>

      <span class=\"old-price\"><span class=money>\$60.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279603191872\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">


</div>
    <a href=\"products/9-without-shortcode-product.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 1424
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/11_9cdea39a-2717-43d1-8e62-933157dbbd66_largecda6.jpg?v=1547544119"), "html", null, true);
        echo "\" alt=\"9. Without shortcode product\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('9-without-shortcode-product')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279603191872, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394973831232\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/9-without-shortcode-product.html\">9. Without shortcode product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$79.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279557775424\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-10%</span>

</div>
    <a href=\"products/demo-product-title.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 1481
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/15_cdc7c7c0-c033-4994-a6f6-a03e203550e8_largebadd.jpg?v=1547544239"), "html", null, true);
        echo "\" alt=\"Demo product title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('demo-product-title')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279557775424, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">



        <div class=\"product-countdown timer-grid\" data-countdown=\"2019/05/24\"></div>

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394969899072\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/demo-product-title.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$21.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279509180480\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"new-title\">New</span>



</div>
    <a href=\"products/demo-product-title-1.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 1543
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/14_7802946f-8d69-47c3-9f43-6e5389831cda_largee64d.jpg?v=1547544231"), "html", null, true);
        echo "\" alt=\"Demo product title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('demo-product-title-1')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279509180480, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394966360128\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/demo-product-title-1.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$80.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279364345920\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">
<span class=\"soldout-title\">Soldout</span>
</div>
    <a href=\"products/dummy-product-name-2.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 1593
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/18_108069c0-0263-4fdf-82a2-40b11668e40a_larged511.jpg?v=1547544263"), "html", null, true);
        echo "\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-product-name-2')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">

        <button class=\"cart-disable p-cart-btn\">
          <span class=\"cart-text\">Soldout</span>
        </button>

      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394954661952\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name-2.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$29.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279363297344\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">





</div>
    <a href=\"products/demo-product-title-2.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 1642
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/13_a4de9b0c-e87c-4068-a532-8ac6cc2fbb54_large1139.jpg?v=1547544223"), "html", null, true);
        echo "\" alt=\"Demo product title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('demo-product-title-2')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279363297344, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394954530880\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/demo-product-title-2.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$50.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279349764160\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">





</div>
    <a href=\"products/dummy-product-name-3.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 1696
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/17_20906e90-7cb0-4285-9ac7-4ed8e3d9de58_large46c6.jpg?v=1547544254"), "html", null, true);
        echo "\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li>
</ul>

      <a href=\"https://affiliate-program.amazon.com/\" class=\"p-cart-btn\">
        <span class=\"cart-title\">Buy from amazon</span>
      </a><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952761408\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name-3.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279348650048\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">





</div>
    <a href=\"products/demo-product-title-3.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 1738
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/12_995223f0-1a07-4a6f-a255-011aa7d2c1c6_large50bf.jpg?v=1547544129"), "html", null, true);
        echo "\" alt=\"Demo product title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li>
</ul>

      <a href=\"https://affiliate-program.amazon.com/\" class=\"p-cart-btn\">
        <span class=\"cart-title\">Buy from amazon</span>
      </a><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952663104\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/demo-product-title-3.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279328759872\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">





</div>
    <a href=\"products/dummy-product-name-4.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 1780
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/16_7802410c-98a0-499e-932b-c7bc47cd9cc9_largec061.jpg?v=1547544247"), "html", null, true);
        echo "\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-product-name-4')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279328759872, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394951385152\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name-4.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$79.00</span></span>

    </div>
  </div>
</div>

          </div>

        </div>
      </div>


      <div class=\"tab-pane fade \" id=\"juices\" role=\"tabpanel\">
        <div class=\"product-carousel\">



<div class=\"custom-col\">
            <div class=\"single-product-item 22279566393408\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-15%</span>
















<span class=\"new-title\">New</span>



</div>
    <a href=\"products/dummy-product-name.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 1866
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/20_a8cf9962-f46a-463e-b7a3-36332cd7b081_large8891.jpg?v=1547544312"), "html", null, true);
        echo "\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-product-name')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279566393408, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394970161216\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$110.00</span></span>

      <span class=\"old-price\"><span class=money>\$130.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279545585728\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">





</div>
    <a href=\"products/dummy-text-for-title.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 1922
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/24_e709e95a-6a8e-4631-8aeb-e1169aacbc3c_largea043.jpg?v=1547544444"), "html", null, true);
        echo "\" alt=\"Dummy text for title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-text-for-title')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279545585728, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394969243712\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-text-for-title.html\">Dummy text for title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$39.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279524024384\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">
















<span class=\"new-title\">New</span>



</div>
    <a href=\"products/dummy-product-name-1.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 1991
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/19_419a1b30-3d98-47be-a047-662202d1834d_largeb4f6.jpg?v=1547544279"), "html", null, true);
        echo "\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-product-name-1')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279524024384, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394967605312\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name-1.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$80.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279387086912\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-18%</span>





</div>
    <a href=\"products/dummy-text-for-title-1.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 2052
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/23_c8b41666-00fd-4f4f-bae9-c3daee32c979_large85df.jpg?v=1547544435"), "html", null, true);
        echo "\" alt=\"Dummy text for title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-text-for-title-1')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279387086912, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394954956864\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-text-for-title-1.html\">Dummy text for title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$70.00</span></span>

      <span class=\"old-price\"><span class=money>\$85.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279364345920\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">
<span class=\"soldout-title\">Soldout</span>
</div>
    <a href=\"products/dummy-product-name-2.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 2104
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/18_108069c0-0263-4fdf-82a2-40b11668e40a_larged511.jpg?v=1547544263"), "html", null, true);
        echo "\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-product-name-2')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">

        <button class=\"cart-disable p-cart-btn\">
          <span class=\"cart-text\">Soldout</span>
        </button>

      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394954661952\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name-2.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$29.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279354875968\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-27%</span>





</div>
    <a href=\"products/dummy-text-for-title-2.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 2160
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/22_cb9b8156-fcd2-4335-af66-d93cbf7cc939_large31dd.jpg?v=1547544417"), "html", null, true);
        echo "\" alt=\"Dummy text for title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-text-for-title-2')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279354875968, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394953547840\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-text-for-title-2.html\">Dummy text for title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$55.00</span></span>

      <span class=\"old-price\"><span class=money>\$75.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279350943808\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-27%</span>





</div>
    <a href=\"products/product-dummy-title-3.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 2223
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/26_e7ee30b5-4975-4140-9c06-f1f60656f41b_large3553.jpg?v=1547544472"), "html", null, true);
        echo "\" alt=\"Product dummy title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('product-dummy-title-3')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279350943808, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952990784\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/product-dummy-title-3.html\">Product dummy title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$55.00</span></span>

      <span class=\"old-price\"><span class=money>\$75.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279349764160\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">





</div>
    <a href=\"products/dummy-product-name-3.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 2279
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/17_20906e90-7cb0-4285-9ac7-4ed8e3d9de58_large46c6.jpg?v=1547544254"), "html", null, true);
        echo "\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li>
</ul>

      <a href=\"https://affiliate-program.amazon.com/\" class=\"p-cart-btn\">
        <span class=\"cart-title\">Buy from amazon</span>
      </a><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952761408\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name-3.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279337508928\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-35%</span>





</div>
    <a href=\"products/dummy-text-for-title-3.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 2328
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/21_9110a846-967b-42a6-9153-eaea3137f40d_larged4b5.jpg?v=1547544337"), "html", null, true);
        echo "\" alt=\"Dummy text for title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-text-for-title-3')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279337508928, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">



        <div class=\"product-countdown timer-grid\" data-countdown=\"2019/05/24\"></div>

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952073280\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-text-for-title-3.html\">Dummy text for title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$39.00</span></span>

      <span class=\"old-price\"><span class=money>\$60.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279331610688\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">





</div>
    <a href=\"products/product-dummy-title-4.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 2388
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/25_8d24b726-3c65-4b61-960c-e57f54a0ab22_larged76c.jpg?v=1547544455"), "html", null, true);
        echo "\" alt=\"Product dummy title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('product-dummy-title-4')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279331610688, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394951614528\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/product-dummy-title-4.html\">Product dummy title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$79.00</span></span>

    </div>
  </div>
</div>

          </div>

        </div>
      </div>


      <div class=\"tab-pane fade \" id=\"bread\" role=\"tabpanel\">
        <div class=\"product-carousel\">



<div class=\"custom-col\">
            <div class=\"single-product-item 22279566393408\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-15%</span>
















<span class=\"new-title\">New</span>



</div>
    <a href=\"products/dummy-product-name.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 2474
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/20_a8cf9962-f46a-463e-b7a3-36332cd7b081_large8891.jpg?v=1547544312"), "html", null, true);
        echo "\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-product-name')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279566393408, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394970161216\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$110.00</span></span>

      <span class=\"old-price\"><span class=money>\$130.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279557775424\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-10%</span>





</div>
    <a href=\"products/demo-product-title.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 2537
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/15_cdc7c7c0-c033-4994-a6f6-a03e203550e8_largebadd.jpg?v=1547544239"), "html", null, true);
        echo "\" alt=\"Demo product title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('demo-product-title')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279557775424, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">



        <div class=\"product-countdown timer-grid\" data-countdown=\"2019/05/24\"></div>

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394969899072\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/demo-product-title.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$21.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279524024384\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">
















<span class=\"new-title\">New</span>



</div>
    <a href=\"products/dummy-product-name-1.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 2612
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/19_419a1b30-3d98-47be-a047-662202d1834d_largeb4f6.jpg?v=1547544279"), "html", null, true);
        echo "\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-product-name-1')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279524024384, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394967605312\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name-1.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$80.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279509180480\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">
















<span class=\"new-title\">New</span>



</div>
    <a href=\"products/demo-product-title-1.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 2681
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/14_7802946f-8d69-47c3-9f43-6e5389831cda_largee64d.jpg?v=1547544231"), "html", null, true);
        echo "\" alt=\"Demo product title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('demo-product-title-1')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279509180480, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394966360128\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/demo-product-title-1.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$80.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279364345920\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">
<span class=\"soldout-title\">Soldout</span>
</div>
    <a href=\"products/dummy-product-name-2.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 2731
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/18_108069c0-0263-4fdf-82a2-40b11668e40a_larged511.jpg?v=1547544263"), "html", null, true);
        echo "\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-product-name-2')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">

        <button class=\"cart-disable p-cart-btn\">
          <span class=\"cart-text\">Soldout</span>
        </button>

      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394954661952\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name-2.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$29.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279363297344\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">





</div>
    <a href=\"products/demo-product-title-2.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 2780
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/13_a4de9b0c-e87c-4068-a532-8ac6cc2fbb54_large1139.jpg?v=1547544223"), "html", null, true);
        echo "\" alt=\"Demo product title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('demo-product-title-2')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279363297344, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394954530880\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/demo-product-title-2.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$50.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279349764160\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">





</div>
    <a href=\"products/dummy-product-name-3.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 2834
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/17_20906e90-7cb0-4285-9ac7-4ed8e3d9de58_large46c6.jpg?v=1547544254"), "html", null, true);
        echo "\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li>
</ul>

      <a href=\"https://affiliate-program.amazon.com/\" class=\"p-cart-btn\">
        <span class=\"cart-title\">Buy from amazon</span>
      </a><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952761408\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name-3.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279348650048\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">





</div>
    <a href=\"products/demo-product-title-3.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 2876
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/12_995223f0-1a07-4a6f-a255-011aa7d2c1c6_large50bf.jpg?v=1547544129"), "html", null, true);
        echo "\" alt=\"Demo product title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li>
</ul>

      <a href=\"https://affiliate-program.amazon.com/\" class=\"p-cart-btn\">
        <span class=\"cart-title\">Buy from amazon</span>
      </a><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952663104\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/demo-product-title-3.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279337508928\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-35%</span>





</div>
    <a href=\"products/dummy-text-for-title-3.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 2925
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/21_9110a846-967b-42a6-9153-eaea3137f40d_larged4b5.jpg?v=1547544337"), "html", null, true);
        echo "\" alt=\"Dummy text for title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-text-for-title-3')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279337508928, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">



        <div class=\"product-countdown timer-grid\" data-countdown=\"2019/05/24\"></div>

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952073280\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-text-for-title-3.html\">Dummy text for title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$39.00</span></span>

      <span class=\"old-price\"><span class=money>\$60.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279328759872\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">





</div>
    <a href=\"products/dummy-product-name-4.html\">
      <img class=\"popup_cart_image\" src=\"";
        // line 2985
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/16_7802410c-98a0-499e-932b-c7bc47cd9cc9_largec061.jpg?v=1547544247"), "html", null, true);
        echo "\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-product-name-4')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279328759872, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394951385152\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name-4.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$79.00</span></span>

    </div>
  </div>
</div>

          </div>

        </div>
      </div>

    </div>
  </div>
</div>
<!-- Protuct Area End --><style data-shopify>#section-1546842963628{}
  @media (min-width: 768px) and (max-width: 991px) {
    #section-1546842963628{}
  }
  @media (max-width: 767px) {
    #section-1546842963628{}
  }

  .bg-1 {
    background-image:url(";
        // line 3044
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/1_bd49c3c9-e82e-474d-951f-73b3902f42292a2e.jpg?v=1546843477"), "html", null, true);
        echo ");
    background-position: top center;
  }</style><script>

  /*---------------------------------------
\tProduct Carousel Slider
\t------------------------------------------*/
\tvar productSlider = \$('#section-1546842963628 .product-carousel');
\tproductSlider.slick({
\t\tarrows: true,
\t\tinfinite: true,slidesToShow: 4,
\t\tprevArrow: '<button type=\"button\" class=\"slick-prev\"><i class=\"fa fa-angle-left\"></i></button>',
\t\tnextArrow: '<button type=\"button\" class=\"slick-next\"><i class=\"fa fa-angle-right\"></i></button>',
\t\tresponsive: [
\t\t\t{
\t\t\t\tbreakpoint: 1200,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 3,
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 991,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 3,
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 767,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 2,
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 479,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 1,
\t\t\t\t}
\t\t\t}
\t\t]
\t});

</script>

</div><div id=\"shopify-section-1546851690499\" class=\"shopify-section\"><!-- Banner Area Start -->
<div class=\"banner-area banner-one-area bg-2 fix pt-60 pb-80\" id=\"section-1546851690499\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6 d-flex align-items-center\">
        <div class=\"banner-text pt-15\">

          <h3>Cold Process <span>Organic</span></h3>


          <h1>Savon Stories</h1>


          <h2>

            <img src=\"";
        // line 3102
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/mark35ef.png?v=1546851756"), "html", null, true);
        echo "\" alt=\"About Product images\">

            <span>Buy 1 get 1 free</span>
          </h2>


          <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>


          <a href=\"collections.html\" class=\"default-btn\">Shop Now</a>

        </div>
      </div>
      <div class=\"col-lg-6\">
        <div class=\"banner-image-wrapper\">

          <div class=\"banner-image\">
            <img src=\"";
        // line 3119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/1_73eb7f57-63fe-4bb1-85c3-ec417a5575fb0635.jpg?v=1546851802"), "html", null, true);
        echo "\" alt=\"About Product images\">
          </div>


          <div class=\"banner-image-text\">
            <h4>organic savon stories</h4>

            <p>We believe that healthy eating, clean air, and gentle character is the best start to genuine wellbeing.</p>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Banner Area End --><style data-shopify>#section-1546851690499{}
  @media (min-width: 768px) and (max-width: 991px) {
    #section-1546851690499{}
  }
  @media (max-width: 767px) {
    #section-1546851690499{}
  }

  .bg-2 {
    background-image:url(";
        // line 3144
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/2_fa8d7159-d16e-4440-88e6-975b2e2c9d58178f.png?v=1547873099"), "html", null, true);
        echo ");
  }</style>




</div><div id=\"shopify-section-1546857355207\" class=\"shopify-section\"><!-- Featured Area Start -->
<div class=\"featured-area bg-3 pt-105 pb-90\" id=\"section-1546857355207\">
  <div class=\"container\">
    <div class=\"row\">


      <div class=\"col-lg-4 col-md-6\">
        <div class=\"featured-carousel-wrapper\">

          <h3>Organic <span>new arrivals</span></h3>

          <div class=\"feaured-carousel\">


<div class=\"single-featured-carousel\"><div class=\"single-featured-item 22279680360512\">
  <div class=\"feature-image\">
    <a href=\"products/2-new-badge-product.html\"><img src=\"";
        // line 3166
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/4_8d90a229-c59e-43cb-b38e-7987d086216a_121X121_crop_centera376.jpg?v=1547544059"), "html", null, true);
        echo "\" alt=\"2. New badge product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394982416448\"></span>
    </div>
    <h5><a href=\"products/2-new-badge-product.html\">2. New badge product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$80.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279680360512, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279566393408\">
  <div class=\"feature-image\">
    <a href=\"products/dummy-product-name.html\"><img src=\"";
        // line 3193
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/20_a8cf9962-f46a-463e-b7a3-36332cd7b081_121X121_crop_center8891.jpg?v=1547544312"), "html", null, true);
        echo "\" alt=\"Dummy product name\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394970161216\"></span>
    </div>
    <h5><a href=\"products/dummy-product-name.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$110.00</span></span>

      <span class=\"old-price\"><span class=money>\$130.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279566393408, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279557775424\">
  <div class=\"feature-image\">
    <a href=\"products/demo-product-title.html\"><img src=\"";
        // line 3222
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/15_cdc7c7c0-c033-4994-a6f6-a03e203550e8_121X121_crop_centerbadd.jpg?v=1547544239"), "html", null, true);
        echo "\" alt=\"Demo product title\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394969899072\"></span>
    </div>
    <h5><a href=\"products/demo-product-title.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$21.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279557775424, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279524024384\">
  <div class=\"feature-image\">
    <a href=\"products/dummy-product-name-1.html\"><img src=\"";
        // line 3251
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/19_419a1b30-3d98-47be-a047-662202d1834d_121X121_crop_centerb4f6.jpg?v=1547544279"), "html", null, true);
        echo "\" alt=\"Dummy product name\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394967605312\"></span>
    </div>
    <h5><a href=\"products/dummy-product-name-1.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$80.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279524024384, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
</div><div class=\"single-featured-carousel\"><div class=\"single-featured-item 22279509180480\">
  <div class=\"feature-image\">
    <a href=\"products/demo-product-title-1.html\"><img src=\"";
        // line 3278
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/14_7802946f-8d69-47c3-9f43-6e5389831cda_121X121_crop_centere64d.jpg?v=1547544231"), "html", null, true);
        echo "\" alt=\"Demo product title\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394966360128\"></span>
    </div>
    <h5><a href=\"products/demo-product-title-1.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$80.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279509180480, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279364345920\">
  <div class=\"feature-image\">
    <a href=\"products/dummy-product-name-2.html\"><img src=\"";
        // line 3305
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/18_108069c0-0263-4fdf-82a2-40b11668e40a_121X121_crop_centerd511.jpg?v=1547544263"), "html", null, true);
        echo "\" alt=\"Dummy product name\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394954661952\"></span>
    </div>
    <h5><a href=\"products/dummy-product-name-2.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$29.00</span></span>

    </div><div class=\"product-cart-action\">

        <button class=\"cart-disable feature-cart\">
          <span class=\"cart-text\"><i class=\"icon icon-FullShoppingCart\"></i></span>
        </button>

      </div></div>
</div>
<div class=\"single-featured-item 22279363297344\">
  <div class=\"feature-image\">
    <a href=\"products/demo-product-title-2.html\"><img src=\"";
        // line 3327
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/13_a4de9b0c-e87c-4068-a532-8ac6cc2fbb54_121X121_crop_center1139.jpg?v=1547544223"), "html", null, true);
        echo "\" alt=\"Demo product title\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394954530880\"></span>
    </div>
    <h5><a href=\"products/demo-product-title-2.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$50.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279363297344, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279349764160\">
  <div class=\"feature-image\">
    <a href=\"products/dummy-product-name-3.html\"><img src=\"";
        // line 3354
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/17_20906e90-7cb0-4285-9ac7-4ed8e3d9de58_121X121_crop_center46c6.jpg?v=1547544254"), "html", null, true);
        echo "\" alt=\"Dummy product name\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952761408\"></span>
    </div>
    <h5><a href=\"products/dummy-product-name-3.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div></div>
</div>
</div><div class=\"single-featured-carousel\"><div class=\"single-featured-item 22279348650048\">
  <div class=\"feature-image\">
    <a href=\"products/demo-product-title-3.html\"><img src=\"";
        // line 3368
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/12_995223f0-1a07-4a6f-a255-011aa7d2c1c6_121X121_crop_center50bf.jpg?v=1547544129"), "html", null, true);
        echo "\" alt=\"Demo product title\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952663104\"></span>
    </div>
    <h5><a href=\"products/demo-product-title-3.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div></div>
</div>
<div class=\"single-featured-item 22279328759872\">
  <div class=\"feature-image\">
    <a href=\"products/dummy-product-name-4.html\"><img src=\"";
        // line 3382
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/16_7802410c-98a0-499e-932b-c7bc47cd9cc9_121X121_crop_centerc061.jpg?v=1547544247"), "html", null, true);
        echo "\" alt=\"Dummy product name\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394951385152\"></span>
    </div>
    <h5><a href=\"products/dummy-product-name-4.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$79.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279328759872, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
</div></div>
        </div>
      </div>



      <div class=\"col-lg-4 col-md-6\">
        <div class=\"featured-carousel-wrapper\">

          <h3>Organic <span>bestseller</span></h3>

          <div class=\"feaured-carousel\">


<div class=\"single-featured-carousel\"><div class=\"single-featured-item 22279712014400\">
  <div class=\"feature-image\">
    <a href=\"products/1-new-and-sale-badge-product.html\"><img src=\"";
        // line 3423
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/1_121X121_crop_center1d58.jpg?v=1547544027"), "html", null, true);
        echo "\" alt=\"1. New and sale badge product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394984775744\"></span>
    </div>
    <h5><a href=\"products/1-new-and-sale-badge-product.html\">1. New and sale badge product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$110.00</span></span>

      <span class=\"old-price\"><span class=money>\$130.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279712014400, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279680360512\">
  <div class=\"feature-image\">
    <a href=\"products/2-new-badge-product.html\"><img src=\"";
        // line 3452
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/4_8d90a229-c59e-43cb-b38e-7987d086216a_121X121_crop_centera376.jpg?v=1547544059"), "html", null, true);
        echo "\" alt=\"2. New badge product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394982416448\"></span>
    </div>
    <h5><a href=\"products/2-new-badge-product.html\">2. New badge product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$80.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279680360512, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279645265984\">
  <div class=\"feature-image\">
    <a href=\"products/3-variable-product.html\"><img src=\"";
        // line 3479
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/5_f1b6a39a-df8a-4bfd-954d-b85a336fc61d_121X121_crop_centerec70.jpg?v=1547544068"), "html", null, true);
        echo "\" alt=\"3. Variable product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394976649280\"></span>
    </div>
    <h5><a href=\"products/3-variable-product.html\">3. Variable product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$70.00</span></span>

      <span class=\"old-price\"><span class=money>\$85.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279645265984, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279624851520\">
  <div class=\"feature-image\">
    <a href=\"products/4-soldout-product.html\"><img src=\"";
        // line 3508
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/6_74ad24f4-47da-473d-a864-16de95815367_121X121_crop_center1ddf.jpg?v=1547544076"), "html", null, true);
        echo "\" alt=\"4. Soldout product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394976387136\"></span>
    </div>
    <h5><a href=\"products/4-soldout-product.html\">4. Soldout product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$29.00</span></span>

    </div><div class=\"product-cart-action\">

        <button class=\"cart-disable feature-cart\">
          <span class=\"cart-text\"><i class=\"icon icon-FullShoppingCart\"></i></span>
        </button>

      </div></div>
</div>
</div><div class=\"single-featured-carousel\"><div class=\"single-featured-item 22279622885440\">
  <div class=\"feature-image\">
    <a href=\"products/5-simple-product.html\"><img src=\"";
        // line 3530
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/7_af41587b-4afc-4301-ba09-4a4a21eecdc5_121X121_crop_center4353.jpg?v=1548148372"), "html", null, true);
        echo "\" alt=\"5. Simple product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394976321600\"></span>
    </div>
    <h5><a href=\"products/5-simple-product.html\">5. Simple product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$50.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279622885440, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279616036928\">
  <div class=\"feature-image\">
    <a href=\"products/6-variable-with-soldout-product.html\"><img src=\"";
        // line 3557
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/8_7e2166e6-0d10-4984-94e4-0e2e75a52b57_121X121_crop_center4997.jpg?v=1547544092"), "html", null, true);
        echo "\" alt=\"6. Variable with soldout product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394975371328\"></span>
    </div>
    <h5><a href=\"products/6-variable-with-soldout-product.html\">6. Variable with soldout product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$55.00</span></span>

      <span class=\"old-price\"><span class=money>\$75.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279616036928, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279612334144\">
  <div class=\"feature-image\">
    <a href=\"products/7-sample-affiliate-product.html\"><img src=\"";
        // line 3586
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/9_ec55d235-976a-4038-b731-71d3e8b19104_121X121_crop_centerbf13.jpg?v=1547544100"), "html", null, true);
        echo "\" alt=\"7. Sample affiliate product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394975141952\"></span>
    </div>
    <h5><a href=\"products/7-sample-affiliate-product.html\">7. Sample affiliate product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div></div>
</div>
<div class=\"single-featured-item 22279608107072\">
  <div class=\"feature-image\">
    <a href=\"products/8-countdown-product.html\"><img src=\"";
        // line 3600
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/10_4162efee-35e1-4e52-8bf1-f197dc65425e_121X121_crop_centera365.jpg?v=1547544110"), "html", null, true);
        echo "\" alt=\"8. Countdown product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394974388288\"></span>
    </div>
    <h5><a href=\"products/8-countdown-product.html\">8. Countdown product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$39.00</span></span>

      <span class=\"old-price\"><span class=money>\$60.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279608107072, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
</div><div class=\"single-featured-carousel\"><div class=\"single-featured-item 22279603191872\">
  <div class=\"feature-image\">
    <a href=\"products/9-without-shortcode-product.html\"><img src=\"";
        // line 3629
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/11_9cdea39a-2717-43d1-8e62-933157dbbd66_121X121_crop_centercda6.jpg?v=1547544119"), "html", null, true);
        echo "\" alt=\"9. Without shortcode product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394973831232\"></span>
    </div>
    <h5><a href=\"products/9-without-shortcode-product.html\">9. Without shortcode product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$79.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279603191872, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279596539968\">
  <div class=\"feature-image\">
    <a href=\"products/10-this-is-the-large-title-for-testing-large-title-and-there-is-an-image-for-testing.html\"><img src=\"";
        // line 3656
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/2_1ff78ef6-6239-4f61-a0db-7bdb3501d8f3_121X121_crop_center61e0.jpg?v=1547544042"), "html", null, true);
        echo "\" alt=\"10. This is the large title for testing large title and there is an image for testing\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394973405248\"></span>
    </div>
    <h5><a href=\"products/10-this-is-the-large-title-for-testing-large-title-and-there-is-an-image-for-testing.html\">10. This is the large title for testing large title and there is an image for testing</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$21.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279596539968, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279593164864\">
  <div class=\"feature-image\">
    <a href=\"products/11-product-with-video.html\"><img src=\"";
        // line 3685
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/3_751e665b-a90f-4569-a221-bd51e40a2fdc_121X121_crop_center4e76.jpg?v=1547544050"), "html", null, true);
        echo "\" alt=\"11. Product with video\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394973110336\"></span>
    </div>
    <h5><a href=\"products/11-product-with-video.html\">11. Product with video</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$39.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279593164864, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279348650048\">
  <div class=\"feature-image\">
    <a href=\"products/demo-product-title-3.html\"><img src=\"";
        // line 3712
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/12_995223f0-1a07-4a6f-a255-011aa7d2c1c6_121X121_crop_center50bf.jpg?v=1547544129"), "html", null, true);
        echo "\" alt=\"Demo product title\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952663104\"></span>
    </div>
    <h5><a href=\"products/demo-product-title-3.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div></div>
</div>
</div></div>
        </div>
      </div>



      <div class=\"col-lg-4 col-md-6\">
        <div class=\"featured-carousel-wrapper\">

          <h3>Organic <span>most viewed</span></h3>

          <div class=\"feaured-carousel\">


<div class=\"single-featured-carousel\"><div class=\"single-featured-item 22279645265984\">
  <div class=\"feature-image\">
    <a href=\"products/3-variable-product.html\"><img src=\"";
        // line 3740
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/5_f1b6a39a-df8a-4bfd-954d-b85a336fc61d_121X121_crop_centerec70.jpg?v=1547544068"), "html", null, true);
        echo "\" alt=\"3. Variable product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394976649280\"></span>
    </div>
    <h5><a href=\"products/3-variable-product.html\">3. Variable product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$70.00</span></span>

      <span class=\"old-price\"><span class=money>\$85.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279645265984, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279624851520\">
  <div class=\"feature-image\">
    <a href=\"products/4-soldout-product.html\"><img src=\"";
        // line 3769
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/6_74ad24f4-47da-473d-a864-16de95815367_121X121_crop_center1ddf.jpg?v=1547544076"), "html", null, true);
        echo "\" alt=\"4. Soldout product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394976387136\"></span>
    </div>
    <h5><a href=\"products/4-soldout-product.html\">4. Soldout product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$29.00</span></span>

    </div><div class=\"product-cart-action\">

        <button class=\"cart-disable feature-cart\">
          <span class=\"cart-text\"><i class=\"icon icon-FullShoppingCart\"></i></span>
        </button>

      </div></div>
</div>
<div class=\"single-featured-item 22279622885440\">
  <div class=\"feature-image\">
    <a href=\"products/5-simple-product.html\"><img src=\"";
        // line 3791
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/7_af41587b-4afc-4301-ba09-4a4a21eecdc5_121X121_crop_center4353.jpg?v=1548148372"), "html", null, true);
        echo "\" alt=\"5. Simple product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394976321600\"></span>
    </div>
    <h5><a href=\"products/5-simple-product.html\">5. Simple product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$50.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279622885440, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279616036928\">
  <div class=\"feature-image\">
    <a href=\"products/6-variable-with-soldout-product.html\"><img src=\"";
        // line 3818
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/8_7e2166e6-0d10-4984-94e4-0e2e75a52b57_121X121_crop_center4997.jpg?v=1547544092"), "html", null, true);
        echo "\" alt=\"6. Variable with soldout product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394975371328\"></span>
    </div>
    <h5><a href=\"products/6-variable-with-soldout-product.html\">6. Variable with soldout product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$55.00</span></span>

      <span class=\"old-price\"><span class=money>\$75.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279616036928, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
</div><div class=\"single-featured-carousel\"><div class=\"single-featured-item 22279612334144\">
  <div class=\"feature-image\">
    <a href=\"products/7-sample-affiliate-product.html\"><img src=\"";
        // line 3847
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/9_ec55d235-976a-4038-b731-71d3e8b19104_121X121_crop_centerbf13.jpg?v=1547544100"), "html", null, true);
        echo "\" alt=\"7. Sample affiliate product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394975141952\"></span>
    </div>
    <h5><a href=\"products/7-sample-affiliate-product.html\">7. Sample affiliate product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div></div>
</div>
<div class=\"single-featured-item 22279608107072\">
  <div class=\"feature-image\">
    <a href=\"products/8-countdown-product.html\"><img src=\"";
        // line 3861
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/10_4162efee-35e1-4e52-8bf1-f197dc65425e_121X121_crop_centera365.jpg?v=1547544110"), "html", null, true);
        echo "\" alt=\"8. Countdown product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394974388288\"></span>
    </div>
    <h5><a href=\"products/8-countdown-product.html\">8. Countdown product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$39.00</span></span>

      <span class=\"old-price\"><span class=money>\$60.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279608107072, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279603191872\">
  <div class=\"feature-image\">
    <a href=\"products/9-without-shortcode-product.html\"><img src=\"";
        // line 3890
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/11_9cdea39a-2717-43d1-8e62-933157dbbd66_121X121_crop_centercda6.jpg?v=1547544119"), "html", null, true);
        echo "\" alt=\"9. Without shortcode product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394973831232\"></span>
    </div>
    <h5><a href=\"products/9-without-shortcode-product.html\">9. Without shortcode product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$79.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279603191872, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279557775424\">
  <div class=\"feature-image\">
    <a href=\"products/demo-product-title.html\"><img src=\"";
        // line 3917
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/15_cdc7c7c0-c033-4994-a6f6-a03e203550e8_121X121_crop_centerbadd.jpg?v=1547544239"), "html", null, true);
        echo "\" alt=\"Demo product title\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394969899072\"></span>
    </div>
    <h5><a href=\"products/demo-product-title.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$21.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279557775424, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
</div><div class=\"single-featured-carousel\"><div class=\"single-featured-item 22279509180480\">
  <div class=\"feature-image\">
    <a href=\"products/demo-product-title-1.html\"><img src=\"";
        // line 3946
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/14_7802946f-8d69-47c3-9f43-6e5389831cda_121X121_crop_centere64d.jpg?v=1547544231"), "html", null, true);
        echo "\" alt=\"Demo product title\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394966360128\"></span>
    </div>
    <h5><a href=\"products/demo-product-title-1.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$80.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279509180480, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279363297344\">
  <div class=\"feature-image\">
    <a href=\"products/demo-product-title-2.html\"><img src=\"";
        // line 3973
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/13_a4de9b0c-e87c-4068-a532-8ac6cc2fbb54_121X121_crop_center1139.jpg?v=1547544223"), "html", null, true);
        echo "\" alt=\"Demo product title\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394954530880\"></span>
    </div>
    <h5><a href=\"products/demo-product-title-2.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$50.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279363297344, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279348650048\">
  <div class=\"feature-image\">
    <a href=\"products/demo-product-title-3.html\"><img src=\"";
        // line 4000
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/12_995223f0-1a07-4a6f-a255-011aa7d2c1c6_121X121_crop_center50bf.jpg?v=1547544129"), "html", null, true);
        echo "\" alt=\"Demo product title\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952663104\"></span>
    </div>
    <h5><a href=\"products/demo-product-title-3.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div></div>
</div>
<div class=\"single-featured-item 22279328759872\">
  <div class=\"feature-image\">
    <a href=\"products/dummy-product-name-4.html\"><img src=\"";
        // line 4014
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/16_7802410c-98a0-499e-932b-c7bc47cd9cc9_121X121_crop_centerc061.jpg?v=1547544247"), "html", null, true);
        echo "\" alt=\"Dummy product name\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394951385152\"></span>
    </div>
    <h5><a href=\"products/dummy-product-name-4.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$79.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279328759872, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
</div></div>
        </div>
      </div>


    </div>
  </div>
</div>
<!-- Featured Area End --><style data-shopify>#section-1546857355207{}
  @media (min-width: 768px) and (max-width: 991px) {
    #section-1546857355207{}
  }
  @media (max-width: 767px) {
    #section-1546857355207{}
  }

  .bg-3 {
    background-image:url(";
        // line 4056
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/3_ab6fbf30-cbdf-45cc-b160-a122e65dd0eb6059.jpg?v=1548065923"), "html", null, true);
        echo ");
  }</style><script>

  /*------------------------------------------
\tFeatured Carousel Slider
\t--------------------------------------------*/
\tvar fetauredSlider = \$('.feaured-carousel');
\tfetauredSlider.slick({
\t\tarrows: true,
\t\tautoplay: false,
\t\tinfinite: true,slidesToShow: 1,
\t\tslidesToScoll: 1,
\t\tprevArrow: '<button type=\"button\" class=\"slick-prev\"><i class=\"fa fa-angle-left\"></i></button>',
\t\tnextArrow: '<button type=\"button\" class=\"slick-next\"><i class=\"fa fa-angle-right\"></i></button>',
\t\tresponsive: [
\t\t\t{
\t\t\t\tbreakpoint: 991,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 1,
\t\t\t\t\tcenterMode: false,
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 767,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 1,
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 479,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 1,
\t\t\t\t\tarrows: false,
\t\t\t\t\tdots: false,
\t\t\t\t}
\t\t\t}
\t\t]
\t});


</script>







</div><div id=\"shopify-section-1546860898892\" class=\"shopify-section\"><!-- Testimonial Area Start -->
<div class=\"testimonial-area pt-110 pb-95\" id=\"section-1546860898892\">

</div>
<!-- Testimonial Area End --><style data-shopify>#section-1546860898892{}
  @media (min-width: 768px) and (max-width: 991px) {
    #section-1546860898892{}
  }
  @media (max-width: 767px) {
    #section-1546860898892{}
  }
  #section-1546860898892 .single-banner a:before {
      background-color:
     opacity : 0.5 ;
  }</style>
    <script>
  /*----------------------------------------
\tTestimonial Slider
\t------------------------------------------*/
\t\$('.text-carousel').slick({
\t\tslidesToShow: 1,
\t\tslidesToScroll: 1,
\t\tarrows: true,
\t\tprevArrow: '<button type=\"button\" class=\"slick-prev\"><i class=\"fa fa-angle-left\"></i></button>',
\t\tnextArrow: '<button type=\"button\" class=\"slick-next\"><i class=\"fa fa-angle-right\"></i></button>',fade: false,asNavFor: '.image-carousel',
\t\tresponsive: [
\t\t\t{
\t\t\t  breakpoint: 479,
\t\t\t\tsettings: {
\t\t\t\t\tarrows: false
\t\t\t\t}
\t\t\t}
\t\t]
\t});
\t\$('.image-carousel').slick({
\t\tslidesToShow: 3,
\t\tslidesToScroll: 1,
\t\tasNavFor: '.text-carousel',
\t\tarrows: false,dots: false,
\t\tcenterMode: true,
\t\tfocusOnSelect: true
\t});

</script>







</div><div id=\"shopify-section-1541244011012\" class=\"shopify-section\"><!-- Blog Area Start -->
<div class=\"blog-area pb-95\" id=\"section-1541244011012\">
  <div class=\"container\">


    <div class=\"section-title text-center mb-50\">
      <div class=\"section-img d-flex justify-content-center\">

        <img src=\"";
        // line 4163
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/titlef59e.png?v=1546753447"), "html", null, true);
        echo "\" alt=\"slider images\">

      </div>
      <h2><span>Organic </span>from our blog</h2>
    </div>


  </div>
  <div class=\"container\">
    <div class=\"custom-row\">
      <div class=\"blog-carousel\">

        <div class=\"custom-col text-center\">
\t\t\t<div class=\"single-blog\">
  <div class=\"blog-image\">
    <a href=\"blogs/news/coconut-improve-heart-and-immunity-1.html\"><img src=\"";
        // line 4178
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/articles/1_370x267_crop_centere570.jpg?v=1547011780"), "html", null, true);
        echo "\" alt=\"Coconut improve heart and immunity.\" /></a>
  </div>
  <div class=\"blog-text\">
    <h4><a href=\"blogs/news/coconut-improve-heart-and-immunity-1.html\">Coconut improve heart and immunity.</a></h4>
    <div class=\"post-meta\">
      <span class=\"author-name\">post by: <span>Naturecircle Admin</span></span>
      <span class=\"post-date\"> - 08 Jan, 2019</span>
    </div>

    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero...</p>

    <a href=\"blogs/news/coconut-improve-heart-and-immunity-1.html\" class=\"default-btn\">Read more</a>
  </div>
</div>
        </div>

        <div class=\"custom-col text-center\">
\t\t\t<div class=\"single-blog\">
  <div class=\"blog-image\">
    <a href=\"blogs/news/coconut-improve-heart-and-immunity-2.html\"><img src=\"";
        // line 4197
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/articles/2_370x267_crop_center772e.jpg?v=1547011786"), "html", null, true);
        echo "\" alt=\"Coconut improve heart and immunity.\" /></a>
  </div>
  <div class=\"blog-text\">
    <h4><a href=\"blogs/news/coconut-improve-heart-and-immunity-2.html\">Coconut improve heart and immunity.</a></h4>
    <div class=\"post-meta\">
      <span class=\"author-name\">post by: <span>Naturecircle Admin</span></span>
      <span class=\"post-date\"> - 08 Jan, 2019</span>
    </div>

    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero...</p>

    <a href=\"blogs/news/coconut-improve-heart-and-immunity-2.html\" class=\"default-btn\">Read more</a>
  </div>
</div>
        </div>

        <div class=\"custom-col text-center\">
\t\t\t<div class=\"single-blog\">
  <div class=\"blog-image\">
    <a href=\"blogs/news/the-most-healthful-food-you-can-eat-3.html\"><img src=\"";
        // line 4216
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/articles/3_370x267_crop_centerdfa0.jpg?v=1547011788"), "html", null, true);
        echo "\" alt=\"The most healthful food you can eat.\" /></a>
  </div>
  <div class=\"blog-text\">
    <h4><a href=\"blogs/news/the-most-healthful-food-you-can-eat-3.html\">The most healthful food you can eat.</a></h4>
    <div class=\"post-meta\">
      <span class=\"author-name\">post by: <span>Naturecircle Admin</span></span>
      <span class=\"post-date\"> - 08 Jan, 2019</span>
    </div>

    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero...</p>

    <a href=\"blogs/news/the-most-healthful-food-you-can-eat-3.html\" class=\"default-btn\">Read more</a>
  </div>
</div>
        </div>

        <div class=\"custom-col text-center\">
\t\t\t<div class=\"single-blog\">
  <div class=\"blog-image\">
    <a href=\"blogs/news/the-most-healthful-food-you-can-eat-2.html\"><img src=\"";
        // line 4235
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/articles/5_370x267_crop_centerfed0.jpg?v=1547011327"), "html", null, true);
        echo "\" alt=\"The most healthful food you can eat.\" /></a>
  </div>
  <div class=\"blog-text\">
    <h4><a href=\"blogs/news/the-most-healthful-food-you-can-eat-2.html\">The most healthful food you can eat.</a></h4>
    <div class=\"post-meta\">
      <span class=\"author-name\">post by: <span>Naturecircle Admin</span></span>
      <span class=\"post-date\"> - 08 Jan, 2019</span>
    </div>

    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero...</p>

    <a href=\"blogs/news/the-most-healthful-food-you-can-eat-2.html\" class=\"default-btn\">Read more</a>
  </div>
</div>
        </div>

        <div class=\"custom-col text-center\">
\t\t\t<div class=\"single-blog\">
  <div class=\"blog-image\">
    <a href=\"blogs/news/the-most-healthful-food-you-can-eat-1.html\"><img src=\"";
        // line 4254
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/articles/4_370x267_crop_center43e4.jpg?v=1547011267"), "html", null, true);
        echo "\" alt=\"The most healthful food you can eat.\" /></a>
  </div>
  <div class=\"blog-text\">
    <h4><a href=\"blogs/news/the-most-healthful-food-you-can-eat-1.html\">The most healthful food you can eat.</a></h4>
    <div class=\"post-meta\">
      <span class=\"author-name\">post by: <span>Naturecircle Admin</span></span>
      <span class=\"post-date\"> - 08 Jan, 2019</span>
    </div>

    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero...</p>

    <a href=\"blogs/news/the-most-healthful-food-you-can-eat-1.html\" class=\"default-btn\">Read more</a>
  </div>
</div>
        </div>

        <div class=\"custom-col text-center\">
\t\t\t<div class=\"single-blog\">
  <div class=\"blog-image\">
    <a href=\"blogs/news/delicious-and-nutritious-vegetable.html\"><img src=\"";
        // line 4273
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/articles/6_3c7f43ec-55a0-4f1c-adc7-eed87edf079f_370x267_crop_centerde6b.jpg?v=1547011726"), "html", null, true);
        echo "\" alt=\"Delicious and nutritious vegetable.\" /></a>
  </div>
  <div class=\"blog-text\">
    <h4><a href=\"blogs/news/delicious-and-nutritious-vegetable.html\">Delicious and nutritious vegetable.</a></h4>
    <div class=\"post-meta\">
      <span class=\"author-name\">post by: <span>Naturecircle Admin</span></span>
      <span class=\"post-date\"> - 08 Jan, 2019</span>
    </div>

    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero...</p>

    <a href=\"blogs/news/delicious-and-nutritious-vegetable.html\" class=\"default-btn\">Read more</a>
  </div>
</div>
        </div>

        <div class=\"custom-col text-center\">
\t\t\t<div class=\"single-blog\">
  <div class=\"blog-image\">
    <a href=\"blogs/news/coconut-improve-heart-and-immunity.html\"><img src=\"";
        // line 4292
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/articles/8_64f3f1da-f923-468f-ae2b-20c9d2dff10a_370x267_crop_center9d9f.jpg?v=1547011737"), "html", null, true);
        echo "\" alt=\"Coconut improve heart and immunity.\" /></a>
  </div>
  <div class=\"blog-text\">
    <h4><a href=\"blogs/news/coconut-improve-heart-and-immunity.html\">Coconut improve heart and immunity.</a></h4>
    <div class=\"post-meta\">
      <span class=\"author-name\">post by: <span>Naturecircle Admin</span></span>
      <span class=\"post-date\"> - 08 Jan, 2019</span>
    </div>

    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero...</p>

    <a href=\"blogs/news/coconut-improve-heart-and-immunity.html\" class=\"default-btn\">Read more</a>
  </div>
</div>
        </div>

        <div class=\"custom-col text-center\">
\t\t\t<div class=\"single-blog\">
  <div class=\"blog-image\">
    <a href=\"blogs/news/the-most-healthful-food-you-can-eat.html\"><img src=\"";
        // line 4311
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/articles/7_e7f1a847-fc6e-4e4b-9001-97717ad0339b_370x267_crop_centera225.jpg?v=1547011746"), "html", null, true);
        echo "\" alt=\"The most healthful food you can eat.\" /></a>
  </div>
  <div class=\"blog-text\">
    <h4><a href=\"blogs/news/the-most-healthful-food-you-can-eat.html\">The most healthful food you can eat.</a></h4>
    <div class=\"post-meta\">
      <span class=\"author-name\">post by: <span>Naturecircle Admin</span></span>
      <span class=\"post-date\"> - 08 Jan, 2019</span>
    </div>

    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero...</p>

    <a href=\"blogs/news/the-most-healthful-food-you-can-eat.html\" class=\"default-btn\">Read more</a>
  </div>
</div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- Blog Area End --><style data-shopify>#section-1541244011012{padding-top: 0px;
    padding-bottom: 100px;}
  @media (min-width: 768px) and (max-width: 991px) {
    #section-1541244011012{padding-top: 0px;
      padding-bottom: 80px;}
  }
  @media (max-width: 767px) {
    #section-1541244011012{padding-top: 0px;
      padding-bottom: 60px;}
  }</style><script>
  /*---------------------------------------
\tBlog Carousel
\t-----------------------------------------*/
\tvar blogSlider = \$('.blog-carousel');
\tblogSlider.slick({
\t\tarrows: true,
\t\tautoplay: false,
\t\tinfinite: true,slidesToShow: 3,
\t\tslidesToScoll: 1,
\t\tprevArrow: '<button type=\"button\" class=\"slick-prev\"><i class=\"fa fa-angle-left\"></i></button>',
\t\tnextArrow: '<button type=\"button\" class=\"slick-next\"><i class=\"fa fa-angle-right\"></i></button>',
\t\tresponsive: [
\t\t\t{
\t\t\t\tbreakpoint: 991,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 2,
\t\t\t\t\tcenterMode: false,
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 767,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 1,
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 479,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 1
\t\t\t\t}
\t\t\t}
\t\t]
\t});
</script>


</div><!-- END content_for_index -->
    </main>

    <div id=\"shopify-section-footer\" class=\"shopify-section\"><!-- Footer Area Start -->
<footer class=\"footer-area\">
  <!-- Footer Top Area Start -->
    ";
        // line 4383
        $this->displayBlock('footer', $context, $blocks);
        // line 4649
        echo "  <!-- Footer Bottom Area End -->
</footer>
<!-- Footer Area End -->


<style>
  .bg-4 {
    background-image:url(";
        // line 4656
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/4ecdb.jpg?v=1546506413"), "html", null, true);
        echo ");
    background-position: top center;
  }
  .bg-4 {
    background: ;
  }
  .newsletter-area {
      background-color: !important;
  }
  .footer-policy-box p i.icon {
    border: 1px solid #12a4dd;
    color: #12a4dd;
  }
  .footer-menu ul li a:hover {
    color: #12a4dd;
  }

</style>

<script src=\"";
        // line 4675
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/instafeed.mind645.js?40"), "html", null, true);
        echo "\"></script>

</div>

    <!-- Necessary JS -->
    <script src=\"";
        // line 4680
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/fastclick.mind645.js?40"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 4681
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/timberd645.js?40"), "html", null, true);
        echo "\"></script>

<script>

</script>
<!-- modalAddToCart Error -->
<div class=\"modal fade ajax-popup error-ajax-popup\" id=\"modalAddToCartError\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog white-modal modal-md\">
    <div class=\"modal-content \">
      <div class=\"modal-body\">
        <div class=\"modal-content-text\">
          <p class=\"error_message\"></p>
        </div>
        <div class=\"modal-close\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><i class=\"fa fa-times-circle\"></i></button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  \$(function() {
    // Current Ajax request.
    var currentAjaxRequest = null;
    // Grabbing all search forms on the page, and adding a .search-results list to each.
    var searchForms = \$('form[action=\"/search\"]').css('position','relative').each(function() {
      // Grabbing text input.
      var input = \$(this).find('input[name=\"q\"]');
      // Adding a list for showing search results.
      var offSet = input.position().top + input.innerHeight();
      \$('<ul class=\"search-results home-two\"></ul>').css( { 'position': 'absolute', 'left': '0px', 'top': offSet } ).appendTo(\$(this)).hide();
      // Listening to keyup and change on the text field within these search forms.
      input.attr('autocomplete', 'off').bind('keyup change', function() {
        // What's the search term?
        var term = \$(this).val();
        // What's the search form?
        var form = \$(this).closest('form');
        // What's the search URL?
        var searchURL = '/search?type=product&q=' + term;
        // What's the search results list?
        var resultsList = form.find('.search-results');
        // If that's a new term and it contains at least 3 characters.
        if (term.length > 3 && term != \$(this).attr('data-old-term')) {
          // Saving old query.
          \$(this).attr('data-old-term', term);
          // Killing any Ajax request that's currently being processed.
          if (currentAjaxRequest != null) currentAjaxRequest.abort();
          // Pulling results.
          currentAjaxRequest = \$.getJSON(searchURL + '&view=json', function(data) {
            // Reset results.
            resultsList.empty();
            // If we have no results.
            if(data.results_count == 0) {
              // resultsList.html('<li><span class=\"title\">No results.</span></li>');
              // resultsList.fadeIn(100);
              resultsList.hide();
            } else {
              // If we have results.
              \$.each(data.results, function(index, item) {
                var link = \$('<a></a>').attr('href', item.url);
                link.append('<span class=\"thumbnail\"><img src=\"' + item.thumbnail + '\" /></span>');
                link.append('<span class=\"title\">' + item.title + '</span>');
                link.wrap('<li></li>');
                resultsList.append(link.parent());
              });
              // The Ajax request will return at the most 10 results.
              // If there are more than 10, let's link to the search results page.
              if(data.results_count > 10) {
                resultsList.append('<li><span class=\"title\"><a href=\"' + searchURL + '\">See all results (' + data.results_count + ')</a></span></li>');
              }
              resultsList.fadeIn(100);
            }
          });
        }
      });
    });
    // Clicking outside makes the results disappear.
    \$('body').bind('click', function(){
      \$('.search-results').hide();
    });
  });
</script>

<!-- Some styles to get you started. -->
<style>
  .search-results {
    z-index: 8889;
    list-style-type: none;
    width: 190px;
    margin: 0;
    padding: 0;
    background: #ffffff;
    border: 1px solid #cccccc;
    border-radius: 0px;
    -webkit-box-shadow: 0px 4px 7px 0px rgba(0,0,0,0.1);
    box-shadow: 0px 4px 7px 0px rgba(0,0,0,0.1);
    overflow: hidden;
  }
  .search-results li {
    display: block;
    width: 100%;
    height: 38px;
    margin: 0;
    padding: 0;
    border-top: 1px solid #cccccc;
    line-height: 38px;
    overflow: hidden;
  }
  .search-results li:first-child {
    border-top: none;
  }
  .search-results .title {
    float: left;
    width: 140px;
    padding-left: 8px;
    white-space: nowrap;
    overflow: hidden;
    /* The text-overflow property is supported in all major browsers. */
    text-overflow: ellipsis;
    -o-text-overflow: ellipsis;
    text-align: left;
    font-size:12px;
    line-height:38px;
    color:#515151;
  }
  .search-results .title:hover{
    color:#CE9634;
  }
  .search-results .thumbnail {
    float: left;
    display: block;
    width: 32px;
    height: 32px;
    margin: 3px 0 3px 3px;
    padding: 0;
    text-align: center;
    overflow: hidden;
    border-radius:0px;
  }
</style>

<div class=\"modal fade productModal\" id=\"quickViewModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-body\">
        <div class=\"row\">
          <div class=\"col-lg-6 col-md-6 col-12\">
            <div class=\"qwick-view-left\">
              <div class=\"quick-view-learg-img\">
                <div class=\"quick-view-tab-content tab-content\">
                  <div class=\"product-main-image__item\">
                    <div class=\"img_box_1\"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-lg-6 col-md-6 col-12\">
            <div class=\"qwick-view-right\">
              <div class=\"qwick-view-content\">
                <h1 class=\"product_title\">FROM_JS</h1>
                <div class=\"product-price product-info__price price-part\">
                  <span class=\"main\">jsprice</span>
                  <span class=\"price-box__new\">jsprice</span>
                </div>
                <div class=\"product-rating spr-badge-caption-none\">
                  <div class=\"quick-view-rating rating\">FROM_JS</div>
                </div>

                <div class=\"short-description product-des\">FROM_JS</div>

                <form id=\"add-item-qv\" action=\"https://naturecircle.myshopify.com/cart/add\" method=\"post\">
                  <div class=\"quick-view-select variants select-option-part\"></div>
                  <div class=\"quickview-plus-minus\">
                    <div class=\"cart-plus-minus\">
                      <input type=\"text\" value=\"01\" name=\"quantity\" class=\"cart-plus-minus-box\">
                    </div>
                    <div class=\"quickview-btn-cart\">
                      <button type=\"submit\" class=\"addtocartqv theme-default-button\">Add to cart</button>
                    </div>
                  </div>
                  <script>
                    jQuery('.addtocartqv').click(function(e) {
                      e.preventDefault();
                      Shopify.addItemFromFormStart('add-item-qv', jQuery(this).attr('id'));
                    });
                  </script>
                </form>
              </div>
            </div>
          </div>
        </div>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span class=\"close-icon\" aria-hidden=\"true\">x</span>
        </button>
      </div>
    </div>
  </div>
</div>

<div class=\"quickViewModal_info\" style=\"display: none;\">
  <div class=\"button\">Add to cart</div>
  <div class=\"button_added\">Added</div>
  <div class=\"button_error\">Limit Products</div>
  <div class=\"button_wait\">Wait..</div>
</div>

<script>
  var mainImage = '';
  jQuery(function (\$) {

    quiqview = function(product_handle) {
      Shopify.getProduct(product_handle);
    }
    Shopify.onProduct = function(product) {
      \$('.viewfullinfo').attr('href', product.url);

      // product description without shortcode
      text_truncate = function(str, length, ending) {
        if (length == null) {
          length = 500;
        }
        if (ending == null) {
          ending = '...';
        }
        if (str.length > length) {
          return str.substring(0, length - ending.length) + ending;
        } else {
          return str;
        }
      };

      var _parent = '#quickViewModal';
      \$(_parent+' .product_title').text(product.title);



      // product rating
      \$(_parent+' .rating').empty();
      \$(_parent+' .rating').append(\"<span class=\\\"shopify-product-reviews-badge\\\" data-id=\\\"\"+product.id+\"\\\"></span>\");


      //check variants
      var variant = '';

      for (i = 0; i < product.variants.length; i++) {
        if(product.variants[i].inventory_quantity > 0) {
          variant = product.variants[i];
          break;
        }
      }

      if(variant == '') {
        for (i = 0; i < product.variants.length; i++) {
          if(product.variants[i].inventory_policy == \"continue\") {
            variant = product.variants[i];
            break;
          }
        }
        if(variant == '') {
          variant = product.variants[0];
        }
      }

      mainImage = product.featured_image;
      var shopifyimgurl = variant.featured_image ? variant.featured_image.src : product.featured_image;
      var imgurl = \"<img class=\\\"full-width\\\" alt=\\\"\\\" src = \\\"\"+shopifyimgurl+\"\\\" >\";
      jQuery(_parent+' .product-main-image__item .img_box_1').empty();
      jQuery(_parent+' .product-main-image__item .img_box_1').append(imgurl);
      jQuery(_parent+' .product-main-image__item .img_box_2').empty();
      jQuery(_parent+' .product-main-image__item .img_box_2').append(imgurl);

      // product description with shortcode
      var desc = product.description;
      if (desc.indexOf(\"[short_description]\") >= 0) {
        desc = desc.split(\"[short_description]\");
        desc = desc[1].split(\"[/short_description]\");
        \$(_parent+' .product-des').show();
        \$(_parent+' .product-des').html(desc[0]);
      }
      else {
        \$(_parent+' .product-des').html(text_truncate(product.description,250));
      }

      //set variants property
      var inv_qua = variant.inventory_quantity;
      //price
      if(variant.price < variant.compare_at_price) {
        \$('.price-part .main').addClass('amount');
        \$('.price-part .price-box__new').show();
        changePriceValue('.price-part .main', variant.compare_at_price);
        changePriceValue('.price-part .price-box__new', variant.price);
      }
      else {
        \$('.price-part .price-box__new').hide();
        \$('.price-part .main').removeClass('amount');
        changePriceValue('.price-part .main', variant.price);
      }

      // Variants select
      if(product.variants.length > 1) {
        var variants_margin = product.options.length == 2 ? 'variants_margin' : '';

        var select = '<select id=\"product-select-qv\" name=\"id\">';
        var selected = 'selected';
        for (i = 0; i < product.variants.length; i++) {
          var _var = product.variants[i];
          if(_var.available) {
           \$('.variants').html(select);

            //parametres
            setParametresText(_parent+' .product-sku', variant.sku);
            if(jQuery(_parent + ' .product-sku').length) {
              var \$ava = jQuery(_parent + \" .product-info__availabilitu\");
              if(variant.sku != \"\") {
                if(\$ava.hasClass('pull-left')){ \$ava.removeClass('pull-left') }
              } else {
                if(!\$ava.hasClass('pull-left')){ \$ava.addClass('pull-left') }
              }
            }

            //quantity
            var out_of_stock = false;
            if(variant.inventory_management) {
              if(inv_qua > 0) {
                \$(_parent+' .product-availability').text(inv_qua + \" In Stock\");
                                                         }
                                                         else {
                                                         out_of_stock = true;
                                                         \$(_parent+' .product-availability').text(\"In Stock\");
                                                                                                  }
                                                                                                  }
                                                                                                  else {
                                                                                                  \$(_parent+' .product-availability').text(\"Many in stock\");
                                                                                                                                           }

                                                                                                                                           // button
                                                                                                                                           if(!out_of_stock || variant.inventory_policy == \"continue\") {
                  \$('.product-available').show();
                  \$('.product-disable').hide();
                  \$('.addtocartqv').attr('id', product.id );
                }
                else {
                  \$('.product-available').hide();
                  \$('.product-disable').show();
                }

                if (product.available && product.variants.length > 1) {
                  new Shopify.OptionSelectors(\"product-select-qv\", { product: product, onVariantSelected: selectCallbackQv, enableHistoryState: true });

                  if(\$('#quickViewModal .variants_selects .selector-wrapper').length > 0) {
                    \$.each( jQuery('#quickViewModal .variants_selects .selector-wrapper'), function(index) {
                      \$(this).find('label').text(product.options[index].name);
                    });
                  }
                }
                else {
                  jQuery('.currency .active').trigger('click');
                }
                selectGrid(_parent);

                if(\$(\".spr-badge\").length > 0) {
                  \$.getScript(window.location.protocol + \"//productreviews.shopifycdn.com/assets/v4/spr.js\");
                }

                if(\$(\".selector-wrapper label\").length) {
                  \$(\".selector-wrapper label\").each(function( index ) {
                    \$(this).text(jQuery(this).text() + \":\");
                  });
                }

                \$(_parent).modal('show');

                if( !( 'ontouchstart' in window ) &&
                   !navigator.msMaxTouchPoints &&
                   !navigator.userAgent.toLowerCase().match( /windows phone os 7/i ) ) return false;

                \$j('body').css(\"top\", -\$j('body').scrollTop());
                \$j('body').addClass(\"no-scroll\");
                \$j('.close').click(function(){
                  var top = parseInt(\$j('body').css(\"top\").replace(\"px\", \"\"))*-1;
                  \$j('body').removeAttr(\"style\");
                  \$j('body').removeClass(\"no-scroll\");
                  \$j('body').scrollTop(top);
                });
              }

              function setParametresText(obj, value) {
                if(value != '') {
                  \$(obj).parent().show();
                  \$(obj).text(value);
                }
                else {
                  \$(obj).parent().hide();
                }
              }




                             var selectCallbackQv = function(variant, selector) {

                  var _parent = '#quickViewModal';
                  var _parentprice = _parent + ' .price-part';
                  if (!variant) {
                    jQuery(_parent + \" .price-box\").hide();
                    jQuery(_parent + \" .qwt\").hide();
                    jQuery(_parent + \" .control-console\").hide();
                    jQuery(_parent + ' .addtocartqv').attr('disabled','disabled');
                    jQuery(_parent + ' .addtocartqv').text('Unavailable');
                                                           return false;
                                                           }

                                                           jQuery(_parent + \" .price-box\").show();
                    jQuery(_parent + \" .qwt\").show();
                    jQuery(_parent + \" .control-console\").show();

                    if(variant.price < variant.compare_at_price){
                      jQuery(_parentprice + ' .main').addClass('price-box__old');
                      jQuery(_parentprice + ' .price-box__new').show();
                      changePriceValue(_parentprice + ' .main', variant.compare_at_price);
                      changePriceValue(_parentprice + ' .price-box__new', variant.price);
                    } else {
                      jQuery(_parentprice + ' .price-box__new').hide();
                      jQuery(_parentprice + ' .main').removeClass('price-box__old');
                      changePriceValue(_parentprice + ' .main', variant.price);
                    }

                    newVariantTextDataQv(_parent + ' .product-sku', variant.sku);

                    if(jQuery(_parent + ' .product-sku').length) {
                      var \$ava = jQuery(_parent + \" .product-info__availabilitu\");
                      if(variant.sku != \"\") {
                        if(\$ava.hasClass('pull-left')){ \$ava.removeClass('pull-left') }
                      } else {
                        if(!\$ava.hasClass('pull-left')){ \$ava.addClass('pull-left') }
                      }
                    }

                    if (variant.available) {
                      if (variant.inventory_management == null) {
                        jQuery(_parent + \" .product-availability\").text(\"Many in stock\");
                                                                        } else {
                                                                        jQuery(_parent + \" .product-availability\").text(\" Many in stock\");
                                                                                                                        }
                                                                                                                        } else {
                                                                                                                        jQuery(_parent + \" .product-availability\").text(\"Sold Out\");
      }

\t  var shopifyimgurl = variant.featured_image ? variant.featured_image.src : mainImage;
      var imgurl = \"<img class=\\\"full-width\\\" alt=\\\"\\\" src = \\\"\"+shopifyimgurl+\"\\\" >\";
\t  if(jQuery(_parent+' .product-main-image__item .img_box_1').children().length > 0) {
                          var detach = jQuery(_parent+' .product-main-image__item .img_box_1 img').detach();
                          jQuery(_parent+' .product-main-image__item .img_box_2').empty();
                          jQuery(_parent+' .product-main-image__item .img_box_2').append(detach);
                        }
                        jQuery(_parent+' .product-main-image__item .img_box_1').empty();
                        jQuery(_parent+' .product-main-image__item .img_box_1').append(imgurl);

                        if (variant && variant.available) {
                          jQuery(_parent + ' .addtocartqv').removeAttr('disabled');
                          jQuery(_parent + ' .addtocartqv').html('Add to Cart');
                                                                 jQuery(_parent + \" .control-console\").show();
                        } else {
                          jQuery(_parent + ' .addtocartqv').attr('disabled','disabled');
                          jQuery(_parent + ' .addtocartqv').text('Unavailable');
                                                                 jQuery(_parent + \" .control-console\").hide();
                        }

                        jQuery('.currency .active').trigger('click');
                      };



                      function selectGrid(_parent) {
                        setTimeout(timeout, 5);
                        function timeout() {
                          if(jQuery(_parent + \" .selector-wrapper\").length > 2){
                            jQuery(_parent + \" .single-option-selector\").addClass(\"select--wd\");
                          } else if(jQuery(_parent + \" .selector-wrapper\").length == 1){
                            jQuery(_parent + \" .single-option-selector\").before(\"<label></label>\");
                                                                                jQuery(_parent + \" .single-option-selector\").addClass(\"select--wd\");
                          }
                        }
                      };
</script>

<!-- END QUICKVIEW PRODUCT -->

<script>
  \$(\".cart-plus-minus\").prepend('<div class=\"dec qtybutton\">-</div>');
  \$(\".cart-plus-minus\").append('<div class=\"inc qtybutton\">+</div>');
  \$(\".qtybutton\").on(\"click\", function() {
    var \$button = \$(this);
    var oldValue = \$button.parent().find(\"input\").val();
    if (\$button.text() == \"+\") {
      var newVal = parseFloat(oldValue) + 1;
    } else {
      // Don't allow decrementing below zero
      if (oldValue > 0) {
        var newVal = parseFloat(oldValue) - 1;
      } else {
        newVal = 1;
      }
    }
    \$button.parent().find(\"input\").val(newVal);
  });
</script>
<script>
  \$('.ajax-spin-cart').on('click', function() {
    \$(this).addClass('loading add-item');
    setTimeout(function () {
      \$('.ajax-spin-cart').removeClass('loading');
    },1000);
    setTimeout(function () {
      \$('.ajax-spin-cart').removeClass(\"add-item\");
    },2000);

  });
</script>

<script src=\"";
        // line 5203
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/wishlistd645.js?40"), "html", null, true);
        echo "\"></script>
<script>
  /* Ajax Wishlist */
  \$(\".action-wishlist\").on('click', function(){
    \$(this).addClass(\"loading-wishlist adding-wishlist\");
    setTimeout(function () {
      \$(\".action-wishlist\").removeClass(\"loading-wishlist\");
    },1000);
    setTimeout(function () {
      \$(\".adding-wishlist\").removeClass(\"adding-wishlist\");
    },2000);

  });

  (function() {
    Wishlist.init();
  }());
</script><!-- Recently Viewed Products --><script src=\"";
        // line 5220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/javascripts/currencies.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 5221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/jquery.currencies.mind645.js?40"), "html", null, true);
        echo "\"></script>

<script>

  // Pick your format here:
  // money_format or money_with_currency_format
  Currency.format = 'money_format';

  var shopCurrency = 'USD';

  /* Sometimes merchants change their shop currency, let's tell our JavaScript file */

  var cookieCurrency;
  try {cookieCurrency = Currency.cookie.read();} catch (err) {} // ignore errors reading cookies

  // Fix for customer account pages.
  jQuery('span.money span.money').each(function() {
    jQuery(this).parents('span.money').removeClass('money');
  });

  // Saving the current price.
  jQuery('span.money').each(function() {
    jQuery(this).attr('data-currency-USD', jQuery(this).html());
                      });

    // Select all your currencies buttons.
    var buttons = jQuery('.currency li');

    // If there's no cookie or it's the shop currency.
    if (cookieCurrency == null || cookieCurrency === shopCurrency) {
      buttons.removeClass('active');
      jQuery('.currency li[data-currency=' + shopCurrency + ']').addClass('active');
      Currency.currentCurrency = shopCurrency;
      jQuery(\".current-currency\").text(shopCurrency);
    }
    else {
      Currency.convertAll(shopCurrency, cookieCurrency);
      buttons.removeClass('active');
      jQuery('.currency li[data-currency=' + cookieCurrency + ']').addClass('active');
      jQuery(\".current-currency\").text(cookieCurrency);
    }

    // When customer clicks on a currency button.
    buttons.click(function() {
      buttons.removeClass('active');
      var cur = jQuery(this).attr('data-currency');
      jQuery( \".currency li[data-currency='\" + cur + \"']\" ).addClass('active');

      var newCurrency =  jQuery(this).attr('data-currency');
      if(newCurrency == Currency.currentCurrency)
      {
        Currency.convertAll(shopCurrency, newCurrency);
      }
      else
      {
        Currency.convertAll(Currency.currentCurrency, newCurrency);
      }

      jQuery(\".current-currency\").text(cur);
    });

    // For product options.
    var main_selectCallback = window.selectCallback;
    var selectCallback = function(variant, selector) {
      main_selectCallback(variant, selector);
      Currency.convertAll(shopCurrency, jQuery(\".currency .active\").attr('data-currency'));
    };
</script><script>
  \$('[data-countdown]').each(function() {
    var \$this = \$(this), finalDate = \$(this).data('countdown');
    \$this.countdown(finalDate, function(event) {
      \$this.html(event.strftime('<div class=\"countdown-area\"><div class=\"single-countdown\"><div class=\"count-number\">%D</div><div class=\"count-title\">days</div></div><div class=\"single-countdown\"><div class=\"count-number\">%H</div><div class=\"count-title\">Hour</div></div><div class=\"single-countdown\"><div class=\"count-number\">%M</div><div class=\"count-title\">Mint</div></div><div class=\"single-countdown\"><div class=\"count-number\">%S</div><div class=\"count-title\">Sec</div></div></div>'));
    });
  });
</script>

  </div>

</body>

<!-- Mirrored from naturecircle.myshopify.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Mar 2019 12:23:52 GMT -->
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 1
    public function block_head($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 2
        echo "<!doctype html>
<!--[if IE 9]> <html class=\"ie9 no-js supports-no-cookies\" lang=\"en\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=\"no-js supports-no-cookies\" lang=\"en\"> <!--<![endif]-->


<!-- Mirrored from naturecircle.myshopify.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Mar 2019 12:21:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" /><!-- /Added by HTTrack -->
<head>
  <!-- Basic and Helper page needs -->
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
  <meta name=\"theme-color\" content=\"#78a206\">
  <link rel=\"canonical\" href=\"";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("forum_frontpage");
        echo "\"><!-- Title and description -->

  <title>";
        // line 17
        $this->displayBlock('title', $context, $blocks);
        echo "</title><!-- Helpers -->
  <!-- /snippets/social-meta-tags.liquid -->
  <meta property=\"og:type\" content=\"website\">
  <meta property=\"og:title\" content=\"Naturecircle\">
  <meta property=\"og:description\" content=\"\">

  <meta property=\"og:url\" content=\"";
        // line 23
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("forum_frontpage");
        echo "\">
  <meta property=\"og:site_name\" content=\"Naturecircle\">
  <meta name=\"twitter:card\" content=\"summary\">
  <meta name=\"twitter:title\" content=\"Naturecircle\">
  <meta name=\"twitter:description\" content=\"\">



<!-- CSS -->
<link href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/timber.scssd645.css?40"), "html", null, true);
        echo " \" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<!-- Link all your CSS files below -->
<link href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/bootstrap.mind645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<link href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/font-awesome.mind645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<link href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/ie7d645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<link href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/pluginsd645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

<!-- Link your style.css and responsive.css files below -->
<link href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/styled645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

<!-- Theme Default CSS -->
<link href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/theme-defaultd645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<!-- Make your theme CSS calls here -->
<link href=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/theme-customd645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />


<!-- Make your theme RTL CSS calls here -->
<link href=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/theme-responsived645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

<!-- Make all your dynamic CSS calls here -->
<link href=\"";
        // line 52
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/skin-themed645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<!-- Call your theme color CSS here -->
<link href=\"";
        // line 54
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/theme-colord645.css?40"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

  <meta id=\"shopify-digital-wallet\" name=\"shopify-digital-wallet\" content=\"/16239329344/digital_wallets/dialog\">
<script id=\"shopify-features\" type=\"application/json\">{\"accessToken\":\"7752b1b5b798084cd72e4db58b99fefb\",\"betas\":[],\"domain\":\"naturecircle.myshopify.com\",\"shopId\":16239329344,\"smart_payment_buttons_url\":\"https://cdn.shopifycloud.com/payment-sheet/assets/latest/spb.js\"}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = \"naturecircle.myshopify.com\";
Shopify.currency = {\"active\":\"USD\",\"rate\":\"1.0\"};
Shopify.theme = {\"name\":\"naturecircle\",\"id\":55309598784,\"theme_store_id\":null,\"role\":\"main\"};
Shopify.theme.handle = \"null\";
Shopify.theme.style = {\"id\":null,\"handle\":null};</script>
<script>(function() {
  function asyncLoad() {
    var urls = [\"//productreviews.shopifycdn.com/assets/v4/spr.js?shop=naturecircle.myshopify.com\"];
    for (var i = 0; i < urls.length; i++) {
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = urls[i];
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    }
  };
  if(window.attachEvent) {
    window.attachEvent('onload', asyncLoad);
  } else {
    window.addEventListener('load', asyncLoad, false);
  }
})();</script>
<script id=\"__st\">var __st={\"a\":16239329344,\"offset\":-43200,\"reqid\":\"30fda375-19d3-4de4-88d8-6c8f4326f237\",\"pageurl\":\"naturecircle.myshopify.com/\",\"u\":\"29173d208ed3\",\"p\":\"home\"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>window.Shopify = window.Shopify || {};
window.Shopify.Checkout = window.Shopify.Checkout || {};
window.Shopify.Checkout.apiHost = \"naturecircle.myshopify.com\";</script>
<script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'USD';
var meta = {\"page\":{\"pageType\":\"home\"}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {

};
</script>
<script class=\"analytics\">(function () {
  var customDocumentWrite = function(content) {
    var jquery = null;

    if (window.jQuery) {
      jquery = window.jQuery;
    } else if (window.Checkout && window.Checkout.\$) {
      jquery = window.Checkout.\$;
    }

    if (jquery) {
      jquery('body').append(content);
    }
  };

  var isDuplicatedThankYouPageView = function() {
    return document.cookie.indexOf('loggedConversion=' + window.location.pathname) !== -1;
  }

  var setCookieIfThankYouPage = function() {
    if (window.location.pathname.indexOf('/checkouts') !== -1 &&
        window.location.pathname.indexOf('/thank_you') !== -1) {

      var twoMonthsFromNow = new Date(Date.now())
      twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

      document.cookie = 'loggedConversion=' + window.location.pathname + '; expires=' + twoMonthsFromNow;
    }
  }

  var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
  if (trekkie.integrations) {
    return;
  }
  trekkie.methods = [
    'identify',
    'page',
    'ready',
    'track',
    'trackForm',
    'trackLink'
  ];
  trekkie.factory = function(method) {
    return function() {
      var args = Array.prototype.slice.call(arguments);
      args.unshift(method);
      trekkie.push(args);
      return trekkie;
    };
  };
  for (var i = 0; i < trekkie.methods.length; i++) {
    var key = trekkie.methods[i];
    trekkie[key] = trekkie.factory(key);
  }
  trekkie.load = function(config) {
    trekkie.config = config;
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.onerror = function(e) {
      (new Image()).src = 'http://v.shopify.com/internal_errors/track?error=trekkie_load';
    };
    script.async = true;
    script.src = 'assetsfront/cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min97e4.js?v=2017.09.05.1';
    var first = document.getElementsByTagName('script')[0];
    first.parentNode.insertBefore(script, first);
  };
  trekkie.load(
    {\"Trekkie\":{\"appName\":\"storefront\",\"development\":false,\"defaultAttributes\":{\"shopId\":16239329344,\"isMerchantRequest\":null,\"themeId\":55309598784,\"themeCityHash\":8757772860437056711}},\"Performance\":{\"navigationTimingApiMeasurementsEnabled\":true,\"navigationTimingApiMeasurementsSampleRate\":1.0},\"Session Attribution\":{}}
  );

  var loaded = false;
  trekkie.ready(function() {
    if (loaded) return;
    loaded = true;

    window.ShopifyAnalytics.lib = window.trekkie;


    var originalDocumentWrite = document.write;
    document.write = customDocumentWrite;
    try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
    document.write = originalDocumentWrite;

    if (!isDuplicatedThankYouPageView()) {
      setCookieIfThankYouPage();

        window.ShopifyAnalytics.lib.page(
          null,
          {\"pageType\":\"home\"}
        );


    }
  });

      var eventsListenerScript = document.createElement('script');
      eventsListenerScript.async = true;
      eventsListenerScript.src = \"";
        // line 195
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/assets/shop_events_listener-acf771159f9849ef6e5265782c99efe8b99406214c96a4373224ecafe285d7bb.js"), "html", null, true);
        echo "\";
      document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

})();</script>
<script integrity=\"sha256-cDvzHc7qqyE6XUzjp2M6Hvi6U27BLsvkmtBh9SERMrY=\" defer=\"defer\" src=\"";
        // line 199
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/assets/storefront/express_buttons-703bf31dceeaab213a5d4ce3a7633a1ef8ba536ec12ecbe49ad061f5211132b6.js"), "html", null, true);
        echo "\" crossorigin=\"anonymous\"></script>
<script integrity=\"sha256-6HOSr+Kf4wcoL05qrRLLS8wq/v1rf+vwtw7f0xX5aEw=\" defer=\"defer\" src=\"";
        // line 200
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/assets/storefront/features-e87392afe29fe307282f4e6aad12cb4bcc2afefd6b7febf0b70edfd315f9684c.js"), "html", null, true);
        echo "\" crossorigin=\"anonymous\"></script>
<link rel=\"stylesheet\" media=\"screen\" href=\"";
        // line 201
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/compiled_assets/stylesd645.css?40"), "html", null, true);
        echo "\">
<script id=\"sections-script\" data-sections=\"food-category,product-carousle-with-tab,product-banner,random-products,testimonials,latest-blog,header\" defer=\"defer\" src=\"";
        // line 202
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/compiled_assets/scriptsd645.js?40"), "html", null, true);
        echo "\"></script>

  <!-- /snippets/oldIE-js.liquid -->


<!--[if lt IE 9]>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js\" type=\"text/javascript\"></script>
<script src=\"//cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/respond.min.js?40\" type=\"text/javascript\"></script>
<link href=\"//cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/respond-proxy.html\" id=\"respond-proxy\" rel=\"respond-proxy\" />
<link href=\"//naturecircle.myshopify.com/search?q=a4fd16202dae3d9f2a7cb7fd8d3938f3\" id=\"respond-redirect\" rel=\"respond-redirect\" />
<script src=\"//naturecircle.myshopify.com/search?q=a4fd16202dae3d9f2a7cb7fd8d3938f3\" type=\"text/javascript\"></script>
<![endif]-->


  <!-- JS --><!-- Your update file include here -->
<script src=\"";
        // line 217
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/modernizr-3.5.0.mind645.js?40"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 218
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 219
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/popper.mind645.js?40"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 220
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/bootstrap.mind645.js?40"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 221
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/pluginsd645.js?40"), "html", null, true);
        echo "\"></script>



<!-- Countdown Js -->
<script src=\"";
        // line 226
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/jquery.countdown.mind645.js?40"), "html", null, true);
        echo "\"></script>

<!-- Ajax Cart js -->
<script src=\"";
        // line 229
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/assets/themes_support/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 230
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/assets/themes_support/api.jquery-e94e010e92e659b566dbc436fdfe5242764380e00398907a14955ba301a4749f.js"), "html", null, true);
        echo "\"></script>
<script src=\"";
        // line 231
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/cart.apid645.js?40"), "html", null, true);
        echo "\"></script>

<!-- Your main.js file upload this file -->
<script src=\"";
        // line 234
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/themed645.js?40"), "html", null, true);
        echo "\"></script>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_title($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Naturecircle";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 240
    public function block_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 241
        echo "  <div class=\"newsletter_popup_inner\">
    <span class=\"popup_off\"><i class=\"fa fa-times-circle\"></i></span>
    <div class=\"subscribe_area area-2\">
      <div class=\"subscribe-image\">

        <img src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/1_73eb7f57-63fe-4bb1-85c3-ec417a5575fb_440x550_crop_center0635.jpg?v=1546851802"), "html", null, true);
        echo "\">

      </div>
      <div class=\"subscribe-content\">
        <h2 class=\"\">Newsletter</h2>
        <p class=\"\">Join over 1,000 people who get free and fresh content delivered automatically each time we publish</p>
        <div class=\"form-group subscribe-form-group\">
          <form action=\"https:////devitems.us11.list-manage.com//subscribe//post?u=6bbb9b6f5827bd842d9640c82ampid=05d85f18ef\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" target=\"_blank\">
            <input type=\"email\" class=\"form-control subscribe-form-input\" id=\"mail\" value=\"\" name=\"EMAIL\" placeholder=\"emailexample.com\">
            <button type=\"submit\" class=\"newsletter-btn\" id=\"subscribe\">Subscribe</button><p><input id=\"forgetMe\" type=\"checkbox\" name=\"forgetMe\"> Don't show this again</p></form>
        </div>
      </div>
    </div>
  </div>
</div><script src=\"";
        // line 260
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/newsletter-jsd645.js?40"), "html", null, true);
        echo "\"></script>
<script>
  \$(function () {
    \$('#one-time-newsletter').firstVisitPopup({
      cookieName : 'index'
    });
  });
</script><script>
  if(localStorage.getItem(\"DontShow\")) {
    \$(\"one-time-newsletter\").hide();
  }
  \$(\"forgetMe\").on(\"click\", function() {
    localStorage.setItem(\"DontShow\", \"true\");
  });
</script>
<div class=\"wrapper\"><div id=\"shopify-section-header\" class=\"shopify-section\">
<header class=\"header-area header-sticky\">
  <div class=\"header-container\">
    <div class=\"row\">
      <div class=\"col-lg-5 display-none-md display-none-xs\">
        <div class=\"ht-main-menu\">
          <nav>
  <ul>

    <li class=\"active\"><a href=\"";
        // line 284
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("forum_frontpage");
        echo "\">Home <i class=\"fa fa-angle-down\"></i></a>
    </li>


    <li ><a href=\"#\">vegetables <i class=\"fa fa-angle-down\"></i></a>
      <ul class=\"\">
        <li class=\"mega-menu-title \"><a href=\"collections/bags.html\">Bags</a>
          <ul>
            <li><a href=\"collections.html\">Crochet</a></li>
            <li><a href=\"collections/bags.html\"><img src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/collections/menu-1_grandec517.jpg?v=1547541527"), "html", null, true);
        echo "\" alt=\"\" /></a></li>

          </ul>
        </li>

      </ul>
    </li>


    <li ><a href=\"collections/all.html\">Shop</a></li>

    <li ><a href=\"#\">Product <i class=\"fa fa-angle-down\"></i></a>
      <ul class=\"\">

        <li class=\" submenu-li\"><a href=\"products/5-simple-product.html\">Simple product</a></li>

      </ul>
    </li>

    <li ><a href=\"blogs/news.html\">Blog</a></li>


    <li ><a href=\"pages/contact.html\">Contact</a></li>

  </ul>
</nav>

<script>
  \$('.mega-menu-title').parent('ul').addClass('ht-mega-menu');
  \$('.submenu-li').parent('ul').addClass('sub-menu');
</script>


        </div>
      </div>
      <div class=\"col-lg-2 col-sm-4\">
        <div class=\"logo text-center\">
<a href=\"";
        // line 330
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("forum_frontpage");
        echo "\" class=\"theme-logo\">
  <img src=\"";
        // line 331
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/logo_160x8e4c.png?v=1546419901"), "html", null, true);
        echo "\" alt=\"Naturecircle\"srcset=\"//cdn.shopify.com/s/files/1/0162/3932/9344/files/logo_160x.png?v=1546419901 1x, //cdn.shopify.com/s/files/1/0162/3932/9344/files/logo_160x@2x.png?v=1546419901 2x\">
</a></div>
      </div>
      <div class=\"col-lg-5 col-sm-8\">
        <div class=\"header-content d-flex justify-content-end\">
          <div class=\"search-wrapper\">
            <a href=\"#\"><span class=\"icon icon-Search\"></span></a>
            <form action=\"https://naturecircle.myshopify.com/search\" method=\"get\" class=\"search-form\" role=\"search\">
              <input type=\"search\" name=\"q\" value=\"\" placeholder=\"Search our store\"  aria-label=\"Search our store\">
              <button type=\"submit\" class=\"btn icon-fallback-text\">
              <span class=\"fallback-text\">Search</span>
             </button>
            </form>


          </div>
          <div class=\"settings-wrapper\">
            <a href=\"#\"><i class=\"icon icon-Settings\"></i></a>
            <div class=\"settings-content\">
              <h4>My Account <i class=\"fa fa-angle-down\"></i></h4>
              <ul>
                <li><a href=\"account/register.html\" class=\"modal-view button\" data-toggle=\"modal\" data-target=\"#register_box\">Register</a></li>
                <li>

                  <a href=\"account/login.html\">Login</a>

                </li>
              </ul><div class=\"switcher-currency-trigger currency\">
  <h4>Currency: <span class=\"current-currency\">USD</span> <i class=\"fa fa-angle-down\"></i></h4>

  <ul class=\"switcher-dropdown\" id=\"currencies\">
    <li data-currency=\"USD\" class=\"currency__item\"><a style=\"cursor: pointer\">USD - US Dollar</a></li>
    <li data-currency=\"EUR\" class=\"currency__item\"><a style=\"cursor: pointer\">EUR - Euro</a></li>
  </ul>
</div>
</div>
          </div>
          <div class=\"cart-wrapper\">


<a href=\"cart.html\">
  <i class=\"icon icon-FullShoppingCart\"></i>
  <span class=\"bigcounter\">0</span>
</a>

<div class=\"cart-empty-title\"  style=\"display:block;\">
  <h3>Your cart is currently empty.</h3>
</div>
<div class=\"cart-item-wrapper\"  style=\"display:none;\">
  <div class=\"single-cart-item-area\">

  </div>
  <div class=\"cart-price-total\">
    <div class=\"cart-price-info d-flex justify-content-between\">
      <span class=\"total\">Total :</span>
      <span class=\"shopping-cart__total\"><span class=money>\$0.00</span></span>
    </div>
  </div>
  <div class=\"cart-links\">
    <a href=\"cart.html\">View Cart</a>
    <a href=\"checkout.html\">Checkout</a>
  </div>
</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header Area End -->
  <!-- Mobile Menu Area Start -->
  <div class=\"mobile-menu-area\">
    <div class=\"mobile-menu container\">
      <nav id=\"mobile-menu-active\">
  <ul class=\"menu-overflow\">

    <li><a href=\"";
        // line 406
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("forum_frontpage");
        echo "\">Home <i class=\"fa fa-angle-down\"></i></a>
    </li>

    <li><a href=\"#\">vegetables <i class=\"fa fa-angle-down\"></i></a>
      <ul class=\"\">

        <li class=\"mega-menu-title\"><a href=\"#\">Bags</a>
          <ul>

            <li><a href=\"collections.html\">Crochet</a></li>

            <li><a href=\"collections/bags.html\">BAGS</a></li>

          </ul>
        </li>

        <li class=\"mega-menu-title\"><a href=\"#\">Bottoms</a>
          <ul>


            <li><a href=\"collections/bottoms.html\">BOTTOMS</a></li>

          </ul>
        </li>

      </ul>
    </li>

    <li><a href=\"collections/all.html\">Shop</a></li>


    <li><a href=\"#\">Product <i class=\"fa fa-angle-down\"></i></a>
      <ul class=\"\">
        <li class=\" submenu-li\"><a href=\"products/5-simple-product.html\">Simple product</a></li>
      </ul>
    </li>

    <li><a href=\"blogs/news.html\">Blog</a></li>

    <li><a href=\"pages/contact.html\">Contact</a></li>


  </ul>
</nav>


<script>
  \$('.mega-menu-title').parent('ul').addClass('ht-mega-menu');
  \$('.submenu-li').parent('ul').addClass('sub-menu');
</script>


    </div>
  </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4383
    public function block_footer($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "footer"));

        // line 4384
        echo "  <div class=\"footer-top bg-4 pt-120 pb-120\">

    <!-- Newsletter Area Start -->

    <div class=\"newsletter-area\">
      <div class=\"container text-center\">
        <div class=\"newsletter-container\">


          <h2>Subscribe Newsletter.</h2>


          <p>Get e-mail updates about our latest shop and special offers.</p>

          <div class=\"newsletter-form mc_embed_signup\">
            <form action=\"https:////devitems.us11.list-manage.com//subscribe//post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef\" method=\"post\" id=\"mc-form\" name=\"mc-embedded-subscribe-form\" class=\"validate newsletter-form validate\" target=\"_blank\" novalidate>
              <div id=\"mc_embed_signup_scroll\" class=\"mc-form\">
                <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"email\" id=\"mce-EMAIL\" placeholder=\"Enter you email address here...\" required>
                <button id=\"mc-embedded-subscribe\" type=\"submit\" name=\"subscribe\" class=\"default-btn\">Subscribe</button>
              </div>
            </form>
            <div class=\"mailchimp-alerts\">
              <div class=\"mailchimp-submitting\"></div>
              <div class=\"mailchimp-success\"></div>
              <div class=\"mailchimp-error\"></div>
            </div>
          </div>
        </div>

        <div class=\"social-icon\">

  <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>


  <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>


  <a href=\"#\"><i class=\"fa fa-google\"></i></a>


  <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>


  <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>

</div>

      </div>
    </div>

    <!-- Newsletter Area End -->

    <!-- Service Area Start -->

    <div class=\"service-area pt-50\">
      <div class=\"container\">
        <div class=\"service-container\">
          <div class=\"service-content\">
            <div class=\"row\">


              <div class=\"col-lg-4 col-md-4\">
                <div class=\"single-service\">
                  <div class=\"service-image\">
                    <img src=\"";
        // line 4448
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/rocketf589.png?v=1546506966"), "html", null, true);
        echo "\" >
                  </div>
                  <div class=\"service-text\">

                    <h3>Free delivery</h3>
                    <p>Nam liber tempor cum soluta nobis eleifend option congue.</p>

                  </div>
                </div>
              </div>

              <div class=\"col-lg-4 col-md-4\">
                <div class=\"single-service\">
                  <div class=\"service-image\">
                    <img src=\"";
        // line 4462
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/moneyb16a.png?v=1546506976"), "html", null, true);
        echo "\" >
                  </div>
                  <div class=\"service-text\">

                    <h3>Money Guarantee</h3>


                    <p>Nam liber tempor cum soluta nobis eleifend option congue.</p>

                  </div>
                </div>
              </div>

              <div class=\"col-lg-4 col-md-4\">
                <div class=\"single-service\">
                  <div class=\"service-image\">
                    <img src=\"";
        // line 4478
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/support1059.png?v=1546506984"), "html", null, true);
        echo "\" alt=\"\">
                  </div>
                  <div class=\"service-text\">

                    <h3>Online Support</h3>
                    <p>Nam liber tempor cum soluta nobis eleifend option congue.</p>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Service Area End -->

    <!-- Footer Widget Area Start -->

    <div class=\"footer-widget-area\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-4 col-md-6\">
            <div class=\"single-footer-widget\">

              <div class=\"footer-logo\">
                <a href=\"";
        // line 4507
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("forum_homepage");
        echo "\">
                  <img src=\"";
        // line 4508
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/logo_02304f19-13a6-4b93-9218-6e0d0370aa5acec6.png?v=1546506822"), "html", null, true);
        echo "\" alt=\"\">
                </a>
              </div>


              <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>

              <div class=\"footer-text\">

                <span>

                  <i class=\"icon icon-Pointer\"></i>

                  Contact info: 169-C, Technohub, Dubai Silicon Oasis.
                </span>
                  <span>

                  <i class=\"icon icon-Phone\"></i>

                  Telephone: 169-C, Technohub, Dubai Silicon Oasis.
                </span>

                <span>

                  <i class=\"icon icon-Mail\"></i>

                  Email: Support@example.com
                </span>

              </div>
            </div>
          </div>



          <div class=\"col-lg-2 col-md-3\">
            <div class=\"single-footer-widget\">

              <h3>Products</h3>

              <ul class=\"footer-widget-list\">


                <li><a href=\"#\">Prices drop</a></li>

                <li><a href=\"#\">New products</a></li>

                <li><a href=\"#\">Best sales</a></li>

                <li><a href=\"#\">Stores</a></li>

                <li><a href=\"#\">Login</a></li>

                <li><a href=\"#\">My Account</a></li>

              </ul>
            </div>
          </div>

          <div class=\"col-lg-2 col-md-3\">
            <div class=\"single-footer-widget\">

              <h3>Our Company</h3>

              <ul class=\"footer-widget-list\">


                <li><a href=\"#\">Delivery</a></li>

                <li><a href=\"#\">Legal Notice</a></li>

                <li><a href=\"#\">Documentation</a></li>

                <li><a href=\"#\">Secure payment</a></li>

                <li><a href=\"#\">Contact us</a></li>

                <li><a href=\"#\">Stores</a></li>

              </ul>
            </div>
          </div>

          <div class=\"col-lg-4\">
            <div class=\"single-footer-widget\">

              <h3>Instagram</h3>

              <div id=\"instafeed\" class=\"instagram-image\"></div>
            </div>
          </div>

          <script>
            (function (\$) {
              \"use strict\";

              jQuery(document).ready(function(){

                var userFeed = new Instafeed({
                  get: 'user',
                  userId: '6667588161',
                  limit: '8',
                  accessToken: '6667588161.1677ed0.705c7b82e16f42b2898cd19e737dc53e',
                  resolution: 'thumbnail',
                  template: '<div class=\"single-insta-img\"><a href=\"\\{\\{link\\}\\}\" target=\"_blank\" id=\"\\{\\{id\\}\\}\"><img src=\"\\{\\{image\\}\\}\" /></a></div>'

                });
                userFeed.run();
              });

            })(jQuery);

          </script>

        </div>
      </div>
    </div>

    <!-- Footer Widget Area End -->
  </div>
  <!-- Footer Top Area End -->
  <!-- Footer Bottom Area Start -->
  <div class=\"footer-bottom-area pb-20\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 d-flex col-md-6\">
          <div class=\"footer-text-bottom\">
            <p><p>Copyright &copy;&nbsp;<a href=\"#\">Naturecircle</a>. All Rights Reserved</p></p>
          </div>
        </div>
        <div class=\"col-lg-6 col-md-6\">
          <div class=\"payment-img d-flex justify-content-end\">

            <img src=\"";
        // line 4641
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/payment72c6.png?v=1546505987"), "html", null, true);
        echo "\">

          </div>
        </div>
      </div>
    </div>
  </div>
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "basefront.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  5843 => 4641,  5707 => 4508,  5703 => 4507,  5671 => 4478,  5652 => 4462,  5635 => 4448,  5569 => 4384,  5560 => 4383,  5495 => 406,  5417 => 331,  5413 => 330,  5373 => 293,  5361 => 284,  5334 => 260,  5317 => 246,  5310 => 241,  5301 => 240,  5283 => 17,  5270 => 234,  5264 => 231,  5260 => 230,  5256 => 229,  5250 => 226,  5242 => 221,  5238 => 220,  5234 => 219,  5230 => 218,  5226 => 217,  5208 => 202,  5204 => 201,  5200 => 200,  5196 => 199,  5189 => 195,  5045 => 54,  5040 => 52,  5034 => 49,  5027 => 45,  5022 => 43,  5016 => 40,  5010 => 37,  5006 => 36,  5002 => 35,  4998 => 34,  4993 => 32,  4981 => 23,  4972 => 17,  4967 => 15,  4952 => 2,  4943 => 1,  4850 => 5221,  4846 => 5220,  4826 => 5203,  4301 => 4681,  4297 => 4680,  4289 => 4675,  4267 => 4656,  4258 => 4649,  4256 => 4383,  4181 => 4311,  4159 => 4292,  4137 => 4273,  4115 => 4254,  4093 => 4235,  4071 => 4216,  4049 => 4197,  4027 => 4178,  4009 => 4163,  3899 => 4056,  3854 => 4014,  3837 => 4000,  3807 => 3973,  3777 => 3946,  3745 => 3917,  3715 => 3890,  3683 => 3861,  3666 => 3847,  3634 => 3818,  3604 => 3791,  3579 => 3769,  3547 => 3740,  3516 => 3712,  3486 => 3685,  3454 => 3656,  3424 => 3629,  3392 => 3600,  3375 => 3586,  3343 => 3557,  3313 => 3530,  3288 => 3508,  3256 => 3479,  3226 => 3452,  3194 => 3423,  3150 => 3382,  3133 => 3368,  3116 => 3354,  3086 => 3327,  3061 => 3305,  3031 => 3278,  3001 => 3251,  2969 => 3222,  2937 => 3193,  2907 => 3166,  2882 => 3144,  2854 => 3119,  2834 => 3102,  2773 => 3044,  2711 => 2985,  2648 => 2925,  2596 => 2876,  2551 => 2834,  2494 => 2780,  2442 => 2731,  2389 => 2681,  2317 => 2612,  2239 => 2537,  2173 => 2474,  2084 => 2388,  2021 => 2328,  1969 => 2279,  1910 => 2223,  1844 => 2160,  1785 => 2104,  1730 => 2052,  1666 => 1991,  1594 => 1922,  1535 => 1866,  1446 => 1780,  1401 => 1738,  1356 => 1696,  1299 => 1642,  1247 => 1593,  1194 => 1543,  1129 => 1481,  1069 => 1424,  1009 => 1367,  960 => 1321,  896 => 1260,  839 => 1206,  773 => 1143,  724 => 1097,  669 => 1045,  609 => 988,  560 => 942,  505 => 890,  445 => 833,  388 => 779,  335 => 729,  265 => 662,  246 => 646,  229 => 632,  212 => 618,  195 => 604,  178 => 590,  160 => 575,  77 => 495,  61 => 482,  38 => 461,  36 => 240,  31 => 237,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block head %}
<!doctype html>
<!--[if IE 9]> <html class=\"ie9 no-js supports-no-cookies\" lang=\"en\"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class=\"no-js supports-no-cookies\" lang=\"en\"> <!--<![endif]-->


<!-- Mirrored from naturecircle.myshopify.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Mar 2019 12:21:19 GMT -->
<!-- Added by HTTrack --><meta http-equiv=\"content-type\" content=\"text/html;charset=utf-8\" /><!-- /Added by HTTrack -->
<head>
  <!-- Basic and Helper page needs -->
  <meta charset=\"utf-8\">
  <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
  <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\">
  <meta name=\"theme-color\" content=\"#78a206\">
  <link rel=\"canonical\" href=\"{{ path('forum_frontpage') }}\"><!-- Title and description -->

  <title>{% block title %}Naturecircle{% endblock %}</title><!-- Helpers -->
  <!-- /snippets/social-meta-tags.liquid -->
  <meta property=\"og:type\" content=\"website\">
  <meta property=\"og:title\" content=\"Naturecircle\">
  <meta property=\"og:description\" content=\"\">

  <meta property=\"og:url\" content=\"{{ path('forum_frontpage') }}\">
  <meta property=\"og:site_name\" content=\"Naturecircle\">
  <meta name=\"twitter:card\" content=\"summary\">
  <meta name=\"twitter:title\" content=\"Naturecircle\">
  <meta name=\"twitter:description\" content=\"\">



<!-- CSS -->
<link href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/timber.scssd645.css?40') }} \" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<!-- Link all your CSS files below -->
<link href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/bootstrap.mind645.css?40')}}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<link href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/font-awesome.mind645.css?40') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<link href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/ie7d645.css?40') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<link href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/pluginsd645.css?40') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

<!-- Link your style.css and responsive.css files below -->
<link href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/styled645.css?40')}}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

<!-- Theme Default CSS -->
<link href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/theme-defaultd645.css?40')}}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<!-- Make your theme CSS calls here -->
<link href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/theme-customd645.css?40') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />


<!-- Make your theme RTL CSS calls here -->
<link href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/theme-responsived645.css?40') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

<!-- Make all your dynamic CSS calls here -->
<link href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/skin-themed645.css?40') }}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
<!-- Call your theme color CSS here -->
<link href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/theme-colord645.css?40')}}\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />

  <meta id=\"shopify-digital-wallet\" name=\"shopify-digital-wallet\" content=\"/16239329344/digital_wallets/dialog\">
<script id=\"shopify-features\" type=\"application/json\">{\"accessToken\":\"7752b1b5b798084cd72e4db58b99fefb\",\"betas\":[],\"domain\":\"naturecircle.myshopify.com\",\"shopId\":16239329344,\"smart_payment_buttons_url\":\"https://cdn.shopifycloud.com/payment-sheet/assets/latest/spb.js\"}</script>
<script>var Shopify = Shopify || {};
Shopify.shop = \"naturecircle.myshopify.com\";
Shopify.currency = {\"active\":\"USD\",\"rate\":\"1.0\"};
Shopify.theme = {\"name\":\"naturecircle\",\"id\":55309598784,\"theme_store_id\":null,\"role\":\"main\"};
Shopify.theme.handle = \"null\";
Shopify.theme.style = {\"id\":null,\"handle\":null};</script>
<script>(function() {
  function asyncLoad() {
    var urls = [\"//productreviews.shopifycdn.com/assets/v4/spr.js?shop=naturecircle.myshopify.com\"];
    for (var i = 0; i < urls.length; i++) {
      var s = document.createElement('script');
      s.type = 'text/javascript';
      s.async = true;
      s.src = urls[i];
      var x = document.getElementsByTagName('script')[0];
      x.parentNode.insertBefore(s, x);
    }
  };
  if(window.attachEvent) {
    window.attachEvent('onload', asyncLoad);
  } else {
    window.addEventListener('load', asyncLoad, false);
  }
})();</script>
<script id=\"__st\">var __st={\"a\":16239329344,\"offset\":-43200,\"reqid\":\"30fda375-19d3-4de4-88d8-6c8f4326f237\",\"pageurl\":\"naturecircle.myshopify.com/\",\"u\":\"29173d208ed3\",\"p\":\"home\"};</script>
<script>window.ShopifyPaypalV4VisibilityTracking = true;</script>
<script>window.Shopify = window.Shopify || {};
window.Shopify.Checkout = window.Shopify.Checkout || {};
window.Shopify.Checkout.apiHost = \"naturecircle.myshopify.com\";</script>
<script>window.ShopifyAnalytics = window.ShopifyAnalytics || {};
window.ShopifyAnalytics.meta = window.ShopifyAnalytics.meta || {};
window.ShopifyAnalytics.meta.currency = 'USD';
var meta = {\"page\":{\"pageType\":\"home\"}};
for (var attr in meta) {
  window.ShopifyAnalytics.meta[attr] = meta[attr];
}</script>
<script>window.ShopifyAnalytics.merchantGoogleAnalytics = function() {

};
</script>
<script class=\"analytics\">(function () {
  var customDocumentWrite = function(content) {
    var jquery = null;

    if (window.jQuery) {
      jquery = window.jQuery;
    } else if (window.Checkout && window.Checkout.\$) {
      jquery = window.Checkout.\$;
    }

    if (jquery) {
      jquery('body').append(content);
    }
  };

  var isDuplicatedThankYouPageView = function() {
    return document.cookie.indexOf('loggedConversion=' + window.location.pathname) !== -1;
  }

  var setCookieIfThankYouPage = function() {
    if (window.location.pathname.indexOf('/checkouts') !== -1 &&
        window.location.pathname.indexOf('/thank_you') !== -1) {

      var twoMonthsFromNow = new Date(Date.now())
      twoMonthsFromNow.setMonth(twoMonthsFromNow.getMonth() + 2);

      document.cookie = 'loggedConversion=' + window.location.pathname + '; expires=' + twoMonthsFromNow;
    }
  }

  var trekkie = window.ShopifyAnalytics.lib = window.trekkie = window.trekkie || [];
  if (trekkie.integrations) {
    return;
  }
  trekkie.methods = [
    'identify',
    'page',
    'ready',
    'track',
    'trackForm',
    'trackLink'
  ];
  trekkie.factory = function(method) {
    return function() {
      var args = Array.prototype.slice.call(arguments);
      args.unshift(method);
      trekkie.push(args);
      return trekkie;
    };
  };
  for (var i = 0; i < trekkie.methods.length; i++) {
    var key = trekkie.methods[i];
    trekkie[key] = trekkie.factory(key);
  }
  trekkie.load = function(config) {
    trekkie.config = config;
    var script = document.createElement('script');
    script.type = 'text/javascript';
    script.onerror = function(e) {
      (new Image()).src = 'http://v.shopify.com/internal_errors/track?error=trekkie_load';
    };
    script.async = true;
    script.src = 'assetsfront/cdn.shopify.com/s/javascripts/tricorder/trekkie.storefront.min97e4.js?v=2017.09.05.1';
    var first = document.getElementsByTagName('script')[0];
    first.parentNode.insertBefore(script, first);
  };
  trekkie.load(
    {\"Trekkie\":{\"appName\":\"storefront\",\"development\":false,\"defaultAttributes\":{\"shopId\":16239329344,\"isMerchantRequest\":null,\"themeId\":55309598784,\"themeCityHash\":8757772860437056711}},\"Performance\":{\"navigationTimingApiMeasurementsEnabled\":true,\"navigationTimingApiMeasurementsSampleRate\":1.0},\"Session Attribution\":{}}
  );

  var loaded = false;
  trekkie.ready(function() {
    if (loaded) return;
    loaded = true;

    window.ShopifyAnalytics.lib = window.trekkie;


    var originalDocumentWrite = document.write;
    document.write = customDocumentWrite;
    try { window.ShopifyAnalytics.merchantGoogleAnalytics.call(this); } catch(error) {};
    document.write = originalDocumentWrite;

    if (!isDuplicatedThankYouPageView()) {
      setCookieIfThankYouPage();

        window.ShopifyAnalytics.lib.page(
          null,
          {\"pageType\":\"home\"}
        );


    }
  });

      var eventsListenerScript = document.createElement('script');
      eventsListenerScript.async = true;
      eventsListenerScript.src = \"{{ asset('assetsfront/cdn.shopify.com/s/assets/shop_events_listener-acf771159f9849ef6e5265782c99efe8b99406214c96a4373224ecafe285d7bb.js') }}\";
      document.getElementsByTagName('head')[0].appendChild(eventsListenerScript);

})();</script>
<script integrity=\"sha256-cDvzHc7qqyE6XUzjp2M6Hvi6U27BLsvkmtBh9SERMrY=\" defer=\"defer\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/assets/storefront/express_buttons-703bf31dceeaab213a5d4ce3a7633a1ef8ba536ec12ecbe49ad061f5211132b6.js') }}\" crossorigin=\"anonymous\"></script>
<script integrity=\"sha256-6HOSr+Kf4wcoL05qrRLLS8wq/v1rf+vwtw7f0xX5aEw=\" defer=\"defer\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/assets/storefront/features-e87392afe29fe307282f4e6aad12cb4bcc2afefd6b7febf0b70edfd315f9684c.js') }}\" crossorigin=\"anonymous\"></script>
<link rel=\"stylesheet\" media=\"screen\" href=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/compiled_assets/stylesd645.css?40') }}\">
<script id=\"sections-script\" data-sections=\"food-category,product-carousle-with-tab,product-banner,random-products,testimonials,latest-blog,header\" defer=\"defer\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/compiled_assets/scriptsd645.js?40') }}\"></script>

  <!-- /snippets/oldIE-js.liquid -->


<!--[if lt IE 9]>
<script src=\"//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js\" type=\"text/javascript\"></script>
<script src=\"//cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/respond.min.js?40\" type=\"text/javascript\"></script>
<link href=\"//cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/respond-proxy.html\" id=\"respond-proxy\" rel=\"respond-proxy\" />
<link href=\"//naturecircle.myshopify.com/search?q=a4fd16202dae3d9f2a7cb7fd8d3938f3\" id=\"respond-redirect\" rel=\"respond-redirect\" />
<script src=\"//naturecircle.myshopify.com/search?q=a4fd16202dae3d9f2a7cb7fd8d3938f3\" type=\"text/javascript\"></script>
<![endif]-->


  <!-- JS --><!-- Your update file include here -->
<script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/modernizr-3.5.0.mind645.js?40') }}\"></script>
<script src=\"{{ asset('assetsfront/ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js') }}\"></script>
<script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/popper.mind645.js?40') }}\"></script>
<script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/bootstrap.mind645.js?40') }}\"></script>
<script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/pluginsd645.js?40') }}\"></script>



<!-- Countdown Js -->
<script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/jquery.countdown.mind645.js?40') }}\"></script>

<!-- Ajax Cart js -->
<script src=\"{{ asset('assetsfront/cdn.shopify.com/s/assets/themes_support/option_selection-fe6b72c2bbdd3369ac0bfefe8648e3c889efca213baefd4cfb0dd9363563831f.js') }}\"></script>
<script src=\"{{ asset('assetsfront/cdn.shopify.com/s/assets/themes_support/api.jquery-e94e010e92e659b566dbc436fdfe5242764380e00398907a14955ba301a4749f.js') }}\"></script>
<script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/cart.apid645.js?40') }}\"></script>

<!-- Your main.js file upload this file -->
<script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/themed645.js?40') }}\"></script>

{% endblock %}
</head>

<body id=\"naturecircle\" class=\"template-index\" ><div id=\"one-time-newsletter\" class=\"popup_wrapper\">
    {% block content %}
  <div class=\"newsletter_popup_inner\">
    <span class=\"popup_off\"><i class=\"fa fa-times-circle\"></i></span>
    <div class=\"subscribe_area area-2\">
      <div class=\"subscribe-image\">

        <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/1_73eb7f57-63fe-4bb1-85c3-ec417a5575fb_440x550_crop_center0635.jpg?v=1546851802') }}\">

      </div>
      <div class=\"subscribe-content\">
        <h2 class=\"\">Newsletter</h2>
        <p class=\"\">Join over 1,000 people who get free and fresh content delivered automatically each time we publish</p>
        <div class=\"form-group subscribe-form-group\">
          <form action=\"https:////devitems.us11.list-manage.com//subscribe//post?u=6bbb9b6f5827bd842d9640c82ampid=05d85f18ef\" method=\"post\" id=\"mc-embedded-subscribe-form\" name=\"mc-embedded-subscribe-form\" target=\"_blank\">
            <input type=\"email\" class=\"form-control subscribe-form-input\" id=\"mail\" value=\"\" name=\"EMAIL\" placeholder=\"emailexample.com\">
            <button type=\"submit\" class=\"newsletter-btn\" id=\"subscribe\">Subscribe</button><p><input id=\"forgetMe\" type=\"checkbox\" name=\"forgetMe\"> Don't show this again</p></form>
        </div>
      </div>
    </div>
  </div>
</div><script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/newsletter-jsd645.js?40') }}\"></script>
<script>
  \$(function () {
    \$('#one-time-newsletter').firstVisitPopup({
      cookieName : 'index'
    });
  });
</script><script>
  if(localStorage.getItem(\"DontShow\")) {
    \$(\"one-time-newsletter\").hide();
  }
  \$(\"forgetMe\").on(\"click\", function() {
    localStorage.setItem(\"DontShow\", \"true\");
  });
</script>
<div class=\"wrapper\"><div id=\"shopify-section-header\" class=\"shopify-section\">
<header class=\"header-area header-sticky\">
  <div class=\"header-container\">
    <div class=\"row\">
      <div class=\"col-lg-5 display-none-md display-none-xs\">
        <div class=\"ht-main-menu\">
          <nav>
  <ul>

    <li class=\"active\"><a href=\"{{ path('forum_frontpage') }}\">Home <i class=\"fa fa-angle-down\"></i></a>
    </li>


    <li ><a href=\"#\">vegetables <i class=\"fa fa-angle-down\"></i></a>
      <ul class=\"\">
        <li class=\"mega-menu-title \"><a href=\"collections/bags.html\">Bags</a>
          <ul>
            <li><a href=\"collections.html\">Crochet</a></li>
            <li><a href=\"collections/bags.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/collections/menu-1_grandec517.jpg?v=1547541527') }}\" alt=\"\" /></a></li>

          </ul>
        </li>

      </ul>
    </li>


    <li ><a href=\"collections/all.html\">Shop</a></li>

    <li ><a href=\"#\">Product <i class=\"fa fa-angle-down\"></i></a>
      <ul class=\"\">

        <li class=\" submenu-li\"><a href=\"products/5-simple-product.html\">Simple product</a></li>

      </ul>
    </li>

    <li ><a href=\"blogs/news.html\">Blog</a></li>


    <li ><a href=\"pages/contact.html\">Contact</a></li>

  </ul>
</nav>

<script>
  \$('.mega-menu-title').parent('ul').addClass('ht-mega-menu');
  \$('.submenu-li').parent('ul').addClass('sub-menu');
</script>


        </div>
      </div>
      <div class=\"col-lg-2 col-sm-4\">
        <div class=\"logo text-center\">
<a href=\"{{ path('forum_frontpage') }}\" class=\"theme-logo\">
  <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/logo_160x8e4c.png?v=1546419901') }}\" alt=\"Naturecircle\"srcset=\"//cdn.shopify.com/s/files/1/0162/3932/9344/files/logo_160x.png?v=1546419901 1x, //cdn.shopify.com/s/files/1/0162/3932/9344/files/logo_160x@2x.png?v=1546419901 2x\">
</a></div>
      </div>
      <div class=\"col-lg-5 col-sm-8\">
        <div class=\"header-content d-flex justify-content-end\">
          <div class=\"search-wrapper\">
            <a href=\"#\"><span class=\"icon icon-Search\"></span></a>
            <form action=\"https://naturecircle.myshopify.com/search\" method=\"get\" class=\"search-form\" role=\"search\">
              <input type=\"search\" name=\"q\" value=\"\" placeholder=\"Search our store\"  aria-label=\"Search our store\">
              <button type=\"submit\" class=\"btn icon-fallback-text\">
              <span class=\"fallback-text\">Search</span>
             </button>
            </form>


          </div>
          <div class=\"settings-wrapper\">
            <a href=\"#\"><i class=\"icon icon-Settings\"></i></a>
            <div class=\"settings-content\">
              <h4>My Account <i class=\"fa fa-angle-down\"></i></h4>
              <ul>
                <li><a href=\"account/register.html\" class=\"modal-view button\" data-toggle=\"modal\" data-target=\"#register_box\">Register</a></li>
                <li>

                  <a href=\"account/login.html\">Login</a>

                </li>
              </ul><div class=\"switcher-currency-trigger currency\">
  <h4>Currency: <span class=\"current-currency\">USD</span> <i class=\"fa fa-angle-down\"></i></h4>

  <ul class=\"switcher-dropdown\" id=\"currencies\">
    <li data-currency=\"USD\" class=\"currency__item\"><a style=\"cursor: pointer\">USD - US Dollar</a></li>
    <li data-currency=\"EUR\" class=\"currency__item\"><a style=\"cursor: pointer\">EUR - Euro</a></li>
  </ul>
</div>
</div>
          </div>
          <div class=\"cart-wrapper\">


<a href=\"cart.html\">
  <i class=\"icon icon-FullShoppingCart\"></i>
  <span class=\"bigcounter\">0</span>
</a>

<div class=\"cart-empty-title\"  style=\"display:block;\">
  <h3>Your cart is currently empty.</h3>
</div>
<div class=\"cart-item-wrapper\"  style=\"display:none;\">
  <div class=\"single-cart-item-area\">

  </div>
  <div class=\"cart-price-total\">
    <div class=\"cart-price-info d-flex justify-content-between\">
      <span class=\"total\">Total :</span>
      <span class=\"shopping-cart__total\"><span class=money>\$0.00</span></span>
    </div>
  </div>
  <div class=\"cart-links\">
    <a href=\"cart.html\">View Cart</a>
    <a href=\"checkout.html\">Checkout</a>
  </div>
</div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Header Area End -->
  <!-- Mobile Menu Area Start -->
  <div class=\"mobile-menu-area\">
    <div class=\"mobile-menu container\">
      <nav id=\"mobile-menu-active\">
  <ul class=\"menu-overflow\">

    <li><a href=\"{{ path('forum_frontpage') }}\">Home <i class=\"fa fa-angle-down\"></i></a>
    </li>

    <li><a href=\"#\">vegetables <i class=\"fa fa-angle-down\"></i></a>
      <ul class=\"\">

        <li class=\"mega-menu-title\"><a href=\"#\">Bags</a>
          <ul>

            <li><a href=\"collections.html\">Crochet</a></li>

            <li><a href=\"collections/bags.html\">BAGS</a></li>

          </ul>
        </li>

        <li class=\"mega-menu-title\"><a href=\"#\">Bottoms</a>
          <ul>


            <li><a href=\"collections/bottoms.html\">BOTTOMS</a></li>

          </ul>
        </li>

      </ul>
    </li>

    <li><a href=\"collections/all.html\">Shop</a></li>


    <li><a href=\"#\">Product <i class=\"fa fa-angle-down\"></i></a>
      <ul class=\"\">
        <li class=\" submenu-li\"><a href=\"products/5-simple-product.html\">Simple product</a></li>
      </ul>
    </li>

    <li><a href=\"blogs/news.html\">Blog</a></li>

    <li><a href=\"pages/contact.html\">Contact</a></li>


  </ul>
</nav>


<script>
  \$('.mega-menu-title').parent('ul').addClass('ht-mega-menu');
  \$('.submenu-li').parent('ul').addClass('sub-menu');
</script>


    </div>
  </div>
    {% endblock %}
  <!-- Mobile Menu Area End -->
</header>
<!-- Header Area End -->



<style>
  .theme-logo img{
    max-width: 160px;
  }
</style>

</div>
<main>

      <!-- BEGIN content_for_index -->
      <div id=\"shopify-section-1541245747444\" class=\"shopify-section\"><!-- Hero Area Start -->
      <div class=\"ht-hero-section fix\" id=\"section-1541245747444\">
      <div class=\"ht-hero-slider\">

    <!-- Single Slide Start -->
    <div class=\"ht-single-slide\" style=\"background-image: url({{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/10bfe.jpg?v=1546757386') }});\">
      <div class=\"ht-hero-content-one container\">

        <h3>Cold Process Organic</h3>

        <h1 class=\"cssanimation leDoorCloseLeft sequence\">Savon Stories</h1>
        <p>We believe that healthy eating, clean air, and gentle character is the best start to genuine wellbeing.</p>
        <a href=\"collections.html\" class=\"default-btn large circle blue hover-blue uppercase\">Shop now</a>
      </div>
    </div>
    <!-- Single Slide End -->

    <!-- Single Slide Start -->
    <div class=\"ht-single-slide\" style=\"background-image: url({{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/226ea.jpg?v=1546757406') }});\">
      <div class=\"ht-hero-content-one container\">

        <h3>Healthy life with</h3>

        <h1 class=\"cssanimation leDoorCloseLeft sequence\">Nature Organic</h1>

        <p>Vegetables are the edible parts of a plant that is used in cooking or can be eaten raw.</p>

        <a href=\"collections.html\" class=\"default-btn large circle blue hover-blue uppercase\">Shop now</a>

      </div>
    </div>
    <!-- Single Slide End -->


  </div>
</div>
<!-- Hero Area End --><style data-shopify>#section-1541245747444{padding-top: 0px;
    padding-bottom: 100px;}
  @media (min-width: 768px) and (max-width: 991px) {
    #section-1541245747444{padding-top: 0px;
      padding-bottom: 80px;}
  }
  @media (max-width: 767px) {
    #section-1541245747444{padding-top: 0px;
      padding-bottom: 60px;}
  }</style><script>

  /*-------------------------------------
\tHero Slider
\t----------------------------------------*/
\tvar heroSlider = \$('#section-1541245747444 .ht-hero-slider');
\theroSlider.slick({
\t\tarrows: true,
\t\tprevArrow:\"<button type='button' class='slick-prev'><i class='fa fa-angle-left'></i></button>\",
\t\tnextArrow:\"<button type='button' class='slick-next'><i class='fa fa-angle-right'></i></button>\",
\t\tautoplay: false,
\t\tautoplaySpeed: 5000,
\t\tdots: true,
\t\tpauseOnFocus: false,
\t\tpauseOnHover: false,fade: false,infinite: true,
\t\tslidesToShow: 1,
\t\tresponsive: [
\t\t\t{
\t\t\t  breakpoint: 767,
\t\t\t  settings: {
\t\t\t\t  arrows: false
\t\t\t  }
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 479,
\t\t\t\tsettings: {
\t\t\t\t\tarrows: false
\t\t\t\t}
\t\t\t}
\t\t]
\t});
\theroSlider.on('beforeChange', function(event, slick, currentSlide, nextSlide){
\t\tvar sliderTitle = \$('.ht-hero-slider h1');
\t\tvar currentTitle = \$('.slick-current h1');
\t\tsliderTitle.removeClass('cssanimation leDoorCloseLeft sequence');
\t\tcurrentTitle.addClass('cssanimation leDoorCloseLeft sequence');
\t});
\theroSlider.on('afterChange', function(event, slick, currentSlide, nextSlide){
\t\tvar sliderTitle = \$('.ht-hero-slider h1');
\t\tvar currentTitle = \$('.slick-current h1');
\t\tsliderTitle.removeClass('cssanimation leDoorCloseLeft sequence');
\t\tcurrentTitle.addClass('cssanimation leDoorCloseLeft sequence');
\t});

</script>


</div><div id=\"shopify-section-1546835946117\" class=\"shopify-section\"><!-- Food Categry Area Start -->
<div class=\"food-category-area pb-70\" id=\"section-1546835946117\">
  <div class=\"container text-center\">

    <div class=\"section-title-img\">

      <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/textaed4.png?v=1546835994') }}\" alt=\"slider images\">


      <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui</p>

    </div>

  </div>
  <div class=\"container\">
    <div class=\"ht-food-slider row\">

      <div class=\"col text-center\">
        <div class=\"single-food-category\">
          <a href=\"#\" class=\"food-cat-img\">

            <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/collections/tea_smallb034.png?v=1546836637') }}\" alt=\"collection image\">

          </a>
          <img src=\"https://via.placeholder.com/70x1\" alt=\"\">
          <h4><a href=\"collections/tea.html\">Tea</a></h4>
          <span>(0)</span>
        </div>
      </div>

      <div class=\"col text-center\">
        <div class=\"single-food-category\">
          <a href=\"#\" class=\"food-cat-img\">


            <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/collections/burger_small837f.png?v=1546839335') }}\" alt=\"collection image\">

          </a>
          <img src=\"https://via.placeholder.com/70x1\" alt=\"\">
          <h4><a href=\"collections/bread.html\">bread</a></h4>
          <span>(10)</span>
        </div>
      </div>

      <div class=\"col text-center\">
        <div class=\"single-food-category\">
          <a href=\"#\" class=\"food-cat-img\">


            <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/collections/fruit_smallce6c.png?v=1546839410') }}\" alt=\"collection image\">

          </a>
          <img src=\"https://via.placeholder.com/70x1\" alt=\"\">
          <h4><a href=\"collections/fruits.html\">fruits</a></h4>
          <span>(10)</span>
        </div>
      </div>

      <div class=\"col text-center\">
        <div class=\"single-food-category\">
          <a href=\"#\" class=\"food-cat-img\">


            <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/collections/drinks_smallaf65.png?v=1546839486') }}\" alt=\"collection image\">

          </a>
          <img src=\"https://via.placeholder.com/70x1\" alt=\"\">
          <h4><a href=\"collections/juices.html\">juices</a></h4>
          <span>(10)</span>
        </div>
      </div>

      <div class=\"col text-center\">
        <div class=\"single-food-category\">
          <a href=\"#\" class=\"food-cat-img\">


            <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/collections/vegetable_small62e2.png?v=1546839583') }}\" alt=\"collection image\">

          </a>
          <img src=\"https://via.placeholder.com/70x1\" alt=\"\">
          <h4><a href=\"collections/vegetables.html\">vegetables</a></h4>
          <span>(10)</span>
        </div>
      </div>



      <div class=\"col text-center\">
        <div class=\"single-food-category\">
          <a href=\"#\" class=\"food-cat-img\">


            <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/collections/tea_smallb034.png?v=1546836637') }}\" alt=\"collection image\">

          </a>
          <img src=\"https://via.placeholder.com/70x1\" alt=\"\">
          <h4><a href=\"collections/tea.html\">Tea</a></h4>
          <span>(0)</span>
        </div>
      </div>


    </div>
  </div>
</div>
<!-- Food Categry Area End --><style data-shopify>#section-1546835946117{}
  @media (min-width: 768px) and (max-width: 991px) {
    #section-1546835946117{}
  }
  @media (max-width: 767px) {
    #section-1546835946117{}
  }</style><script>
  \t/*------------------------------------
\tFood Category Slider
\t--------------------------------------*/
\tvar foodSlider = \$('.ht-food-slider');
\tfoodSlider.slick({
\t\tinfinite: true,
\t\tarrows: false,slidesToShow: 5,
\t\tresponsive: [
\t\t\t{
\t\t\t\tbreakpoint: 1200,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 4,
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 991,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 3,
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 767,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 2,
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 479,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 1,
\t\t\t\t\tarrows: false,
\t\t\t\t\tdots: false,
\t\t\t\t}
\t\t\t}
\t\t]
\t});
</script>


</div>
<div id=\"shopify-section-1546842963628\" class=\"shopify-section\"><!-- Protuct Area Start -->
<div class=\"product-area bg-1 pt-110 pb-80\" id=\"section-1546842963628\">
  <div class=\"container\">

    <div class=\"section-title text-center\">
      <div class=\"section-img d-flex justify-content-center\">

        <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/titlef59e.png?v=1546753447') }}\" alt=\"slider images\">

      </div>
      <h2><span>Organic </span>featured products</h2>
    </div>


  </div>
  <div class=\"container\">
    <div class=\"product-tab-list nav\" role=\"tablist\">


      <a class=\"active\" href=\"#vegetables\" data-toggle=\"tab\" role=\"tab\" aria-selected=\"true\" aria-controls=\"vegetables\">vegetables</a>

      <a class=\"\" href=\"#fruits\" data-toggle=\"tab\" role=\"tab\" aria-selected=\"true\" aria-controls=\"fruits\">fruits</a>

      <a class=\"\" href=\"#juices\" data-toggle=\"tab\" role=\"tab\" aria-selected=\"true\" aria-controls=\"juices\">juices</a>

      <a class=\"\" href=\"#bread\" data-toggle=\"tab\" role=\"tab\" aria-selected=\"true\" aria-controls=\"bread\">bread</a>

    </div>
    <div class=\"tab-content text-center\">


      <div class=\"tab-pane fade show active\" id=\"vegetables\" role=\"tabpanel\">
        <div class=\"product-carousel\">



<div class=\"custom-col\">
            <div class=\"single-product-item 22279712014400\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-15%</span>




<span class=\"new-title\">New</span>



</div>
    <a href=\"products/1-new-and-sale-badge-product.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/1_large1d58.jpg?v=1547544027') }}\" alt=\"1. New and sale badge product\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('1-new-and-sale-badge-product')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279712014400, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394984775744\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/1-new-and-sale-badge-product.html\">1. New and sale badge product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$110.00</span></span>

      <span class=\"old-price\"><span class=money>\$130.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279680360512\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">

<span class=\"new-title\">New</span>

</div>
    <a href=\"products/2-new-badge-product.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/4_8d90a229-c59e-43cb-b38e-7987d086216a_largea376.jpg?v=1547544059') }}\" alt=\"2. New badge product\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('2-new-badge-product')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279680360512, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394982416448\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/2-new-badge-product.html\">2. New badge product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$80.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279645265984\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-18%</span>

</div>
    <a href=\"products/3-variable-product.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/5_f1b6a39a-df8a-4bfd-954d-b85a336fc61d_largeec70.jpg?v=1547544068') }}\" alt=\"3. Variable product\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('3-variable-product')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279645265984, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394976649280\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/3-variable-product.html\">3. Variable product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$70.00</span></span>

      <span class=\"old-price\"><span class=money>\$85.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279624851520\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">
<span class=\"soldout-title\">Soldout</span>
</div>
    <a href=\"products/4-soldout-product.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/6_74ad24f4-47da-473d-a864-16de95815367_large1ddf.jpg?v=1547544076') }}\" alt=\"4. Soldout product\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('4-soldout-product')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">

        <button class=\"cart-disable p-cart-btn\">
          <span class=\"cart-text\">Soldout</span>
        </button>

      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394976387136\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/4-soldout-product.html\">4. Soldout product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$29.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279622885440\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">


</div>
    <a href=\"products/5-simple-product.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/7_af41587b-4afc-4301-ba09-4a4a21eecdc5_large4353.jpg?v=1548148372') }}\" alt=\"5. Simple product\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('5-simple-product')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279622885440, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394976321600\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/5-simple-product.html\">5. Simple product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$50.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279616036928\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-27%</span>

</div>
    <a href=\"products/6-variable-with-soldout-product.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/8_7e2166e6-0d10-4984-94e4-0e2e75a52b57_large4997.jpg?v=1547544092') }}\" alt=\"6. Variable with soldout product\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('6-variable-with-soldout-product')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279616036928, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394975371328\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/6-variable-with-soldout-product.html\">6. Variable with soldout product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$55.00</span></span>

      <span class=\"old-price\"><span class=money>\$75.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279612334144\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">

</div>
    <a href=\"products/7-sample-affiliate-product.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/9_ec55d235-976a-4038-b731-71d3e8b19104_largebf13.jpg?v=1547544100') }}\" alt=\"7. Sample affiliate product\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li>
</ul>

      <a href=\"https://affiliate-program.amazon.com/\" class=\"p-cart-btn\">
        <span class=\"cart-title\">Buy from amazon</span>
      </a><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394975141952\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/7-sample-affiliate-product.html\">7. Sample affiliate product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279608107072\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-35%</span>


</div>
    <a href=\"products/8-countdown-product.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/10_4162efee-35e1-4e52-8bf1-f197dc65425e_largea365.jpg?v=1547544110') }}\" alt=\"8. Countdown product\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('8-countdown-product')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279608107072, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">



        <div class=\"product-countdown timer-grid\" data-countdown=\"2019/05/24\"></div>

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394974388288\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/8-countdown-product.html\">8. Countdown product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$39.00</span></span>

      <span class=\"old-price\"><span class=money>\$60.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279596539968\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-10%</span>

</div>
    <a href=\"products/10-this-is-the-large-title-for-testing-large-title-and-there-is-an-image-for-testing.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/2_1ff78ef6-6239-4f61-a0db-7bdb3501d8f3_large61e0.jpg?v=1547544042') }}\" alt=\"10. This is the large title for testing large title and there is an image for testing\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('10-this-is-the-large-title-for-testing-large-title-and-there-is-an-image-for-testing')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279596539968, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394973405248\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/10-this-is-the-large-title-for-testing-large-title-and-there-is-an-image-for-testing.html\">10. This is the large title for testing large title and there is an image for testing</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$21.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279593164864\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



</div>
    <a href=\"products/11-product-with-video.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/3_751e665b-a90f-4569-a221-bd51e40a2fdc_large4e76.jpg?v=1547544050') }}\" alt=\"11. Product with video\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('11-product-with-video')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279593164864, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394973110336\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/11-product-with-video.html\">11. Product with video</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$39.00</span></span>

    </div>
  </div>
</div>

          </div>

        </div>
      </div>


      <div class=\"tab-pane fade \" id=\"fruits\" role=\"tabpanel\">
        <div class=\"product-carousel\">



<div class=\"custom-col\">
            <div class=\"single-product-item 22279612334144\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">


</div>
    <a href=\"products/7-sample-affiliate-product.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/9_ec55d235-976a-4038-b731-71d3e8b19104_largebf13.jpg?v=1547544100') }}\" alt=\"7. Sample affiliate product\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li>
</ul>

      <a href=\"https://affiliate-program.amazon.com/\" class=\"p-cart-btn\">
        <span class=\"cart-title\">Buy from amazon</span>
      </a><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394975141952\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/7-sample-affiliate-product.html\">7. Sample affiliate product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279608107072\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-35%</span>


</div>
    <a href=\"products/8-countdown-product.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/10_4162efee-35e1-4e52-8bf1-f197dc65425e_largea365.jpg?v=1547544110') }}\" alt=\"8. Countdown product\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('8-countdown-product')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279608107072, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">



        <div class=\"product-countdown timer-grid\" data-countdown=\"2019/05/24\"></div>

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394974388288\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/8-countdown-product.html\">8. Countdown product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$39.00</span></span>

      <span class=\"old-price\"><span class=money>\$60.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279603191872\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">


</div>
    <a href=\"products/9-without-shortcode-product.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/11_9cdea39a-2717-43d1-8e62-933157dbbd66_largecda6.jpg?v=1547544119') }}\" alt=\"9. Without shortcode product\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('9-without-shortcode-product')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279603191872, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394973831232\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/9-without-shortcode-product.html\">9. Without shortcode product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$79.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279557775424\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-10%</span>

</div>
    <a href=\"products/demo-product-title.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/15_cdc7c7c0-c033-4994-a6f6-a03e203550e8_largebadd.jpg?v=1547544239') }}\" alt=\"Demo product title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('demo-product-title')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279557775424, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">



        <div class=\"product-countdown timer-grid\" data-countdown=\"2019/05/24\"></div>

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394969899072\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/demo-product-title.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$21.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279509180480\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"new-title\">New</span>



</div>
    <a href=\"products/demo-product-title-1.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/14_7802946f-8d69-47c3-9f43-6e5389831cda_largee64d.jpg?v=1547544231') }}\" alt=\"Demo product title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('demo-product-title-1')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279509180480, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394966360128\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/demo-product-title-1.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$80.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279364345920\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">
<span class=\"soldout-title\">Soldout</span>
</div>
    <a href=\"products/dummy-product-name-2.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/18_108069c0-0263-4fdf-82a2-40b11668e40a_larged511.jpg?v=1547544263') }}\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-product-name-2')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">

        <button class=\"cart-disable p-cart-btn\">
          <span class=\"cart-text\">Soldout</span>
        </button>

      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394954661952\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name-2.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$29.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279363297344\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">





</div>
    <a href=\"products/demo-product-title-2.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/13_a4de9b0c-e87c-4068-a532-8ac6cc2fbb54_large1139.jpg?v=1547544223') }}\" alt=\"Demo product title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('demo-product-title-2')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279363297344, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394954530880\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/demo-product-title-2.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$50.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279349764160\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">





</div>
    <a href=\"products/dummy-product-name-3.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/17_20906e90-7cb0-4285-9ac7-4ed8e3d9de58_large46c6.jpg?v=1547544254') }}\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li>
</ul>

      <a href=\"https://affiliate-program.amazon.com/\" class=\"p-cart-btn\">
        <span class=\"cart-title\">Buy from amazon</span>
      </a><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952761408\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name-3.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279348650048\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">





</div>
    <a href=\"products/demo-product-title-3.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/12_995223f0-1a07-4a6f-a255-011aa7d2c1c6_large50bf.jpg?v=1547544129') }}\" alt=\"Demo product title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li>
</ul>

      <a href=\"https://affiliate-program.amazon.com/\" class=\"p-cart-btn\">
        <span class=\"cart-title\">Buy from amazon</span>
      </a><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952663104\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/demo-product-title-3.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279328759872\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">





</div>
    <a href=\"products/dummy-product-name-4.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/16_7802410c-98a0-499e-932b-c7bc47cd9cc9_largec061.jpg?v=1547544247') }}\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-product-name-4')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279328759872, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394951385152\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name-4.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$79.00</span></span>

    </div>
  </div>
</div>

          </div>

        </div>
      </div>


      <div class=\"tab-pane fade \" id=\"juices\" role=\"tabpanel\">
        <div class=\"product-carousel\">



<div class=\"custom-col\">
            <div class=\"single-product-item 22279566393408\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-15%</span>
















<span class=\"new-title\">New</span>



</div>
    <a href=\"products/dummy-product-name.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/20_a8cf9962-f46a-463e-b7a3-36332cd7b081_large8891.jpg?v=1547544312') }}\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-product-name')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279566393408, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394970161216\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$110.00</span></span>

      <span class=\"old-price\"><span class=money>\$130.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279545585728\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">





</div>
    <a href=\"products/dummy-text-for-title.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/24_e709e95a-6a8e-4631-8aeb-e1169aacbc3c_largea043.jpg?v=1547544444') }}\" alt=\"Dummy text for title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-text-for-title')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279545585728, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394969243712\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-text-for-title.html\">Dummy text for title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$39.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279524024384\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">
















<span class=\"new-title\">New</span>



</div>
    <a href=\"products/dummy-product-name-1.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/19_419a1b30-3d98-47be-a047-662202d1834d_largeb4f6.jpg?v=1547544279') }}\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-product-name-1')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279524024384, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394967605312\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name-1.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$80.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279387086912\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-18%</span>





</div>
    <a href=\"products/dummy-text-for-title-1.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/23_c8b41666-00fd-4f4f-bae9-c3daee32c979_large85df.jpg?v=1547544435') }}\" alt=\"Dummy text for title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-text-for-title-1')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279387086912, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394954956864\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-text-for-title-1.html\">Dummy text for title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$70.00</span></span>

      <span class=\"old-price\"><span class=money>\$85.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279364345920\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">
<span class=\"soldout-title\">Soldout</span>
</div>
    <a href=\"products/dummy-product-name-2.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/18_108069c0-0263-4fdf-82a2-40b11668e40a_larged511.jpg?v=1547544263') }}\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-product-name-2')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">

        <button class=\"cart-disable p-cart-btn\">
          <span class=\"cart-text\">Soldout</span>
        </button>

      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394954661952\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name-2.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$29.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279354875968\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-27%</span>





</div>
    <a href=\"products/dummy-text-for-title-2.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/22_cb9b8156-fcd2-4335-af66-d93cbf7cc939_large31dd.jpg?v=1547544417') }}\" alt=\"Dummy text for title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-text-for-title-2')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279354875968, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394953547840\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-text-for-title-2.html\">Dummy text for title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$55.00</span></span>

      <span class=\"old-price\"><span class=money>\$75.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279350943808\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-27%</span>





</div>
    <a href=\"products/product-dummy-title-3.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/26_e7ee30b5-4975-4140-9c06-f1f60656f41b_large3553.jpg?v=1547544472') }}\" alt=\"Product dummy title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('product-dummy-title-3')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279350943808, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952990784\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/product-dummy-title-3.html\">Product dummy title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$55.00</span></span>

      <span class=\"old-price\"><span class=money>\$75.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279349764160\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">





</div>
    <a href=\"products/dummy-product-name-3.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/17_20906e90-7cb0-4285-9ac7-4ed8e3d9de58_large46c6.jpg?v=1547544254') }}\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li>
</ul>

      <a href=\"https://affiliate-program.amazon.com/\" class=\"p-cart-btn\">
        <span class=\"cart-title\">Buy from amazon</span>
      </a><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952761408\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name-3.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279337508928\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-35%</span>





</div>
    <a href=\"products/dummy-text-for-title-3.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/21_9110a846-967b-42a6-9153-eaea3137f40d_larged4b5.jpg?v=1547544337') }}\" alt=\"Dummy text for title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-text-for-title-3')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279337508928, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">



        <div class=\"product-countdown timer-grid\" data-countdown=\"2019/05/24\"></div>

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952073280\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-text-for-title-3.html\">Dummy text for title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$39.00</span></span>

      <span class=\"old-price\"><span class=money>\$60.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279331610688\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">





</div>
    <a href=\"products/product-dummy-title-4.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/25_8d24b726-3c65-4b61-960c-e57f54a0ab22_larged76c.jpg?v=1547544455') }}\" alt=\"Product dummy title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('product-dummy-title-4')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279331610688, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394951614528\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/product-dummy-title-4.html\">Product dummy title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$79.00</span></span>

    </div>
  </div>
</div>

          </div>

        </div>
      </div>


      <div class=\"tab-pane fade \" id=\"bread\" role=\"tabpanel\">
        <div class=\"product-carousel\">



<div class=\"custom-col\">
            <div class=\"single-product-item 22279566393408\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-15%</span>
















<span class=\"new-title\">New</span>



</div>
    <a href=\"products/dummy-product-name.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/20_a8cf9962-f46a-463e-b7a3-36332cd7b081_large8891.jpg?v=1547544312') }}\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-product-name')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279566393408, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394970161216\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$110.00</span></span>

      <span class=\"old-price\"><span class=money>\$130.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279557775424\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-10%</span>





</div>
    <a href=\"products/demo-product-title.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/15_cdc7c7c0-c033-4994-a6f6-a03e203550e8_largebadd.jpg?v=1547544239') }}\" alt=\"Demo product title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('demo-product-title')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279557775424, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">



        <div class=\"product-countdown timer-grid\" data-countdown=\"2019/05/24\"></div>

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394969899072\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/demo-product-title.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$21.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279524024384\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">
















<span class=\"new-title\">New</span>



</div>
    <a href=\"products/dummy-product-name-1.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/19_419a1b30-3d98-47be-a047-662202d1834d_largeb4f6.jpg?v=1547544279') }}\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-product-name-1')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279524024384, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394967605312\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name-1.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$80.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279509180480\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">
















<span class=\"new-title\">New</span>



</div>
    <a href=\"products/demo-product-title-1.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/14_7802946f-8d69-47c3-9f43-6e5389831cda_largee64d.jpg?v=1547544231') }}\" alt=\"Demo product title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('demo-product-title-1')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279509180480, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394966360128\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/demo-product-title-1.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$80.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279364345920\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">
<span class=\"soldout-title\">Soldout</span>
</div>
    <a href=\"products/dummy-product-name-2.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/18_108069c0-0263-4fdf-82a2-40b11668e40a_larged511.jpg?v=1547544263') }}\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-product-name-2')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">

        <button class=\"cart-disable p-cart-btn\">
          <span class=\"cart-text\">Soldout</span>
        </button>

      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394954661952\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name-2.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$29.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279363297344\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">





</div>
    <a href=\"products/demo-product-title-2.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/13_a4de9b0c-e87c-4068-a532-8ac6cc2fbb54_large1139.jpg?v=1547544223') }}\" alt=\"Demo product title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('demo-product-title-2')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279363297344, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394954530880\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/demo-product-title-2.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$50.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279349764160\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">





</div>
    <a href=\"products/dummy-product-name-3.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/17_20906e90-7cb0-4285-9ac7-4ed8e3d9de58_large46c6.jpg?v=1547544254') }}\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li>
</ul>

      <a href=\"https://affiliate-program.amazon.com/\" class=\"p-cart-btn\">
        <span class=\"cart-title\">Buy from amazon</span>
      </a><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952761408\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name-3.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279348650048\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">





</div>
    <a href=\"products/demo-product-title-3.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/12_995223f0-1a07-4a6f-a255-011aa7d2c1c6_large50bf.jpg?v=1547544129') }}\" alt=\"Demo product title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li>
</ul>

      <a href=\"https://affiliate-program.amazon.com/\" class=\"p-cart-btn\">
        <span class=\"cart-title\">Buy from amazon</span>
      </a><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952663104\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/demo-product-title-3.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279337508928\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">



<span class=\"sale-title\">Sale</span>


<span class=\"percent-count\">-35%</span>





</div>
    <a href=\"products/dummy-text-for-title-3.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/21_9110a846-967b-42a6-9153-eaea3137f40d_larged4b5.jpg?v=1547544337') }}\" alt=\"Dummy text for title\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-text-for-title-3')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279337508928, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">



        <div class=\"product-countdown timer-grid\" data-countdown=\"2019/05/24\"></div>

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952073280\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-text-for-title-3.html\">Dummy text for title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$39.00</span></span>

      <span class=\"old-price\"><span class=money>\$60.00</span></span>

    </div>
  </div>
</div>

          </div>
<div class=\"custom-col\">
            <div class=\"single-product-item 22279328759872\">
  <div class=\"product-image\">
    <div class=\"product-item-badge\">





</div>
    <a href=\"products/dummy-product-name-4.html\">
      <img class=\"popup_cart_image\" src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/16_7802410c-98a0-499e-932b-c7bc47cd9cc9_largec061.jpg?v=1547544247') }}\" alt=\"Dummy product name\">
    </a>
    <div class=\"product-hover\">
      <ul class=\"hover-icon-list\"><li>

<a href=\"account/login.html\" title=\"Add To Wishlist\"><i class=\"icon icon-Heart\"></i></a>


        </li><li>
      \t\t<a class=\"action-plus\" title=\"Quick View\" data-toggle=\"modal\" data-target=\"#quickViewModal\" href=\"javascript:void(0);\" onclick=\"quiqview('dummy-product-name-4')\"><i class=\"icon icon-Search\"></i></a>
        </li>

</ul><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279328759872, 1); return false;\" class=\"ajax-spin-cart p-cart-btn\">
          <span>
            <span class=\"cart-title\">Add to cart</span>
            <span class=\"cart-loading\">Wait..</span>
            <span class=\"cart-added\">Added</span>
            <span class=\"cart-unavailable\">Uavailable</span>
          </span>
        </a>


      </div><div class=\"timer count-down-product\">

      </div>
    </div>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394951385152\"></span>
    </div>
    <h5 class=\"popup_cart_title\"><a href=\"products/dummy-product-name-4.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$79.00</span></span>

    </div>
  </div>
</div>

          </div>

        </div>
      </div>

    </div>
  </div>
</div>
<!-- Protuct Area End --><style data-shopify>#section-1546842963628{}
  @media (min-width: 768px) and (max-width: 991px) {
    #section-1546842963628{}
  }
  @media (max-width: 767px) {
    #section-1546842963628{}
  }

  .bg-1 {
    background-image:url({{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/1_bd49c3c9-e82e-474d-951f-73b3902f42292a2e.jpg?v=1546843477') }});
    background-position: top center;
  }</style><script>

  /*---------------------------------------
\tProduct Carousel Slider
\t------------------------------------------*/
\tvar productSlider = \$('#section-1546842963628 .product-carousel');
\tproductSlider.slick({
\t\tarrows: true,
\t\tinfinite: true,slidesToShow: 4,
\t\tprevArrow: '<button type=\"button\" class=\"slick-prev\"><i class=\"fa fa-angle-left\"></i></button>',
\t\tnextArrow: '<button type=\"button\" class=\"slick-next\"><i class=\"fa fa-angle-right\"></i></button>',
\t\tresponsive: [
\t\t\t{
\t\t\t\tbreakpoint: 1200,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 3,
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 991,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 3,
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 767,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 2,
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 479,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 1,
\t\t\t\t}
\t\t\t}
\t\t]
\t});

</script>

</div><div id=\"shopify-section-1546851690499\" class=\"shopify-section\"><!-- Banner Area Start -->
<div class=\"banner-area banner-one-area bg-2 fix pt-60 pb-80\" id=\"section-1546851690499\">
  <div class=\"container\">
    <div class=\"row\">
      <div class=\"col-lg-6 d-flex align-items-center\">
        <div class=\"banner-text pt-15\">

          <h3>Cold Process <span>Organic</span></h3>


          <h1>Savon Stories</h1>


          <h2>

            <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/mark35ef.png?v=1546851756') }}\" alt=\"About Product images\">

            <span>Buy 1 get 1 free</span>
          </h2>


          <p>Typi non habent claritatem insitam, est usus legentis in iis qui facit eorum claritatem. Investigationes demonstraverunt lectores legere me lius quod ii legunt saepius.</p>


          <a href=\"collections.html\" class=\"default-btn\">Shop Now</a>

        </div>
      </div>
      <div class=\"col-lg-6\">
        <div class=\"banner-image-wrapper\">

          <div class=\"banner-image\">
            <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/1_73eb7f57-63fe-4bb1-85c3-ec417a5575fb0635.jpg?v=1546851802') }}\" alt=\"About Product images\">
          </div>


          <div class=\"banner-image-text\">
            <h4>organic savon stories</h4>

            <p>We believe that healthy eating, clean air, and gentle character is the best start to genuine wellbeing.</p>

          </div>

        </div>
      </div>
    </div>
  </div>
</div>
<!-- Banner Area End --><style data-shopify>#section-1546851690499{}
  @media (min-width: 768px) and (max-width: 991px) {
    #section-1546851690499{}
  }
  @media (max-width: 767px) {
    #section-1546851690499{}
  }

  .bg-2 {
    background-image:url({{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/2_fa8d7159-d16e-4440-88e6-975b2e2c9d58178f.png?v=1547873099') }});
  }</style>




</div><div id=\"shopify-section-1546857355207\" class=\"shopify-section\"><!-- Featured Area Start -->
<div class=\"featured-area bg-3 pt-105 pb-90\" id=\"section-1546857355207\">
  <div class=\"container\">
    <div class=\"row\">


      <div class=\"col-lg-4 col-md-6\">
        <div class=\"featured-carousel-wrapper\">

          <h3>Organic <span>new arrivals</span></h3>

          <div class=\"feaured-carousel\">


<div class=\"single-featured-carousel\"><div class=\"single-featured-item 22279680360512\">
  <div class=\"feature-image\">
    <a href=\"products/2-new-badge-product.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/4_8d90a229-c59e-43cb-b38e-7987d086216a_121X121_crop_centera376.jpg?v=1547544059') }}\" alt=\"2. New badge product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394982416448\"></span>
    </div>
    <h5><a href=\"products/2-new-badge-product.html\">2. New badge product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$80.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279680360512, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279566393408\">
  <div class=\"feature-image\">
    <a href=\"products/dummy-product-name.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/20_a8cf9962-f46a-463e-b7a3-36332cd7b081_121X121_crop_center8891.jpg?v=1547544312') }}\" alt=\"Dummy product name\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394970161216\"></span>
    </div>
    <h5><a href=\"products/dummy-product-name.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$110.00</span></span>

      <span class=\"old-price\"><span class=money>\$130.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279566393408, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279557775424\">
  <div class=\"feature-image\">
    <a href=\"products/demo-product-title.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/15_cdc7c7c0-c033-4994-a6f6-a03e203550e8_121X121_crop_centerbadd.jpg?v=1547544239') }}\" alt=\"Demo product title\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394969899072\"></span>
    </div>
    <h5><a href=\"products/demo-product-title.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$21.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279557775424, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279524024384\">
  <div class=\"feature-image\">
    <a href=\"products/dummy-product-name-1.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/19_419a1b30-3d98-47be-a047-662202d1834d_121X121_crop_centerb4f6.jpg?v=1547544279') }}\" alt=\"Dummy product name\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394967605312\"></span>
    </div>
    <h5><a href=\"products/dummy-product-name-1.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$80.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279524024384, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
</div><div class=\"single-featured-carousel\"><div class=\"single-featured-item 22279509180480\">
  <div class=\"feature-image\">
    <a href=\"products/demo-product-title-1.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/14_7802946f-8d69-47c3-9f43-6e5389831cda_121X121_crop_centere64d.jpg?v=1547544231') }}\" alt=\"Demo product title\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394966360128\"></span>
    </div>
    <h5><a href=\"products/demo-product-title-1.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$80.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279509180480, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279364345920\">
  <div class=\"feature-image\">
    <a href=\"products/dummy-product-name-2.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/18_108069c0-0263-4fdf-82a2-40b11668e40a_121X121_crop_centerd511.jpg?v=1547544263') }}\" alt=\"Dummy product name\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394954661952\"></span>
    </div>
    <h5><a href=\"products/dummy-product-name-2.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$29.00</span></span>

    </div><div class=\"product-cart-action\">

        <button class=\"cart-disable feature-cart\">
          <span class=\"cart-text\"><i class=\"icon icon-FullShoppingCart\"></i></span>
        </button>

      </div></div>
</div>
<div class=\"single-featured-item 22279363297344\">
  <div class=\"feature-image\">
    <a href=\"products/demo-product-title-2.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/13_a4de9b0c-e87c-4068-a532-8ac6cc2fbb54_121X121_crop_center1139.jpg?v=1547544223') }}\" alt=\"Demo product title\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394954530880\"></span>
    </div>
    <h5><a href=\"products/demo-product-title-2.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$50.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279363297344, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279349764160\">
  <div class=\"feature-image\">
    <a href=\"products/dummy-product-name-3.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/17_20906e90-7cb0-4285-9ac7-4ed8e3d9de58_121X121_crop_center46c6.jpg?v=1547544254') }}\" alt=\"Dummy product name\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952761408\"></span>
    </div>
    <h5><a href=\"products/dummy-product-name-3.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div></div>
</div>
</div><div class=\"single-featured-carousel\"><div class=\"single-featured-item 22279348650048\">
  <div class=\"feature-image\">
    <a href=\"products/demo-product-title-3.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/12_995223f0-1a07-4a6f-a255-011aa7d2c1c6_121X121_crop_center50bf.jpg?v=1547544129') }}\" alt=\"Demo product title\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952663104\"></span>
    </div>
    <h5><a href=\"products/demo-product-title-3.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div></div>
</div>
<div class=\"single-featured-item 22279328759872\">
  <div class=\"feature-image\">
    <a href=\"products/dummy-product-name-4.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/16_7802410c-98a0-499e-932b-c7bc47cd9cc9_121X121_crop_centerc061.jpg?v=1547544247') }}\" alt=\"Dummy product name\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394951385152\"></span>
    </div>
    <h5><a href=\"products/dummy-product-name-4.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$79.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279328759872, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
</div></div>
        </div>
      </div>



      <div class=\"col-lg-4 col-md-6\">
        <div class=\"featured-carousel-wrapper\">

          <h3>Organic <span>bestseller</span></h3>

          <div class=\"feaured-carousel\">


<div class=\"single-featured-carousel\"><div class=\"single-featured-item 22279712014400\">
  <div class=\"feature-image\">
    <a href=\"products/1-new-and-sale-badge-product.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/1_121X121_crop_center1d58.jpg?v=1547544027') }}\" alt=\"1. New and sale badge product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394984775744\"></span>
    </div>
    <h5><a href=\"products/1-new-and-sale-badge-product.html\">1. New and sale badge product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$110.00</span></span>

      <span class=\"old-price\"><span class=money>\$130.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279712014400, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279680360512\">
  <div class=\"feature-image\">
    <a href=\"products/2-new-badge-product.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/4_8d90a229-c59e-43cb-b38e-7987d086216a_121X121_crop_centera376.jpg?v=1547544059') }}\" alt=\"2. New badge product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394982416448\"></span>
    </div>
    <h5><a href=\"products/2-new-badge-product.html\">2. New badge product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$80.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279680360512, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279645265984\">
  <div class=\"feature-image\">
    <a href=\"products/3-variable-product.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/5_f1b6a39a-df8a-4bfd-954d-b85a336fc61d_121X121_crop_centerec70.jpg?v=1547544068') }}\" alt=\"3. Variable product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394976649280\"></span>
    </div>
    <h5><a href=\"products/3-variable-product.html\">3. Variable product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$70.00</span></span>

      <span class=\"old-price\"><span class=money>\$85.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279645265984, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279624851520\">
  <div class=\"feature-image\">
    <a href=\"products/4-soldout-product.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/6_74ad24f4-47da-473d-a864-16de95815367_121X121_crop_center1ddf.jpg?v=1547544076') }}\" alt=\"4. Soldout product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394976387136\"></span>
    </div>
    <h5><a href=\"products/4-soldout-product.html\">4. Soldout product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$29.00</span></span>

    </div><div class=\"product-cart-action\">

        <button class=\"cart-disable feature-cart\">
          <span class=\"cart-text\"><i class=\"icon icon-FullShoppingCart\"></i></span>
        </button>

      </div></div>
</div>
</div><div class=\"single-featured-carousel\"><div class=\"single-featured-item 22279622885440\">
  <div class=\"feature-image\">
    <a href=\"products/5-simple-product.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/7_af41587b-4afc-4301-ba09-4a4a21eecdc5_121X121_crop_center4353.jpg?v=1548148372') }}\" alt=\"5. Simple product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394976321600\"></span>
    </div>
    <h5><a href=\"products/5-simple-product.html\">5. Simple product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$50.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279622885440, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279616036928\">
  <div class=\"feature-image\">
    <a href=\"products/6-variable-with-soldout-product.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/8_7e2166e6-0d10-4984-94e4-0e2e75a52b57_121X121_crop_center4997.jpg?v=1547544092') }}\" alt=\"6. Variable with soldout product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394975371328\"></span>
    </div>
    <h5><a href=\"products/6-variable-with-soldout-product.html\">6. Variable with soldout product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$55.00</span></span>

      <span class=\"old-price\"><span class=money>\$75.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279616036928, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279612334144\">
  <div class=\"feature-image\">
    <a href=\"products/7-sample-affiliate-product.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/9_ec55d235-976a-4038-b731-71d3e8b19104_121X121_crop_centerbf13.jpg?v=1547544100') }}\" alt=\"7. Sample affiliate product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394975141952\"></span>
    </div>
    <h5><a href=\"products/7-sample-affiliate-product.html\">7. Sample affiliate product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div></div>
</div>
<div class=\"single-featured-item 22279608107072\">
  <div class=\"feature-image\">
    <a href=\"products/8-countdown-product.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/10_4162efee-35e1-4e52-8bf1-f197dc65425e_121X121_crop_centera365.jpg?v=1547544110') }}\" alt=\"8. Countdown product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394974388288\"></span>
    </div>
    <h5><a href=\"products/8-countdown-product.html\">8. Countdown product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$39.00</span></span>

      <span class=\"old-price\"><span class=money>\$60.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279608107072, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
</div><div class=\"single-featured-carousel\"><div class=\"single-featured-item 22279603191872\">
  <div class=\"feature-image\">
    <a href=\"products/9-without-shortcode-product.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/11_9cdea39a-2717-43d1-8e62-933157dbbd66_121X121_crop_centercda6.jpg?v=1547544119') }}\" alt=\"9. Without shortcode product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394973831232\"></span>
    </div>
    <h5><a href=\"products/9-without-shortcode-product.html\">9. Without shortcode product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$79.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279603191872, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279596539968\">
  <div class=\"feature-image\">
    <a href=\"products/10-this-is-the-large-title-for-testing-large-title-and-there-is-an-image-for-testing.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/2_1ff78ef6-6239-4f61-a0db-7bdb3501d8f3_121X121_crop_center61e0.jpg?v=1547544042') }}\" alt=\"10. This is the large title for testing large title and there is an image for testing\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394973405248\"></span>
    </div>
    <h5><a href=\"products/10-this-is-the-large-title-for-testing-large-title-and-there-is-an-image-for-testing.html\">10. This is the large title for testing large title and there is an image for testing</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$21.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279596539968, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279593164864\">
  <div class=\"feature-image\">
    <a href=\"products/11-product-with-video.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/3_751e665b-a90f-4569-a221-bd51e40a2fdc_121X121_crop_center4e76.jpg?v=1547544050') }}\" alt=\"11. Product with video\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394973110336\"></span>
    </div>
    <h5><a href=\"products/11-product-with-video.html\">11. Product with video</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$39.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279593164864, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279348650048\">
  <div class=\"feature-image\">
    <a href=\"products/demo-product-title-3.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/12_995223f0-1a07-4a6f-a255-011aa7d2c1c6_121X121_crop_center50bf.jpg?v=1547544129') }}\" alt=\"Demo product title\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952663104\"></span>
    </div>
    <h5><a href=\"products/demo-product-title-3.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div></div>
</div>
</div></div>
        </div>
      </div>



      <div class=\"col-lg-4 col-md-6\">
        <div class=\"featured-carousel-wrapper\">

          <h3>Organic <span>most viewed</span></h3>

          <div class=\"feaured-carousel\">


<div class=\"single-featured-carousel\"><div class=\"single-featured-item 22279645265984\">
  <div class=\"feature-image\">
    <a href=\"products/3-variable-product.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/5_f1b6a39a-df8a-4bfd-954d-b85a336fc61d_121X121_crop_centerec70.jpg?v=1547544068') }}\" alt=\"3. Variable product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394976649280\"></span>
    </div>
    <h5><a href=\"products/3-variable-product.html\">3. Variable product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$70.00</span></span>

      <span class=\"old-price\"><span class=money>\$85.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279645265984, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279624851520\">
  <div class=\"feature-image\">
    <a href=\"products/4-soldout-product.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/6_74ad24f4-47da-473d-a864-16de95815367_121X121_crop_center1ddf.jpg?v=1547544076') }}\" alt=\"4. Soldout product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394976387136\"></span>
    </div>
    <h5><a href=\"products/4-soldout-product.html\">4. Soldout product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$29.00</span></span>

    </div><div class=\"product-cart-action\">

        <button class=\"cart-disable feature-cart\">
          <span class=\"cart-text\"><i class=\"icon icon-FullShoppingCart\"></i></span>
        </button>

      </div></div>
</div>
<div class=\"single-featured-item 22279622885440\">
  <div class=\"feature-image\">
    <a href=\"products/5-simple-product.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/7_af41587b-4afc-4301-ba09-4a4a21eecdc5_121X121_crop_center4353.jpg?v=1548148372') }}\" alt=\"5. Simple product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394976321600\"></span>
    </div>
    <h5><a href=\"products/5-simple-product.html\">5. Simple product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$50.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279622885440, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279616036928\">
  <div class=\"feature-image\">
    <a href=\"products/6-variable-with-soldout-product.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/8_7e2166e6-0d10-4984-94e4-0e2e75a52b57_121X121_crop_center4997.jpg?v=1547544092') }}\" alt=\"6. Variable with soldout product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394975371328\"></span>
    </div>
    <h5><a href=\"products/6-variable-with-soldout-product.html\">6. Variable with soldout product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$55.00</span></span>

      <span class=\"old-price\"><span class=money>\$75.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279616036928, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
</div><div class=\"single-featured-carousel\"><div class=\"single-featured-item 22279612334144\">
  <div class=\"feature-image\">
    <a href=\"products/7-sample-affiliate-product.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/9_ec55d235-976a-4038-b731-71d3e8b19104_121X121_crop_centerbf13.jpg?v=1547544100') }}\" alt=\"7. Sample affiliate product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394975141952\"></span>
    </div>
    <h5><a href=\"products/7-sample-affiliate-product.html\">7. Sample affiliate product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div></div>
</div>
<div class=\"single-featured-item 22279608107072\">
  <div class=\"feature-image\">
    <a href=\"products/8-countdown-product.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/10_4162efee-35e1-4e52-8bf1-f197dc65425e_121X121_crop_centera365.jpg?v=1547544110') }}\" alt=\"8. Countdown product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394974388288\"></span>
    </div>
    <h5><a href=\"products/8-countdown-product.html\">8. Countdown product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$39.00</span></span>

      <span class=\"old-price\"><span class=money>\$60.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279608107072, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279603191872\">
  <div class=\"feature-image\">
    <a href=\"products/9-without-shortcode-product.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/11_9cdea39a-2717-43d1-8e62-933157dbbd66_121X121_crop_centercda6.jpg?v=1547544119') }}\" alt=\"9. Without shortcode product\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394973831232\"></span>
    </div>
    <h5><a href=\"products/9-without-shortcode-product.html\">9. Without shortcode product</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$79.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279603191872, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279557775424\">
  <div class=\"feature-image\">
    <a href=\"products/demo-product-title.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/15_cdc7c7c0-c033-4994-a6f6-a03e203550e8_121X121_crop_centerbadd.jpg?v=1547544239') }}\" alt=\"Demo product title\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394969899072\"></span>
    </div>
    <h5><a href=\"products/demo-product-title.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$19.00</span></span>

      <span class=\"old-price\"><span class=money>\$21.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279557775424, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
</div><div class=\"single-featured-carousel\"><div class=\"single-featured-item 22279509180480\">
  <div class=\"feature-image\">
    <a href=\"products/demo-product-title-1.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/14_7802946f-8d69-47c3-9f43-6e5389831cda_121X121_crop_centere64d.jpg?v=1547544231') }}\" alt=\"Demo product title\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394966360128\"></span>
    </div>
    <h5><a href=\"products/demo-product-title-1.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$80.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279509180480, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279363297344\">
  <div class=\"feature-image\">
    <a href=\"products/demo-product-title-2.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/13_a4de9b0c-e87c-4068-a532-8ac6cc2fbb54_121X121_crop_center1139.jpg?v=1547544223') }}\" alt=\"Demo product title\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394954530880\"></span>
    </div>
    <h5><a href=\"products/demo-product-title-2.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$50.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279363297344, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
<div class=\"single-featured-item 22279348650048\">
  <div class=\"feature-image\">
    <a href=\"products/demo-product-title-3.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/12_995223f0-1a07-4a6f-a255-011aa7d2c1c6_121X121_crop_center50bf.jpg?v=1547544129') }}\" alt=\"Demo product title\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394952663104\"></span>
    </div>
    <h5><a href=\"products/demo-product-title-3.html\">Demo product title</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$29.00</span></span>

    </div></div>
</div>
<div class=\"single-featured-item 22279328759872\">
  <div class=\"feature-image\">
    <a href=\"products/dummy-product-name-4.html\"><img src=\"{{asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/products/16_7802410c-98a0-499e-932b-c7bc47cd9cc9_121X121_crop_centerc061.jpg?v=1547544247') }}\" alt=\"Dummy product name\"></a>
  </div>
  <div class=\"product-text\">
    <div class=\"product-rating\">
      <span class=\"shopify-product-reviews-badge\" data-id=\"2394951385152\"></span>
    </div>
    <h5><a href=\"products/dummy-product-name-4.html\">Dummy product name</a></h5>
    <div class=\"pro-price\">
      <span class=\"new-price\"><span class=money>\$79.00</span></span>

    </div><div class=\"product-cart-action\">


        <a href=\"javascript:void(0);\" onclick=\"Shopify.addItem(22279328759872, 1); return false;\" class=\"ajax-spin-cart feature-cart\">
          <span>
            <span class=\"cart-title\"><i class=\"icon icon-FullShoppingCart\"></i></span>
            <span class=\"cart-loading animated infinite rotateOut\"><i class=\"fa fa-spinner\"></i></span>
            <span class=\"cart-added\"><i class=\"fa fa-check\"></i></span>
            <span class=\"cart-unavailable\"><i class=\"fa fa-exclamation-triangle\"></i></span>
          </span>
        </a>


      </div></div>
</div>
</div></div>
        </div>
      </div>


    </div>
  </div>
</div>
<!-- Featured Area End --><style data-shopify>#section-1546857355207{}
  @media (min-width: 768px) and (max-width: 991px) {
    #section-1546857355207{}
  }
  @media (max-width: 767px) {
    #section-1546857355207{}
  }

  .bg-3 {
    background-image:url({{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/3_ab6fbf30-cbdf-45cc-b160-a122e65dd0eb6059.jpg?v=1548065923') }});
  }</style><script>

  /*------------------------------------------
\tFeatured Carousel Slider
\t--------------------------------------------*/
\tvar fetauredSlider = \$('.feaured-carousel');
\tfetauredSlider.slick({
\t\tarrows: true,
\t\tautoplay: false,
\t\tinfinite: true,slidesToShow: 1,
\t\tslidesToScoll: 1,
\t\tprevArrow: '<button type=\"button\" class=\"slick-prev\"><i class=\"fa fa-angle-left\"></i></button>',
\t\tnextArrow: '<button type=\"button\" class=\"slick-next\"><i class=\"fa fa-angle-right\"></i></button>',
\t\tresponsive: [
\t\t\t{
\t\t\t\tbreakpoint: 991,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 1,
\t\t\t\t\tcenterMode: false,
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 767,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 1,
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 479,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 1,
\t\t\t\t\tarrows: false,
\t\t\t\t\tdots: false,
\t\t\t\t}
\t\t\t}
\t\t]
\t});


</script>







</div><div id=\"shopify-section-1546860898892\" class=\"shopify-section\"><!-- Testimonial Area Start -->
<div class=\"testimonial-area pt-110 pb-95\" id=\"section-1546860898892\">

</div>
<!-- Testimonial Area End --><style data-shopify>#section-1546860898892{}
  @media (min-width: 768px) and (max-width: 991px) {
    #section-1546860898892{}
  }
  @media (max-width: 767px) {
    #section-1546860898892{}
  }
  #section-1546860898892 .single-banner a:before {
      background-color:
     opacity : 0.5 ;
  }</style>
    <script>
  /*----------------------------------------
\tTestimonial Slider
\t------------------------------------------*/
\t\$('.text-carousel').slick({
\t\tslidesToShow: 1,
\t\tslidesToScroll: 1,
\t\tarrows: true,
\t\tprevArrow: '<button type=\"button\" class=\"slick-prev\"><i class=\"fa fa-angle-left\"></i></button>',
\t\tnextArrow: '<button type=\"button\" class=\"slick-next\"><i class=\"fa fa-angle-right\"></i></button>',fade: false,asNavFor: '.image-carousel',
\t\tresponsive: [
\t\t\t{
\t\t\t  breakpoint: 479,
\t\t\t\tsettings: {
\t\t\t\t\tarrows: false
\t\t\t\t}
\t\t\t}
\t\t]
\t});
\t\$('.image-carousel').slick({
\t\tslidesToShow: 3,
\t\tslidesToScroll: 1,
\t\tasNavFor: '.text-carousel',
\t\tarrows: false,dots: false,
\t\tcenterMode: true,
\t\tfocusOnSelect: true
\t});

</script>







</div><div id=\"shopify-section-1541244011012\" class=\"shopify-section\"><!-- Blog Area Start -->
<div class=\"blog-area pb-95\" id=\"section-1541244011012\">
  <div class=\"container\">


    <div class=\"section-title text-center mb-50\">
      <div class=\"section-img d-flex justify-content-center\">

        <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/titlef59e.png?v=1546753447') }}\" alt=\"slider images\">

      </div>
      <h2><span>Organic </span>from our blog</h2>
    </div>


  </div>
  <div class=\"container\">
    <div class=\"custom-row\">
      <div class=\"blog-carousel\">

        <div class=\"custom-col text-center\">
\t\t\t<div class=\"single-blog\">
  <div class=\"blog-image\">
    <a href=\"blogs/news/coconut-improve-heart-and-immunity-1.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/articles/1_370x267_crop_centere570.jpg?v=1547011780') }}\" alt=\"Coconut improve heart and immunity.\" /></a>
  </div>
  <div class=\"blog-text\">
    <h4><a href=\"blogs/news/coconut-improve-heart-and-immunity-1.html\">Coconut improve heart and immunity.</a></h4>
    <div class=\"post-meta\">
      <span class=\"author-name\">post by: <span>Naturecircle Admin</span></span>
      <span class=\"post-date\"> - 08 Jan, 2019</span>
    </div>

    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero...</p>

    <a href=\"blogs/news/coconut-improve-heart-and-immunity-1.html\" class=\"default-btn\">Read more</a>
  </div>
</div>
        </div>

        <div class=\"custom-col text-center\">
\t\t\t<div class=\"single-blog\">
  <div class=\"blog-image\">
    <a href=\"blogs/news/coconut-improve-heart-and-immunity-2.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/articles/2_370x267_crop_center772e.jpg?v=1547011786') }}\" alt=\"Coconut improve heart and immunity.\" /></a>
  </div>
  <div class=\"blog-text\">
    <h4><a href=\"blogs/news/coconut-improve-heart-and-immunity-2.html\">Coconut improve heart and immunity.</a></h4>
    <div class=\"post-meta\">
      <span class=\"author-name\">post by: <span>Naturecircle Admin</span></span>
      <span class=\"post-date\"> - 08 Jan, 2019</span>
    </div>

    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero...</p>

    <a href=\"blogs/news/coconut-improve-heart-and-immunity-2.html\" class=\"default-btn\">Read more</a>
  </div>
</div>
        </div>

        <div class=\"custom-col text-center\">
\t\t\t<div class=\"single-blog\">
  <div class=\"blog-image\">
    <a href=\"blogs/news/the-most-healthful-food-you-can-eat-3.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/articles/3_370x267_crop_centerdfa0.jpg?v=1547011788') }}\" alt=\"The most healthful food you can eat.\" /></a>
  </div>
  <div class=\"blog-text\">
    <h4><a href=\"blogs/news/the-most-healthful-food-you-can-eat-3.html\">The most healthful food you can eat.</a></h4>
    <div class=\"post-meta\">
      <span class=\"author-name\">post by: <span>Naturecircle Admin</span></span>
      <span class=\"post-date\"> - 08 Jan, 2019</span>
    </div>

    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero...</p>

    <a href=\"blogs/news/the-most-healthful-food-you-can-eat-3.html\" class=\"default-btn\">Read more</a>
  </div>
</div>
        </div>

        <div class=\"custom-col text-center\">
\t\t\t<div class=\"single-blog\">
  <div class=\"blog-image\">
    <a href=\"blogs/news/the-most-healthful-food-you-can-eat-2.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/articles/5_370x267_crop_centerfed0.jpg?v=1547011327') }}\" alt=\"The most healthful food you can eat.\" /></a>
  </div>
  <div class=\"blog-text\">
    <h4><a href=\"blogs/news/the-most-healthful-food-you-can-eat-2.html\">The most healthful food you can eat.</a></h4>
    <div class=\"post-meta\">
      <span class=\"author-name\">post by: <span>Naturecircle Admin</span></span>
      <span class=\"post-date\"> - 08 Jan, 2019</span>
    </div>

    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero...</p>

    <a href=\"blogs/news/the-most-healthful-food-you-can-eat-2.html\" class=\"default-btn\">Read more</a>
  </div>
</div>
        </div>

        <div class=\"custom-col text-center\">
\t\t\t<div class=\"single-blog\">
  <div class=\"blog-image\">
    <a href=\"blogs/news/the-most-healthful-food-you-can-eat-1.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/articles/4_370x267_crop_center43e4.jpg?v=1547011267') }}\" alt=\"The most healthful food you can eat.\" /></a>
  </div>
  <div class=\"blog-text\">
    <h4><a href=\"blogs/news/the-most-healthful-food-you-can-eat-1.html\">The most healthful food you can eat.</a></h4>
    <div class=\"post-meta\">
      <span class=\"author-name\">post by: <span>Naturecircle Admin</span></span>
      <span class=\"post-date\"> - 08 Jan, 2019</span>
    </div>

    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero...</p>

    <a href=\"blogs/news/the-most-healthful-food-you-can-eat-1.html\" class=\"default-btn\">Read more</a>
  </div>
</div>
        </div>

        <div class=\"custom-col text-center\">
\t\t\t<div class=\"single-blog\">
  <div class=\"blog-image\">
    <a href=\"blogs/news/delicious-and-nutritious-vegetable.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/articles/6_3c7f43ec-55a0-4f1c-adc7-eed87edf079f_370x267_crop_centerde6b.jpg?v=1547011726') }}\" alt=\"Delicious and nutritious vegetable.\" /></a>
  </div>
  <div class=\"blog-text\">
    <h4><a href=\"blogs/news/delicious-and-nutritious-vegetable.html\">Delicious and nutritious vegetable.</a></h4>
    <div class=\"post-meta\">
      <span class=\"author-name\">post by: <span>Naturecircle Admin</span></span>
      <span class=\"post-date\"> - 08 Jan, 2019</span>
    </div>

    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero...</p>

    <a href=\"blogs/news/delicious-and-nutritious-vegetable.html\" class=\"default-btn\">Read more</a>
  </div>
</div>
        </div>

        <div class=\"custom-col text-center\">
\t\t\t<div class=\"single-blog\">
  <div class=\"blog-image\">
    <a href=\"blogs/news/coconut-improve-heart-and-immunity.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/articles/8_64f3f1da-f923-468f-ae2b-20c9d2dff10a_370x267_crop_center9d9f.jpg?v=1547011737') }}\" alt=\"Coconut improve heart and immunity.\" /></a>
  </div>
  <div class=\"blog-text\">
    <h4><a href=\"blogs/news/coconut-improve-heart-and-immunity.html\">Coconut improve heart and immunity.</a></h4>
    <div class=\"post-meta\">
      <span class=\"author-name\">post by: <span>Naturecircle Admin</span></span>
      <span class=\"post-date\"> - 08 Jan, 2019</span>
    </div>

    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero...</p>

    <a href=\"blogs/news/coconut-improve-heart-and-immunity.html\" class=\"default-btn\">Read more</a>
  </div>
</div>
        </div>

        <div class=\"custom-col text-center\">
\t\t\t<div class=\"single-blog\">
  <div class=\"blog-image\">
    <a href=\"blogs/news/the-most-healthful-food-you-can-eat.html\"><img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/articles/7_e7f1a847-fc6e-4e4b-9001-97717ad0339b_370x267_crop_centera225.jpg?v=1547011746') }}\" alt=\"The most healthful food you can eat.\" /></a>
  </div>
  <div class=\"blog-text\">
    <h4><a href=\"blogs/news/the-most-healthful-food-you-can-eat.html\">The most healthful food you can eat.</a></h4>
    <div class=\"post-meta\">
      <span class=\"author-name\">post by: <span>Naturecircle Admin</span></span>
      <span class=\"post-date\"> - 08 Jan, 2019</span>
    </div>

    <p>Donec vitae hendrerit arcu, sit amet faucibus nisl. Cras pretium arcu ex. Aenean posuere libero...</p>

    <a href=\"blogs/news/the-most-healthful-food-you-can-eat.html\" class=\"default-btn\">Read more</a>
  </div>
</div>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- Blog Area End --><style data-shopify>#section-1541244011012{padding-top: 0px;
    padding-bottom: 100px;}
  @media (min-width: 768px) and (max-width: 991px) {
    #section-1541244011012{padding-top: 0px;
      padding-bottom: 80px;}
  }
  @media (max-width: 767px) {
    #section-1541244011012{padding-top: 0px;
      padding-bottom: 60px;}
  }</style><script>
  /*---------------------------------------
\tBlog Carousel
\t-----------------------------------------*/
\tvar blogSlider = \$('.blog-carousel');
\tblogSlider.slick({
\t\tarrows: true,
\t\tautoplay: false,
\t\tinfinite: true,slidesToShow: 3,
\t\tslidesToScoll: 1,
\t\tprevArrow: '<button type=\"button\" class=\"slick-prev\"><i class=\"fa fa-angle-left\"></i></button>',
\t\tnextArrow: '<button type=\"button\" class=\"slick-next\"><i class=\"fa fa-angle-right\"></i></button>',
\t\tresponsive: [
\t\t\t{
\t\t\t\tbreakpoint: 991,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 2,
\t\t\t\t\tcenterMode: false,
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 767,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 1,
\t\t\t\t}
\t\t\t},
\t\t\t{
\t\t\t\tbreakpoint: 479,
\t\t\t\tsettings: {
\t\t\t\t\tslidesToShow: 1
\t\t\t\t}
\t\t\t}
\t\t]
\t});
</script>


</div><!-- END content_for_index -->
    </main>

    <div id=\"shopify-section-footer\" class=\"shopify-section\"><!-- Footer Area Start -->
<footer class=\"footer-area\">
  <!-- Footer Top Area Start -->
    {% block footer %}
  <div class=\"footer-top bg-4 pt-120 pb-120\">

    <!-- Newsletter Area Start -->

    <div class=\"newsletter-area\">
      <div class=\"container text-center\">
        <div class=\"newsletter-container\">


          <h2>Subscribe Newsletter.</h2>


          <p>Get e-mail updates about our latest shop and special offers.</p>

          <div class=\"newsletter-form mc_embed_signup\">
            <form action=\"https:////devitems.us11.list-manage.com//subscribe//post?u=6bbb9b6f5827bd842d9640c82&amp;id=05d85f18ef\" method=\"post\" id=\"mc-form\" name=\"mc-embedded-subscribe-form\" class=\"validate newsletter-form validate\" target=\"_blank\" novalidate>
              <div id=\"mc_embed_signup_scroll\" class=\"mc-form\">
                <input type=\"email\" value=\"\" name=\"EMAIL\" class=\"email\" id=\"mce-EMAIL\" placeholder=\"Enter you email address here...\" required>
                <button id=\"mc-embedded-subscribe\" type=\"submit\" name=\"subscribe\" class=\"default-btn\">Subscribe</button>
              </div>
            </form>
            <div class=\"mailchimp-alerts\">
              <div class=\"mailchimp-submitting\"></div>
              <div class=\"mailchimp-success\"></div>
              <div class=\"mailchimp-error\"></div>
            </div>
          </div>
        </div>

        <div class=\"social-icon\">

  <a href=\"#\"><i class=\"fa fa-twitter\"></i></a>


  <a href=\"#\"><i class=\"fa fa-instagram\"></i></a>


  <a href=\"#\"><i class=\"fa fa-google\"></i></a>


  <a href=\"#\"><i class=\"fa fa-linkedin\"></i></a>


  <a href=\"#\"><i class=\"fa fa-pinterest\"></i></a>

</div>

      </div>
    </div>

    <!-- Newsletter Area End -->

    <!-- Service Area Start -->

    <div class=\"service-area pt-50\">
      <div class=\"container\">
        <div class=\"service-container\">
          <div class=\"service-content\">
            <div class=\"row\">


              <div class=\"col-lg-4 col-md-4\">
                <div class=\"single-service\">
                  <div class=\"service-image\">
                    <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/rocketf589.png?v=1546506966') }}\" >
                  </div>
                  <div class=\"service-text\">

                    <h3>Free delivery</h3>
                    <p>Nam liber tempor cum soluta nobis eleifend option congue.</p>

                  </div>
                </div>
              </div>

              <div class=\"col-lg-4 col-md-4\">
                <div class=\"single-service\">
                  <div class=\"service-image\">
                    <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/moneyb16a.png?v=1546506976') }}\" >
                  </div>
                  <div class=\"service-text\">

                    <h3>Money Guarantee</h3>


                    <p>Nam liber tempor cum soluta nobis eleifend option congue.</p>

                  </div>
                </div>
              </div>

              <div class=\"col-lg-4 col-md-4\">
                <div class=\"single-service\">
                  <div class=\"service-image\">
                    <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/support1059.png?v=1546506984') }}\" alt=\"\">
                  </div>
                  <div class=\"service-text\">

                    <h3>Online Support</h3>
                    <p>Nam liber tempor cum soluta nobis eleifend option congue.</p>

                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Service Area End -->

    <!-- Footer Widget Area Start -->

    <div class=\"footer-widget-area\">
      <div class=\"container\">
        <div class=\"row\">

          <div class=\"col-lg-4 col-md-6\">
            <div class=\"single-footer-widget\">

              <div class=\"footer-logo\">
                <a href=\"{{ path('forum_homepage') }}\">
                  <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/logo_02304f19-13a6-4b93-9218-6e0d0370aa5acec6.png?v=1546506822') }}\" alt=\"\">
                </a>
              </div>


              <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum.</p>

              <div class=\"footer-text\">

                <span>

                  <i class=\"icon icon-Pointer\"></i>

                  Contact info: 169-C, Technohub, Dubai Silicon Oasis.
                </span>
                  <span>

                  <i class=\"icon icon-Phone\"></i>

                  Telephone: 169-C, Technohub, Dubai Silicon Oasis.
                </span>

                <span>

                  <i class=\"icon icon-Mail\"></i>

                  Email: Support@example.com
                </span>

              </div>
            </div>
          </div>



          <div class=\"col-lg-2 col-md-3\">
            <div class=\"single-footer-widget\">

              <h3>Products</h3>

              <ul class=\"footer-widget-list\">


                <li><a href=\"#\">Prices drop</a></li>

                <li><a href=\"#\">New products</a></li>

                <li><a href=\"#\">Best sales</a></li>

                <li><a href=\"#\">Stores</a></li>

                <li><a href=\"#\">Login</a></li>

                <li><a href=\"#\">My Account</a></li>

              </ul>
            </div>
          </div>

          <div class=\"col-lg-2 col-md-3\">
            <div class=\"single-footer-widget\">

              <h3>Our Company</h3>

              <ul class=\"footer-widget-list\">


                <li><a href=\"#\">Delivery</a></li>

                <li><a href=\"#\">Legal Notice</a></li>

                <li><a href=\"#\">Documentation</a></li>

                <li><a href=\"#\">Secure payment</a></li>

                <li><a href=\"#\">Contact us</a></li>

                <li><a href=\"#\">Stores</a></li>

              </ul>
            </div>
          </div>

          <div class=\"col-lg-4\">
            <div class=\"single-footer-widget\">

              <h3>Instagram</h3>

              <div id=\"instafeed\" class=\"instagram-image\"></div>
            </div>
          </div>

          <script>
            (function (\$) {
              \"use strict\";

              jQuery(document).ready(function(){

                var userFeed = new Instafeed({
                  get: 'user',
                  userId: '6667588161',
                  limit: '8',
                  accessToken: '6667588161.1677ed0.705c7b82e16f42b2898cd19e737dc53e',
                  resolution: 'thumbnail',
                  template: '<div class=\"single-insta-img\"><a href=\"\\{\\{link\\}\\}\" target=\"_blank\" id=\"\\{\\{id\\}\\}\"><img src=\"\\{\\{image\\}\\}\" /></a></div>'

                });
                userFeed.run();
              });

            })(jQuery);

          </script>

        </div>
      </div>
    </div>

    <!-- Footer Widget Area End -->
  </div>
  <!-- Footer Top Area End -->
  <!-- Footer Bottom Area Start -->
  <div class=\"footer-bottom-area pb-20\">
    <div class=\"container\">
      <div class=\"row\">
        <div class=\"col-lg-6 d-flex col-md-6\">
          <div class=\"footer-text-bottom\">
            <p><p>Copyright &copy;&nbsp;<a href=\"#\">Naturecircle</a>. All Rights Reserved</p></p>
          </div>
        </div>
        <div class=\"col-lg-6 col-md-6\">
          <div class=\"payment-img d-flex justify-content-end\">

            <img src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/payment72c6.png?v=1546505987') }}\">

          </div>
        </div>
      </div>
    </div>
  </div>
    {% endblock %}
  <!-- Footer Bottom Area End -->
</footer>
<!-- Footer Area End -->


<style>
  .bg-4 {
    background-image:url({{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/files/4ecdb.jpg?v=1546506413') }});
    background-position: top center;
  }
  .bg-4 {
    background: ;
  }
  .newsletter-area {
      background-color: !important;
  }
  .footer-policy-box p i.icon {
    border: 1px solid #12a4dd;
    color: #12a4dd;
  }
  .footer-menu ul li a:hover {
    color: #12a4dd;
  }

</style>

<script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/instafeed.mind645.js?40') }}\"></script>

</div>

    <!-- Necessary JS -->
    <script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/fastclick.mind645.js?40') }}\"></script>
<script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/timberd645.js?40') }}\"></script>

<script>

</script>
<!-- modalAddToCart Error -->
<div class=\"modal fade ajax-popup error-ajax-popup\" id=\"modalAddToCartError\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog white-modal modal-md\">
    <div class=\"modal-content \">
      <div class=\"modal-body\">
        <div class=\"modal-content-text\">
          <p class=\"error_message\"></p>
        </div>
        <div class=\"modal-close\">
          <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-hidden=\"true\"><i class=\"fa fa-times-circle\"></i></button>
        </div>
      </div>
    </div>
  </div>
</div>

<script>
  \$(function() {
    // Current Ajax request.
    var currentAjaxRequest = null;
    // Grabbing all search forms on the page, and adding a .search-results list to each.
    var searchForms = \$('form[action=\"/search\"]').css('position','relative').each(function() {
      // Grabbing text input.
      var input = \$(this).find('input[name=\"q\"]');
      // Adding a list for showing search results.
      var offSet = input.position().top + input.innerHeight();
      \$('<ul class=\"search-results home-two\"></ul>').css( { 'position': 'absolute', 'left': '0px', 'top': offSet } ).appendTo(\$(this)).hide();
      // Listening to keyup and change on the text field within these search forms.
      input.attr('autocomplete', 'off').bind('keyup change', function() {
        // What's the search term?
        var term = \$(this).val();
        // What's the search form?
        var form = \$(this).closest('form');
        // What's the search URL?
        var searchURL = '/search?type=product&q=' + term;
        // What's the search results list?
        var resultsList = form.find('.search-results');
        // If that's a new term and it contains at least 3 characters.
        if (term.length > 3 && term != \$(this).attr('data-old-term')) {
          // Saving old query.
          \$(this).attr('data-old-term', term);
          // Killing any Ajax request that's currently being processed.
          if (currentAjaxRequest != null) currentAjaxRequest.abort();
          // Pulling results.
          currentAjaxRequest = \$.getJSON(searchURL + '&view=json', function(data) {
            // Reset results.
            resultsList.empty();
            // If we have no results.
            if(data.results_count == 0) {
              // resultsList.html('<li><span class=\"title\">No results.</span></li>');
              // resultsList.fadeIn(100);
              resultsList.hide();
            } else {
              // If we have results.
              \$.each(data.results, function(index, item) {
                var link = \$('<a></a>').attr('href', item.url);
                link.append('<span class=\"thumbnail\"><img src=\"' + item.thumbnail + '\" /></span>');
                link.append('<span class=\"title\">' + item.title + '</span>');
                link.wrap('<li></li>');
                resultsList.append(link.parent());
              });
              // The Ajax request will return at the most 10 results.
              // If there are more than 10, let's link to the search results page.
              if(data.results_count > 10) {
                resultsList.append('<li><span class=\"title\"><a href=\"' + searchURL + '\">See all results (' + data.results_count + ')</a></span></li>');
              }
              resultsList.fadeIn(100);
            }
          });
        }
      });
    });
    // Clicking outside makes the results disappear.
    \$('body').bind('click', function(){
      \$('.search-results').hide();
    });
  });
</script>

<!-- Some styles to get you started. -->
<style>
  .search-results {
    z-index: 8889;
    list-style-type: none;
    width: 190px;
    margin: 0;
    padding: 0;
    background: #ffffff;
    border: 1px solid #cccccc;
    border-radius: 0px;
    -webkit-box-shadow: 0px 4px 7px 0px rgba(0,0,0,0.1);
    box-shadow: 0px 4px 7px 0px rgba(0,0,0,0.1);
    overflow: hidden;
  }
  .search-results li {
    display: block;
    width: 100%;
    height: 38px;
    margin: 0;
    padding: 0;
    border-top: 1px solid #cccccc;
    line-height: 38px;
    overflow: hidden;
  }
  .search-results li:first-child {
    border-top: none;
  }
  .search-results .title {
    float: left;
    width: 140px;
    padding-left: 8px;
    white-space: nowrap;
    overflow: hidden;
    /* The text-overflow property is supported in all major browsers. */
    text-overflow: ellipsis;
    -o-text-overflow: ellipsis;
    text-align: left;
    font-size:12px;
    line-height:38px;
    color:#515151;
  }
  .search-results .title:hover{
    color:#CE9634;
  }
  .search-results .thumbnail {
    float: left;
    display: block;
    width: 32px;
    height: 32px;
    margin: 3px 0 3px 3px;
    padding: 0;
    text-align: center;
    overflow: hidden;
    border-radius:0px;
  }
</style>

<div class=\"modal fade productModal\" id=\"quickViewModal\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
  <div class=\"modal-dialog\" role=\"document\">
    <div class=\"modal-content\">
      <div class=\"modal-body\">
        <div class=\"row\">
          <div class=\"col-lg-6 col-md-6 col-12\">
            <div class=\"qwick-view-left\">
              <div class=\"quick-view-learg-img\">
                <div class=\"quick-view-tab-content tab-content\">
                  <div class=\"product-main-image__item\">
                    <div class=\"img_box_1\"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class=\"col-lg-6 col-md-6 col-12\">
            <div class=\"qwick-view-right\">
              <div class=\"qwick-view-content\">
                <h1 class=\"product_title\">FROM_JS</h1>
                <div class=\"product-price product-info__price price-part\">
                  <span class=\"main\">jsprice</span>
                  <span class=\"price-box__new\">jsprice</span>
                </div>
                <div class=\"product-rating spr-badge-caption-none\">
                  <div class=\"quick-view-rating rating\">FROM_JS</div>
                </div>

                <div class=\"short-description product-des\">FROM_JS</div>

                <form id=\"add-item-qv\" action=\"https://naturecircle.myshopify.com/cart/add\" method=\"post\">
                  <div class=\"quick-view-select variants select-option-part\"></div>
                  <div class=\"quickview-plus-minus\">
                    <div class=\"cart-plus-minus\">
                      <input type=\"text\" value=\"01\" name=\"quantity\" class=\"cart-plus-minus-box\">
                    </div>
                    <div class=\"quickview-btn-cart\">
                      <button type=\"submit\" class=\"addtocartqv theme-default-button\">Add to cart</button>
                    </div>
                  </div>
                  <script>
                    jQuery('.addtocartqv').click(function(e) {
                      e.preventDefault();
                      Shopify.addItemFromFormStart('add-item-qv', jQuery(this).attr('id'));
                    });
                  </script>
                </form>
              </div>
            </div>
          </div>
        </div>
        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
          <span class=\"close-icon\" aria-hidden=\"true\">x</span>
        </button>
      </div>
    </div>
  </div>
</div>

<div class=\"quickViewModal_info\" style=\"display: none;\">
  <div class=\"button\">Add to cart</div>
  <div class=\"button_added\">Added</div>
  <div class=\"button_error\">Limit Products</div>
  <div class=\"button_wait\">Wait..</div>
</div>

<script>
  var mainImage = '';
  jQuery(function (\$) {

    quiqview = function(product_handle) {
      Shopify.getProduct(product_handle);
    }
    Shopify.onProduct = function(product) {
      \$('.viewfullinfo').attr('href', product.url);

      // product description without shortcode
      text_truncate = function(str, length, ending) {
        if (length == null) {
          length = 500;
        }
        if (ending == null) {
          ending = '...';
        }
        if (str.length > length) {
          return str.substring(0, length - ending.length) + ending;
        } else {
          return str;
        }
      };

      var _parent = '#quickViewModal';
      \$(_parent+' .product_title').text(product.title);



      // product rating
      \$(_parent+' .rating').empty();
      \$(_parent+' .rating').append(\"<span class=\\\"shopify-product-reviews-badge\\\" data-id=\\\"\"+product.id+\"\\\"></span>\");


      //check variants
      var variant = '';

      for (i = 0; i < product.variants.length; i++) {
        if(product.variants[i].inventory_quantity > 0) {
          variant = product.variants[i];
          break;
        }
      }

      if(variant == '') {
        for (i = 0; i < product.variants.length; i++) {
          if(product.variants[i].inventory_policy == \"continue\") {
            variant = product.variants[i];
            break;
          }
        }
        if(variant == '') {
          variant = product.variants[0];
        }
      }

      mainImage = product.featured_image;
      var shopifyimgurl = variant.featured_image ? variant.featured_image.src : product.featured_image;
      var imgurl = \"<img class=\\\"full-width\\\" alt=\\\"\\\" src = \\\"\"+shopifyimgurl+\"\\\" >\";
      jQuery(_parent+' .product-main-image__item .img_box_1').empty();
      jQuery(_parent+' .product-main-image__item .img_box_1').append(imgurl);
      jQuery(_parent+' .product-main-image__item .img_box_2').empty();
      jQuery(_parent+' .product-main-image__item .img_box_2').append(imgurl);

      // product description with shortcode
      var desc = product.description;
      if (desc.indexOf(\"[short_description]\") >= 0) {
        desc = desc.split(\"[short_description]\");
        desc = desc[1].split(\"[/short_description]\");
        \$(_parent+' .product-des').show();
        \$(_parent+' .product-des').html(desc[0]);
      }
      else {
        \$(_parent+' .product-des').html(text_truncate(product.description,250));
      }

      //set variants property
      var inv_qua = variant.inventory_quantity;
      //price
      if(variant.price < variant.compare_at_price) {
        \$('.price-part .main').addClass('amount');
        \$('.price-part .price-box__new').show();
        changePriceValue('.price-part .main', variant.compare_at_price);
        changePriceValue('.price-part .price-box__new', variant.price);
      }
      else {
        \$('.price-part .price-box__new').hide();
        \$('.price-part .main').removeClass('amount');
        changePriceValue('.price-part .main', variant.price);
      }

      // Variants select
      if(product.variants.length > 1) {
        var variants_margin = product.options.length == 2 ? 'variants_margin' : '';

        var select = '<select id=\"product-select-qv\" name=\"id\">';
        var selected = 'selected';
        for (i = 0; i < product.variants.length; i++) {
          var _var = product.variants[i];
          if(_var.available) {
           \$('.variants').html(select);

            //parametres
            setParametresText(_parent+' .product-sku', variant.sku);
            if(jQuery(_parent + ' .product-sku').length) {
              var \$ava = jQuery(_parent + \" .product-info__availabilitu\");
              if(variant.sku != \"\") {
                if(\$ava.hasClass('pull-left')){ \$ava.removeClass('pull-left') }
              } else {
                if(!\$ava.hasClass('pull-left')){ \$ava.addClass('pull-left') }
              }
            }

            //quantity
            var out_of_stock = false;
            if(variant.inventory_management) {
              if(inv_qua > 0) {
                \$(_parent+' .product-availability').text(inv_qua + \" In Stock\");
                                                         }
                                                         else {
                                                         out_of_stock = true;
                                                         \$(_parent+' .product-availability').text(\"In Stock\");
                                                                                                  }
                                                                                                  }
                                                                                                  else {
                                                                                                  \$(_parent+' .product-availability').text(\"Many in stock\");
                                                                                                                                           }

                                                                                                                                           // button
                                                                                                                                           if(!out_of_stock || variant.inventory_policy == \"continue\") {
                  \$('.product-available').show();
                  \$('.product-disable').hide();
                  \$('.addtocartqv').attr('id', product.id );
                }
                else {
                  \$('.product-available').hide();
                  \$('.product-disable').show();
                }

                if (product.available && product.variants.length > 1) {
                  new Shopify.OptionSelectors(\"product-select-qv\", { product: product, onVariantSelected: selectCallbackQv, enableHistoryState: true });

                  if(\$('#quickViewModal .variants_selects .selector-wrapper').length > 0) {
                    \$.each( jQuery('#quickViewModal .variants_selects .selector-wrapper'), function(index) {
                      \$(this).find('label').text(product.options[index].name);
                    });
                  }
                }
                else {
                  jQuery('.currency .active').trigger('click');
                }
                selectGrid(_parent);

                if(\$(\".spr-badge\").length > 0) {
                  \$.getScript(window.location.protocol + \"//productreviews.shopifycdn.com/assets/v4/spr.js\");
                }

                if(\$(\".selector-wrapper label\").length) {
                  \$(\".selector-wrapper label\").each(function( index ) {
                    \$(this).text(jQuery(this).text() + \":\");
                  });
                }

                \$(_parent).modal('show');

                if( !( 'ontouchstart' in window ) &&
                   !navigator.msMaxTouchPoints &&
                   !navigator.userAgent.toLowerCase().match( /windows phone os 7/i ) ) return false;

                \$j('body').css(\"top\", -\$j('body').scrollTop());
                \$j('body').addClass(\"no-scroll\");
                \$j('.close').click(function(){
                  var top = parseInt(\$j('body').css(\"top\").replace(\"px\", \"\"))*-1;
                  \$j('body').removeAttr(\"style\");
                  \$j('body').removeClass(\"no-scroll\");
                  \$j('body').scrollTop(top);
                });
              }

              function setParametresText(obj, value) {
                if(value != '') {
                  \$(obj).parent().show();
                  \$(obj).text(value);
                }
                else {
                  \$(obj).parent().hide();
                }
              }




                             var selectCallbackQv = function(variant, selector) {

                  var _parent = '#quickViewModal';
                  var _parentprice = _parent + ' .price-part';
                  if (!variant) {
                    jQuery(_parent + \" .price-box\").hide();
                    jQuery(_parent + \" .qwt\").hide();
                    jQuery(_parent + \" .control-console\").hide();
                    jQuery(_parent + ' .addtocartqv').attr('disabled','disabled');
                    jQuery(_parent + ' .addtocartqv').text('Unavailable');
                                                           return false;
                                                           }

                                                           jQuery(_parent + \" .price-box\").show();
                    jQuery(_parent + \" .qwt\").show();
                    jQuery(_parent + \" .control-console\").show();

                    if(variant.price < variant.compare_at_price){
                      jQuery(_parentprice + ' .main').addClass('price-box__old');
                      jQuery(_parentprice + ' .price-box__new').show();
                      changePriceValue(_parentprice + ' .main', variant.compare_at_price);
                      changePriceValue(_parentprice + ' .price-box__new', variant.price);
                    } else {
                      jQuery(_parentprice + ' .price-box__new').hide();
                      jQuery(_parentprice + ' .main').removeClass('price-box__old');
                      changePriceValue(_parentprice + ' .main', variant.price);
                    }

                    newVariantTextDataQv(_parent + ' .product-sku', variant.sku);

                    if(jQuery(_parent + ' .product-sku').length) {
                      var \$ava = jQuery(_parent + \" .product-info__availabilitu\");
                      if(variant.sku != \"\") {
                        if(\$ava.hasClass('pull-left')){ \$ava.removeClass('pull-left') }
                      } else {
                        if(!\$ava.hasClass('pull-left')){ \$ava.addClass('pull-left') }
                      }
                    }

                    if (variant.available) {
                      if (variant.inventory_management == null) {
                        jQuery(_parent + \" .product-availability\").text(\"Many in stock\");
                                                                        } else {
                                                                        jQuery(_parent + \" .product-availability\").text(\" Many in stock\");
                                                                                                                        }
                                                                                                                        } else {
                                                                                                                        jQuery(_parent + \" .product-availability\").text(\"Sold Out\");
      }

\t  var shopifyimgurl = variant.featured_image ? variant.featured_image.src : mainImage;
      var imgurl = \"<img class=\\\"full-width\\\" alt=\\\"\\\" src = \\\"\"+shopifyimgurl+\"\\\" >\";
\t  if(jQuery(_parent+' .product-main-image__item .img_box_1').children().length > 0) {
                          var detach = jQuery(_parent+' .product-main-image__item .img_box_1 img').detach();
                          jQuery(_parent+' .product-main-image__item .img_box_2').empty();
                          jQuery(_parent+' .product-main-image__item .img_box_2').append(detach);
                        }
                        jQuery(_parent+' .product-main-image__item .img_box_1').empty();
                        jQuery(_parent+' .product-main-image__item .img_box_1').append(imgurl);

                        if (variant && variant.available) {
                          jQuery(_parent + ' .addtocartqv').removeAttr('disabled');
                          jQuery(_parent + ' .addtocartqv').html('Add to Cart');
                                                                 jQuery(_parent + \" .control-console\").show();
                        } else {
                          jQuery(_parent + ' .addtocartqv').attr('disabled','disabled');
                          jQuery(_parent + ' .addtocartqv').text('Unavailable');
                                                                 jQuery(_parent + \" .control-console\").hide();
                        }

                        jQuery('.currency .active').trigger('click');
                      };



                      function selectGrid(_parent) {
                        setTimeout(timeout, 5);
                        function timeout() {
                          if(jQuery(_parent + \" .selector-wrapper\").length > 2){
                            jQuery(_parent + \" .single-option-selector\").addClass(\"select--wd\");
                          } else if(jQuery(_parent + \" .selector-wrapper\").length == 1){
                            jQuery(_parent + \" .single-option-selector\").before(\"<label></label>\");
                                                                                jQuery(_parent + \" .single-option-selector\").addClass(\"select--wd\");
                          }
                        }
                      };
</script>

<!-- END QUICKVIEW PRODUCT -->

<script>
  \$(\".cart-plus-minus\").prepend('<div class=\"dec qtybutton\">-</div>');
  \$(\".cart-plus-minus\").append('<div class=\"inc qtybutton\">+</div>');
  \$(\".qtybutton\").on(\"click\", function() {
    var \$button = \$(this);
    var oldValue = \$button.parent().find(\"input\").val();
    if (\$button.text() == \"+\") {
      var newVal = parseFloat(oldValue) + 1;
    } else {
      // Don't allow decrementing below zero
      if (oldValue > 0) {
        var newVal = parseFloat(oldValue) - 1;
      } else {
        newVal = 1;
      }
    }
    \$button.parent().find(\"input\").val(newVal);
  });
</script>
<script>
  \$('.ajax-spin-cart').on('click', function() {
    \$(this).addClass('loading add-item');
    setTimeout(function () {
      \$('.ajax-spin-cart').removeClass('loading');
    },1000);
    setTimeout(function () {
      \$('.ajax-spin-cart').removeClass(\"add-item\");
    },2000);

  });
</script>

<script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/wishlistd645.js?40') }}\"></script>
<script>
  /* Ajax Wishlist */
  \$(\".action-wishlist\").on('click', function(){
    \$(this).addClass(\"loading-wishlist adding-wishlist\");
    setTimeout(function () {
      \$(\".action-wishlist\").removeClass(\"loading-wishlist\");
    },1000);
    setTimeout(function () {
      \$(\".adding-wishlist\").removeClass(\"adding-wishlist\");
    },2000);

  });

  (function() {
    Wishlist.init();
  }());
</script><!-- Recently Viewed Products --><script src=\"{{ asset('assetsfront/cdn.shopify.com/s/javascripts/currencies.js') }}\"></script>
<script src=\"{{ asset('assetsfront/cdn.shopify.com/s/files/1/0162/3932/9344/t/2/assets/jquery.currencies.mind645.js?40') }}\"></script>

<script>

  // Pick your format here:
  // money_format or money_with_currency_format
  Currency.format = 'money_format';

  var shopCurrency = 'USD';

  /* Sometimes merchants change their shop currency, let's tell our JavaScript file */

  var cookieCurrency;
  try {cookieCurrency = Currency.cookie.read();} catch (err) {} // ignore errors reading cookies

  // Fix for customer account pages.
  jQuery('span.money span.money').each(function() {
    jQuery(this).parents('span.money').removeClass('money');
  });

  // Saving the current price.
  jQuery('span.money').each(function() {
    jQuery(this).attr('data-currency-USD', jQuery(this).html());
                      });

    // Select all your currencies buttons.
    var buttons = jQuery('.currency li');

    // If there's no cookie or it's the shop currency.
    if (cookieCurrency == null || cookieCurrency === shopCurrency) {
      buttons.removeClass('active');
      jQuery('.currency li[data-currency=' + shopCurrency + ']').addClass('active');
      Currency.currentCurrency = shopCurrency;
      jQuery(\".current-currency\").text(shopCurrency);
    }
    else {
      Currency.convertAll(shopCurrency, cookieCurrency);
      buttons.removeClass('active');
      jQuery('.currency li[data-currency=' + cookieCurrency + ']').addClass('active');
      jQuery(\".current-currency\").text(cookieCurrency);
    }

    // When customer clicks on a currency button.
    buttons.click(function() {
      buttons.removeClass('active');
      var cur = jQuery(this).attr('data-currency');
      jQuery( \".currency li[data-currency='\" + cur + \"']\" ).addClass('active');

      var newCurrency =  jQuery(this).attr('data-currency');
      if(newCurrency == Currency.currentCurrency)
      {
        Currency.convertAll(shopCurrency, newCurrency);
      }
      else
      {
        Currency.convertAll(Currency.currentCurrency, newCurrency);
      }

      jQuery(\".current-currency\").text(cur);
    });

    // For product options.
    var main_selectCallback = window.selectCallback;
    var selectCallback = function(variant, selector) {
      main_selectCallback(variant, selector);
      Currency.convertAll(shopCurrency, jQuery(\".currency .active\").attr('data-currency'));
    };
</script><script>
  \$('[data-countdown]').each(function() {
    var \$this = \$(this), finalDate = \$(this).data('countdown');
    \$this.countdown(finalDate, function(event) {
      \$this.html(event.strftime('<div class=\"countdown-area\"><div class=\"single-countdown\"><div class=\"count-number\">%D</div><div class=\"count-title\">days</div></div><div class=\"single-countdown\"><div class=\"count-number\">%H</div><div class=\"count-title\">Hour</div></div><div class=\"single-countdown\"><div class=\"count-number\">%M</div><div class=\"count-title\">Mint</div></div><div class=\"single-countdown\"><div class=\"count-number\">%S</div><div class=\"count-title\">Sec</div></div></div>'));
    });
  });
</script>

  </div>

</body>

<!-- Mirrored from naturecircle.myshopify.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 20 Mar 2019 12:23:52 GMT -->
</html>
", "basefront.html.twig", "C:\\wamp64\\www\\final_pepiniere\\app\\Resources\\views\\basefront.html.twig");
    }
}
