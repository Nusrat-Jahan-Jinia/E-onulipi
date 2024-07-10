<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.png">
    <link href="" rel="stylesheet">
    <link href="{{ asset('assets/css/all.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">
</head>
<body class="background-theme">
<div class="container-fluid">
    <div class="w-100">
        <div class="" id="mobile-view">
            @include('layout/fragment/mobile-sidebar')
        </div>
        <div class="" id="web-sidebar">
            @include('layout/fragment/main-sidebar')
        </div>
        <div class="" id="main-content">
            <div id="web-profile-section">
                <div class="d-flex gap-4 justify-content-between align-items-center py-3">
                    <div class="d-flex flex-grow-1 justify-content-start">
                        <span
                            th:if="${LoggedInUser?.getCurrentLoggedInUser()?.getCourtTypeNameBn() != null}"
                            class="text-dark fs-20-700-16" th:text="${
                        ''+ LoggedInUser?.getCurrentLoggedInUser()?.getCourtTypeNameBn() + ', ' + LoggedInUser?.getCurrentLoggedInUser()?.getDistrictNameBn()
                        }"></span>
                    </div>
                    <div class="d-flex justify-content-end">
                        <div class="d-flex align-items-center">
                            <div class="btn dropdown-toggle d-flex user-profile px-2 py-1 rounded gap-2" type="button"
                                 data-bs-toggle="dropdown"
                                 aria-expanded="false">
                       <span class="d-flex flex-column gap-1">
                           <span class="fs-18-600-27">getFullName</span>
                           <span class="fs-13-500-17 gray-text">getUserRole</span>
                       </span>
                                <span>
                            <img src="/assets/images/sidebar/user.png" alt="user photo"/>
                        </span>
                            </div>
                            <div class="dropdown-menu">
                                <ul class="d-flex px-4 py-2 flex-column gap-2 mb-0">
                                    <li class="d-flex">
                                        <a th:href="@{${EndPoint.USER_PROFILE_VIEW_URI}(id = ${LoggedInUser.getCurrentLoggedInUser().getUserId()})}"
                                           class="d-flex gap-2 align-items-center text-decoration-none">
                                            <div class="d-flex">
                                                <img class="sidebar-icon" src="/assets/images/sidebar/OnulipiJachai.svg"
                                                     alt="sidebar icon"/>
                                            </div>
                                            <div class="fs-18-500-27">আমার একাউন্ট</div>
                                        </a>
                                    </li>
                                    <li class="d-flex">
                                        <a th:href="@{${EndPoint.USER_PASSWORD_EDIT_URI}(id = ${LoggedInUser.getCurrentLoggedInUser().getUserId()})}"
                                           class="d-flex gap-2 align-items-center text-decoration-none">
                                            <div class="d-flex">
                                                <img class="sidebar-icon" src="/assets/images/sidebar/password.svg"
                                                     alt="sidebar icon"/>
                                            </div>
                                            <div class="fs-18-500-27 gray-text">পাসওয়ার্ড পরিবর্তন</div>
                                        </a>
                                    </li>
                                    <li class="d-flex">
                                        <a href="/logout" class="d-flex gap-2 align-items-center text-decoration-none">
                                            <div class="d-flex">
                                                <img class="sidebar-icon" src="/assets/images/sidebar/logout.svg"
                                                     alt="sidebar icon"/>
                                            </div>
                                            <div class="fs-18-500-27 text-danger">লগ আউট</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @section('main')
            @show
        </div>
    </div>
</div>
<!-- =================== Main Content ends ============================-->

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/custom.js') }}" defer></script>
<script src="{{ asset('assets/js/dropdown.js') }}" defer></script>


</body>
</html>
