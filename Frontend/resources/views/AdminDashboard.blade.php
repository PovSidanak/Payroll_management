<!DOCTYPE html>
<html>
<head>
	<title>Dashboard - Inventory Management System</title>
	<link rel="stylesheet" type="text/css" href="css/Admindashboard.css">
    <script src="https://use.fontawesome.com/0c7a3095b5.js"></script>
     <!--Font Awesome CDN-->
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div id="dashboardMainContainer">
        <div class="dashboard_sidebar" id="dashboard_sidebar">
            <h3 class="dashboard_logo" id="dashboard_logo">ITC</h3>
            <div class="dashboard_sidebar_user">
                <img src="./images/user/profile.jpg" alt="User image." id="userImage" />
                <span>Admin</span>
            </div>
            <div class="dashboard_sidebar_menus">
                <ul class="dashboard_menu_lists">
                    <li>
                        <a href="{{url('Admindashboard')}}"><i class="fa fa-reorder"></i>&nbsp;&nbsp;<span class="menuText">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="{{url('Employee')}}"><i class="fa fa-user-plus"></i>&nbsp;&nbsp;<span class="menuText">Employees</span></a>
                    </li>
                    <li class="menuActive">
                        <a href="{{url('LecturerPayment')}}"><i class="fa fa-dollar"></i>&nbsp;&nbsp;<span class="menuText">Lecturer Payment</span></a>
                    </li>
                   
                </ul>
            </div>
        </div>
        <div class="dashboard_content_container" id="dashboard_content_container">
            <div class="dashboard_topNav">
                <a href="" id="toggleBtn"><i class="fa fa-navicon"></i></a>
                <a href="" id="logoutBtn"><i class="fa fa-bell"></i></a>
                <a href="" id="logoutBtn"><i class="fa fa-search"></i></a>
            </div>
            <div class="dashboard_content">
                <div class="dashboard_content_main">
                    <div class="content">
                        <div class="container">
                            <div>
                                <p class="p1">Admin Dashboard</p>
                                <hr>
                                <p class="p2">Welcome Admin</p>
                                <p class="p3">Avatar</p>
                            </div>
                            <div class="Images">
                                <img src="./images/user/profile.jpg" alt="User image." id="profileImage"/>
                            </div>
                            <div>
                                <div class="name">
                                    <p class="p4">Name</p>
                                    <p class="p5"><td><input type="text"></td></p>
                                </div>
                                <div class="name">
                                    <p class="p4">E-mail</p>
                                    <p class="p6"><td><input type="text"></td></p>
                                </div>
                                <div class="name">
                                    <p class="p4">Created At</p>
                                    <p class="p7"><td><input type="text"></td></p>
                                </div>
                                <div class="name">
                                    <p class="p4">Last Updated</p>
                                    <p class="p8"><td><input type="text"></td></p>
                                </div>
                            </div>
                            <tr>
                                <td>
                                    <button class="button2">Save</button>
                                </td>
                            </tr>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script>
    var sideBarIsOpen = true;

    toggleBtn.addEventListener( 'click', (event)  => {
        event.preventDefault();

        if(sideBarIsOpen){
            dashboard_sidebar.style.width = '10%';
            dashboard_sidebar.style.transition = '0.3s all';
            dashboard_content_container.style.width = '90%';
            dashboard_logo.style.fontSize = '60px';
            userImage.style.fontSize = '60px';


            menuIcons = document.getElementsByClassName('menuText');
            for (var i = 0; i < menuIcons.length; i++) {
                menuIcons[i].style.display = 'none';
            }

            document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'center';
            sideBarIsOpen = false;
        } else {
            dashboard_sidebar.style.width = '20%';
            dashboard_content_container.style.width = '80%';
            dashboard_logo.style.fontSize = '80px';
            userImage.style.fontSize = '80px';


            menuIcons = document.getElementsByClassName('menuText');
            for (var i = 0; i < menuIcons.length; i++) {
                menuIcons[i].style.display = 'inline-block';
            }

            document.getElementsByClassName('dashboard_menu_lists')[0].style.textAlign = 'left';
            sideBarIsOpen = true;
        }

    });
</script>
</body>
</html>
