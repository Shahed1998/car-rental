// Navbar section
const setActive = (anc) => {
  const navLinks = document.querySelectorAll('.nav-link');

  navLinks.forEach((link) => {
    link.classList.remove('active');
  });
  document.querySelector(`nav ul li .${anc}`).classList.add('active');
};
