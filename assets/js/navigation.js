/**
 * File navigation.js.
 *
 * Handles toggling the navigation menu for small screens and enables TAB key
 * navigation support for dropdown menus.
 */

window.addEventListener("scroll", () => stickyHeader());

const stickyHeader = () => {
  if (!document.getElementById("masthead")) return;
  let header = document.getElementById("masthead");
  let sticky = header.offsetTop;
  let hcl = header.classList;
  if (window.pageYOffset > sticky) {
    hcl.add("sticky");
  } else {
    hcl.remove("sticky");
  }
};
