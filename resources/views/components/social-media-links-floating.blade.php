<style>
    #content-sidebar-wrapper {
        position: relative;

    }

    #social-media-links-floating #wrapper {
        position: fixed;
        top: 40vh;
        left: 0;
        margin: 0.06rem;
        min-height: 70vh;
        width: 3rem;
        z-index: 2;
    }

    #social-media-links-floating #wrapper #toggler {
        display: none;
    }

    #social-media-links-floating #wrapper a {
        transition: transform ease-in-out .3s;
    }

    @media screen and (min-width: 769px) {
        .slidetoview-init {
            transform: translateX(-300px);
            animation: slidetoview 1s ease 4s 1 normal forwards;
        }

        .slidetoview {
            transform: translateX(-300px);
            animation: slidetoview 2s ease .01s 1 normal forwards;
        }

        #social-media-links-floating #wrapper a:hover {
            width: 3.4pc;
        }

        #social-media-links-floating #wrapper:hover #toggler {
            display: block;
        }

        .social-invisible {
            animation: slideback 2s ease .01s 1 normal forwards;
        }
    }

    @keyframes slidetoview {
        100% {
            transform: translateX(0);
        }
    }

    @keyframes slideback {
        100% {
            transform: translateX(-300px);
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
    <div id="wrapper" class="">
        <div id="share-content" class="slidetoview-init d-flex flex-md-column gap-2 gap-md-0 justify-content-center">
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
        target.classList.remove('slidetoview-init')
        if (target.classList.contains('social-invisible')) {
            target.classList.add('slidetoview')
            target.classList.remove('social-invisible')
            
        }else {
            target.classList.add('social-invisible')
            target.classList.remove('slidetoview')
        }

        toggler.querySelector('span').classList.toggle('fa-chevron-right')
    })
</script>