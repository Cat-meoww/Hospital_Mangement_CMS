<?= $this->extend('layout/admin/main') ?>

<?= $this->section('content') ?>

<div class="flex  flex-row gap-3">
    <div class="bg-lightwhite dark:bg-white/5 p-6 rounded-2xl flex-1">
        <button type="button" id="webauthn-register" class="btn text-black dark:text-white border hover:bg-lightgreen-100 dark:hover:bg-lightgreen-100 border-lightgreen-100 bg-transparent hover:text-black">Create a passkey</button>
        <div class="px-2 py-1 mb-4">
            <h2 class="text-2xl  font-semibold">2-Step Verification is on</h2>
        </div>
        <div class="px-2 py-1 mb-4">

            <p class=" font-normal">
                Two-factor authentication setup is complete. You can now use your authenticator app to generate codes for login.
            </p>
        </div>
        <div class="px-2 py-1 mb-4">
            <h2 class="text-lg  font-semibold">Setup authenticator app</h2>
        </div>
        <div class="px-2 py-1 mb-4">

            <p class=" font-normal">
                Authenticator apps and browser extensions like 1Password, Authy, Microsoft Authenticator, etc. generate one-time passwords that are used as a second factor to verify your identity when prompted during sign- in.
            </p>
        </div>
        <div class="px-2 py-1 mb-4">
            <h2 class="text-lg   font-semibold">Scan the QR code</h2>
        </div>
        <div class="px-2 py-1 mb-4">

        </div>
        <div class="px-2 py-1 mb-4">
            <p class=" font-normal">
                Use an authenticator app or browser extension to scan. Learn more about enabling 2FA
            </p>
        </div>


    </div>




</div>



<?= $this->endSection() ?>

<?= $this->section('footer') ?>
<script src="<?= base_url('admin/assets/js/webauthn/base64url-arraybuffer.js') ?>"></script>
<script src="<?= base_url('admin/assets/js/webauthn/helpers.js') ?>"></script>
<script>
    $(document).ready(() => {
        const auth = {
            state: false,
            __init: function() {
                $('#webauthn-register').click(this.register.bind(this))
            },
            register: async function() {
                try {
                    if (this.state) {

                        console.log("")
                        return Promise.resolve();
                    }
                    this.state = true;

                    const url = "<?= base_url('api/admin/security/webauthn/register') ?>";
                    const options = {
                        method: 'POST',
                        mode: 'cors',
                        cache: 'no-cache',
                        credentials: 'same-origin',
                    }
                    const rawdata = await fetch(url, options);
                    let res = await rawdata.json();
                    if (res.status === "bad") {
                        throw new Error(res?.message ?? "Some thing went wrong")
                    }
                    const publicKey = res.data;

                    //console.log(publicKey);


                    publicKey.challenge = Uint8Array.from(window.atob(publicKey.challenge), c => c.charCodeAt(0))
                    publicKey.user.id = Uint8Array.from(window.atob(publicKey.user.id), c => c.charCodeAt(0))
                    const newCred = await navigator.credentials.create({
                        publicKey
                    })

                    console.log(newCred);
                   

                    const formated = publicKeyCredentialToJSON(newCred);

                    console.log(formated);
                    
                    this.sendWebAuthnResponse(formated)


                    this.state = false;
                } catch (error) {
                    console.error(error)
                    this.state = false;
                }
            },
            sendWebAuthnResponse: async function(body) {
                try {
                    const rawdata = await fetch('<?= base_url('api/admin/security/webauthn/response') ?>', {
                        method: 'POST',
                        credentials: 'include',
                        headers: {
                            'Content-Type': 'application/json'
                        },
                        body: JSON.stringify(body)
                    })
                    let response = await rawdata.json();
                    if (response.status === "bad") {
                        throw new Error(response?.message ?? "Some thing went wrong")
                    }

                    return Promise.resolve(res.data)

                } catch (error) {
                    return Promise.reject(error)
                }
            }


        }
        auth.__init();
    })
</script>

<?= $this->endSection() ?>