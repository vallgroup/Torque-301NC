($ => {
  const TOGGLE_CLASS = "show";

  $(document).ready(() => {
    const trackLogo = $("#track-logo");
    let prevState = false;

    if (!trackLogo.length) {
      showHeaderLogo(true);
      return;
    }

    updateState();
    $(window).scroll(updateState);
    $(window).resize(updateState);

    function updateState() {
      const currentOffset =
        trackLogo.offset().top + trackLogo.height() - $(window).scrollTop();
      const currentWidth = $(window).width();

      if (currentOffset < 0 || currentWidth <= 767) {
        showHeaderLogo(true);
      }

      if (currentOffset > 0 && currentWidth > 767) {
        showHeaderLogo(false);
      }
    }

    function showHeaderLogo(show) {
      if (show === prevState) return;

      const headerLogo = $(".torque-header-logo-wrapper");

      if (!headerLogo) {
        return;
      }

      show
        ? headerLogo.addClass(TOGGLE_CLASS)
        : headerLogo.removeClass(TOGGLE_CLASS);

      prevState = show;
    }
  });
})(jQuery);
