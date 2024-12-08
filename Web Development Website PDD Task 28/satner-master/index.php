<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta
    name="viewport"
    content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <link rel="icon" href="images/WebsiteLogo.png" type="image/png" />
  <title>Portfolio</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="vendors/linericon/style.css" />
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css" />
  <link rel="stylesheet" href="css/magnific-popup.css" />
  <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css" />
  <!-- main css -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- Font Awesome CDN -->
  <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    crossorigin="anonymous"
    referrerpolicy="no-referrer" />
</head>

<body>
  <!--================ Start Header Area =================-->


  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container">
          <a class="navbar-brand logo_h" href="index.php">
            <img id="websiteLogo" alt="Website Logo" />
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#About">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Services">Services</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Portfolio">Portfolio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Contact">Contact</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <script>
    async function fetchLogo() {
      const apiUrlGet = 'http://localhost/Task%2028/material-dashboard-dark-edition-v2.1.0/examples/api/get.php?table=WebsiteLogo';

      try {
        const response = await fetch(apiUrlGet);
        const data = await response.json();

        if (data && data.length > 0 && data[0].ImageURL) {
          const imageUrl = `http://localhost/Task%2028/material-dashboard-dark-edition-v2.1.0/examples/api/${data[0].ImageURL}`;

          document.getElementById('websiteLogo').src = imageUrl;
        } else {
          console.error('No image path available');
        }

      } catch (error) {
        console.error('Error fetching the logo:', error);
      }
    }

    fetchLogo();
  </script>
  <!--================ End Header Area =================-->

  <!--================ Start Home Banner Area =================-->
  <section class="home_banner_area">
    <div class="banner_inner">
      <div class="container">
        <div class="row">
          <div class="col-lg-7">
            <div class="banner_content">
              <h3 class="text-uppercase" id="title"></h3>
              <h1 class="text-uppercase" id="subtitle"></h1>
              <h5 class="text-uppercase" id="description"></h5>
              <div class="d-flex align-items-center">
                <a class="primary_btn" href="#About"><span>Hire Me</span></a>
                <a class="primary_btn tr-bg" href="" id="pdfLink" target="_blank" download>
                  <span>Download CV</span>
                </a>
              </div>
            </div>
          </div>
          <div class="col-lg-5">
            <div class="home_right_img">
              <img id="homeImage" class="" src="" alt="" />
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    async function fetchHomeData() {
      const apiUrlGetHome = 'http://localhost/Task%2028/material-dashboard-dark-edition-v2.1.0/examples/api/get.php?table=home';

      try {
        const response = await fetch(apiUrlGetHome);
        const data = await response.json();

        if (data && data.length > 0) {
          const homeData = data[0]; // Assuming there is one row of data

          // Set content dynamically
          document.getElementById('title').innerText = homeData.Title;
          document.getElementById('subtitle').innerText = homeData.SubTitle;
          document.getElementById('description').innerText = homeData.Description;
          document.getElementById('pdfLink').href = homeData.PDF_URL ? homeData.PDF_URL : '#';

          // Set the image URL dynamically
          if (homeData.ImageURL) {
            const imageUrl = `http://localhost/Task%2028/material-dashboard-dark-edition-v2.1.0/examples/api/${homeData.ImageURL}`;
            document.getElementById('homeImage').src = imageUrl;
          }
        } else {
          console.error('No home data available');
        }

      } catch (error) {
        console.error('Error fetching home data:', error);
      }
    }

    fetchHomeData();
  </script>

  <!--================ End Home Banner Area =================-->

  <!--================ Start About Us Area =================-->
  <section class="about_area section_gap" id="About">
    <div class="container">
      <div class="row justify-content-start align-items-center">
        <div class="col-lg-5">
          <div class="about_img">
            <img id="aboutImage" class="" src="" alt="" />
          </div>
        </div>

        <div class="offset-lg-1 col-lg-5">
          <div class="main_title text-left">
            <h2 id="aboutTitle"></h2>
            <p id="aboutDescription"></p>

            <a class="primary_btn" id="cvLink" href="" target="_blank" download>
              <span>Download CV</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    async function fetchAboutData() {
      const apiUrlGetAbout = 'http://localhost/Task%2028/material-dashboard-dark-edition-v2.1.0/examples/api/get.php?table=About';

      try {
        const response = await fetch(apiUrlGetAbout);
        const data = await response.json();

        if (data && data.length > 0) {
          const aboutData = data[0]; // Assuming there is one row of data

          // Set the title and description dynamically
          document.getElementById('aboutTitle').innerText = aboutData.Title;
          document.getElementById('aboutDescription').innerText = aboutData.Description;

          // Set the CV link dynamically
          if (aboutData.PDF_URL) {
            document.getElementById('cvLink').href = aboutData.PDF_URL;
          }

          // Set the image URL dynamically
          if (aboutData.ImageURL) {
            const imageUrl = `http://localhost/Task%2028/material-dashboard-dark-edition-v2.1.0/examples/api/${aboutData.ImageURL}`;
            document.getElementById('aboutImage').src = imageUrl;
          }
        } else {
          console.error('No about data available');
        }

      } catch (error) {
        console.error('Error fetching about data:', error);
      }
    }

    fetchAboutData();
  </script>

  <!--================ End About Us Area =================-->

  <!--================ Srart Brand Area =================-->
  <section class="brand_area section_gap_bottom">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-6">
          <div class="row">
            <!-- Brand Images (no changes needed here, assuming static content) -->
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="single-brand-item d-table">
                <div class="d-table-cell text-center">
                  <img src="images/html.png" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="single-brand-item d-table">
                <div class="d-table-cell text-center">
                  <img src="images/css-3.png" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="single-brand-item d-table">
                <div class="d-table-cell text-center">
                  <img src="images/java-script.png" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="single-brand-item d-table">
                <div class="d-table-cell text-center">
                  <img src="images/php.png" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="single-brand-item d-table">
                <div class="d-table-cell text-center">
                  <img src="images/asp.png" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="single-brand-item d-table">
                <div class="d-table-cell text-center">
                  <img src="images/c-sharp.png" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="single-brand-item d-table">
                <div class="d-table-cell text-center">
                  <img src="images/java.png" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="single-brand-item d-table">
                <div class="d-table-cell text-center">
                  <img src="images/database.png" alt="" />
                </div>
              </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
              <div class="single-brand-item d-table">
                <div class="d-table-cell text-center">
                  <img src="images/server.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="offset-lg-2 col-lg-4 col-md-6">
          <div class="client-info">
            <div class="d-flex mb-50">
              <span class="lage" id="experienceYears">1</span>
              <span class="smll">Years Experience Working</span>
            </div>
            <div class="call-now d-flex">
              <div>
                <span class="fa fa-phone"></span>
              </div>
              <div class="ml-15">
                <p>call us now</p>
                <h3 id="phoneNumber">+962-7966-78701</h3>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
    async function fetchExperienceData() {
      const apiUrlGetExperience = 'http://localhost/Task%2028/material-dashboard-dark-edition-v2.1.0/examples/api/get.php?table=Experience';

      try {
        const response = await fetch(apiUrlGetExperience);
        const data = await response.json();

        if (data && data.length > 0) {
          const experienceData = data[0]; // Assuming there is one row of data

          // Set the years of experience dynamically
          document.getElementById('experienceYears').innerText = experienceData.YearsOfExperience;

          // Set the phone number dynamically
          document.getElementById('phoneNumber').innerText = experienceData.PhoneNumber;
        } else {
          console.error('No experience data available');
        }
      } catch (error) {
        console.error('Error fetching experience data:', error);
      }
    }

    fetchExperienceData();
  </script>

  <!--================ End Brand Area =================-->

  <!--================ Start Features Area =================-->
  <section class="features_area" id="Services">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center">
          <div class="main_title">
            <h2>service offers</h2>
          </div>
        </div>
      </div>
      <div class="row feature_inner">
        <div class="col-lg-3 col-md-6">
          <div class="feature_item">
            <img src="img/services/s1.png" alt="" />
            <h4>Web Design</h4>
            <p>
              I craft visually appealing and user-friendly web designs,
              ensuring responsive layouts optimized for all devices. My
              designs prioritize usability and modern aesthetics.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="feature_item">
            <img src="img/services/s2.png" alt="" />
            <h4>Web Development</h4>
            <p>
              With expertise in full-stack web development, I build robust,
              dynamic, and scalable web applications using technologies like
              Laravel, ASP.NET Core, PHP, and JavaScript.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="feature_item">
            <img src="img/services/s3.png" alt="" />
            <h4>Cloud Solutions</h4>
            <p>
              I specialize in deploying and managing cloud-based applications
              using Alibaba Cloud, ensuring scalability, security, and
              seamless performance for businesses.
            </p>
          </div>
        </div>
        <div class="col-lg-3 col-md-6">
          <div class="feature_item">
            <img src="img/services/s4.png" alt="" />
            <h4>Mobile App Development</h4>
            <p>
              I develop efficient and feature-rich mobile applications for
              Android, focusing on intuitive interfaces and optimized
              performance using tools like Android Studio and Firebase.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--================ End Features Area =================-->

  <!--================Start Portfolio Area =================-->
  <section class="portfolio_area" id="Portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="main_title text-left">
            <h2>
              quality work <br />
              Recently done project
            </h2>
          </div>
        </div>
      </div>
      <div class="filters portfolio-filter">
        <ul>
          <li class="active" data-filter="*">all</li>
          <li data-filter=".popular">popular</li>
          <li data-filter=".latest">latest</li>
          <li data-filter=".following">following</li>
          <li data-filter=".upcoming">upcoming</li>
        </ul>
      </div>

      <div class="filters-content">
        <div class="row portfolio-grid justify-content-center" id="portfolio-grid">
          <!-- سيتم تحميل العناصر هنا باستخدام جافا سكريبت -->
        </div>
      </div>
    </div>
  </section>

  <script>
    const apiUrlGetPortfolio = 'http://localhost/Task%2028/material-dashboard-dark-edition-v2.1.0/examples/api/get.php?table=Portfolio';

    fetch(apiUrlGetPortfolio)
      .then(response => response.json())
      .then(data => {
        const portfolioGrid = document.getElementById('portfolio-grid');
        const filters = document.querySelectorAll('.portfolio-filter ul li');

        // دالة لعرض العناصر بناءً على الفئة
        const displayPortfolioItems = (category) => {
          portfolioGrid.innerHTML = ''; // تنظيف العناصر السابقة

          data.forEach(item => {
            const imageUrl = `http://localhost/Task%2028/material-dashboard-dark-edition-v2.1.0/examples/api/${item.ImageURL}`;

            // إضافة التصنيف كـ class لتصفية الفئات
            if (category === '*' || item.Category === category) {
              const portfolioItem = document.createElement('div');
              portfolioItem.classList.add('col-lg-4', 'col-md-6', 'all', item.Category);

              portfolioItem.innerHTML = `
              <div class="portfolio_box">
                <div class="single_portfolio">
                  <img class="img-fluid w-100" src="${imageUrl}" alt="" />
                  <div class="overlay"></div>
                  <a href="${imageUrl}" class="img-gal">
                    <div class="icon">
                      <span class="lnr lnr-cross"></span>
                    </div>
                  </a>
                </div>
                <div class="short_info">
                  <h4><a href="portfolio-details.html">${item.Title}</a></h4>
                </div>
              </div>
            `;

              portfolioGrid.appendChild(portfolioItem);
            }
          });
        };

        // العرض الأولي لجميع العناصر
        displayPortfolioItems('*');

        // عند الضغط على الفلاتر
        filters.forEach(filter => {
          filter.addEventListener('click', function() {
            const category = this.getAttribute('data-filter');

            // تحديث الفلتر النشط
            filters.forEach(f => f.classList.remove('active'));
            this.classList.add('active');

            // عرض العناصر حسب الفئة المحددة
            displayPortfolioItems(category);
          });
        });
      })
      .catch(error => console.error('Error fetching portfolio data:', error));
  </script>



  <!--================End Portfolio Area =================-->

  <!--================Footer Area =================-->
  <footer class="footer_area" id="Contact">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-12">
          <div class="footer_top flex-column">
            <div class="footer_logo">
              <a href="#">
                <img src="images/WebsiteLogo.png" alt="" />
              </a>
              <h4>Follow Me</h4>
            </div>
            <div class="footer_social" id="footer-social">
              <!-- الروابط سيتم تحميلها هنا باستخدام JavaScript -->
            </div>
          </div>
        </div>
      </div>
      <div class="row footer_bottom justify-content-center">
        <p class="col-lg-8 col-sm-12 footer-text">
          Copyright &copy;
          <script>
            document.write(new Date().getFullYear());
          </script>
          All rights reserved | Clever Mind POB
          <i class="fa fa-heart-o" aria-hidden="true"></i> by
          <a href="https://www.linkedin.com/in/mohannad-khalil-557653204/" target="_blank">mohannad ali</a>
        </p>
      </div>
    </div>
  </footer>

  <script>
    const apiUrlGetContact = 'http://localhost/Task%2028/material-dashboard-dark-edition-v2.1.0/examples/api/get.php?table=Contact';

    fetch(apiUrlGetContact)
      .then(response => response.json())
      .then(data => {
        const footerSocial = document.getElementById('footer-social');
        if (data.length > 0) {
          const contact = data[0]; // Assuming there's only one contact entry
          footerSocial.innerHTML = `
                    <a aria-label="Facebook" target="_blank" rel="noopener" href="${contact.FacebookURL}"><i class="fab fa-facebook-f"></i></a>
                    <a aria-label="Instagram" target="_blank" rel="noopener" href="${contact.InstagramURL}"><i class="fab fa-instagram"></i></a>
                    <a aria-label="LinkedIn" target="_blank" rel="noopener" href="${contact.LinkedInURL}"><i class="fab fa-linkedin-in"></i></a>
                `;
        } else {
          console.log("No contact data found");
        }
      })
      .catch(error => console.error('Error fetching contact data:', error));
  </script>

  <!--================End Footer Area =================-->

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="js/jquery-3.2.1.min.js"></script>
  <script src="js/popper.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/stellar.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="vendors/nice-select/js/jquery.nice-select.min.js"></script>
  <script src="vendors/isotope/imagesloaded.pkgd.min.js"></script>
  <script src="vendors/isotope/isotope-min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <!--gmaps Js-->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCjCGmQ0Uq4exrzdcL6rvxywDDOvfAu6eE"></script>
  <script src="js/gmaps.min.js"></script>
  <script src="js/theme.js"></script>
</body>

</html>