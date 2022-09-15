// Dashboard specific
const dashHome = document.querySelector('.dashHome');
const about = document.querySelector('.dashAbout');
const cars = document.querySelector('.dashCars');
const services = document.querySelector('.dashServices');
const contact = document.querySelector('.dashContact');
const dashLinks = [...document.querySelectorAll('#dashViews .dropdown-item')];
const allSections = [dashHome, about, cars, services, contact];

const setActiveDashBody = (section) => {
  allSections.map((el) => el.classList.add('d-none'));
  section.classList.remove('d-none');
};

function sectionClicked(e, section, link) {
  e.preventDefault();
  setActiveDashBody(section);
  dashLinks.map((el) => el.classList.remove('active'));
  document.querySelector(`.${link}`).classList.add('active');
}
