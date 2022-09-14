// Dashboard specific
const dashHome = document.querySelector('.dashHome');
const about = document.querySelector('.about');
const cars = document.querySelector('.cars');
const services = document.querySelector('.services');
const contact = document.querySelector('.contact');
const dashLinks = [...document.querySelectorAll('#dashViews .dropdown-item')];
const allSections = [dashHome, about, cars, services, contact];

const setActiveDashBody = (section) => {
  allSections.map((el) => el.classList.add('d-none'));
  section.classList.remove('d-none');
};

function sectionClicked(section, link) {
  setActiveDashBody(section);
  dashLinks.map((el) => el.classList.remove('active'));
  document.querySelector(`.${link}`).classList.add('active');
}
