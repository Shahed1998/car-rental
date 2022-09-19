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
  const description = form[4].value;
  const image = form[5];
  // alert(form[5].value);
  // return false;

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

  // description validation
  if (description.length <= 0) {
    modal('Description 💥', 'Description must not be empty');
    return false;
  }

  // image validation
  if (
    image.value &&
    (image.files[0].size > 2000000 ||
      !['image/jpeg', 'image/jpg', 'image/png'].includes(image.files[0].type))
  ) {
    modal(
      'Image 💥',
      'Invalid image. Allowed image formats: jpg, jpeg, png, and allowed image size upto: 2MB'
    );
    return false;
  }

  return true;
};
