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

// ------------------------------------------ Dashboard about section
const dashAboutForm = () => {
  const form = document.getElementById('dashAboutForm').elements;
  const heading = form[0].value;
  const subHeading1 = form[1].value;
  const subHeading2 = form[2].value;
  const subHeading3 = form[3].value;
  const description = form[4].value;
  const image = form[5];
  const password = form[6].value;

  // password field
  if (!password) {
    modal('Password 💥', 'Password field must not be empty');
    return false;
  }

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

// ------------------------------------------ Profile edit
const profileForm = document.getElementById('dashProfileForm').elements;

// show password checkbox
document.querySelector('#show_pass').addEventListener('click', () => {
  const new_pass = profileForm[2]; // new password
  const confirm_new_pass = profileForm[3]; // confirm new password
  const show_pass = profileForm[4];
  if (show_pass.checked) {
    new_pass.type = 'text';
    confirm_new_pass.type = 'text';
  } else {
    new_pass.type = 'password';
    confirm_new_pass.type = 'password';
  }
});

const profileEditSubmit = () => {
  return false;
};
