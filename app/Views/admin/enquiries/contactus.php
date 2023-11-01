<?= $this->extend('layout/admin/main') ?>
<?= $this->section('head') ?>
<style>
    .whitespace-pre-line {
        white-space: pre-line;
    }

    .word-break {
        word-break: break-word;
    }

    .capitalize {
        text-transform: capitalize;
    }
</style>
<?= $this->endSection() ?>
<?= $this->section('content') ?>
<div x-data="{activeTab:'inbox'}" class="tabs flex flex-col md:flex-row items-start gap-4 md:gap-7">

    <div class="tab-content w-full md:w-auto flex-1">

        <div x-data="{selectedMail: false}" class="flex flex-row items-start gap-7 relative">
            <div class="lg:max-w-[250px] xl:max-w-[326px] w-full flex-1 flex flex-col gap-2">
                <div class="bg-lightwhite dark:bg-white/5 p-2 rounded-lg flex items-center gap-2">
                    <div class="px-2">
                        <input id="all" name="remember-me" type="checkbox" class="h-3 w-3 rounded border bg-white dark:bg-white/20 border-black/20 dark:border-white/20 text-black focus:ring-0 focus:ring-offset-0 focus:shadow-none focus:outline-0" />
                    </div>
                    <button type="button" class="p-1 text-black dark:text-white rounded-lg bg-transparent hover:bg-black/5 dark:hover:bg-white/5 transition-all duration-300">
                        <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15 9.375H5C4.83424 9.375 4.67527 9.44085 4.55806 9.55806C4.44085 9.67527 4.375 9.83424 4.375 10C4.375 10.1658 4.44085 10.3247 4.55806 10.4419C4.67527 10.5592 4.83424 10.625 5 10.625H15C15.1658 10.625 15.3247 10.5592 15.4419 10.4419C15.5592 10.3247 15.625 10.1658 15.625 10C15.625 9.83424 15.5592 9.67527 15.4419 9.55806C15.3247 9.44085 15.1658 9.375 15 9.375Z" fill="currentcolor"></path>
                            <path d="M18.125 5.625H1.875C1.70924 5.625 1.55027 5.69085 1.43306 5.80806C1.31585 5.92527 1.25 6.08424 1.25 6.25C1.25 6.41576 1.31585 6.57473 1.43306 6.69194C1.55027 6.80915 1.70924 6.875 1.875 6.875H18.125C18.2908 6.875 18.4497 6.80915 18.5669 6.69194C18.6842 6.57473 18.75 6.41576 18.75 6.25C18.75 6.08424 18.6842 5.92527 18.5669 5.80806C18.4497 5.69085 18.2908 5.625 18.125 5.625Z" fill="currentcolor"></path>
                            <path d="M11.875 13.125H8.125C7.95924 13.125 7.80027 13.1908 7.68306 13.3081C7.56585 13.4253 7.5 13.5842 7.5 13.75C7.5 13.9158 7.56585 14.0747 7.68306 14.1919C7.80027 14.3092 7.95924 14.375 8.125 14.375H11.875C12.0408 14.375 12.1997 14.3092 12.3169 14.1919C12.4342 14.0747 12.5 13.9158 12.5 13.75C12.5 13.5842 12.4342 13.4253 12.3169 13.3081C12.1997 13.1908 12.0408 13.125 11.875 13.125Z" fill="currentcolor"></path>
                        </svg>
                    </button>
                </div>
                <div class="space-y-2 md:h-[calc(100vh-225px)] overflow-y-auto">
                    <?php foreach ($leads as $lead) : ?>
                        <button data-mailid="<?= esc($lead->email) ?>" data-username="<?= esc($lead->name) ?>" data-telephone="<?= esc($lead->telephone) ?>" data-created_on="<?= humanizeDateTime($lead->created_on) ?>" data-subject="<?= $lead->subject ?>" data-comments="<?= $lead->comments ?>" @click="selectedMail = true" class="p-2 bg-transparent capitalize w-full border-b border-black/5 dark:border-white/5 rounded-lg flex items-start gap-2 hover:border-transparent hover:bg-black/5 dark:hover:bg-white/5 transition-all duration-300 mailbtn">
                            <div class="flex-1 flex items-start gap-2 p-1">

                                <div class="flex-1 text-left">
                                    <p class="line-clamp-1 "><?= esc($lead->name) ?></p>
                                    <p class="text-xs text-black/40 dark:text-white/40 line-clamp-1"><?= esc($lead->subject) ?></p>
                                </div>
                            </div>
                            <p class="flex-none text-xs text-black/40 dark:text-white/40"><?= humanizeDateTime($lead->created_on) ?></p>
                        </button>
                    <?php endforeach; ?>
                </div>
            </div>
            <div class="flex-1 md:h-[calc(100vh-173px)] overflow-y-auto absolute top-0 left-0 bg-white dark:bg-black md:static w-full" :class="!selectedMail ? 'hidden md:block' : ''">
                <div class="px-4 py-3 mb-2 bg-lightwhite dark:bg-white/5 rounded-lg flex items-center gap-3">
                    <button type="button" class="md:hidden inbox-msgbox hidden" @click="selectedMail = false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewbox="0 0 256 256">
                            <path d="M224,128a8,8,0,0,1-8,8H59.31l58.35,58.34a8,8,0,0,1-11.32,11.32l-72-72a8,8,0,0,1,0-11.32l72-72a8,8,0,0,1,11.32,11.32L59.31,120H216A8,8,0,0,1,224,128Z">
                            </path>
                        </svg>
                    </button>
                    <p class="font-semibold">Contact us enquiries</p>
                </div>
                <div class="p-2 mb-4 bg-lightwhite dark:bg-white/5 rounded-lg flex flex-wrap items-start justify-between gap-3 inbox-msgbox hidden">
                    <div class="flex-1 flex items-start gap-2 p-1">

                        <div class="flex-1 text-left">
                            <p> <span id="mailusername"></span> <span class="text-black/40 dark:text-white/40">|</span> <a href="" class="__cf_email__" id="mailid">[]</a>
                            </p>
                            <p class="text-xs text-black/40 dark:text-white/40" id="sent_on">Today, 18:30</p>
                        </div>
                    </div>
                    <div class="flex-none flex items-center gap-1">

                        <button class="p-1 rounded-lg text-black dark:text-white hover:bg-black/5 dark:hover:bg-white/50">
                            <svg width="20" height="20" viewbox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5 8.75C5.69036 8.75 6.25 9.30964 6.25 10C6.25 10.6904 5.69036 11.25 5 11.25C4.30964 11.25 3.75 10.6904 3.75 10C3.75 9.30964 4.30964 8.75 5 8.75Z" fill="currentcolor" />
                                <path d="M10 8.75C10.6904 8.75 11.25 9.30964 11.25 10C11.25 10.6904 10.6904 11.25 10 11.25C9.30964 11.25 8.75 10.6904 8.75 10C8.75 9.30964 9.30964 8.75 10 8.75Z" fill="currentcolor" />
                                <path d="M16.25 10C16.25 9.30964 15.6904 8.75 15 8.75C14.3096 8.75 13.75 9.30964 13.75 10C13.75 10.6904 14.3096 11.25 15 11.25C15.6904 11.25 16.25 10.6904 16.25 10Z" fill="currentcolor" />
                            </svg>
                        </button>
                    </div>
                </div>
                <div class="border border-black/10 dark:border-white/10 rounded-lg pt-10 md:h-[calc(100vh-301px)] overflow-auto z">
                    <div class="px-10  border-b border-black/10 dark:border-white/10 inbox-msgbox hidden">

                        <h3 class="text-lg pb-4 font-semibold text-black dark:text-white">Subject : </h3>

                        <p class="mb-7" id="mailsubject">Slack is most useful when your whole team can join the
                            conversation. Try adding people to SnowUI Community to start being more
                            productive together!</p>
                    </div>
                    <div class="py-[18px] px-10  border-b border-black/10 dark:border-white/10 inbox-msgbox hidden  ">

                        <p class=" whitespace-pre-line word-break " id="mailbody">



                        </p>

                    </div>
                    <div class="py-[18px] px-10  inbox-msgbox hidden  ">

                        <h3 class="text-lg pb-4 font-semibold text-black dark:text-white">Address  </h3>
                        Email: <span id="inboxEmail"></span>,<br>
                        Phno: <span id="inboxTelephone"></span>,<br>
                        Name: <span id="inboxFrom"></span>.<br>

                    </div>
                    <div class="flex justify-center" id="default-img">
                        <img style="height:32vh;" class="text-center" src="<?= base_url('admin/assets/images/undraw_contact_us.svg') ?>" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<?= $this->endSection() ?>
<?= $this->section('footer') ?>
<script>
    $(document).ready(() => {
        $('.mailbtn').click(function() {
            const username = $(this).data('username');
            const mailid = $(this).data('mailid');
            const subject = $(this).data('subject');
            const comments = $(this).data('comments');
            const created_on = $(this).data('created_on');
            const telephone = $(this).data('telephone');

            $(".inbox-msgbox").removeClass('hidden')
            $("#mailusername").text(username)
            $("#mailid").text(mailid)
            $("#sent_on").text(created_on)
            $("#mailsubject").text(subject)
            $("#default-img").remove()
            $("#mailbody").text(comments)

            $("#inboxFrom").text(username)
            $("#inboxEmail").text(mailid)
            $("#inboxTelephone").text(telephone)
        });
    })
</script>
<?= $this->endSection() ?>