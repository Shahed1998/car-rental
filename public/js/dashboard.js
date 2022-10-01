// ------------------------------------------ Dashboard specific
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
    modal(
      'Heading 💥',
      `You have entered ${heading.length} characters. Heading must be between 1 and 50 characters long`
    );
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
// show password checkbox
document.querySelector('#show_pass').addEventListener('click', () => {
  const profileForm = document.getElementById('dashProfileForm').elements;
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
  const profileForm = document.getElementById('dashProfileForm').elements;
  // password validation
  if (!profileForm['u_profile_password'].value) {
    modal(
      `Password 💥`,
      `You have entered ${profileForm['u_profile_password'].value.length} characters.
      Password is required to update.`
    );
    return false;
  }
  // username validation
  if (
    !(
      profileForm['uname'].value.length >= 5 &&
      profileForm['uname'].value.length <= 100
    )
  ) {
    modal(
      `Username 💥`,
      `You have entered ${profileForm['uname'].value.length} characters.
      Username must be between 5 and 100 characters long.`
    );
    return false;
  }
  // new password validation
  if (
    profileForm['new_password'].value &&
    !profileForm['confirm_new_password'].value
  ) {
    modal(
      `New password 💥`,
      `You have entered ${profileForm['confirm_new_password'].value.length} characters.
      Password confirmation is required.`
    );
    return false;
  } else if (
    !profileForm['new_password'].value &&
    profileForm['confirm_new_password'].value
  ) {
    modal(
      `New password 💥`,
      `You have entered ${profileForm['new_password'].value.length} characters.
      New password is required.`
    );
    return false;
  }

  return false;
};
