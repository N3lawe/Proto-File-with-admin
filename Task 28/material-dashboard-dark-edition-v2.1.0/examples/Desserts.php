<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link
        rel="apple-touch-icon"
        sizes="76x76"
        href="../assets/img/apple-icon.png" />
    <link rel="icon" type="image/png" href="../assets/img/favicon.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Services</title>
    <meta
        content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no"
        name="viewport" />
    <!--     Fonts and icons     -->
    <link
        rel="stylesheet"
        type="text/css"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link
        rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- Font Awesome -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
        integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />
    <!-- Google Fonts -->
    <link
        rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@200;300;400;500;600;700;800&#038;display=swap" />
    <!-- js animetion -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>

    <!-- Font Awesome CDN -->
    <link
        rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
        crossorigin="anonymous"
        referrerpolicy="no-referrer" />

    <!-- CSS Files -->
    <link
        href="../assets/css/material-dashboard.css?v=2.1.0"
        rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
    <style>
        .modal-body .form-control {
            color: black;
        }
    </style>
</head>

<body class="dark-edition">
    <div class="wrapper">
        <div
            class="sidebar"
            data-color="purple"
            data-background-color="black"
            data-image="../assets/img/sidebar-2.jpg">
            <div class="logo">
                <a href="Desserts.php" class="simple-text logo-normal"> Admin Site </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <li class="nav-item ">
                        <a class="nav-link" href="./index.php">
                            <p>WebsiteLogo</p>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="./user.php">
                            <p>Home</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./tables.php">
                            <p>About</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./Dishes.php">
                            <p>Experience</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="./Drinks.php">
                            <p>Portfolio</p>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./typography.php">
                            <p>Contact</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav
                class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top"
                id="navigation-example">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        <a class="navbar-brand" href="javascript:void(0)">Edit Services</a>
                    </div>
                    <button
                        class="navbar-toggler"
                        type="button"
                        data-toggle="collapse"
                        aria-controls="navigation-index"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                        data-target="#navigation-example">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end">
                        <form class="navbar-form">
                            <div class="input-group no-border">
                                <input
                                    type="text"
                                    value=""
                                    class="form-control"
                                    placeholder="Search..." />
                                <button
                                    type="submit"
                                    class="btn btn-default btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                    <div class="ripple-container"></div>
                                </button>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">
                                    <i class="material-icons">dashboard</i>
                                    <p class="d-lg-none d-md-block">Stats</p>
                                </a>
                            </li>
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link"
                                    href="javscript:void(0)"
                                    id="navbarDropdownMenuLink"
                                    data-toggle="dropdown"
                                    aria-haspopup="true"
                                    aria-expanded="false">
                                    <i class="material-icons">notifications</i>
                                    <span class="notification">5</span>
                                    <p class="d-lg-none d-md-block">Some Actions</p>
                                </a>
                                <div
                                    class="dropdown-menu dropdown-menu-right"
                                    aria-labelledby="navbarDropdownMenuLink">
                                    <a class="dropdown-item" href="javascript:void(0)">Mike John responded to your email</a>
                                    <a class="dropdown-item" href="javascript:void(0)">You have 5 new tasks</a>
                                    <a class="dropdown-item" href="javascript:void(0)">You're now friend with Andrew</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Another Notification</a>
                                    <a class="dropdown-item" href="javascript:void(0)">Another One</a>
                                </div>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="javascript:void(0)">
                                    <i class="material-icons">person</i>
                                    <p class="d-lg-none d-md-block">Account</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="card">
                        <div class="card-header card-header-primary">
                            <h4 class="card-title">Manage Services Content</h4>
                            <p class="card-category">Add and edit services entries</p>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title 1</th>
                                            <th>Description 1</th>
                                            <th>Title 2</th>
                                            <th>Description 2</th>
                                            <th>Title 3</th>
                                            <th>Description 3</th>
                                            <th>Title 4</th>
                                            <th>Description 4</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody id="servicesTableBody">
                                        <!-- Services Entries -->
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal for Editing Service Entry -->
            <div class="modal fade" id="servicesModal" tabindex="-1" role="dialog" aria-labelledby="servicesModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="servicesModalLabel">Edit Service Entry</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form id="servicesForm">
                                <div class="form-group">
                                    <label for="title1">Title 1</label>
                                    <input type="text" class="form-control" id="title1" required>
                                </div>
                                <div class="form-group">
                                    <label for="description1">Description 1</label>
                                    <textarea class="form-control" id="description1" rows="2"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="title2">Title 2</label>
                                    <input type="text" class="form-control" id="title2" required>
                                </div>
                                <div class="form-group">
                                    <label for="description2">Description 2</label>
                                    <textarea class="form-control" id="description2" rows="2"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="title3">Title 3</label>
                                    <input type="text" class="form-control" id="title3" required>
                                </div>
                                <div class="form-group">
                                    <label for="description3">Description 3</label>
                                    <textarea class="form-control" id="description3" rows="2"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="title4">Title 4</label>
                                    <input type="text" class="form-control" id="title4" required>
                                </div>
                                <div class="form-group">
                                    <label for="description4">Description 4</label>
                                    <textarea class="form-control" id="description4" rows="2"></textarea>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-primary" onclick="updateService()">Update Service Entry</button>
                        </div>
                    </div>
                </div>
            </div>

            <script>
                const apiUrlGetServices = 'http://localhost/Task%2028/material-dashboard-dark-edition-v2.1.0/examples/api/get.php?table=Services';
                const apiUrlPutServices = 'http://localhost/Task%2028/material-dashboard-dark-edition-v2.1.0/examples/api/put.php?table=Services';

                function fetchServicesEntries() {
                    fetch(apiUrlGetServices)
                        .then(response => response.json())
                        .then(data => {
                            const tableBody = document.querySelector("#servicesTableBody");
                            tableBody.innerHTML = '';
                            data.forEach(entry => {
                                const row = document.createElement('tr');
                                row.innerHTML = `
                    <td>${entry.ID}</td>
                    <td>${entry.Title1}</td>
                    <td>${entry.Description1 || ''}</td>
                    <td>${entry.Title2}</td>
                    <td>${entry.Description2 || ''}</td>
                    <td>${entry.Title3}</td>
                    <td>${entry.Description3 || ''}</td>
                    <td>${entry.Title4}</td>
                    <td>${entry.Description4 || ''}</td>
                    <td>
                        <button class="btn btn-warning" onclick="openEditServicesModal(${entry.ID}, '${entry.Title1}', '${entry.Description1}', '${entry.Title2}', '${entry.Description2}', '${entry.Title3}', '${entry.Description3}', '${entry.Title4}', '${entry.Description4}')">Edit</button>
                    </td>
                `;
                                tableBody.appendChild(row);
                            });
                        })
                        .catch(error => console.error('Error fetching services entries:', error));
                }

                window.onload = fetchServicesEntries;

                function openEditServicesModal(id, title1, description1, title2, description2, title3, description3, title4, description4) {
                    document.getElementById("title1").value = title1;
                    document.getElementById("description1").value = description1;
                    document.getElementById("title2").value = title2;
                    document.getElementById("description2").value = description2;
                    document.getElementById("title3").value = title3;
                    document.getElementById("description3").value = description3;
                    document.getElementById("title4").value = title4;
                    document.getElementById("description4").value = description4;

                    document.querySelector('.modal-footer .btn-primary').setAttribute('onclick', `updateService(${id})`);
                    $('#servicesModal').modal('show');
                }

                async function updateService(id) {
                    const formData = new FormData(document.getElementById("servicesForm"));
                    formData.append("id", id);
                    formData.append("_method", "PUT"); // Simulating PUT method

                    try {
                        const response = await fetch(apiUrlPutServices, {
                            method: 'POST', // POST method for PUT simulation
                            body: formData
                        });
                        const data = await response.json();

                        if (data.message) {
                            alert(data.message || 'Service entry updated successfully!');
                            fetchServicesEntries(); // Refresh service entries
                            $('#servicesModal').modal('hide');
                        } else {
                            alert(data.error || 'Failed to update service entry');
                        }
                    } catch (error) {
                        console.error('Error updating service entry:', error);
                        alert('An error occurred while updating the service entry');
                    }
                }
            </script>





            <!-- footer -->
            <footer class="footer">
                <div class="container-fluid">
                    <div class="copyright float-right" id="date">
                        , made with <i class="material-icons">favorite</i> by
                        <a href="https://www.creative-tim.com" target="_blank">Clever maind</a>
                        for a better web.
                    </div>
                </div>
            </footer>
            <script>
                const x = new Date().getFullYear();
                let date = document.getElementById("date");
                date.innerHTML = "&copy; " + x + date.innerHTML;
            </script>
        </div>
    </div>

    <!--   Core JS Files   -->
    <script src="../assets/js/core/jquery.min.js"></script>
    <script src="../assets/js/core/popper.min.js"></script>
    <script src="../assets/js/core/bootstrap-material-design.min.js"></script>
    <script src="https://unpkg.com/default-passive-events"></script>
    <script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!-- Chartist JS -->
    <script src="../assets/js/plugins/chartist.min.js"></script>
    <!--  Notifications Plugin    -->
    <script src="../assets/js/plugins/bootstrap-notify.js"></script>
    <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../assets/js/material-dashboard.js?v=2.1.0"></script>
    <!-- Material Dashboard DEMO methods, don't include it in your project! -->
    <script src="../assets/demo/demo.js"></script>
    <script>
        $(document).ready(function() {
            $().ready(function() {
                $sidebar = $(".sidebar");

                $sidebar_img_container = $sidebar.find(".sidebar-background");

                $full_page = $(".full-page");

                $sidebar_responsive = $("body > .navbar-collapse");

                window_width = $(window).width();

                $(".fixed-plugin a").click(function(event) {
                    // Alex if we click on switch, stop propagation of the event, so the dropdown will not be hide, otherwise we set the  section active
                    if ($(this).hasClass("switch-trigger")) {
                        if (event.stopPropagation) {
                            event.stopPropagation();
                        } else if (window.event) {
                            window.event.cancelBubble = true;
                        }
                    }
                });

                $(".fixed-plugin .active-color span").click(function() {
                    $full_page_background = $(".full-page-background");

                    $(this).siblings().removeClass("active");
                    $(this).addClass("active");

                    var new_color = $(this).data("color");

                    if ($sidebar.length != 0) {
                        $sidebar.attr("data-color", new_color);
                    }

                    if ($full_page.length != 0) {
                        $full_page.attr("filter-color", new_color);
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.attr("data-color", new_color);
                    }
                });

                $(".fixed-plugin .background-color .badge").click(function() {
                    $(this).siblings().removeClass("active");
                    $(this).addClass("active");

                    var new_color = $(this).data("background-color");

                    if ($sidebar.length != 0) {
                        $sidebar.attr("data-background-color", new_color);
                    }
                });

                $(".fixed-plugin .img-holder").click(function() {
                    $full_page_background = $(".full-page-background");

                    $(this).parent("li").siblings().removeClass("active");
                    $(this).parent("li").addClass("active");

                    var new_image = $(this).find("img").attr("src");

                    if (
                        $sidebar_img_container.length != 0 &&
                        $(".switch-sidebar-image input:checked").length != 0
                    ) {
                        $sidebar_img_container.fadeOut("fast", function() {
                            $sidebar_img_container.css(
                                "background-image",
                                'url("' + new_image + '")'
                            );
                            $sidebar_img_container.fadeIn("fast");
                        });
                    }

                    if (
                        $full_page_background.length != 0 &&
                        $(".switch-sidebar-image input:checked").length != 0
                    ) {
                        var new_image_full_page = $(".fixed-plugin li.active .img-holder")
                            .find("img")
                            .data("src");

                        $full_page_background.fadeOut("fast", function() {
                            $full_page_background.css(
                                "background-image",
                                'url("' + new_image_full_page + '")'
                            );
                            $full_page_background.fadeIn("fast");
                        });
                    }

                    if ($(".switch-sidebar-image input:checked").length == 0) {
                        var new_image = $(".fixed-plugin li.active .img-holder")
                            .find("img")
                            .attr("src");
                        var new_image_full_page = $(".fixed-plugin li.active .img-holder")
                            .find("img")
                            .data("src");

                        $sidebar_img_container.css(
                            "background-image",
                            'url("' + new_image + '")'
                        );
                        $full_page_background.css(
                            "background-image",
                            'url("' + new_image_full_page + '")'
                        );
                    }

                    if ($sidebar_responsive.length != 0) {
                        $sidebar_responsive.css(
                            "background-image",
                            'url("' + new_image + '")'
                        );
                    }
                });

                $(".switch-sidebar-image input").change(function() {
                    $full_page_background = $(".full-page-background");

                    $input = $(this);

                    if ($input.is(":checked")) {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar_img_container.fadeIn("fast");
                            $sidebar.attr("data-image", "#");
                        }

                        if ($full_page_background.length != 0) {
                            $full_page_background.fadeIn("fast");
                            $full_page.attr("data-image", "#");
                        }

                        background_image = true;
                    } else {
                        if ($sidebar_img_container.length != 0) {
                            $sidebar.removeAttr("data-image");
                            $sidebar_img_container.fadeOut("fast");
                        }

                        if ($full_page_background.length != 0) {
                            $full_page.removeAttr("data-image", "#");
                            $full_page_background.fadeOut("fast");
                        }

                        background_image = false;
                    }
                });

                $(".switch-sidebar-mini input").change(function() {
                    $body = $("body");

                    $input = $(this);

                    if (md.misc.sidebar_mini_active == true) {
                        $("body").removeClass("sidebar-mini");
                        md.misc.sidebar_mini_active = false;

                        $(".sidebar .sidebar-wrapper, .main-panel").perfectScrollbar();
                    } else {
                        $(".sidebar .sidebar-wrapper, .main-panel").perfectScrollbar(
                            "destroy"
                        );

                        setTimeout(function() {
                            $("body").addClass("sidebar-mini");

                            md.misc.sidebar_mini_active = true;
                        }, 300);
                    }

                    // we simulate the window Resize so the charts will get updated in realtime.
                    var simulateWindowResize = setInterval(function() {
                        window.dispatchEvent(new Event("resize"));
                    }, 180);

                    // we stop the simulation of Window Resize after the animations are completed
                    setTimeout(function() {
                        clearInterval(simulateWindowResize);
                    }, 1000);
                });
            });
        });
    </script>
</body>

</html>