<div id="social-media-links-floating" class=" st-sticky-share-buttons st-left togglerable st-has-labels st-show-total ">
    <div id="share-content">
        <div class="st-total">
            <span class="st-label">32</span>
            <span class="st-shares">
                Shares
            </span>
        </div>
        <div class="st-btn st-first" data-network="facebook" style="display: inline-block;">
            <img alt="facebook sharing button" src="https://platform-cdn.sharethis.com/img/facebook.svg">
            <span class="st-label">4</span>
        </div>
        <div class="st-btn" data-network="twitter" style="display: inline-block;">
            <img alt="twitter sharing button" src="https://platform-cdn.sharethis.com/img/twitter.svg">
            <span class="st-label">17</span>
        </div>
        <div class="st-btn st-hide-label" data-network="email" style="display: inline-block;">
            <img alt="email sharing button" src="https://platform-cdn.sharethis.com/img/email.svg">
            <span class="st-label"></span>
        </div>
        <div class="st-btn st-last" data-network="whatsapp" style="display: inline-block;">
            <img alt="whatsapp sharing button" src="https://platform-cdn.sharethis.com/img/whatsapp.svg">
            <span class="st-label">8</span>
        </div>
    </div>
    <div id="toggler">
        <div class="st-left">
            <img alt="arrow_left sharing button" src="https://platform-cdn.sharethis.com/img/arrow_left.svg">
        </div>
        <div class="st-right">
            <img alt="arrow_right sharing button" src="https://platform-cdn.sharethis.com/img/arrow_right.svg">
        </div>
    </div>
</div>
<style>
    #social-media-links-floating {
        -moz-transition: all 0.2s ease-in;
        -ms-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        -webkit-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
        backface-visibility: hidden;
        display: block;
        position: fixed;
        opacity: 1;
        text-align: left;
        top: 210px;
        z-index: 94034;
    }

    #social-media-links-floating.st-left {
        left: 0px;
    }

    #social-media-links-floating>div {
        clear: left;
        float: left;
    }

    #social-media-links-floating #share-content {
        display: flex;
        flex-direction: column;
    }

    @media screen and (max-width: 1024px) {
        #social-media-links-floating #share-content {
            flex-direction: row;
        }

        #social-media-links-floating #share-content>* {
            flex: 1;
        }
    }

    #social-media-links-floating .st-btn {
        -moz-transition: all 0.2s ease-in;
        -ms-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        -webkit-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
        border: none;
        cursor: pointer;
        display: inline-block;
        height: 48px;
        line-height: 24px;
        margin-bottom: 0;
        opacity: 1;
        overflow: hidden;
        padding: 12px;
        position: relative;
        text-align: left;
        top: 0;
        vertical-align: top;
        white-space: nowrap;
        width: 48px;
    }

    #social-media-links-floating .st-btn.st-first {
        border-top: none;
        border-top-right-radius: 2px;
    }

    #social-media-links-floating .st-btn.st-last {
        border-bottom: none;
        border-bottom-right-radius: 2px;
    }

    #social-media-links-floating .st-btn>img {
        -moz-transition: all 0.2s ease-in;
        -ms-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        -webkit-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
        height: 24px;
        margin-left: 0;
        vertical-align: top;
        width: 24px;
    }

    #social-media-links-floating .st-btn>span {
        -moz-transition: all 0.2s ease-in;
        -ms-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        -webkit-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
        color: #fff;
        display: inline-block;
        font-weight: 500;
        left: -35px;
        letter-spacing: 0.5px;
        opacity: 0;
        padding: 0 6px;
        position: relative;
        vertical-align: top;
        filter: alpha(opacity=0);
    }

    #social-media-links-floating .st-btn.st-hide-label>span {
        display: none !important;
    }

    #social-media-links-floating .st-total {
        -moz-transition: all 0.2s ease-in;
        -ms-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        -webkit-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
        background: #fff;
        color: #555;
        display: inline-block;
        font-weight: 500;
        line-height: 18px;
        margin-right: 0;
        min-height: 34px;
        max-width: 80px;
        opacity: 1;
        padding: 4px 0;
        text-align: center;
        width: 48px;
    }

    #social-media-links-floating .st-total>span {
        display: block;
        font-size: 18px;
        line-height: 21px;
        padding: 0;
    }

    #social-media-links-floating .st-total>span.st-shares {
        font-size: 11px;
        line-height: 11px;
    }

    #social-media-links-floating #toggler {
        left: -48px;
        -moz-transition: all 0.2s ease-in;
        -ms-transition: all 0.2s ease-in;
        -o-transition: all 0.2s ease-in;
        -webkit-transition: all 0.2s ease-in;
        transition: all 0.2s ease-in;
        background: #ccc;
        border-bottom-right-radius: 2px;
        color: white;
        cursor: pointer;
        font-size: 24px;
        line-height: 24px;
        position: relative;
        text-align: center;
        width: 48px;
    }

    #social-media-links-floating.st-left #toggler .st-left {
        display: inline-block;
    }

    #social-media-links-floating.st-left #toggler .st-right {
        display: none;
    }

    #social-media-links-floating:hover #toggler {
        left: 0;
    }

    #social-media-links-floating#togglerable:hover .st-btn.st-last {
        border-bottom-right-radius: 0;
    }

    #social-media-links-floating#togglerable:hover .st-btn.st-last:hover {
        border-bottom-right-radius: 2px;
    }

    #social-media-links-floating .st-btn:hover {
        border-bottom-right-radius: 2px;
        border-top-right-radius: 2px;
    }

    #social-media-links-floating.st-has-labels .st-btn:hover {
        width: 120px;
    }

    #social-media-links-floating .st-btn.st-hide-label:hover {
        width: 62px;
    }

    #social-media-links-floating .st-btn:hover>img {
        margin-left: 5px;
    }

    #social-media-links-floating .st-btn:hover>span {
        opacity: 1;
        display: inline-block;
        left: 0;
        filter: alpha(opacity=100);
    }

    @media (max-width: 1024px) {
        #social-media-links-floating .st-btn:hover>span {
            display: none;
        }
    }

    @media (max-width: 1024px) {
        #social-media-links-floating {
            bottom: 0;
            display: flex;
            left: 0;
            right: 0;
            top: auto;
            width: 100%;
        }

        #social-media-links-floating>div {
            -moz-flex: 1;
            -ms-flex: 1;
            -webkit-flex: 1;
            clear: none;
            flex: 1;
            float: none;
        }

        #social-media-links-floating .st-total {
            background: #fff;
            padding: 6px 8px;
        }

        #social-media-links-floating .st-btn {
            -moz-border-radius: 0 !important;
            -webkit-border-radius: 0 !important;
            border-radius: 0 !important;
            text-align: center;
            width: auto;
        }

        #social-media-links-floating .st-btn>span {
            display: none;
        }

        #social-media-links-floating #toggler {
            display: none;
        }
    }

    #social-media-links-floating .st-btn[data-network='facebook'] {
        background-color: #4267B2;
    }

    #social-media-links-floating .st-btn[data-network='facebook']>span {
        color: #fff;
    }

    #social-media-links-floating .st-btn[data-network='twitter'] {
        background-color: #55acee;
    }

    #social-media-links-floating .st-btn[data-network='twitter']>span {
        color: #fff;
    }

    #social-media-links-floating .st-btn[data-network='email'] {
        background-color: #7d7d7d;
    }

    #social-media-links-floating .st-btn[data-network='email']>span {
        color: #fff;
    }

    #social-media-links-floating .st-btn[data-network='whatsapp'] {
        background-color: #25d366;
    }

    #social-media-links-floating .st-btn[data-network='whatsapp']>span {
        color: #fff;
    }

    @media screen and (min-width: 769px) {
        .slidetoview-init {
            transform: translateX(-300px);
            animation: slidetoview 1s ease 4s 1 normal forwards;
        }

        .slidetoview {
            transform: translateX(-150px);
            animation: slidetoview 1.5s ease .01s 1 normal forwards;
        }

        #social-media-links-floating a:hover {
            width: 3.4pc;
        }

        #social-media-links-floating:hover #toggler {
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
</style>
<script>
    const target = document.querySelector('#social-media-links-floating #share-content')
    const toggler = document.querySelector('#social-media-links-floating #toggler')
    toggler.addEventListener('click', () => {
        target.classList.remove('slidetoview-init')
        if (target.classList.contains('social-invisible')) {
            target.classList.add('slidetoview')
            target.classList.remove('social-invisible')

        } else {
            target.classList.add('social-invisible')
            target.classList.remove('slidetoview')
        }

        toggler.querySelector('span').classList.toggle('fa-chevron-right')
    })
</script>