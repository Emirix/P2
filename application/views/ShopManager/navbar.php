<ul class="navbar-nav header-right">
 
    <li class="nav-item dropdown notification_dropdown">
        <a class="nav-link bell bell-link" href="<?php echo base_url("shopmanager/basket") ?>">
            <svg width="28" height="28" viewBox="0 0 42.605 42.605" fill="none" xmlns="http://www.w3.org/2000/svg">
                <g>
                    <path style="fill:#0B2A97;"
                        d="M42.605,16.958c0-1.082-1.08-1.956-2.41-1.956H22.48L13.738,3.816c0,0-0.468,0.367-1.047,0.818   c-0.577,0.453-0.383,1.669,0.435,2.718l5.981,7.65H2.409C1.078,15.001,0,15.875,0,16.958v1.955h42.605   C42.605,18.914,42.605,18.04,42.605,16.958z" />
                    <path style="fill:#0B2A97;"
                        d="M33.648,38.79c2.66,0,4.817-2.159,4.817-4.815l2.408-13.05H6.549c-2.66,0-4.817,2.157-4.817,4.817L4.14,38.79H33.648z    M29.73,26.345c0-1.33,0.967-2.41,2.158-2.41h2.159v8.834c0,1.33-0.967,2.408-2.159,2.408H29.73V26.345z M22.203,26.345   c0-1.33,0.968-2.41,2.158-2.41h2.16v8.834c0,1.33-0.967,2.408-2.16,2.408h-2.158V26.345z M14.677,26.345   c0-1.33,0.967-2.41,2.158-2.41h2.159v8.834c0,1.33-0.967,2.408-2.159,2.408h-2.158V26.345z M7.149,26.345   c0-1.33,0.967-2.41,2.159-2.41h2.158v8.834c0,1.33-0.967,2.408-2.158,2.408H7.149V26.345z" />
                </g>
            </svg>
            <?php 
            if(count($sepet->contents()) != 0){
                echo '  <div class="pulse-css"></div>';
            }
            ?>
          
        </a>
    </li>
    <!-- Bildirim Kutusu -->
    <?php require('bildirimler.php'); ?>
    <!-- -->
    <li class="nav-item dropdown header-profile">
        <a class="nav-link" href="javascript:void(0)" role="button" data-toggle="dropdown">
            <img src="<?php echo base_url("assets/pp/".$user[0]["foto"]) ?>" width="20" alt="" />
            <div class="header-info">
                <span class="text-black"><strong><?php echo $user[0]["ad_soyad"] ?></strong></span>
                <p class="fs-12 mb-0">
               
                   Shop Manager
               
                </p>
            </div>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <a href="<?php echo base_url("login/logout")?>" class="dropdown-item ai-icon">
                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18"
                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                    <polyline points="16 17 21 12 16 7"></polyline>
                    <line x1="21" y1="12" x2="9" y2="12"></line>
                </svg>
                <span class="ml-2">Çıkış yap</span>
            </a>
        </div>
    </li>
</ul>