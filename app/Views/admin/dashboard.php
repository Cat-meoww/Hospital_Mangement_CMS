<?= $this->extend('layout/admin/main') ?>

<?= $this->section('content') ?>
<div class="px-2 py-1 mb-4">
    <p class="text-sm font-semibold text-black dark:text-white">Dashboard (Enquiries Date)</p>
</div>
<div class="flex flex-col gap-7">
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-7">
        <div class="bg-lightblue-100 rounded-2xl p-6">
            <div class="flex items-center gap-2 justify-between mb-1.5 text-black">
                <p class="text-sm font-semibold">Total Bookings</p>
                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.75 18.75V9.75C3.75 9.33579 3.41421 9 3 9C2.58579 9 2.25 9.33579 2.25 9.75V18.75C2.25 19.3713 2.68934 19.8107 2.68934 19.8107C3.12868 20.25 3.75 20.25 3.75 20.25H20.25C20.8713 20.25 21.3107 19.8107 21.3107 19.8107C21.75 19.3713 21.75 18.75 21.75 18.75V8.25C21.75 7.62868 21.3107 7.18934 21.3107 7.18934C20.8713 6.75 20.25 6.75 20.25 6.75H12C11.5858 6.75 11.25 7.08579 11.25 7.5C11.25 7.91421 11.5858 8.25 12 8.25H20.25V18.75H3.75Z" fill="currentcolor" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.6444 10.2018C9.6444 10.2018 9.24649 10.4977 8.7507 10.5L8.74688 10.5H3C2.58579 10.5 2.25 10.1642 2.25 9.75V6C2.25 6 2.25 5.37868 2.68934 4.93934C2.68934 4.93934 3.12868 4.5 3.75 4.5L8.74996 4.50001C8.74996 4.50001 9.24619 4.50205 9.64655 4.79976L12.4497 6.89976C12.5068 6.94253 12.5575 6.99323 12.6002 7.05032C12.7195 7.20952 12.7706 7.40957 12.7424 7.60646C12.7142 7.80336 12.6089 7.98098 12.4497 8.10024L9.6444 10.2018ZM8.74411 9C8.74411 9 8.747 8.9999 8.74935 8.99815L10.7491 7.5L8.7472 6.00024C8.7472 6.00024 8.74687 6.00001 8.74379 5.99999L3.75 6V9H8.74411Z" fill="currentcolor" />
                </svg>
            </div>
            <div class="flex items-center justify-between">
                <h2 class="text-2xl leading-9 font-semibold text-black"><?= $dataset['bookings']['total'] ?></h2>
            </div>
        </div>
        <div class="bg-lightpurple-100 rounded-2xl p-6">
            <div class="flex items-center gap-2 justify-between mb-1.5 text-black">
                <p class="text-sm font-semibold">Total General Bookings</p>
                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 12.75H20.25C20.6642 12.75 21 12.4142 21 12C21 11.5858 20.6642 11.25 20.25 11.25H12C11.5858 11.25 11.25 11.5858 11.25 12C11.25 12.4142 11.5858 12.75 12 12.75Z" fill="currentcolor" />
                    <path d="M12 6.75H20.25C20.6642 6.75 21 6.41421 21 6C21 5.58579 20.6642 5.25 20.25 5.25H12C11.5858 5.25 11.25 5.58579 11.25 6C11.25 6.41421 11.5858 6.75 12 6.75Z" fill="currentcolor" />
                    <path d="M12 18.75H20.25C20.6642 18.75 21 18.4142 21 18C21 17.5858 20.6642 17.25 20.25 17.25H12C11.5858 17.25 11.25 17.5858 11.25 18C11.25 18.4142 11.5858 18.75 12 18.75Z" fill="currentcolor" />
                    <path d="M9.13323 5.05155C9.14067 5.04469 9.14818 5.03748 9.15533 5.03033C9.28856 4.8971 9.36677 4.7186 9.37439 4.53033L9.37443 4.52923C9.37481 4.51949 9.375 4.50974 9.375 4.5C9.375 4.31158 9.30408 4.13007 9.17635 3.99155C9.16949 3.98412 9.16248 3.97682 9.15533 3.96967C9.0221 3.83644 8.8436 3.75823 8.65533 3.75061L8.65423 3.75057C8.64449 3.75019 8.63474 3.75 8.625 3.75C8.43658 3.75 8.25507 3.82092 8.11655 3.94865L5.37261 6.47909L4.25924 5.44939C4.12064 5.3212 3.93879 5.25 3.74999 5.25C3.74024 5.25 3.73049 5.25019 3.72074 5.25057C3.52198 5.25833 3.33444 5.34473 3.19939 5.49076C3.0712 5.62936 3 5.81121 3 6C3 6.00976 3.00019 6.01951 3.00057 6.02926C3.00833 6.22802 3.09473 6.41556 3.24076 6.55061L4.86264 8.05061C5.14978 8.31618 5.5928 8.3165 5.88032 8.05135L9.13323 5.05155Z" fill="currentcolor" />
                    <path d="M9.13323 11.0515C9.14067 11.0447 9.14818 11.0375 9.15533 11.0303C9.28856 10.8971 9.36677 10.7186 9.37439 10.5303L9.37443 10.5292C9.37481 10.5195 9.375 10.5097 9.375 10.5C9.375 10.3116 9.30408 10.1301 9.17635 9.99155C9.16949 9.98412 9.16248 9.97682 9.15533 9.96967C9.0221 9.83644 8.8436 9.75823 8.65533 9.75061L8.65423 9.75057C8.64449 9.75019 8.63474 9.75 8.625 9.75C8.43658 9.75 8.25507 9.82092 8.11655 9.94865L5.37261 12.4791L4.25924 11.4494C4.12064 11.3212 3.93879 11.25 3.74999 11.25C3.74024 11.25 3.73049 11.2502 3.72074 11.2506C3.52198 11.2583 3.33444 11.3447 3.19939 11.4908C3.0712 11.6294 3 11.8112 3 12C3 12.0098 3.00019 12.0195 3.00057 12.0293C3.00833 12.228 3.09473 12.4156 3.24076 12.5506L4.86264 14.0506C5.14978 14.3162 5.5928 14.3165 5.88032 14.0513L9.13323 11.0515Z" fill="currentcolor" />
                    <path d="M9.13323 17.0515C9.14067 17.0447 9.14818 17.0375 9.15533 17.0303C9.28856 16.8971 9.36677 16.7186 9.37439 16.5303L9.37443 16.5292C9.37481 16.5195 9.375 16.5097 9.375 16.5C9.375 16.3116 9.30408 16.1301 9.17635 15.9916C9.16949 15.9841 9.16248 15.9768 9.15533 15.9697C9.0221 15.8364 8.8436 15.7582 8.65533 15.7506L8.65423 15.7506C8.64449 15.7502 8.63474 15.75 8.625 15.75C8.43658 15.75 8.25507 15.8209 8.11655 15.9487L5.37261 18.4791L4.25924 17.4494C4.12064 17.3212 3.93879 17.25 3.74999 17.25C3.74024 17.25 3.73049 17.2502 3.72074 17.2506C3.52198 17.2583 3.33444 17.3447 3.19939 17.4908C3.0712 17.6294 3 17.8112 3 18C3 18.0098 3.00019 18.0195 3.00057 18.0293C3.00833 18.228 3.09473 18.4156 3.24076 18.5506L4.86264 20.0506C5.14978 20.3162 5.5928 20.3165 5.88032 20.0513L9.13323 17.0515Z" fill="currentcolor" />
                </svg>
            </div>
            <div class="flex items-center justify-between">
                <h2 class="text-2xl leading-9 font-semibold text-black"><?= $dataset['bookings']['general'] ?></h2>
            </div>
        </div>
        <div class="bg-lightblue-100 rounded-2xl p-6">
            <div class="flex items-center gap-2 justify-between mb-1.5 text-black">
                <p class="text-sm font-semibold">Total Video Bookings</p>
                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M12 8.62489C12 8.62489 13.864 8.62489 15.182 9.94291C15.182 9.94291 16.5 11.2609 16.5 13.1249C16.5 13.1249 16.5 14.9888 15.182 16.3069C15.182 16.3069 13.864 17.6249 12 17.6249C12 17.6249 10.136 17.6249 8.81802 16.3069C8.81802 16.3069 7.5 14.9888 7.5 13.1249C7.5 13.1249 7.5 11.2609 8.81802 9.94291C8.81802 9.94291 10.136 8.62489 12 8.62489ZM12 10.1249C12 10.1249 10.7574 10.1249 9.87868 11.0036C9.87868 11.0036 9 11.8822 9 13.1249C9 13.1249 9 14.3675 9.87868 15.2462C9.87868 15.2462 10.7574 16.1249 12 16.1249C12 16.1249 13.2426 16.1249 14.1213 15.2462C14.1213 15.2462 15 14.3675 15 13.1249C15 13.1249 15 11.8822 14.1213 11.0036C14.1213 11.0036 13.2426 10.1249 12 10.1249Z" fill="currentcolor" />
                    <path d="M22.274 13.5736C22.3931 13.7329 22.5708 13.8387 22.7677 13.8672C22.8032 13.8723 22.8391 13.8749 22.875 13.8749L22.8763 13.8749C23.0377 13.8746 23.1947 13.8223 23.324 13.7256C23.5135 13.5841 23.625 13.3614 23.625 13.1249L23.625 13.1163C23.6231 12.9574 23.5709 12.8032 23.4758 12.6759L23.4751 12.675C22.5736 11.4693 21.227 10.7959 21.227 10.7959C19.8799 10.1224 18.3738 10.1249 18.3738 10.1249L18.375 10.1249C18.7892 10.1249 19.125 10.4607 19.125 10.8749C19.125 11.2885 18.7902 11.624 18.3767 11.6249L22.274 13.5736Z" fill="currentcolor" />
                    <path d="M3.44384 12.1376C4.47305 11.623 5.62375 11.6249 5.62375 11.6249L5.6248 11.6249C5.63639 11.6249 5.64819 11.6246 5.65977 11.6241C5.84603 11.6154 6.02238 11.5377 6.15444 11.4061C6.29533 11.2657 6.37467 11.0751 6.375 10.8762L6.375 10.8751C6.375 10.8298 6.37088 10.7843 6.36271 10.7397C6.29751 10.384 5.98783 10.1255 5.62625 10.1249L5.625 10.1249C4.11958 10.1227 2.77302 10.7959 2.77302 10.7959C1.42638 11.4693 0.524888 12.675 0.524888 12.675L0.524345 12.6758C0.427356 12.8055 0.375 12.963 0.375 13.1249L0.375041 13.1328C0.37539 13.166 0.377954 13.1993 0.382716 13.2322C0.411176 13.4291 0.516675 13.6066 0.676004 13.7256C0.805645 13.8225 0.963152 13.8749 1.125 13.8749C1.13503 13.8749 1.14505 13.8747 1.15507 13.8743C1.38084 13.8652 1.59049 13.7549 1.72575 13.5739C2.41463 12.6522 3.44384 12.1376 3.44384 12.1376Z" fill="currentcolor" />
                    <path d="M14.786 18.4258C16.064 19.224 16.7254 20.5776 16.7254 20.5776L16.7258 20.5785C16.8516 20.836 17.1134 20.9999 17.4 20.9999L17.4205 20.9996C17.5276 20.9967 17.6328 20.9708 17.7291 20.9238C17.9866 20.7981 18.15 20.5365 18.15 20.2499L18.1497 20.2293C18.1468 20.1223 18.1209 20.017 18.0739 19.9208C17.2239 18.1803 15.5806 17.1536 15.5806 17.1536C13.9374 16.1273 12 16.1273 12 16.1273C10.0626 16.1273 8.41936 17.1536 8.41936 17.1536C6.77641 18.1797 5.92633 19.9202 5.92633 19.9202C5.87626 20.0227 5.84999 20.1358 5.84999 20.2499L5.85005 20.2596C5.85109 20.3393 5.86483 20.4184 5.89074 20.4937C5.95542 20.6818 6.09217 20.8365 6.27091 20.9238C6.37339 20.9739 6.48594 20.9999 6.59999 20.9999L6.61721 20.9997C6.89756 20.9932 7.1509 20.8309 7.27394 20.579C7.93538 19.2244 9.21395 18.4258 9.21395 18.4258C10.4925 17.6273 12 17.6273 12 17.6273C13.5074 17.6273 14.786 18.4258 14.786 18.4258Z" fill="currentcolor" />
                    <path d="M7.26176 6.33426C7.70944 6.81077 7.83204 7.45299 7.83204 7.45299C7.86933 7.64838 7.98272 7.82095 8.14725 7.93273C8.27158 8.0172 8.41842 8.06237 8.56873 8.06237L8.5736 8.06235C8.61916 8.06206 8.6646 8.05761 8.70936 8.04907C9.06296 7.98157 9.31874 7.67236 9.31874 7.31237L9.31872 7.30814C9.31846 7.26237 9.31402 7.21671 9.30543 7.17174C9.10111 6.10137 8.35497 5.30718 8.35497 5.30718C7.60884 4.513 6.55328 4.24236 6.55328 4.24236C5.49772 3.97173 4.4615 4.30894 4.4615 4.30894C3.42528 4.64615 2.73116 5.48617 2.73116 5.48617C2.03703 6.3262 1.90119 7.4074 1.90119 7.4074C1.76535 8.4886 2.2301 9.47423 2.2301 9.47423C2.69486 10.4599 3.61545 11.0429 3.61545 11.0429C4.53572 11.6258 5.6248 11.6249 5.6248 11.6249L5.62575 11.6249C5.82466 11.6247 6.01534 11.5455 6.15585 11.4047C6.29618 11.2641 6.375 11.0738 6.375 10.8751L6.37498 10.8741C6.37456 10.4602 6.03892 10.1249 5.625 10.1249L5.62422 10.1249C4.9704 10.1255 4.41805 9.7757 4.41805 9.7757C3.86569 9.42586 3.58684 8.83448 3.58684 8.83448C3.30799 8.24311 3.38949 7.59439 3.38949 7.59439C3.471 6.94567 3.88747 6.44165 3.88747 6.44165C4.30395 5.93764 4.92568 5.73531 4.92568 5.73531C5.54741 5.53298 6.18074 5.69537 6.18074 5.69537C6.81408 5.85775 7.26176 6.33426 7.26176 6.33426Z" fill="currentcolor" />
                    <path d="M19.5819 9.7757C19.0296 10.1255 18.3758 10.1249 18.3758 10.1249L18.375 10.1249C18.3633 10.1249 18.3515 10.1251 18.3397 10.1257L17.6258 10.9101C17.6346 11.0964 17.7124 11.2727 17.8441 11.4047C17.9846 11.5455 18.1753 11.6247 18.3742 11.6249L18.375 11.6249C19.4643 11.6258 20.3845 11.0429 20.3845 11.0429C21.3051 10.4599 21.7699 9.47423 21.7699 9.47423C22.2346 8.4886 22.0988 7.4074 22.0988 7.4074C21.963 6.3262 21.2688 5.48617 21.2688 5.48617C20.5747 4.64615 19.5385 4.30894 19.5385 4.30894C18.5023 3.97173 17.4467 4.24236 17.4467 4.24236C16.3912 4.513 15.645 5.30718 15.645 5.30718C14.8989 6.10137 14.6946 7.17174 14.6946 7.17174C14.6857 7.2181 14.6813 7.26518 14.6813 7.31237C14.6813 7.33491 14.6823 7.35743 14.6843 7.37988C14.7144 7.71326 14.9618 7.9863 15.2906 8.04907C15.337 8.05792 15.3841 8.06237 15.4313 8.06237C15.4538 8.06237 15.4763 8.06135 15.4988 8.05932C15.8321 8.02919 16.1052 7.78179 16.168 7.45299C16.2906 6.81077 16.7382 6.33426 16.7382 6.33426C17.1859 5.85775 17.8193 5.69537 17.8193 5.69537C18.4526 5.53298 19.0743 5.73531 19.0743 5.73531C19.696 5.93764 20.1125 6.44165 20.1125 6.44165C20.529 6.94566 20.6105 7.59439 20.6105 7.59439C20.692 8.24311 20.4132 8.83448 20.4132 8.83448C20.1343 9.42586 19.5819 9.7757 19.5819 9.7757Z" fill="currentcolor" />
                </svg>
            </div>
            <div class="flex items-center justify-between">
                <h2 class="text-2xl leading-9 font-semibold text-black"><?= $dataset['bookings']['video'] ?></h2>
            </div>
        </div>

    </div>
    <div class="px-2 py-1 ">
        <p class="text-sm font-semibold text-black dark:text-white">Today Bookings</p>
    </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-3 gap-7">
        <div class="bg-lightblue-100 rounded-2xl p-6">
            <div class="flex items-center gap-2 justify-between mb-1.5 text-black">
                <p class="text-sm font-semibold">Total General Bookings</p>
                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M3.75 18.75V9.75C3.75 9.33579 3.41421 9 3 9C2.58579 9 2.25 9.33579 2.25 9.75V18.75C2.25 19.3713 2.68934 19.8107 2.68934 19.8107C3.12868 20.25 3.75 20.25 3.75 20.25H20.25C20.8713 20.25 21.3107 19.8107 21.3107 19.8107C21.75 19.3713 21.75 18.75 21.75 18.75V8.25C21.75 7.62868 21.3107 7.18934 21.3107 7.18934C20.8713 6.75 20.25 6.75 20.25 6.75H12C11.5858 6.75 11.25 7.08579 11.25 7.5C11.25 7.91421 11.5858 8.25 12 8.25H20.25V18.75H3.75Z" fill="currentcolor" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.6444 10.2018C9.6444 10.2018 9.24649 10.4977 8.7507 10.5L8.74688 10.5H3C2.58579 10.5 2.25 10.1642 2.25 9.75V6C2.25 6 2.25 5.37868 2.68934 4.93934C2.68934 4.93934 3.12868 4.5 3.75 4.5L8.74996 4.50001C8.74996 4.50001 9.24619 4.50205 9.64655 4.79976L12.4497 6.89976C12.5068 6.94253 12.5575 6.99323 12.6002 7.05032C12.7195 7.20952 12.7706 7.40957 12.7424 7.60646C12.7142 7.80336 12.6089 7.98098 12.4497 8.10024L9.6444 10.2018ZM8.74411 9C8.74411 9 8.747 8.9999 8.74935 8.99815L10.7491 7.5L8.7472 6.00024C8.7472 6.00024 8.74687 6.00001 8.74379 5.99999L3.75 6V9H8.74411Z" fill="currentcolor" />
                </svg>
            </div>
            <div class="flex items-center justify-between">
                <h2 class="text-2xl leading-9 font-semibold text-black"><?= $dataset['bookings']['today']['general'] ?></h2>
            </div>
        </div>
        <div class="bg-lightpurple-100 rounded-2xl p-6">
            <div class="flex items-center gap-2 justify-between mb-1.5 text-black">
                <p class="text-sm font-semibold">Total Video Bookings</p>
                <svg width="24" height="24" viewbox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 12.75H20.25C20.6642 12.75 21 12.4142 21 12C21 11.5858 20.6642 11.25 20.25 11.25H12C11.5858 11.25 11.25 11.5858 11.25 12C11.25 12.4142 11.5858 12.75 12 12.75Z" fill="currentcolor" />
                    <path d="M12 6.75H20.25C20.6642 6.75 21 6.41421 21 6C21 5.58579 20.6642 5.25 20.25 5.25H12C11.5858 5.25 11.25 5.58579 11.25 6C11.25 6.41421 11.5858 6.75 12 6.75Z" fill="currentcolor" />
                    <path d="M12 18.75H20.25C20.6642 18.75 21 18.4142 21 18C21 17.5858 20.6642 17.25 20.25 17.25H12C11.5858 17.25 11.25 17.5858 11.25 18C11.25 18.4142 11.5858 18.75 12 18.75Z" fill="currentcolor" />
                    <path d="M9.13323 5.05155C9.14067 5.04469 9.14818 5.03748 9.15533 5.03033C9.28856 4.8971 9.36677 4.7186 9.37439 4.53033L9.37443 4.52923C9.37481 4.51949 9.375 4.50974 9.375 4.5C9.375 4.31158 9.30408 4.13007 9.17635 3.99155C9.16949 3.98412 9.16248 3.97682 9.15533 3.96967C9.0221 3.83644 8.8436 3.75823 8.65533 3.75061L8.65423 3.75057C8.64449 3.75019 8.63474 3.75 8.625 3.75C8.43658 3.75 8.25507 3.82092 8.11655 3.94865L5.37261 6.47909L4.25924 5.44939C4.12064 5.3212 3.93879 5.25 3.74999 5.25C3.74024 5.25 3.73049 5.25019 3.72074 5.25057C3.52198 5.25833 3.33444 5.34473 3.19939 5.49076C3.0712 5.62936 3 5.81121 3 6C3 6.00976 3.00019 6.01951 3.00057 6.02926C3.00833 6.22802 3.09473 6.41556 3.24076 6.55061L4.86264 8.05061C5.14978 8.31618 5.5928 8.3165 5.88032 8.05135L9.13323 5.05155Z" fill="currentcolor" />
                    <path d="M9.13323 11.0515C9.14067 11.0447 9.14818 11.0375 9.15533 11.0303C9.28856 10.8971 9.36677 10.7186 9.37439 10.5303L9.37443 10.5292C9.37481 10.5195 9.375 10.5097 9.375 10.5C9.375 10.3116 9.30408 10.1301 9.17635 9.99155C9.16949 9.98412 9.16248 9.97682 9.15533 9.96967C9.0221 9.83644 8.8436 9.75823 8.65533 9.75061L8.65423 9.75057C8.64449 9.75019 8.63474 9.75 8.625 9.75C8.43658 9.75 8.25507 9.82092 8.11655 9.94865L5.37261 12.4791L4.25924 11.4494C4.12064 11.3212 3.93879 11.25 3.74999 11.25C3.74024 11.25 3.73049 11.2502 3.72074 11.2506C3.52198 11.2583 3.33444 11.3447 3.19939 11.4908C3.0712 11.6294 3 11.8112 3 12C3 12.0098 3.00019 12.0195 3.00057 12.0293C3.00833 12.228 3.09473 12.4156 3.24076 12.5506L4.86264 14.0506C5.14978 14.3162 5.5928 14.3165 5.88032 14.0513L9.13323 11.0515Z" fill="currentcolor" />
                    <path d="M9.13323 17.0515C9.14067 17.0447 9.14818 17.0375 9.15533 17.0303C9.28856 16.8971 9.36677 16.7186 9.37439 16.5303L9.37443 16.5292C9.37481 16.5195 9.375 16.5097 9.375 16.5C9.375 16.3116 9.30408 16.1301 9.17635 15.9916C9.16949 15.9841 9.16248 15.9768 9.15533 15.9697C9.0221 15.8364 8.8436 15.7582 8.65533 15.7506L8.65423 15.7506C8.64449 15.7502 8.63474 15.75 8.625 15.75C8.43658 15.75 8.25507 15.8209 8.11655 15.9487L5.37261 18.4791L4.25924 17.4494C4.12064 17.3212 3.93879 17.25 3.74999 17.25C3.74024 17.25 3.73049 17.2502 3.72074 17.2506C3.52198 17.2583 3.33444 17.3447 3.19939 17.4908C3.0712 17.6294 3 17.8112 3 18C3 18.0098 3.00019 18.0195 3.00057 18.0293C3.00833 18.228 3.09473 18.4156 3.24076 18.5506L4.86264 20.0506C5.14978 20.3162 5.5928 20.3165 5.88032 20.0513L9.13323 17.0515Z" fill="currentcolor" />
                </svg>
            </div>
            <div class="flex items-center justify-between">
                <h2 class="text-2xl leading-9 font-semibold text-black"><?= $dataset['bookings']['today']['video'] ?></h2>
            </div>
        </div>


    </div>
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-7">
        <div class="bg-lightwhite dark:bg-white/5 p-6 rounded-2xl">
            <div class="flex gap-3">
                <h2 class="text-sm font-semibold text-black dark:text-white mb-4 flex-1">General Bookings - <?= $dataset['piechart']['date'] ?></h2>
                <div>
                    <select id="general-branch-wise-date" class="form-select py-1 px-3 text-[11.5px] w-full text-black dark:text-white border border-black/10 dark:border-white/10 rounded-lg placeholder:text-black/20 dark:placeholder:text-white/20 focus:border-black dark:focus:border-white/10 focus:ring-0 focus:shadow-none;">
                        <option value="entry">Entry Date</option>
                        <option value="booking">Booking Date</option>
                    </select>
                </div>
                <div>
                    <button class="btn py-1 px-3 text-[11.5px]" id="general-branch-wise-reload">&#8635;</button>
                </div>
            </div>
            <div id="general-branch-wise"></div>
        </div>
        <div class="lg:col-span-2 bg-lightwhite dark:bg-white/5 p-6 rounded-2xl">
            <h2 class="text-sm font-semibold text-black dark:text-white mb-4">Recent Video Bookings</h2>
            <div class="table-responsive">
                <table class="table-hover min-w-[640px]">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Service</th>
                            <th>Booking Date</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="whitespace-nowrap">Sharon</td>

                            <td>Upper GI Surgery</td>
                            <td>2023-12-13</td>
                            <td class="flex items-center text-xs text-[#4AA785] py-3">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor"></path>
                                </svg>
                                <p>Success</p>
                            </td>

                        </tr>
                        <tr>
                            <td class="whitespace-nowrap">Raj</td>

                            <td>Upper GI Surgery</td>
                            <td>2023-12-04</td>
                            <td class="flex items-center text-xs text-black/40 dark:text-white/40 py-3">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor"></path>
                                </svg>
                                <p>Init</p>
                            </td>

                        </tr>
                        <tr>
                            <td class="whitespace-nowrap">Kumar</td>

                            <td>Upper GI Surgery</td>
                            <td>2023-12-02</td>
                            <td class="flex items-center text-xs  text-[#FFC555] py-3">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor"></path>
                                </svg>
                                <p>Failed</p>
                            </td>

                        </tr>
                        <tr>
                            <td class="whitespace-nowrap">Elon</td>

                            <td>Upper GI Surgery</td>
                            <td>2023-12-01</td>
                            <td class="flex items-center text-xs text-[#4AA785] py-3">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor"></path>
                                </svg>
                                <p>Success</p>
                            </td>

                        </tr>
                        <tr>
                            <td class="whitespace-nowrap">Gowri</td>

                            <td>Upper GI Surgery</td>
                            <td>2023-11-30</td>
                            <td class="flex items-center text-xs text-[#FFC555] py-3">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor"></path>
                                </svg>
                                <p>Failed</p>
                            </td>

                        </tr>
                        <tr>
                            <td class="whitespace-nowrap">Gowri</td>

                            <td>Upper GI Surgery</td>
                            <td>2023-11-30</td>
                            <td class="flex items-center text-xs text-[#FFC555] py-3">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor"></path>
                                </svg>
                                <p>Failed</p>
                            </td>

                        </tr>
                        <tr>
                            <td class="whitespace-nowrap">Gowri</td>

                            <td>Upper GI Surgery</td>
                            <td>2023-11-30</td>
                            <td class="flex items-center text-xs text-[#FFC555] py-3">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor"></path>
                                </svg>
                                <p>Failed</p>
                            </td>

                        </tr>
                        <tr>
                            <td class="whitespace-nowrap">Gowri</td>

                            <td>Upper GI Surgery</td>
                            <td>2023-11-30</td>
                            <td class="flex items-center text-xs text-[#FFC555] py-3">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M11 8C11 9.65685 9.65685 11 8 11C6.34315 11 5 9.65685 5 8C5 6.34315 6.34315 5 8 5C9.65685 5 11 6.34315 11 8Z" fill="currentcolor"></path>
                                </svg>
                                <p>Failed</p>
                            </td>

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="grid grid-cols-1">
        <div class="bg-lightwhite dark:bg-white/5 rounded-2xl p-6">
            <div class="flex gap-3">
                <h2 class="text-sm font-semibold text-black dark:text-white mb-4 flex-1">Monthly General bookings</h2>
                <div>
                    <select id="monthly-general-date" class="form-select py-1 px-3 text-[11.5px] w-full text-black dark:text-white border border-black/10 dark:border-white/10 rounded-lg placeholder:text-black/20 dark:placeholder:text-white/20 focus:border-black dark:focus:border-white/10 focus:ring-0 focus:shadow-none;">
                        <option value="entry">Entry Date</option>
                        <option value="booking">Booking Date</option>

                    </select>
                </div>
                <div>
                    <button class="btn py-1 px-3 text-[11.5px]" id="monthly-general-bookings-reload">&#8635;</button>
                </div>
            </div>

            <div id="monthly-general-bookings"></div>
        </div>
    </div>
    <div class="grid grid-cols-1">
        <div class="bg-lightwhite dark:bg-white/5 rounded-2xl p-6">
            <div class="flex gap-3">
                <h2 class="text-sm font-semibold text-black dark:text-white mb-4 flex-1">Monthly Video bookings</h2>
                <div>
                    <select id="monthly-video-date" class="form-select py-1 px-3 text-[11.5px] w-full text-black dark:text-white border border-black/10 dark:border-white/10 rounded-lg placeholder:text-black/20 dark:placeholder:text-white/20 focus:border-black dark:focus:border-white/10 focus:ring-0 focus:shadow-none;">
                        <option value="entry">Entry Date</option>
                        <option value="booking">Booking Date</option>

                    </select>
                </div>
                <div>
                    <button class="btn py-1 px-3 text-[11.5px]" id="monthly-video-bookings-reload">&#8635;</button>
                </div>
            </div>

            <div id="monthly-video-bookings"></div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>

<?= $this->section('footer') ?>
<script src="<?= base_url('admin/assets/js/apexcharts.js') ?>"></script>
<script>
    const chartConfig = {
        bar: {
            chart: {
                height: 236,
                type: "bar",
                events: {
                    click: function(chart, w, e) {},
                },
                toolbar: {
                    show: false,
                },
            },
            colors: ["#A8C5DA"],
            plotOptions: {
                bar: {
                    columnWidth: "30%",
                    distributed: true,
                },
            },
            dataLabels: {
                enabled: false,
            },
            legend: {
                show: false,
            },
            yaxis: {
                tickAmount: 5,
                labels: {
                    offsetX: -10,
                    offsetY: 0,
                    style: {
                        fontSize: "12px",
                    },
                },
                opposite: false,
            },
            series: [{
                name: "This Year",
                data: [],
            }, ],
            xaxis: {
                categories: [],
                labels: {
                    style: {
                        fontSize: "12px",
                        color: "rgb(55, 61, 63)",
                    },
                },
            },
            noData: {
                text: 'Loading...'
            }
        },
        donut: {
            series: [],
            chart: {
                type: "donut",
                height: 320,
                fontFamily: "Nunito, sans-serif",
            },
            dataLabels: {
                enabled: false,
            },
            legend: {
                position: "bottom",
                horizontalAlign: "center",
                fontSize: "12px",
                markers: {
                    width: 6,
                    height: 6,
                    offsetX: -5,
                },

                offsetY: 16,
            },
            plotOptions: {
                pie: {
                    donut: {
                        size: "65%",
                        background: "transparent",
                        labels: {
                            show: true,
                            name: {
                                show: true,
                                fontSize: "16px",
                                offsetY: 0,
                                color: "#1c1c1c",
                            },
                            value: {
                                show: true,
                                fontSize: "14px",
                                color: "#1c1c1c",
                                offsetY: 5,
                                formatter: (val) => {
                                    return val;
                                },
                            },
                            total: {
                                show: true,
                                label: "Total",
                                color: "#1c1c1c",
                                fontSize: "16px",
                                formatter: (val) => {
                                    return val.globals.seriesTotals.reduce((a, b) => {
                                        return a + b
                                    }, 0)
                                },
                            },
                        },
                    },
                },
            },
            colors: ['#59A8D4', "#1C1C1C", "#BAEDBD", "#C6C7F8", '#FFC555'],
            labels: [],
            states: {

                hover: {
                    filter: {
                        type: "none",
                        value: 0.15,
                    },
                },
                active: {
                    filter: {
                        type: "none",
                        value: 0.15,
                    },
                },
            },
        }
    }

    const ProChart = {
        charts: new Map(),
        __init: function(containerId, {
            chartType,
            url,
            payload,
            reloadButtonId
        }) {
            const uuid = crypto.randomUUID();
            let config = null;
            switch (chartType) {
                case 'bar':
                    config = chartConfig.bar
                    break;
                case 'donut':
                    config = chartConfig.donut
                    break;

                default:
                    config = chartConfig.bar
                    break;
            }
            const chart = new ApexCharts(document.querySelector(containerId), config);
            chart.render();
            this.charts.set(uuid, {
                chartType,
                chart,
                url,
                payload,
            });
            this.populate(uuid)


            $(containerId).parent().find('select').data('uuid', uuid).change(this.reload)
            $(reloadButtonId).data('uuid', uuid).click(this.reload)

        },
        populate: async function(uuid) {

            try {
                if (!this.charts.has(uuid)) return;

                const data = this.charts.get(uuid)
                const payload = data.payload
                const formdata = new FormData();
                for (const key in payload) {
                    formdata.append(key, payload[key].val());
                }
                const url = data.url;
                const options = {
                    method: 'POST',
                    mode: 'cors',
                    cache: 'no-cache',
                    credentials: 'same-origin',
                    body: formdata,
                }
                const rawdata = await fetch(url, options);
                const res = await rawdata.json();

                if (res.status === "success") {

                    if (data.chartType == "donut") {
                        console.log(uuid)

                        console.log(data.chart)
                        await data.chart.updateSeries(res.data.series);
                        data.chart.updateOptions({
                            labels: res.data.labels
                        })

                    } else {
                        data.chart.updateSeries([{
                            data: res.data
                        }])
                    }

                    return;
                }
            } catch (e) {
                console.error(e)
            }
        },
        reload: function(e) {
            ProChart.populate($(this).data('uuid'))
        }
    }
    ProChart.__init('#general-branch-wise', {
        chartType: 'donut',
        reloadButtonId: "#general-branch-wise-reload",
        url: '<?= base_url('api/admin/dashboard/general/branch-wise') ?>',
        payload: {
            date_type: $('#general-branch-wise-date')
        },
    })
    ProChart.__init('#monthly-general-bookings', {
        chartType: 'bar',
        reloadButtonId: "#monthly-general-bookings-reload",
        url: '<?= base_url('api/admin/dashboard/general/monthly') ?>',
        payload: {
            date_type: $('#monthly-general-date')
        },
    })
    ProChart.__init('#monthly-video-bookings', {
        chartType: 'bar',
        reloadButtonId: "#monthly-video-bookings-reload",
        url: '<?= base_url('api/admin/dashboard/video/monthly') ?>',
        payload: {
            date_type: $('#monthly-video-date')
        },
    })
</script>
<?= $this->endSection() ?>