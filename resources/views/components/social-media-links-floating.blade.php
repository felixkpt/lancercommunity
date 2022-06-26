<style>
    #content-sidebar-wrapper {
        position: relative;

    }

    #social-media-links-floating #wrapper {
        position: absolute;
        top: 40vh;
        left: 0;
        margin: 0.6rem;
        min-height: 70vh;
        width: 3rem;
        z-index: 2;
    }

    #social-media-links-floating #wrapper #toggler {
        display: none;
    }

    #social-media-links-floating #wrapper a {
        transition: all ease-in-out .4s;
    }

    @media screen and (min-width: 769px) {
        #social-media-links-floating #wrapper a:hover {
            width: 3.4pc;
        }

        #social-media-links-floating #wrapper:hover #toggler {
            display: block;
        }

    }

    @media screen and (max-width: 768px) {
        #social-media-links-floating #wrapper {
            position: relative;
            top: 0;
            margin: 10px;
            min-height: 0;
            width: 100%;
        }

        #social-media-links-floating #wrapper a:hover {
            transform: scale(1.04);
        }
    }
</style>
<div id="social-media-links-floating" class="col-12">
    <div id="wrapper">
        <div id="share-content" class="d-flex flex-md-column gap-2 gap-md-0 justify-content-center">
            @include('/components/social-media-links')
        </div>
        <div id="toggler" class="text-end px-2">
            <span title="Hide/Show share links" class="fa fa-chevron-left text-muted"></span>
        </div>
    </div>
</div>
<script>
    const target = document.querySelector('#social-media-links-floating #wrapper #share-content')
    const toggler = document.querySelector('#social-media-links-floating #wrapper #toggler')
    toggler.addEventListener('click', () => {
        target.classList.toggle('invisible')
        toggler.querySelector('span').classList.toggle('fa-chevron-right')
    })
</script>