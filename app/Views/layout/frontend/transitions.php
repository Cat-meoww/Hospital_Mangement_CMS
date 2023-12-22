<style>
    @keyframes fade-in {
        from {
            opacity: 0;
            transform: rotate(-40deg);
            transform: scale(0);
        }
    }



    @keyframes slide-from-right {
        from {
            opacity: 0;
            transform: translateX(30px);
            transform: rotate(40deg);
            transform: scale(0.5);
        }
    }





    

    ::view-transition-old(blog-image),
    ::view-transition-new(blog-image) {
        animation: 210ms cubic-bezier(0, 0, 0.2, 1) 90ms both fade-in,
            300ms cubic-bezier(0.4, 0, 0.2, 1) both slide-from-right;
        mix-blend-mode: normal;
        height: 100%;
        /* Clip any overflow of the view */
        overflow: clip
    }

    ::view-transition-image-pair(blog-image) {
        isolation: none;
    }
</style>
<script>
    if ('startViewTransition' in document) {
        // API is supported
        console.log("Dfdf")
        document.startViewTransition((data = 0) => {
            console.log(data)
            // DOM changes to transition to the new page
        });
    } else {
        // Fall back to traditional methods
    }
</script>