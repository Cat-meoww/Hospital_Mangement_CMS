<ul class="relative h-[calc(100vh-58px)] flex flex-col gap-1 overflow-y-auto overflow-x-hidden p-4 py-0" x-data="{ activeMenu: 'dashboard' }">

    <h2 class="pl-3 my-2 text-black/40 dark:text-white/40 text-sm">
        <span>Boards</span>
    </h2>
    <li class="menu nav-item">
        <a href="<?= base_url("admin/dashboard") ?>" class="nav-link group <?= nav_active("admin/dashboard") ?>">
            <div class="flex pl-1 items-center">
                <svg class="w-5 h-5" width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.20007 18.2C4.06372 17.4747 3.9967 16.738 4.00012 16C3.99854 13.5182 4.76721 11.0972 6.2002 9.07092C7.63318 7.04456 9.65967 5.51306 12.0001 4.6875V13.6875L4.20007 18.2Z" fill="black" fill-opacity="0.1" />
                    <path d="M17 16V4C17 3.44772 16.5523 3 16 3C15.4477 3 15 3.44772 15 4V16C15 16.5523 15.4477 17 16 17C16.5523 17 17 16.5523 17 16Z" fill="currentcolor" />
                    <path d="M5.11288 21.1336L5.11213 21.1341C4.88247 21.2667 4.71492 21.4852 4.64633 21.7414C4.62374 21.8257 4.6123 21.9127 4.6123 22C4.6123 22.0106 4.61247 22.0212 4.61281 22.0317C4.61804 22.1965 4.66392 22.3574 4.74638 22.5002C4.92504 22.8095 5.25511 23 5.6123 23C5.62784 23 5.64337 22.9996 5.65889 22.9989C5.81854 22.9915 5.97408 22.9459 6.11248 22.8659L6.11323 22.8655L26.8875 10.8659C27.1968 10.6873 27.3873 10.3572 27.3873 10C27.3873 9.98447 27.3869 9.96894 27.3862 9.95342C27.3788 9.79377 27.3332 9.63822 27.2532 9.49983C27.1206 9.27017 26.9021 9.10261 26.6459 9.03402C26.5616 9.01144 26.4746 9 26.3873 9C26.3767 9 26.3662 9.00017 26.3556 9.0005C26.1908 9.00573 26.0299 9.05162 25.8871 9.13407L5.11288 21.1336Z" fill="currentcolor" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12.5009 14.5531L4.70089 19.0656C4.47132 19.1984 4.1984 19.2346 3.94216 19.1662C3.68592 19.0977 3.46735 18.9303 3.33454 18.7008C3.27789 18.6028 3.23827 18.496 3.21736 18.3849C3.21736 18.3849 2.99459 17.2005 3.00013 15.9954C3.00013 15.9954 2.99749 11.8678 5.38375 8.4935C5.38375 8.4935 7.77001 5.11918 11.6675 3.74445C11.9176 3.65622 12.1925 3.67097 12.4318 3.78545C12.671 3.89992 12.855 4.10475 12.9432 4.35486C12.9809 4.46172 13.0001 4.5742 13.0001 4.6875V13.6875C13.0001 14.0445 12.8099 14.3743 12.5009 14.5531ZM5.01273 16.5746L11.0001 13.1107V6.19572C11.0001 6.19572 8.61014 7.39503 7.01668 9.64828C7.01668 9.64828 4.9979 12.503 5.00011 16.0046C5.00011 16.0046 4.9988 16.2903 5.01273 16.5746Z" fill="currentcolor" />
                    <path d="M10.5588 25.5608C8.00169 24.1059 6.51229 21.5688 6.51229 21.5688C6.37802 21.34 6.1584 21.174 5.90173 21.1072C5.8195 21.0858 5.73487 21.075 5.64991 21.075C5.63698 21.075 5.62406 21.0753 5.61115 21.0758C5.44642 21.0821 5.28582 21.1292 5.14365 21.2126C4.83778 21.3922 4.6499 21.7203 4.6499 22.075L4.64991 22.0779C4.65042 22.2549 4.6979 22.4286 4.78752 22.5813C6.54772 25.5797 9.56976 27.2991 9.56976 27.2991C12.5918 29.0186 16.0687 28.9998 16.0687 28.9998C19.5456 28.981 22.5489 27.2291 22.5489 27.2291C25.5522 25.4772 27.2799 22.4599 27.2799 22.4599C29.0077 19.4426 28.9985 15.9657 28.9985 15.9657C28.9893 12.4887 27.2457 9.48061 27.2457 9.48061C25.502 6.47249 22.4895 4.73644 22.4895 4.73644C19.477 3.00039 16 3 16 3C15.9389 3 15.878 3.00558 15.8181 3.01667C15.344 3.10435 15 3.51778 14.9999 3.99989C14.9999 4.01594 15.0003 4.03196 15.0011 4.04792C15.013 4.29624 15.1169 4.53122 15.2927 4.70702C15.4802 4.89458 15.7346 4.99997 15.9998 5H16.0002C18.942 5.00045 21.4909 6.4693 21.4909 6.4693C24.0399 7.93826 25.5153 10.4836 25.5153 10.4836C26.9907 13.0289 26.9985 15.9709 26.9985 15.9709C27.0063 18.913 25.5443 21.4661 25.5443 21.4661C24.0824 24.0191 21.5411 25.5016 21.5411 25.5016C18.9999 26.984 16.0579 26.9998 16.0579 26.9998C13.1159 27.0157 10.5588 25.5608 10.5588 25.5608Z" fill="currentcolor" />
                </svg>
                <span class="pl-1 text-black dark:text-white ">Dashboard</span>
            </div>
        </a>
    </li>
    <!-- Admin Rolebar -->
    <?php if ($user_role === "1") : ?>
        <h2 class="pl-3 my-2 text-black/40 dark:text-white/40 text-sm">
            <span>All Master</span>
        </h2>
        <li class="menu nav-item">
            <a href="<?= base_url("admin/management/users") ?>" class="nav-link group <?= nav_active("admin/management/users") ?>">
                <div class="flex pl-1 items-center">
                    
                    <svg class="w-5 h-5" width="32" height="32" fill="currentColor" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                        <path d="M247.63,39.89a8,8,0,0,0-7.52-7.52c-51.76-3-93.32,12.74-111.18,42.22-11.8,19.49-11.78,43.16-.16,65.74a71.34,71.34,0,0,0-14.17,27L98.33,151c7.82-16.33,7.52-33.35-1-47.49-13.2-21.79-43.67-33.47-81.5-31.25a8,8,0,0,0-7.52,7.52c-2.23,37.83,9.46,68.3,31.25,81.5A45.82,45.82,0,0,0,63.44,168,54.58,54.58,0,0,0,87,162.33l25,25V216a8,8,0,0,0,16,0V186.51a55.61,55.61,0,0,1,12.27-35,73.91,73.91,0,0,0,33.31,8.4,60.9,60.9,0,0,0,31.83-8.86C234.89,133.21,250.67,91.65,247.63,39.89ZM47.81,147.6C32.47,138.31,23.79,116.32,24,88c28.32-.24,50.31,8.47,59.6,23.81,4.85,8,5.64,17.33,2.46,26.94L61.65,114.34a8,8,0,0,0-11.31,11.31l24.41,24.41C65.14,153.24,55.82,152.45,47.81,147.6Zm149.31-10.22c-13.4,8.11-29.15,8.73-45.15,2l53.69-53.7a8,8,0,0,0-11.31-11.31L140.65,128c-6.76-16-6.15-31.76,2-45.15,13.94-23,47-35.82,89.33-34.83C232.94,90.34,220.14,123.44,197.12,137.38Z"></path>
                    </svg>
                    <span class="pl-1 text-black dark:text-white ">Users</span>
                </div>
            </a>
        </li>
        <li class="menu nav-item">
            <a href="<?= base_url("admin/all-master/locations") ?>" class="nav-link group <?= nav_active("admin/all-master/locations") ?>">
                <div class="flex pl-1 items-center">
                    <!-- <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M12 30L14 20L6 17L20 2L18 12L26 15L12 30Z" fill="black" fill-opacity="0.1"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M26.7311 15.6823L12.7311 30.6823C12.5501 30.8762 12.2995 30.9903 12.0345 30.9994C11.7694 31.0086 11.5116 30.912 11.3177 30.7311C11.0643 30.4946 10.9514 30.1437 11.0194 29.8039L12.8526 20.6377L5.64888 17.9363C5.40055 17.8432 5.19938 17.6553 5.08963 17.4138C4.97989 17.1724 4.97055 16.8972 5.06367 16.6489C5.10972 16.5261 5.17947 16.4136 5.26894 16.3177L19.2689 1.31769C19.6458 0.913935 20.2786 0.892115 20.6823 1.26895C20.9357 1.50543 21.0486 1.85626 20.9806 2.19612L19.1474 11.3623L26.3511 14.0637C26.5995 14.1568 26.8006 14.3448 26.9104 14.5862C27.0201 14.8276 27.0295 15.1028 26.9363 15.3511C26.8903 15.4739 26.8205 15.5865 26.7311 15.6823ZM13.671 26.7441L24.2484 15.4111L17.6489 12.9363C17.1898 12.7642 16.9233 12.2846 17.0194 11.8039L18.329 5.25594L7.75162 16.5889L14.3511 19.0637C14.8102 19.2358 15.0767 19.7154 14.9806 20.1961L13.671 26.7441Z" fill="currentcolor"></path>
                    </svg> -->
                    <svg class="w-5 h-5" width="32" height="32" fill="currentColor" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                        <path d="M247.63,39.89a8,8,0,0,0-7.52-7.52c-51.76-3-93.32,12.74-111.18,42.22-11.8,19.49-11.78,43.16-.16,65.74a71.34,71.34,0,0,0-14.17,27L98.33,151c7.82-16.33,7.52-33.35-1-47.49-13.2-21.79-43.67-33.47-81.5-31.25a8,8,0,0,0-7.52,7.52c-2.23,37.83,9.46,68.3,31.25,81.5A45.82,45.82,0,0,0,63.44,168,54.58,54.58,0,0,0,87,162.33l25,25V216a8,8,0,0,0,16,0V186.51a55.61,55.61,0,0,1,12.27-35,73.91,73.91,0,0,0,33.31,8.4,60.9,60.9,0,0,0,31.83-8.86C234.89,133.21,250.67,91.65,247.63,39.89ZM47.81,147.6C32.47,138.31,23.79,116.32,24,88c28.32-.24,50.31,8.47,59.6,23.81,4.85,8,5.64,17.33,2.46,26.94L61.65,114.34a8,8,0,0,0-11.31,11.31l24.41,24.41C65.14,153.24,55.82,152.45,47.81,147.6Zm149.31-10.22c-13.4,8.11-29.15,8.73-45.15,2l53.69-53.7a8,8,0,0,0-11.31-11.31L140.65,128c-6.76-16-6.15-31.76,2-45.15,13.94-23,47-35.82,89.33-34.83C232.94,90.34,220.14,123.44,197.12,137.38Z"></path>
                    </svg>
                    <span class="pl-1 text-black dark:text-white ">Locations</span>
                </div>
            </a>
        </li>
        <li class="menu nav-item">
            <a href="<?= base_url("admin/all-master/departments") ?>" class="nav-link group <?= nav_active("admin/all-master/departments") ?>">
                <div class="flex pl-1 items-center">

                    <svg class="w-5 h-5" width="32" height="32" fill="currentColor" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                        <path d="M240,208H224V96a16,16,0,0,0-16-16H144V32a16,16,0,0,0-24.88-13.32L39.12,72A16,16,0,0,0,32,85.34V208H16a8,8,0,0,0,0,16H240a8,8,0,0,0,0-16ZM208,96V208H144V96ZM48,85.34,128,32V208H48ZM112,112v16a8,8,0,0,1-16,0V112a8,8,0,1,1,16,0Zm-32,0v16a8,8,0,0,1-16,0V112a8,8,0,1,1,16,0Zm0,56v16a8,8,0,0,1-16,0V168a8,8,0,0,1,16,0Zm32,0v16a8,8,0,0,1-16,0V168a8,8,0,0,1,16,0Z"></path>
                    </svg>
                    <span class="pl-1 text-black dark:text-white ">Departments</span>
                </div>
            </a>
        </li>
        <li class="menu nav-item">
            <a href="<?= base_url("admin/all-master/services") ?>" class="nav-link group <?= nav_active("admin/all-master/services") ?>">
                <div class="flex pl-1 items-center">

                    <svg class="w-5 h-5" width="32" height="32" fill="currentColor" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                        <path d="M240,208H224V96a16,16,0,0,0-16-16H144V32a16,16,0,0,0-24.88-13.32L39.12,72A16,16,0,0,0,32,85.34V208H16a8,8,0,0,0,0,16H240a8,8,0,0,0,0-16ZM208,96V208H144V96ZM48,85.34,128,32V208H48ZM112,112v16a8,8,0,0,1-16,0V112a8,8,0,1,1,16,0Zm-32,0v16a8,8,0,0,1-16,0V112a8,8,0,1,1,16,0Zm0,56v16a8,8,0,0,1-16,0V168a8,8,0,0,1,16,0Zm32,0v16a8,8,0,0,1-16,0V168a8,8,0,0,1,16,0Z"></path>
                    </svg>
                    <span class="pl-1 text-black dark:text-white ">Services</span>
                </div>
            </a>
        </li>
        <li class="menu nav-item">
            <a href="<?= base_url("admin/all-master/branches") ?>" class="nav-link group <?= nav_active("admin/all-master/branches") ?>">
                <div class="flex pl-1 items-center">

                    <svg class="w-5 h-5" width="32" height="32" fill="currentColor" viewBox="0 0 256 256" xmlns="http://www.w3.org/2000/svg">
                        <path d="M240,208H224V96a16,16,0,0,0-16-16H144V32a16,16,0,0,0-24.88-13.32L39.12,72A16,16,0,0,0,32,85.34V208H16a8,8,0,0,0,0,16H240a8,8,0,0,0,0-16ZM208,96V208H144V96ZM48,85.34,128,32V208H48ZM112,112v16a8,8,0,0,1-16,0V112a8,8,0,1,1,16,0Zm-32,0v16a8,8,0,0,1-16,0V112a8,8,0,1,1,16,0Zm0,56v16a8,8,0,0,1-16,0V168a8,8,0,0,1,16,0Zm32,0v16a8,8,0,0,1-16,0V168a8,8,0,0,1,16,0Z"></path>
                    </svg>
                    <span class="pl-1 text-black dark:text-white ">Branches</span>
                </div>
            </a>
        </li>

        <li class="menu nav-item">
            <a href="javaScript:;" class="nav-link group active text-black dark:text-white" :class="{'active' : activeMenu === 'doctors'}" <?= sub_nav_active("admin/all-master/doctors", 'doctors') ?> @click="activeMenu === 'doctors' ? activeMenu = null : activeMenu = 'doctors'">
                <div class="text-black/50 dark:text-white/20 w-4 h-4 flex items-center justify-center" :class="{'!rotate-90' : activeMenu === 'doctors'}">
                    <svg width="6" height="10" viewbox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.659675 9.35355C0.446775 9.15829 0.446775 8.84171 0.659675 8.64645L4.25 5.35355C4.4629 5.15829 4.4629 4.84171 4.25 4.64645L0.659675 1.35355C0.446776 1.15829 0.446776 0.841709 0.659675 0.646446C0.872575 0.451184 1.21775 0.451185 1.43065 0.646446L5.02098 3.93934C5.65967 4.52513 5.65968 5.47487 5.02098 6.06066L1.43065 9.35355C1.21775 9.54882 0.872574 9.54882 0.659675 9.35355Z" fill="currentcolor" />
                    </svg>
                </div>
                <div class="flex items-center">
                    <svg class="w-5 h-5" width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 10L16 17L28 10L16 3L4 10Z" fill="black" fill-opacity="0.1" />
                        <path d="M16.5039 29.8638L28.5039 22.8638C28.733 22.7301 28.8996 22.511 28.9671 22.2545C28.9889 22.1714 29 22.0859 29 22C29 21.988 28.9998 21.976 28.9994 21.964C28.9934 21.7993 28.9468 21.6385 28.8638 21.4961C28.6846 21.1889 28.3557 21 28 21C27.8229 21 27.649 21.047 27.4961 21.1362L16 27.8423L4.50399 21.1363C4.35094 21.047 4.17706 21 4 21C3.98302 21 3.96603 21.0004 3.94907 21.0013C3.61197 21.0185 3.3063 21.2046 3.13622 21.4961C3.04701 21.6491 3 21.8229 3 22C3 22.017 3.00043 22.034 3.0013 22.0509C3.01849 22.388 3.20457 22.6937 3.49613 22.8638L15.4961 29.8638C15.8075 30.0454 16.1925 30.0454 16.5039 29.8638Z" fill="currentcolor" />
                        <path d="M16.5039 23.8638L28.5039 16.8638C28.733 16.7301 28.8996 16.511 28.9671 16.2545C28.9889 16.1714 29 16.0859 29 16C29 15.988 28.9998 15.976 28.9994 15.964C28.9934 15.7993 28.9468 15.6385 28.8638 15.4961C28.6846 15.1889 28.3557 15 28 15C27.8229 15 27.649 15.047 27.4961 15.1362L16 21.8423L4.50399 15.1363C4.35094 15.047 4.17706 15 4 15C3.98302 15 3.96603 15.0004 3.94907 15.0013C3.61197 15.0185 3.3063 15.2046 3.13622 15.4961C3.04701 15.6491 3 15.8229 3 16C3 16.017 3.00043 16.034 3.0013 16.0509C3.01849 16.388 3.20457 16.6937 3.49613 16.8638L15.4961 23.8638C15.8075 24.0454 16.1925 24.0454 16.5039 23.8638Z" fill="currentcolor" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.496 2.13622C15.8074 1.95459 16.1924 1.95459 16.5038 2.13622L28.5038 9.13622C28.6528 9.22314 28.7768 9.34713 28.8637 9.49613C29.142 9.97318 28.9808 10.5855 28.5038 10.8638L16.5038 17.8638C16.1924 18.0454 15.8074 18.0454 15.496 17.8638L3.49605 10.8638C3.34704 10.7769 3.22306 10.6529 3.13614 10.5039C2.85786 10.0268 3.019 9.4145 3.49605 9.13622L15.496 2.13622ZM5.98455 10L15.9999 4.1577L26.0153 10L15.9999 15.8423L5.98455 10Z" fill="currentcolor" />
                    </svg>
                    <span class="pl-1"> Doctors </span>
                </div>
            </a>
            <ul x-cloak x-show="activeMenu === 'doctors'" x-collapse class="sub-menu flex flex-col gap-1 text-black dark:text-white/80">
                <li><a href="<?= base_url("admin/all-master/doctors/roles") ?>" <?= sub_menu_active("admin/all-master/doctors/roles") ?>>Roles</a></li>
                <li><a href="<?= base_url("admin/all-master/doctors/list") ?>" <?= sub_menu_active("admin/all-master/doctors/list") ?>>List</a></li>
            </ul>
        </li>

        <h2 class="pl-3 my-2 text-black/40 dark:text-white/40 text-sm">
            <span>Management</span>
        </h2>
        <li class="menu nav-item">
            <a href="javaScript:;" class="nav-link group active text-black dark:text-white" :class="{'active' : activeMenu === 'branch'}" <?= sub_nav_active("admin/branch-management", 'branch') ?> @click="activeMenu === 'branch' ? activeMenu = null : activeMenu = 'branch'">
                <div class="text-black/50 dark:text-white/20 w-4 h-4 flex items-center justify-center" :class="{'!rotate-90' : activeMenu === 'branch'}">
                    <svg width="6" height="10" viewbox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.659675 9.35355C0.446775 9.15829 0.446775 8.84171 0.659675 8.64645L4.25 5.35355C4.4629 5.15829 4.4629 4.84171 4.25 4.64645L0.659675 1.35355C0.446776 1.15829 0.446776 0.841709 0.659675 0.646446C0.872575 0.451184 1.21775 0.451185 1.43065 0.646446L5.02098 3.93934C5.65967 4.52513 5.65968 5.47487 5.02098 6.06066L1.43065 9.35355C1.21775 9.54882 0.872574 9.54882 0.659675 9.35355Z" fill="currentcolor" />
                    </svg>
                </div>
                <div class="flex items-center">
                    <svg class="w-5 h-5" width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 10L16 17L28 10L16 3L4 10Z" fill="black" fill-opacity="0.1" />
                        <path d="M16.5039 29.8638L28.5039 22.8638C28.733 22.7301 28.8996 22.511 28.9671 22.2545C28.9889 22.1714 29 22.0859 29 22C29 21.988 28.9998 21.976 28.9994 21.964C28.9934 21.7993 28.9468 21.6385 28.8638 21.4961C28.6846 21.1889 28.3557 21 28 21C27.8229 21 27.649 21.047 27.4961 21.1362L16 27.8423L4.50399 21.1363C4.35094 21.047 4.17706 21 4 21C3.98302 21 3.96603 21.0004 3.94907 21.0013C3.61197 21.0185 3.3063 21.2046 3.13622 21.4961C3.04701 21.6491 3 21.8229 3 22C3 22.017 3.00043 22.034 3.0013 22.0509C3.01849 22.388 3.20457 22.6937 3.49613 22.8638L15.4961 29.8638C15.8075 30.0454 16.1925 30.0454 16.5039 29.8638Z" fill="currentcolor" />
                        <path d="M16.5039 23.8638L28.5039 16.8638C28.733 16.7301 28.8996 16.511 28.9671 16.2545C28.9889 16.1714 29 16.0859 29 16C29 15.988 28.9998 15.976 28.9994 15.964C28.9934 15.7993 28.9468 15.6385 28.8638 15.4961C28.6846 15.1889 28.3557 15 28 15C27.8229 15 27.649 15.047 27.4961 15.1362L16 21.8423L4.50399 15.1363C4.35094 15.047 4.17706 15 4 15C3.98302 15 3.96603 15.0004 3.94907 15.0013C3.61197 15.0185 3.3063 15.2046 3.13622 15.4961C3.04701 15.6491 3 15.8229 3 16C3 16.017 3.00043 16.034 3.0013 16.0509C3.01849 16.388 3.20457 16.6937 3.49613 16.8638L15.4961 23.8638C15.8075 24.0454 16.1925 24.0454 16.5039 23.8638Z" fill="currentcolor" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.496 2.13622C15.8074 1.95459 16.1924 1.95459 16.5038 2.13622L28.5038 9.13622C28.6528 9.22314 28.7768 9.34713 28.8637 9.49613C29.142 9.97318 28.9808 10.5855 28.5038 10.8638L16.5038 17.8638C16.1924 18.0454 15.8074 18.0454 15.496 17.8638L3.49605 10.8638C3.34704 10.7769 3.22306 10.6529 3.13614 10.5039C2.85786 10.0268 3.019 9.4145 3.49605 9.13622L15.496 2.13622ZM5.98455 10L15.9999 4.1577L26.0153 10L15.9999 15.8423L5.98455 10Z" fill="currentcolor" />
                    </svg>
                    <span class="pl-1"> Branch </span>
                </div>
            </a>
            <ul x-cloak x-show="activeMenu === 'branch'" x-collapse class="sub-menu flex flex-col gap-1 text-black dark:text-white/80">
                <li><a href="<?= base_url("admin/branch-management/departments") ?>" <?= sub_menu_active("admin/branch-management/departments") ?>>Department</a></li>
                <li><a href="<?= base_url("admin/branch-management/services") ?>" <?= sub_menu_active("admin/branch-management/services") ?>>Services</a></li>
                <li><a href="<?= base_url("admin/branch-management/doctors") ?>" <?= sub_menu_active("admin/branch-management/doctors") ?>>Doctors</a></li>
            </ul>
        </li>
        <li class="menu nav-item">
            <a href="javaScript:;" class="nav-link group active text-black dark:text-white" :class="{'active' : activeMenu === 'VideoBooking'}" <?= sub_nav_active("admin/booking-management/video", 'VideoBooking') ?> @click="activeMenu === 'VideoBooking' ? activeMenu = null : activeMenu = 'VideoBooking'">
                <div class="text-black/50 dark:text-white/20 w-4 h-4 flex items-center justify-center" :class="{'!rotate-90' : activeMenu === 'VideoBooking'}">
                    <svg width="6" height="10" viewbox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.659675 9.35355C0.446775 9.15829 0.446775 8.84171 0.659675 8.64645L4.25 5.35355C4.4629 5.15829 4.4629 4.84171 4.25 4.64645L0.659675 1.35355C0.446776 1.15829 0.446776 0.841709 0.659675 0.646446C0.872575 0.451184 1.21775 0.451185 1.43065 0.646446L5.02098 3.93934C5.65967 4.52513 5.65968 5.47487 5.02098 6.06066L1.43065 9.35355C1.21775 9.54882 0.872574 9.54882 0.659675 9.35355Z" fill="currentcolor" />
                    </svg>
                </div>
                <div class="flex items-center">
                    <svg class="w-5 h-5" width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 10L16 17L28 10L16 3L4 10Z" fill="black" fill-opacity="0.1" />
                        <path d="M16.5039 29.8638L28.5039 22.8638C28.733 22.7301 28.8996 22.511 28.9671 22.2545C28.9889 22.1714 29 22.0859 29 22C29 21.988 28.9998 21.976 28.9994 21.964C28.9934 21.7993 28.9468 21.6385 28.8638 21.4961C28.6846 21.1889 28.3557 21 28 21C27.8229 21 27.649 21.047 27.4961 21.1362L16 27.8423L4.50399 21.1363C4.35094 21.047 4.17706 21 4 21C3.98302 21 3.96603 21.0004 3.94907 21.0013C3.61197 21.0185 3.3063 21.2046 3.13622 21.4961C3.04701 21.6491 3 21.8229 3 22C3 22.017 3.00043 22.034 3.0013 22.0509C3.01849 22.388 3.20457 22.6937 3.49613 22.8638L15.4961 29.8638C15.8075 30.0454 16.1925 30.0454 16.5039 29.8638Z" fill="currentcolor" />
                        <path d="M16.5039 23.8638L28.5039 16.8638C28.733 16.7301 28.8996 16.511 28.9671 16.2545C28.9889 16.1714 29 16.0859 29 16C29 15.988 28.9998 15.976 28.9994 15.964C28.9934 15.7993 28.9468 15.6385 28.8638 15.4961C28.6846 15.1889 28.3557 15 28 15C27.8229 15 27.649 15.047 27.4961 15.1362L16 21.8423L4.50399 15.1363C4.35094 15.047 4.17706 15 4 15C3.98302 15 3.96603 15.0004 3.94907 15.0013C3.61197 15.0185 3.3063 15.2046 3.13622 15.4961C3.04701 15.6491 3 15.8229 3 16C3 16.017 3.00043 16.034 3.0013 16.0509C3.01849 16.388 3.20457 16.6937 3.49613 16.8638L15.4961 23.8638C15.8075 24.0454 16.1925 24.0454 16.5039 23.8638Z" fill="currentcolor" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.496 2.13622C15.8074 1.95459 16.1924 1.95459 16.5038 2.13622L28.5038 9.13622C28.6528 9.22314 28.7768 9.34713 28.8637 9.49613C29.142 9.97318 28.9808 10.5855 28.5038 10.8638L16.5038 17.8638C16.1924 18.0454 15.8074 18.0454 15.496 17.8638L3.49605 10.8638C3.34704 10.7769 3.22306 10.6529 3.13614 10.5039C2.85786 10.0268 3.019 9.4145 3.49605 9.13622L15.496 2.13622ZM5.98455 10L15.9999 4.1577L26.0153 10L15.9999 15.8423L5.98455 10Z" fill="currentcolor" />
                    </svg>
                    <span class="pl-1"> Video </span>
                </div>
            </a>
            <ul x-cloak x-show="activeMenu === 'VideoBooking'" x-collapse class="sub-menu flex flex-col gap-1 text-black dark:text-white/80">
                <li><a href="<?= base_url("admin/booking-management/video/time-slots") ?>" <?= sub_menu_active("admin/booking-management/video/time-slots") ?>>Time Slots</a></li>
                <li><a href="<?= base_url("admin/booking-management/video/doctors") ?>" <?= sub_menu_active("admin/booking-management/video/doctors") ?>>Doctors</a></li>
            </ul>
        </li>
        <li class="menu nav-item">
            <a href="javaScript:;" class="nav-link group active text-black dark:text-white" :class="{'active' : activeMenu === 'bookings'}" <?= sub_nav_active("admin/bookings", 'bookings') ?> @click="activeMenu === 'bookings' ? activeMenu = null : activeMenu = 'bookings'">
                <div class="text-black/50 dark:text-white/20 w-4 h-4 flex items-center justify-center" :class="{'!rotate-90' : activeMenu === 'bookings'}">
                    <svg width="6" height="10" viewbox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.659675 9.35355C0.446775 9.15829 0.446775 8.84171 0.659675 8.64645L4.25 5.35355C4.4629 5.15829 4.4629 4.84171 4.25 4.64645L0.659675 1.35355C0.446776 1.15829 0.446776 0.841709 0.659675 0.646446C0.872575 0.451184 1.21775 0.451185 1.43065 0.646446L5.02098 3.93934C5.65967 4.52513 5.65968 5.47487 5.02098 6.06066L1.43065 9.35355C1.21775 9.54882 0.872574 9.54882 0.659675 9.35355Z" fill="currentcolor" />
                    </svg>
                </div>
                <div class="flex items-center">
                    <svg class="w-5 h-5" width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 10L16 17L28 10L16 3L4 10Z" fill="black" fill-opacity="0.1" />
                        <path d="M16.5039 29.8638L28.5039 22.8638C28.733 22.7301 28.8996 22.511 28.9671 22.2545C28.9889 22.1714 29 22.0859 29 22C29 21.988 28.9998 21.976 28.9994 21.964C28.9934 21.7993 28.9468 21.6385 28.8638 21.4961C28.6846 21.1889 28.3557 21 28 21C27.8229 21 27.649 21.047 27.4961 21.1362L16 27.8423L4.50399 21.1363C4.35094 21.047 4.17706 21 4 21C3.98302 21 3.96603 21.0004 3.94907 21.0013C3.61197 21.0185 3.3063 21.2046 3.13622 21.4961C3.04701 21.6491 3 21.8229 3 22C3 22.017 3.00043 22.034 3.0013 22.0509C3.01849 22.388 3.20457 22.6937 3.49613 22.8638L15.4961 29.8638C15.8075 30.0454 16.1925 30.0454 16.5039 29.8638Z" fill="currentcolor" />
                        <path d="M16.5039 23.8638L28.5039 16.8638C28.733 16.7301 28.8996 16.511 28.9671 16.2545C28.9889 16.1714 29 16.0859 29 16C29 15.988 28.9998 15.976 28.9994 15.964C28.9934 15.7993 28.9468 15.6385 28.8638 15.4961C28.6846 15.1889 28.3557 15 28 15C27.8229 15 27.649 15.047 27.4961 15.1362L16 21.8423L4.50399 15.1363C4.35094 15.047 4.17706 15 4 15C3.98302 15 3.96603 15.0004 3.94907 15.0013C3.61197 15.0185 3.3063 15.2046 3.13622 15.4961C3.04701 15.6491 3 15.8229 3 16C3 16.017 3.00043 16.034 3.0013 16.0509C3.01849 16.388 3.20457 16.6937 3.49613 16.8638L15.4961 23.8638C15.8075 24.0454 16.1925 24.0454 16.5039 23.8638Z" fill="currentcolor" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.496 2.13622C15.8074 1.95459 16.1924 1.95459 16.5038 2.13622L28.5038 9.13622C28.6528 9.22314 28.7768 9.34713 28.8637 9.49613C29.142 9.97318 28.9808 10.5855 28.5038 10.8638L16.5038 17.8638C16.1924 18.0454 15.8074 18.0454 15.496 17.8638L3.49605 10.8638C3.34704 10.7769 3.22306 10.6529 3.13614 10.5039C2.85786 10.0268 3.019 9.4145 3.49605 9.13622L15.496 2.13622ZM5.98455 10L15.9999 4.1577L26.0153 10L15.9999 15.8423L5.98455 10Z" fill="currentcolor" />
                    </svg>
                    <span class="pl-1"> Bookings </span>
                </div>
            </a>
            <ul x-cloak x-show="activeMenu === 'bookings'" x-collapse class="sub-menu flex flex-col gap-1 text-black dark:text-white/80">
                <li><a href="<?= base_url("admin/bookings/general") ?>" <?= sub_menu_active("admin/bookings/general") ?>>General</a></li>
                <li><a href="<?= base_url("admin/bookings/service") ?>" <?= sub_menu_active("admin/bookings/service") ?>>Service</a></li>
                <li><a href="<?= base_url("admin/bookings/video") ?>" <?= sub_menu_active("admin/bookings/video") ?>>Video</a></li>
            </ul>
        </li>
        <li class="menu nav-item">
            <a href="javaScript:;" class="nav-link group active text-black dark:text-white" :class="{'active' : activeMenu === 'cms'}" <?= sub_nav_active("admin/cms", 'cms') ?> @click="activeMenu === 'cms' ? activeMenu = null : activeMenu = 'cms'">
                <div class="text-black/50 dark:text-white/20 w-4 h-4 flex items-center justify-center" :class="{'!rotate-90' : activeMenu === 'cms'}">
                    <svg width="6" height="10" viewbox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.659675 9.35355C0.446775 9.15829 0.446775 8.84171 0.659675 8.64645L4.25 5.35355C4.4629 5.15829 4.4629 4.84171 4.25 4.64645L0.659675 1.35355C0.446776 1.15829 0.446776 0.841709 0.659675 0.646446C0.872575 0.451184 1.21775 0.451185 1.43065 0.646446L5.02098 3.93934C5.65967 4.52513 5.65968 5.47487 5.02098 6.06066L1.43065 9.35355C1.21775 9.54882 0.872574 9.54882 0.659675 9.35355Z" fill="currentcolor" />
                    </svg>
                </div>
                <div class="flex items-center">
                    <svg class="w-5 h-5" width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 10L16 17L28 10L16 3L4 10Z" fill="black" fill-opacity="0.1" />
                        <path d="M16.5039 29.8638L28.5039 22.8638C28.733 22.7301 28.8996 22.511 28.9671 22.2545C28.9889 22.1714 29 22.0859 29 22C29 21.988 28.9998 21.976 28.9994 21.964C28.9934 21.7993 28.9468 21.6385 28.8638 21.4961C28.6846 21.1889 28.3557 21 28 21C27.8229 21 27.649 21.047 27.4961 21.1362L16 27.8423L4.50399 21.1363C4.35094 21.047 4.17706 21 4 21C3.98302 21 3.96603 21.0004 3.94907 21.0013C3.61197 21.0185 3.3063 21.2046 3.13622 21.4961C3.04701 21.6491 3 21.8229 3 22C3 22.017 3.00043 22.034 3.0013 22.0509C3.01849 22.388 3.20457 22.6937 3.49613 22.8638L15.4961 29.8638C15.8075 30.0454 16.1925 30.0454 16.5039 29.8638Z" fill="currentcolor" />
                        <path d="M16.5039 23.8638L28.5039 16.8638C28.733 16.7301 28.8996 16.511 28.9671 16.2545C28.9889 16.1714 29 16.0859 29 16C29 15.988 28.9998 15.976 28.9994 15.964C28.9934 15.7993 28.9468 15.6385 28.8638 15.4961C28.6846 15.1889 28.3557 15 28 15C27.8229 15 27.649 15.047 27.4961 15.1362L16 21.8423L4.50399 15.1363C4.35094 15.047 4.17706 15 4 15C3.98302 15 3.96603 15.0004 3.94907 15.0013C3.61197 15.0185 3.3063 15.2046 3.13622 15.4961C3.04701 15.6491 3 15.8229 3 16C3 16.017 3.00043 16.034 3.0013 16.0509C3.01849 16.388 3.20457 16.6937 3.49613 16.8638L15.4961 23.8638C15.8075 24.0454 16.1925 24.0454 16.5039 23.8638Z" fill="currentcolor" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.496 2.13622C15.8074 1.95459 16.1924 1.95459 16.5038 2.13622L28.5038 9.13622C28.6528 9.22314 28.7768 9.34713 28.8637 9.49613C29.142 9.97318 28.9808 10.5855 28.5038 10.8638L16.5038 17.8638C16.1924 18.0454 15.8074 18.0454 15.496 17.8638L3.49605 10.8638C3.34704 10.7769 3.22306 10.6529 3.13614 10.5039C2.85786 10.0268 3.019 9.4145 3.49605 9.13622L15.496 2.13622ZM5.98455 10L15.9999 4.1577L26.0153 10L15.9999 15.8423L5.98455 10Z" fill="currentcolor" />
                    </svg>
                    <span class="pl-1">CMS</span>
                </div>
            </a>
            <ul x-cloak x-show="activeMenu === 'cms'" x-collapse class="sub-menu flex flex-col gap-1 text-black dark:text-white/80">

                <li><a href="<?= base_url("admin/cms-page/blog") ?>" <?= sub_menu_active("admin/cms-page/blog") ?>>Blog</a></li>
                <!-- <li><a href="<?= base_url("admin/cms/faq") ?>" <?= sub_menu_active("admin/cms/faq") ?>>Faq</a></li>
                <li><a href="<?= base_url("admin/cms/ads") ?>" <?= sub_menu_active("admin/cms/ads") ?>>Ads</a></li>
                <li><a href="<?= base_url("admin/cms/best-deals") ?>" <?= sub_menu_active("admin/cms/best-deals") ?>>Best Deals</a></li> -->
            </ul>
        </li>
        
        <!-- <li class="menu nav-item">
            <a href="javaScript:;" class="nav-link group active text-black dark:text-white" :class="{'active' : activeMenu === 'enquiries'}" <?= sub_nav_active("admin/enquiries", 'enquiries') ?> @click="activeMenu === 'enquiries' ? activeMenu = null : activeMenu = 'enquiries'">
                <div class="text-black/50 dark:text-white/20 w-4 h-4 flex items-center justify-center" :class="{'!rotate-90' : activeMenu === 'enquiries'}">
                    <svg width="6" height="10" viewbox="0 0 6 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M0.659675 9.35355C0.446775 9.15829 0.446775 8.84171 0.659675 8.64645L4.25 5.35355C4.4629 5.15829 4.4629 4.84171 4.25 4.64645L0.659675 1.35355C0.446776 1.15829 0.446776 0.841709 0.659675 0.646446C0.872575 0.451184 1.21775 0.451185 1.43065 0.646446L5.02098 3.93934C5.65967 4.52513 5.65968 5.47487 5.02098 6.06066L1.43065 9.35355C1.21775 9.54882 0.872574 9.54882 0.659675 9.35355Z" fill="currentcolor" />
                    </svg>
                </div>
                <div class="flex items-center">
                    <svg class="w-5 h-5" width="32" height="32" viewbox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M4 10L16 17L28 10L16 3L4 10Z" fill="black" fill-opacity="0.1" />
                        <path d="M16.5039 29.8638L28.5039 22.8638C28.733 22.7301 28.8996 22.511 28.9671 22.2545C28.9889 22.1714 29 22.0859 29 22C29 21.988 28.9998 21.976 28.9994 21.964C28.9934 21.7993 28.9468 21.6385 28.8638 21.4961C28.6846 21.1889 28.3557 21 28 21C27.8229 21 27.649 21.047 27.4961 21.1362L16 27.8423L4.50399 21.1363C4.35094 21.047 4.17706 21 4 21C3.98302 21 3.96603 21.0004 3.94907 21.0013C3.61197 21.0185 3.3063 21.2046 3.13622 21.4961C3.04701 21.6491 3 21.8229 3 22C3 22.017 3.00043 22.034 3.0013 22.0509C3.01849 22.388 3.20457 22.6937 3.49613 22.8638L15.4961 29.8638C15.8075 30.0454 16.1925 30.0454 16.5039 29.8638Z" fill="currentcolor" />
                        <path d="M16.5039 23.8638L28.5039 16.8638C28.733 16.7301 28.8996 16.511 28.9671 16.2545C28.9889 16.1714 29 16.0859 29 16C29 15.988 28.9998 15.976 28.9994 15.964C28.9934 15.7993 28.9468 15.6385 28.8638 15.4961C28.6846 15.1889 28.3557 15 28 15C27.8229 15 27.649 15.047 27.4961 15.1362L16 21.8423L4.50399 15.1363C4.35094 15.047 4.17706 15 4 15C3.98302 15 3.96603 15.0004 3.94907 15.0013C3.61197 15.0185 3.3063 15.2046 3.13622 15.4961C3.04701 15.6491 3 15.8229 3 16C3 16.017 3.00043 16.034 3.0013 16.0509C3.01849 16.388 3.20457 16.6937 3.49613 16.8638L15.4961 23.8638C15.8075 24.0454 16.1925 24.0454 16.5039 23.8638Z" fill="currentcolor" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M15.496 2.13622C15.8074 1.95459 16.1924 1.95459 16.5038 2.13622L28.5038 9.13622C28.6528 9.22314 28.7768 9.34713 28.8637 9.49613C29.142 9.97318 28.9808 10.5855 28.5038 10.8638L16.5038 17.8638C16.1924 18.0454 15.8074 18.0454 15.496 17.8638L3.49605 10.8638C3.34704 10.7769 3.22306 10.6529 3.13614 10.5039C2.85786 10.0268 3.019 9.4145 3.49605 9.13622L15.496 2.13622ZM5.98455 10L15.9999 4.1577L26.0153 10L15.9999 15.8423L5.98455 10Z" fill="currentcolor" />
                    </svg>
                    <span class="pl-1">Enquiries</span>
                </div>
            </a>
            <ul x-cloak x-show="activeMenu === 'enquiries'" x-collapse class="sub-menu flex flex-col gap-1 text-black dark:text-white/80">
                <li><a href="<?= base_url("admin/enquiries/faq") ?>" <?= sub_menu_active("admin/enquiries/faq") ?>>Faq</a></li>
                <li><a href="<?= base_url("admin/enquiries/contact-us") ?>" <?= sub_menu_active("admin/enquiries/contact-us") ?>>Contact Us</a></li>
            </ul>
        </li> -->
    <?php endif; ?>






</ul>