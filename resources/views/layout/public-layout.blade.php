<!DOCTYPE html>
<html xmlns:layout="http://www.ultraq.net.nz/thymeleaf/layout" data-bs-theme="light" lang="en-US" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Onulipi</title>
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/custom.css" rel="stylesheet">

    <!-- ===============Stylesheets ends================================-->

</head>
<body class="background-theme">

<!-- =================== Main Content starts============================-->


<div class="container-fluid">
    <section layout:fragment="content"></section>
</div>
<!-- =================== Main Content ends ============================-->

<script src="/vendors/bootstrap/bootstrap.min.js"></script>


<script>
    // active menu class add
    const activePage = window.location.pathname;
    document.querySelectorAll('nav a').forEach(link => {
        if (link.href.includes(`${activePage}`)) {
            link.classList.add('active');
        }
    })
    document.querySelectorAll('mobile-side-menu a').forEach(mlink => {
        if (mlink.href.includes(`${activePage}`)) {
            mlink.classList.add('active');
        }
    })


    // menu collapse show hide
    const currentPath = window.location.pathname;
    const currentNav = currentPath.slice(1).split('/');
    const primaryNavMap = {
        'template': '#nav-side-menu .template',
        'config': '#nav-side-menu .masterData',
        'user-mgt': '#nav-side-menu .userData',
        'petition': '#nav-side-menu .petition',
    };
    const mobileNavMap = {
        'template': '#mobile-side-menu .template',
        'config': '#mobile-side-menu .masterData',
        'user-mgt': '#mopetitionbile-side-menu .userData',
        'petition': '#mopetitionbile-side-menu .petition',
    };
    const selector = primaryNavMap[currentNav[0]];
    const mobileSelector = mobileNavMap[currentNav[0]];
    const targetNavItem = document.querySelector(selector)
    const mobileNavItem = document.querySelector(mobileSelector)
    targetNavItem.classList.add('show')
    mobileNavItem.classList.add('show')

</script>
</body>
</html>
