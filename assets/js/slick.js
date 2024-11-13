jQuery(document).ready(function ($) {
  const tablet = 768;
  const laptop = 992;
  const desktop = 1280;

  /** Hero Slider */
  $(".page-template-homepage .hero-slider").slick({
    autoplay: false,
    arrows: false,
    cssEase: "linear",
    dots: false,
    fade: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    useTransform: false,
  });

  // let $newsSlider = $(".news-container.slick-slider");
  //
  // $newsSlider.slick({
  //   autoplay: false,
  //   arrows: true,
  //   cssEase: "linear",
  //   dots: false,
  //   fade: false,
  //   infinite: true,
  //   slidesToShow: 1,
  //   slidesToScroll: 1,
  //   useTransform: false,
  //   mobileFirst: true,
  //   responsive: [
  //     {
  //       breakpoint: laptop,
  //       settings: {
  //         slidesToShow: 2,
  //       },
  //     },
  //     {
  //       breakpoint: desktop,
  //       settings: {
  //         slidesToShow: 3,
  //       },
  //     },
  //   ],
  // });

      $(".page-template-homepage .parishButtons").slick({
        autoplay: false,
        dots: false,
        arrows: true,
        cssEase: "linear",
        slidesToShow: 5,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 1360,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 1025,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
            }
          },
          {
            breakpoint: 426,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
            }
          }
        ]
      });

  /**
   * add margin bottom to mobile news slider
   */
  function adjustMargin($el) {
    let height = window.innerWidth < laptop ? getPostHeight() : 0;
    $el.css("margin-bottom", height);
  }

  function getPostHeight() {
    return (
      $(".post-wrapper.slick-current")
        .find(".post-content-wrapper")
        .outerHeight() + 20
    );
  }

  function resizePosts() {
    $(".post-wrapper").each(function () {
      adjustMargin($(this));
    });
  }

  $newsSlider.on("afterChange", resizePosts);
  $(window).on("resize", resizePosts);
  adjustMargin($(".post-wrapper"));

  $(".banner-items.slick-slider").slick({
    autoplay: false,
    arrows: true,
    cssEase: "linear",
    dots: false,
    fade: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    useTransform: false,
    responsive: [
      {
        breakpoint: laptop,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2,
        },
      },
      {
        breakpoint: desktop,
        settings: {
          dots: true,
          arrows: false,
          slidesToShow: 4,
          slidesToScroll: 4,
        },
      },
    ],
  });

  let $gallery = $(".gallery-container .envira-gallery-public");
  let $massTimes = $(".mass-times-container .mass-times-items");

  function galleryMobile() {
    $gallery.slick({
      infinite: true,
      //   slide: ".envira-gallery-item",
      slidesToShow: 1,
      slidesToScroll: 1,
      dots: false,
      arrows: false,
      mobileFirst: true,
      responsive: [
        {
          breakpoint: tablet,
          settings: {
            slidesToScroll: 2,
            slidesToShow: 2,
          },
        },
      ],
    });
  }

  $massTimes.slick({
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    arrows: false,
    mobileFirst: true,
    responsive: [
      {
        breakpoint: tablet,
        settings: {
          slidesToScroll: 2,
          slidesToShow: 2,
        },
      },
      {
        breakpoint: desktop,
        settings: {
          slidesToScroll: 4,
          slidesToShow: 4,
        },
      },
    ],
  });

  if (isMobile()) {
    galleryMobile();
  }

  $(window).on("resize", function (e) {
    if (isMobile()) {
      if (!$gallery.hasClass("slick-initialized")) {
        galleryMobile();
      }
    } else {
      if ($gallery.hasClass("slick-initialized")) {
        $gallery.slick("unslick");
      }
    }
  });

  function isMobile() {
    return window.innerWidth < desktop;
  }

  /** Ministry Slider */
  $(".ministries-container .ministry-slider .ministry-group").slick({
    autoplay: false,
    arrows: true,
    dots: false,
    infinite: false,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    slide: ".ministry-wrapper",
    responsive: [
      {
        breakpoint: tablet,
        settings: {
          slidesToShow: 2,
        },
      },
      {
        breakpoint: laptop,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: desktop,
        settings: {
          slidesToShow: 4,
        },
      },
    ],
  });

  $(".testimonials-container .slick-slider").slick({
    autoplay: false,
    arrows: true,
    cssEase: "linear",
    dots: false,
    fade: false,
    infinite: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    mobileFirst: true,
    useTransform: false,
    centerPadding: "25%",
    responsive: [
      {
        breakpoint: laptop,
        settings: {
          centerMode: true,
        },
      },
    ],
  });
});
