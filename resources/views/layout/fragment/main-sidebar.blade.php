<nav class="nav-side-menu px-4" id="nav-side-menu">
    <span class="py-4 d-flex">
        <img src="/assets/images/e-onulipi-logo.png" alt=""/>
    </span>
    <div id="nav-scroll">
        <ul class="d-flex flex-column gap-3 pt-3 px-0" id="web-menu-list">
            <li class="d-flex">
                <a href="/dashboard" class="d-flex gap-2 align-items-center text-decoration-none">
                    <div class="d-flex">
                        <img class="sidebar-icon" src="/assets/images/sidebar/Dashboard.svg" alt="sidebar icon"/>
                    </div>
                    <div class="fs-18-500-27">ড্যাশবোর্ড</div>
                </a>
            </li>

            <!--User-->
            <li class="d-flex flex-column make-arrow-up">
                <a class="btn d-flex gap-2 align-items-center text-decoration-none p-0 justify-content-between arrow-div"
                   data-bs-toggle="collapse"
                   href="#userData" role="button"
                   id="userArrow"
                   aria-expanded="false" aria-controls="userData">
                    <div class="d-flex align-items-center gap-2">
                        <img class="sidebar-icon" src="/assets/images/sidebar/UserMgmt.svg" alt="sidebar icon"/>
                        <div class="fs-18-500-27 gray-text" id="userData-legend">ব্যবহারকারী</div>
                    </div>
                    <div class="">
                        <i class="fa-solid fa-caret-down arrow" id="userData-arrow"></i>
                    </div>
                </a>
                <div class="collapse multi-collapse userData" id="userData">
                    <ul class="d-flex flex-column pt-2 gap-2">
                        <li class="list-inline-item">
                            <a class="text-decoration-none fs-18-500-27 gray-text"
                               href="/user-mgt/user-create">নতুন ব্যবহারকারী</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-decoration-none fs-18-500-27 gray-text"
                               href="/user-mgt/system-users">ব্যবহারকারী তালিকা</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-decoration-none fs-18-500-27 gray-text"
                               href="/user-mgt/general-users">সাধারণ ব্যবহারকারী তালিকা</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!--Petition-->
            <li class="d-flex flex-column make-arrow-up">
                <a class="btn d-flex gap-2 align-items-center text-decoration-none p-0 justify-content-between arrow-div"
                   data-bs-toggle="collapse"
                   data-nav-primary-item="template-management"
                   href="#petition" role="button"
                   aria-expanded="false" aria-controls="petition">
                    <div class="d-flex align-items-center gap-2">
                        <img class="sidebar-icon" src="/assets/images/sidebar/PetitionMgmt.svg" alt="sidebar icon"/>
                        <div class="fs-18-500-27 gray-text" id="petition-legend">পিটিশন</div>
                    </div>
                    <div class="">
                        <i class="fa-solid fa-caret-down arrow" id="petition-arrow"></i>
                    </div>
                </a>
                <div class="collapse multi-collapse petition" id="petition">
                    <ul class="d-flex flex-column pt-2 gap-2">
                        <li class="list-inline-item">
                            <a class="text-decoration-none fs-18-500-27 gray-text"
                               href="/petitions/create">নতুন পিটিশন দাখিল</a>
                        </li>
                        <li class="list-inline-item">
                            <a class="text-decoration-none fs-18-500-27 gray-text" href="/petition/petition-list">তালিকা(প্রক্রিয়াধীন)</a>
                        </li>

                        <li class="list-inline-item">
                            <a class="text-decoration-none fs-18-500-27 gray-text"
                               href="/petition/my-petitions">তালিকা</a>
                        </li>

                        <li class="list-inline-item">
                            <a class="text-decoration-none fs-18-500-27 gray-text" href="/petition/all-petition-list">তালিকা(সকল)</a>
                        </li>

                        <li class="list-inline-item">
                            <a class=" text-decoration-none fs-18-500-27 gray-text"
                               href="#">তালিকা(সম্পন্ন)</a>
                        </li>
                    </ul>
                </div>
            </li>

            <!--Template-->
            <li class="d-flex flex-column make-arrow-up">
                <a class="btn d-flex gap-2 align-items-center text-decoration-none p-0 justify-content-between arrow-div"
                   data-bs-toggle="collapse"
                   data-nav-primary-item="template-management"
                   href="#template" role="button"
                   id="templateArrow"
                   aria-expanded="false" aria-controls="template">
                    <div class="d-flex align-items-center gap-2 parentEl">
                        <img class="sidebar-icon" src="/assets/images/sidebar/TemplateMgmt.svg" alt="sidebar icon"/>
                        <div class="fs-18-500-27 gray-text" id="template-legend">টেমপ্লেট</div>
                    </div>
                    <div class="">
                        <i class="fa-solid fa-caret-down arrow" id="template-arrow"></i>
                    </div>
                </a>
                <div class="collapse multi-collapse template" id="template">
                    <ul class="d-flex flex-column pt-2 gap-2">
                        <li class="list-inline-item">
                            <a class="web-menu-list text-decoration-none fs-18-500-27 gray-text"
                               href="/template/upload-template">নতুন টেমপ্লেট</a></li>
                        <li class="list-inline-item">
                            <a class="web-menu-list text-decoration-none fs-18-500-27 gray-text"
                               href="/template/list">সম্পন্ন টেমপ্লেট তালিকা</a></li>
                    </ul>
                </div>
            </li>

            <!--ETC-->
            <li class="d-flex">
                <a href="#" class="d-flex gap-2 align-items-center text-decoration-none">
                    <div class="d-flex">
                        <img class="sidebar-icon" src="/assets/images/sidebar/Bidhimala.svg" alt="sidebar icon"/>
                    </div>
                    <div class="fs-18-500-27">ব্যবহার বিধি</div>
                </a>
            </li>


            <!--Master Data-->
            <li class="d-flex">
                <a href="/master-data/master-data-list" class="d-flex gap-2 align-items-center text-decoration-none">
                    <div class="d-flex">
                        <img class="sidebar-icon" src="/assets/images/sidebar/Masterdata.svg" alt="sidebar icon"/>
                    </div>
                    <div class="fs-18-500-27">মাস্টার ডাটা</div>
                </a>
            </li>


            <!--Invoice-->
            <li class="d-flex">
                <a href="/payment-list" class="d-flex gap-2 align-items-center text-decoration-none">
                    <div class="d-flex">
                        <img class="sidebar-icon" src="/assets/images/sidebar/InvoiceList.svg" alt="sidebar icon"/>
                    </div>
                    <div class="fs-18-500-27">ইনভয়েস তালিকা</div>
                </a>
            </li>

            <!--Validate-->
            <li class="d-flex">
                <a href="onulipi" class="d-flex gap-2 align-items-center text-decoration-none">
                    <div class="d-flex">
                        <img class="sidebar-icon" src="/assets/images/sidebar/OnulipiJachai.svg" alt="sidebar icon"/>
                    </div>
                    <div class="fs-18-500-27">অনুলিপি যাচাই</div>
                </a>
            </li>
        </ul>
    </div>
    <div class="p-3" id="footer">
        <div class="d-flex align-items-center flex-column gap-1 justify-content-center">
            <img class="dsi-logo" src="/assets/images/dsi-logo.png" alt=""/>
            <span class="fs-10-600-14 gray-shade">Designed, Developed, and Maintained by</span>
            <span class="fs-10-600-14">Dynamic Solution Innovators Ltd.</span>
        </div>
    </div>
</nav>


