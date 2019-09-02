<!-- APP ASIDE ==========-->
<aside id="menubar" class="menubar light">
    <div class="app-user">
        <div class="media">
            <div class="media-left">
                <div class="avatar avatar-md avatar-circle">
                    <a href="javascript:void(0)"><img class="img-responsive"
                                                      src="<?= base_url($this->session->adminUser->image) ?>"
                                                      alt="<?= $this->session->adminUser->fullName ?>"/></a>
                </div><!-- .avatar -->
            </div>
            <div class="media-body">
                <div class="foldable">
                    <h5><a href="javascript:void(0)" class="username"><?= $this->session->adminUser->fullName ?></a>
                    </h5>
                    <ul>
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle usertitle" data-toggle="dropdown"
                               aria-haspopup="true" aria-expanded="false">
                                <small><?= $this->session->adminUser->email ?></small>
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu animated flipInY">
                                <li>
                                    <a class="text-color" href="/">
                                        <span class="m-r-xs"><i class="fa fa-home"></i></span>
                                        <span>Home</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-color" href="profile.html">
                                        <span class="m-r-xs"><i class="fa fa-user"></i></span>
                                        <span>Profile</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="text-color" href="settings.html">
                                        <span class="m-r-xs"><i class="fa fa-gear"></i></span>
                                        <span>Settings</span>
                                    </a>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a class="text-color" href="<?= base_url("logout") ?>">
                                        <span class="m-r-xs"><i class="fa fa-sign-out"></i></span>
                                        <span>Çıkış</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div><!-- .media-body -->
        </div><!-- .media -->
    </div><!-- .app-user -->

    <div class="menubar-scroll">
        <div class="menubar-scroll-inner">
            <ul class="app-menu">

                <li class="<?= strtolower($this->uri->segment(1)) == null ? "active" : null ?>">
                    <a href="<?= base_url() ?>">
                        <i class="menu-icon zmdi zmdi-home zmdi-hc-lg"></i>
                        <span class="menu-text">Anasayfa</span>
                    </a>
                </li>

                <li class="has-submenu <?= strtolower($this->uri->segment(1)) == "settings" ? "active" : null ?>">
                    <a href="javascript:void(0)" class="submenu-toggle">
                        <i class="menu-icon zmdi zmdi-settings zmdi-hc-lg"></i>
                        <span class="menu-text">Ayarlar</span>
                        <i class="menu-caret zmdi zmdi-hc-sm zmdi-chevron-right"></i>
                    </a>
                    <ul class="submenu">
                        <li>
                            <a href="<?= base_url("settings/seo") ?>"><span
                                        class="menu-text">SEO</span></a></li>
                        <li><a href="dashboard.2.html"><span class="menu-text">Mail</span></a></li>
                        <li><a href="<?= base_url("settings/genel") ?>"><span class="menu-text">Genel</span></a></li>
                    </ul>
                </li>

                <li class="menu-separator">
                    <hr>
                </li>

                <li>
                    <a href="documentation.html">
                        <i class="menu-icon zmdi zmdi-edit zmdi-hc-lg"></i>
                        <span class="menu-text">Sistem Düzenleme</span>
                    </a>
                </li>
            </ul><!-- .app-menu -->
        </div><!-- .menubar-scroll-inner -->
    </div><!-- .menubar-scroll -->
</aside>

<!--========== END app aside -->