<?= $this->extend('layout/admin/main') ?>

<?= $this->section('content') ?>
<div class="p-4 sm:p-7 min-h-[calc(100vh-145px)]">
    <div x-data="{activeTab:'overview'}" class="tabs flex flex-col">
        <div class="grid grid-cols-1 md:grid-cols-3 justify-between gap-4 items-center mb-5">
            <div class="tabs-list md:col-span-2 flex text-sm flex-nowrap overflow-auto">
                <button @click="activeTab = 'overview'" :class="activeTab === 'overview' ? 'border-black text-black font-semibold dark:border-lightpurple-200 dark:text-lightpurple-200' : 'border-transparent text-black/40 hover:text-black hover:font-semibold dark:text-white/40 dark:hover:text-lightpurple-200'" class="border-b-2 mx-2 my-1 font-normal">
                    Overview
                </button>
                <button @click="activeTab = 'settings'" :class="activeTab === 'settings' ? 'border-black text-black font-semibold dark:border-lightpurple-200 dark:text-lightpurple-200' : 'border-transparent text-black/40 hover:text-black hover:font-semibold dark:text-white/40 dark:hover:text-lightpurple-200'" class="border-b-2 mx-2 my-1 font-normal">
                    Edit Profile
                </button>


            </div>
            <div class="flex gap-2 justify-center md:justify-end flex-none items-center">
                <div class="py-1 px-2 text-black/40 hover:text-black dark:text-white/40 dark:hover:text-white text-xs transition-all duration-300">
                    Joined on <?= date("d M Y", strtotime($user['created_on'])) ?>
                </div>


            </div>
        </div>
        <div class="tab-content">
            <div x-show="activeTab === 'overview'" class="flex flex-col gap-7">
                <div class="bg-lightwhite dark:bg-white/5 rounded-2xl p-6">
                    <div class="flex items-start justify-between gap-4 mb-[2px]">
                        <h2 class="text-lg font-semibold"><?= $user['firstname'] ?> <?= $user['lastname']  ?></h2>
                        <img class="w-[42px] h-[42px] flex-none rounded-full overflow-hidden object-cover" src="assets/images/byewind-avatar.png" alt />
                    </div>
                    <div class="flex flex-wrap gap-4 items-center mb-4">
                        <div class="flex items-center gap-1 text-xs text-black/40 dark:text-white/40">
                            <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.8465 2.26238C10.4873 1.6875 9 1.6875 9 1.6875C7.51265 1.6875 6.15347 2.26238 6.15347 2.26238C4.84109 2.81747 3.82928 3.82928 3.82928 3.82928C2.81748 4.84109 2.26238 6.15347 2.26238 6.15347C1.6875 7.51265 1.6875 9 1.6875 9C1.6875 10.4873 2.26238 11.8465 2.26238 11.8465C2.81747 13.1589 3.82928 14.1707 3.82928 14.1707C3.90704 14.2485 3.98657 14.3235 4.06715 14.3959C4.09662 14.4287 4.1301 14.4583 4.16709 14.4837C5.11036 15.2964 6.15347 15.7376 6.15347 15.7376C7.51265 16.3125 9 16.3125 9 16.3125C10.4873 16.3125 11.8465 15.7376 11.8465 15.7376C12.6786 15.3857 13.3899 14.8501 13.799 14.5053C13.8585 14.4704 13.9102 14.4253 13.9523 14.373C14.0928 14.2486 14.1707 14.1707 14.1707 14.1707C15.1825 13.1589 15.7376 11.8465 15.7376 11.8465C16.3125 10.4873 16.3125 9 16.3125 9C16.3125 7.51265 15.7376 6.15347 15.7376 6.15347C15.1825 4.84109 14.1707 3.82928 14.1707 3.82928C13.1589 2.81747 11.8465 2.26238 11.8465 2.26238ZM6.59172 14.7015C6.04988 14.4723 5.56846 14.151 5.21752 13.882C5.81067 12.9896 6.64596 12.4769 6.64596 12.4769C7.7291 11.8121 9 11.8125 9 11.8125C10.2709 11.8125 11.354 12.4769 11.354 12.4769C12.036 12.8955 12.5166 13.4997 12.7791 13.8899C12.0784 14.418 11.4083 14.7015 11.4083 14.7015C10.2592 15.1875 9 15.1875 9 15.1875C7.74079 15.1875 6.59172 14.7015 6.59172 14.7015ZM6.05746 11.5181C6.05746 11.5181 6.39649 11.3101 6.93432 11.1023C6.82429 11.0195 6.71668 10.9271 6.61351 10.824C6.61351 10.824 5.625 9.83547 5.625 8.4375C5.625 8.4375 5.625 7.03953 6.61351 6.05101C6.61351 6.05101 7.60203 5.0625 9 5.0625C9 5.0625 10.398 5.0625 11.3865 6.05101C11.3865 6.05101 12.375 7.03953 12.375 8.4375C12.375 8.4375 12.375 9.83547 11.3865 10.824C11.3865 10.824 11.2708 10.9397 11.0625 11.092C11.3547 11.2016 11.654 11.341 11.9425 11.5181C11.9425 11.5181 12.8853 12.0968 13.6153 13.1114C13.9039 12.7751 14.3886 12.148 14.7015 11.4083C14.7015 11.4083 15.1875 10.2592 15.1875 9C15.1875 9 15.1875 7.74079 14.7015 6.59172C14.7015 6.59172 14.2319 5.48143 13.3752 4.62478C13.3752 4.62478 12.5186 3.76813 11.4083 3.29851C11.4083 3.29851 10.2592 2.8125 9 2.8125C9 2.8125 7.74078 2.8125 6.59172 3.29851C6.59172 3.29851 5.48143 3.76813 4.62478 4.62478C4.62478 4.62478 3.76813 5.48143 3.29851 6.59172C3.29851 6.59172 2.8125 7.74078 2.8125 9C2.8125 9 2.8125 10.2592 3.29851 11.4083C3.29851 11.4083 3.68218 12.3154 4.38853 13.1224C4.73326 12.6405 5.2946 11.9864 6.05746 11.5181ZM10.591 10.0285C9.93198 10.6875 9 10.6875 9 10.6875C8.06802 10.6875 7.40901 10.0285 7.40901 10.0285C6.75 9.36948 6.75 8.4375 6.75 8.4375C6.75 7.50552 7.40901 6.84651 7.40901 6.84651C8.06802 6.1875 9 6.1875 9 6.1875C9.93198 6.1875 10.591 6.84651 10.591 6.84651C11.25 7.50552 11.25 8.4375 11.25 8.4375C11.25 9.36948 10.591 10.0285 10.591 10.0285Z" fill="currentcolor" />
                            </svg>
                            <p><?= $user['role_name'] ?></p>
                        </div>

                        <div class="flex items-center gap-1 text-xs text-black/40 dark:text-white/40">
                            <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M1.6875 13.5V3.9375C1.6875 3.62684 1.93934 3.375 2.25 3.375H15.75C16.0607 3.375 16.3125 3.62684 16.3125 3.9375V13.5C16.3125 13.5 16.3125 13.966 15.983 14.2955C15.983 14.2955 15.6535 14.625 15.1875 14.625H2.8125C2.8125 14.625 2.34651 14.625 2.01701 14.2955C2.01701 14.2955 1.6875 13.966 1.6875 13.5ZM2.8125 13.5H15.1875V4.5H2.8125V13.5Z" fill="currentcolor" />
                                <path d="M2.6301 3.52285C2.52635 3.42775 2.39073 3.375 2.25 3.375C2.24185 3.375 2.23371 3.37518 2.22557 3.37553C2.07652 3.38201 1.93616 3.44743 1.83535 3.5574C1.74025 3.66115 1.6875 3.79677 1.6875 3.9375C1.6875 3.94565 1.68768 3.95379 1.68803 3.96193C1.69451 4.11098 1.75993 4.25134 1.8699 4.35215L8.6199 10.5396C8.83496 10.7368 9.16504 10.7368 9.3801 10.5396L16.1297 4.35249C16.2459 4.24595 16.3125 4.09517 16.3125 3.9375L16.3125 3.93282C16.3113 3.79371 16.2587 3.65996 16.1646 3.5574C16.0638 3.44743 15.9235 3.38201 15.7744 3.37553C15.7663 3.37518 15.7581 3.375 15.75 3.375L15.7474 3.37501C15.6076 3.37565 15.473 3.42836 15.3699 3.52285L9 9.36193L2.6301 3.52285Z" fill="currentcolor" />
                            </svg>
                            <p><a href="https://webonzer.com/cdn-cgi/l/email-protection" class="__cf_email__">[<?= $user['email'] ?>]</a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="bg-lightwhite dark:bg-white/5 rounded-2xl p-6">
                    <div class="flex flex-wrap gap-3 items-center justify-between mb-4">
                        <h3 class="text-sm font-semibold">Profile Details</h3>
                        <a href="javaScript:;" class="text-xs text-black/40 dark:text-white/40">Edit
                            Profile</a>
                    </div>
                    <div class="max-w-md grid grid-cols-1 sm:grid-cols-2 gap-4 mb-4">

                        <div class="flex items-center gap-1">
                            <p class="text-xs text-black/40 dark:text-white/40">First Name</p>
                            <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 1.6875C9 1.6875 10.4873 1.6875 11.8465 2.26238C11.8465 2.26238 13.1589 2.81747 14.1707 3.82928C14.1707 3.82928 15.1825 4.84109 15.7376 6.15347C15.7376 6.15347 16.3125 7.51265 16.3125 9C16.3125 9 16.3125 10.4873 15.7376 11.8465C15.7376 11.8465 15.1825 13.1589 14.1707 14.1707C14.1707 14.1707 13.1589 15.1825 11.8465 15.7376C11.8465 15.7376 10.4873 16.3125 9 16.3125C9 16.3125 7.51265 16.3125 6.15347 15.7376C6.15347 15.7376 4.84109 15.1825 3.82928 14.1707C3.82928 14.1707 2.81747 13.1589 2.26238 11.8465C2.26238 11.8465 1.6875 10.4873 1.6875 9C1.6875 9 1.6875 7.51265 2.26238 6.15347C2.26238 6.15347 2.81748 4.84109 3.82928 3.82928C3.82928 3.82928 4.84109 2.81747 6.15347 2.26238C6.15347 2.26238 7.51265 1.6875 9 1.6875ZM9 2.8125C9 2.8125 7.74078 2.8125 6.59172 3.29851C6.59172 3.29851 5.48143 3.76813 4.62478 4.62478C4.62478 4.62478 3.76813 5.48143 3.29851 6.59172C3.29851 6.59172 2.8125 7.74078 2.8125 9C2.8125 9 2.8125 10.2592 3.29851 11.4083C3.29851 11.4083 3.76813 12.5186 4.62478 13.3752C4.62478 13.3752 5.48143 14.2319 6.59172 14.7015C6.59172 14.7015 7.74079 15.1875 9 15.1875C9 15.1875 10.2592 15.1875 11.4083 14.7015C11.4083 14.7015 12.5186 14.2319 13.3752 13.3752C13.3752 13.3752 14.2319 12.5186 14.7015 11.4083C14.7015 11.4083 15.1875 10.2592 15.1875 9C15.1875 9 15.1875 7.74079 14.7015 6.59172C14.7015 6.59172 14.2319 5.48143 13.3752 4.62478C13.3752 4.62478 12.5186 3.76813 11.4083 3.29851C11.4083 3.29851 10.2592 2.8125 9 2.8125Z" fill="currentColor" fill-opacity="0.2" />
                                <path d="M9 12.9375H9.5625C9.87316 12.9375 10.125 12.6857 10.125 12.375C10.125 12.0643 9.87316 11.8125 9.5625 11.8125V8.4375C9.5625 8.12684 9.31066 7.875 9 7.875H8.4375C8.12684 7.875 7.875 8.12684 7.875 8.4375C7.875 8.74816 8.12684 9 8.4375 9V12.375C8.4375 12.6857 8.68934 12.9375 9 12.9375Z" fill="currentColor" fill-opacity="0.2" />
                                <path d="M9.70312 5.90625C9.70312 6.37224 9.32533 6.75 8.85938 6.75C8.39342 6.75 8.01562 6.37224 8.01562 5.90625C8.01562 5.44026 8.39342 5.0625 8.85938 5.0625C9.32533 5.0625 9.70312 5.44026 9.70312 5.90625Z" fill="currentColor" fill-opacity="0.2" />
                            </svg>
                        </div>
                        <div class="flex items-center gap-2">
                            <p class="text-sm"><input type="text" readonly value="<?= $user['firstname'] ?>" placeholder="... Type your First name" class="form-input"></p>
                        </div>
                        <div class="flex items-center gap-1">
                            <p class="text-xs text-black/40 dark:text-white/40">Last Name</p>
                            <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 1.6875C9 1.6875 10.4873 1.6875 11.8465 2.26238C11.8465 2.26238 13.1589 2.81747 14.1707 3.82928C14.1707 3.82928 15.1825 4.84109 15.7376 6.15347C15.7376 6.15347 16.3125 7.51265 16.3125 9C16.3125 9 16.3125 10.4873 15.7376 11.8465C15.7376 11.8465 15.1825 13.1589 14.1707 14.1707C14.1707 14.1707 13.1589 15.1825 11.8465 15.7376C11.8465 15.7376 10.4873 16.3125 9 16.3125C9 16.3125 7.51265 16.3125 6.15347 15.7376C6.15347 15.7376 4.84109 15.1825 3.82928 14.1707C3.82928 14.1707 2.81747 13.1589 2.26238 11.8465C2.26238 11.8465 1.6875 10.4873 1.6875 9C1.6875 9 1.6875 7.51265 2.26238 6.15347C2.26238 6.15347 2.81748 4.84109 3.82928 3.82928C3.82928 3.82928 4.84109 2.81747 6.15347 2.26238C6.15347 2.26238 7.51265 1.6875 9 1.6875ZM9 2.8125C9 2.8125 7.74078 2.8125 6.59172 3.29851C6.59172 3.29851 5.48143 3.76813 4.62478 4.62478C4.62478 4.62478 3.76813 5.48143 3.29851 6.59172C3.29851 6.59172 2.8125 7.74078 2.8125 9C2.8125 9 2.8125 10.2592 3.29851 11.4083C3.29851 11.4083 3.76813 12.5186 4.62478 13.3752C4.62478 13.3752 5.48143 14.2319 6.59172 14.7015C6.59172 14.7015 7.74079 15.1875 9 15.1875C9 15.1875 10.2592 15.1875 11.4083 14.7015C11.4083 14.7015 12.5186 14.2319 13.3752 13.3752C13.3752 13.3752 14.2319 12.5186 14.7015 11.4083C14.7015 11.4083 15.1875 10.2592 15.1875 9C15.1875 9 15.1875 7.74079 14.7015 6.59172C14.7015 6.59172 14.2319 5.48143 13.3752 4.62478C13.3752 4.62478 12.5186 3.76813 11.4083 3.29851C11.4083 3.29851 10.2592 2.8125 9 2.8125Z" fill="currentColor" fill-opacity="0.2" />
                                <path d="M9 12.9375H9.5625C9.87316 12.9375 10.125 12.6857 10.125 12.375C10.125 12.0643 9.87316 11.8125 9.5625 11.8125V8.4375C9.5625 8.12684 9.31066 7.875 9 7.875H8.4375C8.12684 7.875 7.875 8.12684 7.875 8.4375C7.875 8.74816 8.12684 9 8.4375 9V12.375C8.4375 12.6857 8.68934 12.9375 9 12.9375Z" fill="currentColor" fill-opacity="0.2" />
                                <path d="M9.70312 5.90625C9.70312 6.37224 9.32533 6.75 8.85938 6.75C8.39342 6.75 8.01562 6.37224 8.01562 5.90625C8.01562 5.44026 8.39342 5.0625 8.85938 5.0625C9.32533 5.0625 9.70312 5.44026 9.70312 5.90625Z" fill="currentColor" fill-opacity="0.2" />
                            </svg>
                        </div>
                        <div class="flex items-center gap-2">
                            <p class="text-sm"><input type="text" readonly value="<?= $user['lastname'] ?>" placeholder="... Type Your Last name" class="form-input"></p>
                        </div>
                        <div class="flex items-center gap-1">
                            <p class="text-xs text-black/40 dark:text-white/40">Phone</p>
                            <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 1.6875C9 1.6875 10.4873 1.6875 11.8465 2.26238C11.8465 2.26238 13.1589 2.81747 14.1707 3.82928C14.1707 3.82928 15.1825 4.84109 15.7376 6.15347C15.7376 6.15347 16.3125 7.51265 16.3125 9C16.3125 9 16.3125 10.4873 15.7376 11.8465C15.7376 11.8465 15.1825 13.1589 14.1707 14.1707C14.1707 14.1707 13.1589 15.1825 11.8465 15.7376C11.8465 15.7376 10.4873 16.3125 9 16.3125C9 16.3125 7.51265 16.3125 6.15347 15.7376C6.15347 15.7376 4.84109 15.1825 3.82928 14.1707C3.82928 14.1707 2.81747 13.1589 2.26238 11.8465C2.26238 11.8465 1.6875 10.4873 1.6875 9C1.6875 9 1.6875 7.51265 2.26238 6.15347C2.26238 6.15347 2.81748 4.84109 3.82928 3.82928C3.82928 3.82928 4.84109 2.81747 6.15347 2.26238C6.15347 2.26238 7.51265 1.6875 9 1.6875ZM9 2.8125C9 2.8125 7.74078 2.8125 6.59172 3.29851C6.59172 3.29851 5.48143 3.76813 4.62478 4.62478C4.62478 4.62478 3.76813 5.48143 3.29851 6.59172C3.29851 6.59172 2.8125 7.74078 2.8125 9C2.8125 9 2.8125 10.2592 3.29851 11.4083C3.29851 11.4083 3.76813 12.5186 4.62478 13.3752C4.62478 13.3752 5.48143 14.2319 6.59172 14.7015C6.59172 14.7015 7.74079 15.1875 9 15.1875C9 15.1875 10.2592 15.1875 11.4083 14.7015C11.4083 14.7015 12.5186 14.2319 13.3752 13.3752C13.3752 13.3752 14.2319 12.5186 14.7015 11.4083C14.7015 11.4083 15.1875 10.2592 15.1875 9C15.1875 9 15.1875 7.74079 14.7015 6.59172C14.7015 6.59172 14.2319 5.48143 13.3752 4.62478C13.3752 4.62478 12.5186 3.76813 11.4083 3.29851C11.4083 3.29851 10.2592 2.8125 9 2.8125Z" fill="currentColor" fill-opacity="0.2" />
                                <path d="M9 12.9375H9.5625C9.87316 12.9375 10.125 12.6857 10.125 12.375C10.125 12.0643 9.87316 11.8125 9.5625 11.8125V8.4375C9.5625 8.12684 9.31066 7.875 9 7.875H8.4375C8.12684 7.875 7.875 8.12684 7.875 8.4375C7.875 8.74816 8.12684 9 8.4375 9V12.375C8.4375 12.6857 8.68934 12.9375 9 12.9375Z" fill="currentColor" fill-opacity="0.2" />
                                <path d="M9.70312 5.90625C9.70312 6.37224 9.32533 6.75 8.85938 6.75C8.39342 6.75 8.01562 6.37224 8.01562 5.90625C8.01562 5.44026 8.39342 5.0625 8.85938 5.0625C9.32533 5.0625 9.70312 5.44026 9.70312 5.90625Z" fill="currentColor" fill-opacity="0.2" />
                            </svg>
                        </div>
                        <div class="flex items-center gap-2">
                            <p class="text-sm"><input type="text" readonly value="<?= $user['telephone'] ?>" placeholder="... Type Your Phone Number" class="form-input"></p>
                        </div>

                        <div class="flex items-center gap-1">
                            <p class="text-xs text-black/40 dark:text-white/40">Email</p>
                            <svg width="18" height="18" viewbox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M9 1.6875C9 1.6875 10.4873 1.6875 11.8465 2.26238C11.8465 2.26238 13.1589 2.81747 14.1707 3.82928C14.1707 3.82928 15.1825 4.84109 15.7376 6.15347C15.7376 6.15347 16.3125 7.51265 16.3125 9C16.3125 9 16.3125 10.4873 15.7376 11.8465C15.7376 11.8465 15.1825 13.1589 14.1707 14.1707C14.1707 14.1707 13.1589 15.1825 11.8465 15.7376C11.8465 15.7376 10.4873 16.3125 9 16.3125C9 16.3125 7.51265 16.3125 6.15347 15.7376C6.15347 15.7376 4.84109 15.1825 3.82928 14.1707C3.82928 14.1707 2.81747 13.1589 2.26238 11.8465C2.26238 11.8465 1.6875 10.4873 1.6875 9C1.6875 9 1.6875 7.51265 2.26238 6.15347C2.26238 6.15347 2.81748 4.84109 3.82928 3.82928C3.82928 3.82928 4.84109 2.81747 6.15347 2.26238C6.15347 2.26238 7.51265 1.6875 9 1.6875ZM9 2.8125C9 2.8125 7.74078 2.8125 6.59172 3.29851C6.59172 3.29851 5.48143 3.76813 4.62478 4.62478C4.62478 4.62478 3.76813 5.48143 3.29851 6.59172C3.29851 6.59172 2.8125 7.74078 2.8125 9C2.8125 9 2.8125 10.2592 3.29851 11.4083C3.29851 11.4083 3.76813 12.5186 4.62478 13.3752C4.62478 13.3752 5.48143 14.2319 6.59172 14.7015C6.59172 14.7015 7.74079 15.1875 9 15.1875C9 15.1875 10.2592 15.1875 11.4083 14.7015C11.4083 14.7015 12.5186 14.2319 13.3752 13.3752C13.3752 13.3752 14.2319 12.5186 14.7015 11.4083C14.7015 11.4083 15.1875 10.2592 15.1875 9C15.1875 9 15.1875 7.74079 14.7015 6.59172C14.7015 6.59172 14.2319 5.48143 13.3752 4.62478C13.3752 4.62478 12.5186 3.76813 11.4083 3.29851C11.4083 3.29851 10.2592 2.8125 9 2.8125Z" fill="currentColor" fill-opacity="0.2" />
                                <path d="M9 12.9375H9.5625C9.87316 12.9375 10.125 12.6857 10.125 12.375C10.125 12.0643 9.87316 11.8125 9.5625 11.8125V8.4375C9.5625 8.12684 9.31066 7.875 9 7.875H8.4375C8.12684 7.875 7.875 8.12684 7.875 8.4375C7.875 8.74816 8.12684 9 8.4375 9V12.375C8.4375 12.6857 8.68934 12.9375 9 12.9375Z" fill="currentColor" fill-opacity="0.2" />
                                <path d="M9.70312 5.90625C9.70312 6.37224 9.32533 6.75 8.85938 6.75C8.39342 6.75 8.01562 6.37224 8.01562 5.90625C8.01562 5.44026 8.39342 5.0625 8.85938 5.0625C9.32533 5.0625 9.70312 5.44026 9.70312 5.90625Z" fill="currentColor" fill-opacity="0.2" />
                            </svg>
                        </div>
                        <div class="flex items-center gap-2">
                            <p class="text-sm"><input type="email" readonly value="<?= $user['email'] ?>" placeholder="Email " class="form-input"></p>
                        </div>

                    </div>


                </div>

            </div>
            <div x-show="activeTab === 'settings'" class="flex flex-col gap-7">
                <div class="bg-lightwhite dark:bg-white/5 rounded-2xl p-6">
                    <h2 class="text-lg font-semibold mb-4">Profile Details</h2>
                    <form method="post" data-reload="true" action="<?= base_url('api/admin/profile/update/info') ?>" class="max-w-[540px] grid grid-flow-row gap-4 fetch-form">
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10 dark:border-white/10">
                                <label class="block text-xs text-black/40 dark:text-white/40 mb-1">First Name</label>
                                <input type="text" name="firstname" placeholder="First Name" required value="<?= $user['firstname'] ?>" class="form-input" />
                            </div>
                            <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10 dark:border-white/10">
                                <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Last Name</label>
                                <input type="text" name="lastname" placeholder="Last Name" required value="<?= $user['lastname'] ?>" class="form-input" />
                            </div>
                        </div>
                        <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10 dark:border-white/10">
                            <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Contact
                                Phone</label>
                            <input type="text" name="telephone" value="<?= $user['telephone'] ?? "" ?>" required placeholder="Phone Number" class="form-input" />
                        </div>
                        <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10 dark:border-white/10">
                            <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Email</label>
                            <input type="email" name="email" value="<?= $user['email'] ?? "" ?>" readonly required placeholder="Phone Number" class="form-input" />
                        </div>
                        <div class="mt-3 flex justify-end">
                            <button type="submit" class="btn ">Save</button>
                        </div>
                        <div class="msg-block">

                        </div>

                        <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    </form>
                </div>
                <div class="bg-lightwhite dark:bg-white/5 rounded-2xl p-6">
                    <h2 class="text-lg font-semibold mb-4">Change Password</h2>
                    <form method="post" data-reload="true" action="<?= base_url('api/admin/profile/update/pwd') ?>" class="max-w-[540px] grid grid-flow-row gap-4 fetch-form">

                        <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10 dark:border-white/10">
                            <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Password</label>
                            <input type="password" name="password" autocomplete="off" required class="form-input" />
                        </div>
                        <div class="relative bg-white dark:bg-white/5 py-4 px-5 rounded-lg border border-black/10 dark:border-white/10">
                            <label class="block text-xs text-black/40 dark:text-white/40 mb-1">Re-type Password</label>
                            <input type="password" name="passconf" autocomplete="off" required class="form-input" />
                        </div>
                        <div class="mt-3 flex justify-end">
                            <button type="submit" class="btn ">Save</button>
                        </div>
                        <div class="msg-block">

                        </div>
                        <input type="hidden" name="id" value="<?= $user['id'] ?>">
                    </form>
                </div>
                <div class="bg-lightwhite dark:bg-white/5 rounded-2xl p-6">
                    <h2 class="text-sm font-semibold mb-4">Connect Accounts</h2>
                    <div class="flex">
                        <a href="<?= $GithubAuthorizationUrl ?? "" ?>" role="button" class="btn py-2 px-5 text-sm font-semibold flex items-center gap-4 ">
                            <img src="assets/images/github.svg" alt="images" class="flex-none">
                            <div>
                                <p class="text-sm font-semibold">Github</p>
                            </div>
                        </a>
                    </div>

                </div>

            </div>

        </div>
    </div>
</div>

<?= $this->endSection() ?>

<?= $this->section('footer') ?>
<script>
    function sleep(ms) {
        return new Promise(resolve => setTimeout(resolve, ms));
    }
    const forms = {
        __init: () => {
            $('.fetch-form').submit(async function(e) {
                try {
                    e.preventDefault();
                    $(this).children('.msg-block').html("");

                    const url = $(this).attr('action');;
                    const formdata = new FormData(this);
                    const reload = $(this).data('reload');

                    const options = {
                        method: 'POST',
                        mode: 'cors',
                        cache: 'no-cache',
                        credentials: 'same-origin',
                        body: formdata,
                    }
                    const rawdata = await fetch(url, options);
                    let res = await rawdata.json();

                    if (res.status === "success") {
                        $(this).children('.msg-block').html(forms.html_success(res.msg));

                        if (reload == true) {
                            await sleep(1000);
                            window.location.reload();
                        }


                    } else if (res.status === "bad") {

                        if (typeof res.errors === "string") {
                            $(this).children('.msg-block').html(forms.html_error(res.errors));
                        } else {
                            let errors = Object.values(res.errors);
                            $(this).children('.msg-block').html(forms.html_error(errors.join("<br>")));
                        }

                    }
                } catch (e) {
                    console.log(e);
                    return Promise.reject(new Error("fetch error"))
                }

            })
            $(document).on("click", ".remove-parent", function() {
                $(this).parent().remove();
            })
        },
        html_error: (data) => {
            return `<div class="mt-3 flex items-center rounded bg-lightred p-3 text-white"><div>${data} </div> <button type="button" class="ml-auto hover:opacity-50 rotate-0 hover:rotate-180 transition-all duration-300 remove-parent">
                    <svg class="w-5 h-5" width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M24.2929 6.29289L6.29289 24.2929C6.10536 24.4804 6 24.7348 6 25C6 25.2652 6.10536 25.5196 6.29289 25.7071C6.48043 25.8946 6.73478 26 7 26C7.26522 26 7.51957 25.8946 7.70711 25.7071L25.7071 7.70711C25.8946 7.51957 26 7.26522 26 7C26 6.73478 25.8946 6.48043 25.7071 6.29289C25.5196 6.10536 25.2652 6 25 6C24.7348 6 24.4804 6.10536 24.2929 6.29289Z" fill="currentcolor"></path>
                    <path d="M7.70711 6.29289C7.51957 6.10536 7.26522 6 7 6C6.73478 6 6.48043 6.10536 6.29289 6.29289C6.10536 6.48043 6 6.73478 6 7C6 7.26522 6.10536 7.51957 6.29289 7.70711L24.2929 25.7071C24.4804 25.8946 24.7348 26 25 26C25.2652 26 25.5196 25.8946 25.7071 25.7071C25.8946 25.5196 26 25.2652 26 25C26 24.7348 25.8946 24.4804 25.7071 24.2929L7.70711 6.29289Z" fill="currentcolor"></path>
                    </svg>
                    </button></div>`;
        },
        html_success: (data) => {
            return `<div class="rounded bg-lightgreen-100 p-3 mt-3 text-black">${data}</div>`;
        }
    }
    forms.__init();
</script>

<?= $this->endSection() ?>