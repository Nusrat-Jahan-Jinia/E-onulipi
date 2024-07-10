<nav th:fragment="mobile-sidebar" class="mobile-side-menu" id="mobile-side-menu"
     xmlns:sec="http://www.thymeleaf.org/thymeleaf-extras-springsecurity6">
    <div class="d-flex justify-content-between py-3">
        <span class="mobile-logo ">
        <img src="/assets/images/e-onulipi-logo.png" alt=""/>
        </span>
        <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight"
                aria-controls="offcanvasRight">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <div class="offcanvas offcanvas-end background-theme " tabindex="-1" id="offcanvasRight"
         aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <img src="/assets/images/e-onulipi-logo.png" alt=""/>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column px-0">
            <div class="d-flex align-items-center gap-2 p-4">
               <span class="">
                   <img class="rounded" src="/assets/images/sidebar/user.png" alt="user photo"/>
               </span>
                <span class="d-flex flex-column gap-1">
                    <span class="fs-18-600-27">রেযউয়ান চৌধুরি</span>
                    <span class="fs-16-600-17 gray-text">জাজ ইনচার্জ</span>
                </span>
            </div>
            <div class="border-primary border-bottom"></div>
            <ul class="d-flex flex-column gap-4 pt-4 mt-4 px-4" id="mobile-menu-list">

                <li class="d-flex">
                    <a href="/dashboard" class="d-flex gap-2 align-items-center text-decoration-none">
                        <div class="d-flex">
                            <img class="sidebar-icon" src="/assets/images/sidebar/Dashboard.svg" alt="sidebar icon"/>
                        </div>
                        <div class="fs-18-500-27">ড্যাশবোর্ড</div>
                    </a>
                </li>

                <!--Petition-->
                <li class="d-flex flex-column">
                    <a class="btn d-flex gap-2 align-items-center text-decoration-none p-0 justify-content-between arrow-div"
                       data-bs-toggle="collapse"
                       data-nav-primary-item="template-management"
                       href="#petition" role="button"
                       aria-expanded="false" aria-controls="petition">
                        <div class="d-flex align-items-center gap-2">
                            <img class="sidebar-icon" src="/assets/images/sidebar/PetitionMgmt.svg" alt="sidebar icon"/>
                            <div class="fs-18-500-27 gray-text">পিটিশন</div>
                        </div>
                        <div class="">
                            <i class="fa-solid fa-caret-down arrow"></i>
                        </div>
                    </a>
                    <div class="collapse multi-collapse petition" id="petition">
                        <ul class="d-flex flex-column py-2 gap-2">
                            <li sec:authorize="hasAnyAuthority('CLIENT')" class="list-inline-item"><a
                                    class=" text-decoration-none fs-18-500-27 gray-text"
                                    href="/petition/create-petition-application">নতুন পিটিশন দাখিল </a>
                            </li>


                            <li sec:authorize="hasAnyAuthority('CLIENT')" class="list-inline-item">
                                <a  th:text="#{sidebar.ad.petition.list}" class="text-decoration-none fs-18-500-27 gray-text"
                                    href="/petition/my-petitions">
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a sec:authorize="hasAnyAuthority('HEAD_COMPARER', 'IN_CHARGE_JUDGE', 'ADMINISTRATIVE_OFFICER')"
                                   th:text="#{label.new.petition.list}" class=" text-decoration-none fs-18-500-27 gray-text" href="/petition/petition-list">নতুন
                                    পিটিশন তালিকা</a></li>
                            <li sec:authorize="hasAnyAuthority('HEAD_COMPARER', 'IN_CHARGE_JUDGE', 'ADMINISTRATIVE_OFFICER')"
                                class="list-inline-item">
                                <a class=" text-decoration-none fs-18-500-27 gray-text"
                                   href="/petition/all-petition-list">
                                    সকল পিটিশন তালিকা</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!--Template-->
                <li sec:authorize="hasAnyAuthority('TYPIST','SUPER_ADMIN')" class="d-flex flex-column">
                    <a class="btn d-flex gap-2 align-items-center text-decoration-none p-0 justify-content-between arrow-div"
                       data-bs-toggle="collapse"
                       data-nav-primary-item="template-management"
                       href="#template" role="button"
                       aria-expanded="false" aria-controls="template">
                        <div class="d-flex align-items-center gap-2">
                            <img class="sidebar-icon" src="/assets/images/sidebar/TemplateMgmt.svg" alt="sidebar icon"/>
                            <div class="fs-18-500-27 gray-text">টেমপ্লেট</div>
                        </div>
                        <div class="">
                            <i class="fa-solid fa-caret-down arrow"></i>
                        </div>
                    </a>
                    <div class="collapse multi-collapse template" id="template">
                        <ul class="d-flex flex-column py-2 gap-2">
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
                    <a href="/bidhimala" class="d-flex gap-2 align-items-center text-decoration-none">
                        <div class="d-flex">
                            <img class="sidebar-icon" src="/assets/images/sidebar/Bidhimala.svg" alt="sidebar icon"/>
                        </div>
                        <div class="fs-18-500-27">বিধিমালা</div>
                    </a>
                </li>

                <!--Notification-->
                <li class="d-flex">
                    <a href="/notification" class="d-flex gap-2 align-items-center text-decoration-none">
                        <div class="d-flex">
                            <img class="sidebar-icon" src="/assets/images/sidebar/Notifications.svg"
                                 alt="sidebar icon"/>
                        </div>
                        <div class="fs-18-500-27">নোটিফিকেশন</div>
                    </a>
                </li>

                <!--Master Data-->
                <li sec:authorize="hasAnyAuthority('HEAD_COMPARER','SUPER_ADMIN')" class="d-flex">
                    <a href="/master-data/master-data-list"
                       class="d-flex gap-2 align-items-center text-decoration-none">
                        <div class="d-flex">
                            <img class="sidebar-icon" src="/assets/images/sidebar/Masterdata.svg" alt="sidebar icon"/>
                        </div>
                        <div class="fs-18-500-27">মাস্টার ডাটা</div>
                    </a>
                </li>

                <!--User-->
                <li sec:authorize="hasAnyAuthority('HEAD_COMPARER','SUPER_ADMIN')" class="d-flex flex-column">
                    <a class="btn d-flex gap-2 align-items-center text-decoration-none p-0 justify-content-between arrow-div"
                       data-bs-toggle="collapse"
                       href="#userData" role="button"
                       aria-expanded="false" aria-controls="userData">
                        <div class="d-flex align-items-center gap-2">
                            <img class="sidebar-icon" src="/assets/images/sidebar/UserMgmt.svg" alt="sidebar icon"/>
                            <div class="fs-18-500-27 gray-text">ব্যবহারকারী</div>
                        </div>
                        <div class="">
                            <i class="fa-solid fa-caret-down arrow"></i>
                        </div>
                    </a>
                    <div class="collapse multi-collapse userData" id="userData">
                        <ul class="d-flex flex-column py-2 gap-2">
                            <li class="list-inline-item"><a class="text-decoration-none fs-18-500-27 gray-text"
                                                            href="/user-mgt/user-create">নতুন ব্যবহারকারী</a></li>

                            <li class="list-inline-item"><a class="text-decoration-none fs-18-500-27 gray-text"
                                                            href="/user-mgt/system-users-list">সফটওয়্যার ব্যবহারকারী
                                    তালিকা</a>
                            </li>
                            <li class="list-inline-item"><a class="text-decoration-none fs-18-500-27 gray-text"
                                                            href="/user-mgt/general-users-list">সাধারণ ব্যবহারকারী
                                    তালিকা</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <!--Activity Log-->
                <li class="d-flex">
                    <a href="/activity" class="d-flex gap-2 align-items-center text-decoration-none">
                        <div class="d-flex">
                            <img class="sidebar-icon" src="/assets/images/sidebar/ActivityLog.svg" alt="sidebar icon"/>
                        </div>
                        <div class="fs-18-500-27">একটিভিটি লগ</div>
                    </a>
                </li>

                <!--Invoice-->
                <li sec:authorize="hasAnyAuthority('HEAD_COMPARER','CLIENT','LAWYER')" class="d-flex">
                    <a href="/payment-list" class="d-flex gap-2 align-items-center text-decoration-none">
                        <div class="d-flex">
                            <img class="sidebar-icon" src="/assets/images/sidebar/InvoiceList.svg" alt="sidebar icon"/>
                        </div>
                        <div class="fs-18-500-27">ইনভয়েস তালিকা</div>
                    </a>
                </li>

                <!--Validate-->
                <li class="d-flex">
                    <a href="/validate" class="d-flex gap-2 align-items-center text-decoration-none">
                        <div class="d-flex">
                            <img class="sidebar-icon" src="/assets/images/sidebar/OnulipiJachai.svg"
                                 alt="sidebar icon"/>
                        </div>
                        <div class="fs-18-500-27">অনুলিপি যাচাই</div>
                    </a>
                </li>

                <li class="d-flex custom-b"></li>

                <li class="d-flex">
                    <a href="/my-profile" class="d-flex gap-2 align-items-center text-decoration-none">
                        <div class="d-flex">
                            <img class="sidebar-icon" src="/assets/images/sidebar/profile.svg"
                                 alt="sidebar icon"/>
                        </div>
                        <div class="fs-18-500-27 gray-text">আমার একাউন্ট</div>
                    </a>
                </li>
                <li class="d-flex">
                    <a href="/password-reset" class="d-flex gap-2 align-items-center text-decoration-none">
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
            <div class="p-3" id="">
                <div class="d-flex flex-column align-items-center gap-3 justify-content-center">
                    <div class="w-100 d-flex flex-column pb-4 custom-b align-items-center gap-1 justify-content-center">
                        <img class="dsi-logo" src="/assets/images/dsi-logo.png" alt=""/>
                        <span class="fs-10-600-14 gray-shade">Designed, Developed, and Maintained by</span>
                        <span class="fs-10-600-14">Dynamic Solution Innovators Ltd.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>


