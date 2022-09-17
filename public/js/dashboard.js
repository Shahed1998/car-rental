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

const sectionClicked = (e, section, link) => {
  e.preventDefault();
  setActiveDashBody(section);
  dashLinks.map((el) => el.classList.remove('active'));
  document.querySelector(`.${link}`).classList.add('active');
};

const dashAboutForm = () => {
  const form = document.getElementById('dashAboutForm').elements;
  const heading = form[0].value;
  const subHeading1 = form[1].value;
  const subHeading2 = form[2].value;
  const subHeading3 = form[3].value;

  // heading validation
  if (heading.length <= 0 || heading.length >= 50) {
    modal('Heading 💥', 'Heading must be between 1 and 50 characters long');
    return false;
  }

  // sub heading validation
  if (
    subHeading1.length <= 0 ||
    subHeading2.length <= 0 ||
    subHeading3.length <= 0
  ) {
    modal('Sub heading points 💥', 'Sub heading points must not be empty');
    return false;
  }

  return true;
};
