jQuery(document).ready(function ($) {
  $(".search-container .header-search").on("click", function () {
    $(this)
      .parent(".search-container")
      .find(".search-form")
      .toggleClass("active");
  });
});
