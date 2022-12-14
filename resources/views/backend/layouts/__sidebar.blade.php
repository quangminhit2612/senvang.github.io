<div class="sidebar sidebar-dark sidebar-main sidebar-expand-md">

    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->


    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <div class="mr-3">
                        <a href="#"><img src="{!!Auth::user()->avatar!!}" width="38" height="38" class="rounded-circle" alt=""></a>
                    </div>

                    <div class="media-body">
                        <div class="media-title font-weight-semibold">{!!Auth::user()->full_name!!}</div>
                        <div class="font-size-xs opacity-50">
                            <i class="icon-pin font-size-sm"></i> &nbsp;Kalzen media
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /user menu -->


        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                <li class="nav-item">
                    <a href="{{route('admin.index')}}" class="nav-link active">
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard
                        </span>
                    </a>
                </li>
                @if (\Auth::user()->role_id == \App\User::ROLE_ADMINISTRATOR)
                <li class="nav-item">
                    <a href="{{route('admin.config.index')}}" class="nav-link">
                        <i class="icon-cog"></i> 
                        <span>C???u h??nh website</span>
                    </a>
                </li>
                <!-- <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-user-tie"></i> <span>Ng?????i d??ng</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">

                        <li class="nav-item">
                            <a href="{{route('admin.user.index')}}" class="nav-link">
                                <span>Th??nh vi??n h??? th???ng</span>         
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="{{route('admin.role.index')}}" class="nav-link">
                                <span>Quy???n</span>         
                            </a>
                        </li>
                    </ul>
                </li> -->
                @endif
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-newspaper2"></i> <span>Tin t???c</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="{{route('admin.category.index', \App\Category::TYPE_NEWS)}}" class="nav-link">Danh m???c</a></li>
                        <li class="nav-item"><a href="{{route('admin.news.index')}}" class="nav-link">B??i vi???t</a></li>
                    </ul>
                </li>
                
                
                <!-- <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-video-camera"></i> <span>Video</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="{{route('admin.category.index', \App\Category::TYPE_VIDEO)}}" class="nav-link">Danh m???c</a></li>
                        <li class="nav-item"><a href="{{route('admin.video.index')}}" class="nav-link">Video</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-camera"></i> <span>H??nh ???nh</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="{{route('admin.category.index', \App\Category::TYPE_GALLERY)}}" class="nav-link">Danh m???c</a></li>
                        <li class="nav-item"><a href="{{route('admin.gallery.index')}}" class="nav-link">H??nh ???nh</a></li>
                    </ul>
                </li> -->
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-copy"></i> <span>S???n ph???m</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="S???n ph???m">
                        <li class="nav-item"><a href="{{route('admin.category.index', \App\Category::TYPE_PRODUCT)}}" class="nav-link">Danh m???c</a></li>
                        <li class="nav-item"><a href="{{route('admin.product.index')}}" class="nav-link">S???n ph???m</a></li>
                        <li class="nav-item"><a href="{{route('admin.attribute.index')}}" class="nav-link">Thu???c t??nh</a></li>
                    </ul>
                </li>
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Giao di???n</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="{{route('admin.slide.index')}}" class="nav-link">Slide</a></li>
                        <li class="nav-item"><a href="{{route('admin.menu.index')}}" class="nav-link">Menu</a></li>
                        <li class="nav-item"><a href="{{route('admin.service.index')}}" class="nav-link">D???ch v???</a></li>
                        <li class="nav-item"><a href="{{route('admin.block.index')}}" class="nav-link">Kh???i</a></li>
                        <li class="nav-item"><a href="{{route('admin.template_setting.index')}}" class="nav-link">T??y ch???nh giao di???n</a></li>
                    </ul>
                </li>
                <!-- <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-bucket"></i> <span>Thi c??ng</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Thi c??ng">
                        <li class="nav-item"><a href="{{route('admin.construction.index')}}" class="nav-link">????n v??? thi c??ng</a></li>
                        <li class="nav-item"><a href="{{route('admin.category.index', \App\Category::TYPE_CONSTRUCTION)}}" class="nav-link">Danh m???c</a></li>
                        <li class="nav-item"><a href="{{route('admin.item.index')}}" class="nav-link">H???ng m???c</a></li>
                        <li class="nav-item"><a href="{{route('admin.project.index')}}" class="nav-link">D??? ??n</a></li>
                        <li class="nav-item"><a href="{{route('admin.review.index')}}" class="nav-link">????nh gi??</a></li>
                    </ul>
                </li> -->
                <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-users"></i> <span>Kh??ch h??ng</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Kh??ch h??ng">
                        <li class="nav-item"><a href="{{route('admin.subscriber.index')}}" class="nav-link">Ng?????i ????ng k??</a></li>
                        <li class="nav-item"><a href="{{route('admin.contact.index')}}" class="nav-link">Li??n h???</a></li>
                        <li class="nav-item"><a href="{{route('admin.member.index')}}" class="nav-link">Th??nh vi??n</a></li>
                        <li class="nav-item"><a href="{{route('admin.order.index')}}" class="nav-link">????n h??ng</a></li>
                    </ul>
                </li>
                <!-- <li class="nav-item nav-item-submenu">
                    <a href="#" class="nav-link"><i class="icon-copy"></i> <span>Ti???p th??? li??n k???t</span></a>
                    <ul class="nav nav-group-sub" data-submenu-title="Layouts">
                        <li class="nav-item"><a href="{{route('admin.marketing.index')}}" class="nav-link">T??i kho???n</a></li>
                        <li class="nav-item"><a href="{{route('admin.rank.index')}}" class="nav-link">Danh m???c c???p b???c</a></li>
                    </ul>
                </li> -->
            


            </ul>
        </div>
        <!-- /main navigation -->

    </div>
    <!-- /sidebar content -->

</div>