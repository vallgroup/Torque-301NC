($ => {
  const TOGGLE_CLASS = "show";

  $(document).ready(() => {
    const trackLogo = $("#track-logo");
    let prevOffset = 1;

    if (!trackLogo.length) {
      showHeaderLogo(true);
      return;
    }

    updateState();
    $(window).scroll(updateState);

    function updateState() {
      const currentOffset =
        trackLogo.offset().top + trackLogo.height() - $(window).scrollTop();

      if (prevOffset > 0 && currentOffset <= 0) {
        showHeaderLogo(true);
      }

      if (prevOffset <= 0 && currentOffset > 0) {
        showHeaderLogo(false);
      }

      prevOffset = currentOffset;
    }

    function showHeaderLogo(show) {
      const headerLogo = $(".torque-header-logo-wrapper");

      if (!headerLogo) {
        return;
      }

      show
        ? headerLogo.addClass(TOGGLE_CLASS)
        : headerLogo.removeClass(TOGGLE_CLASS);
    }
  });
})(jQuery);
