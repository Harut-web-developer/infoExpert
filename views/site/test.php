    <!DOCTYPE html>
<html lang="en" dir="ltr">
<head>

    <style>
        .asa{
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        selector{
            --radius: 8px;
            --height: 320px;
            --active-height: 410px;
            --overlay: 0.75;
        }
        selector{
            opacity: 0;
            transform: translateX(100px);
            transition: all 0.8s ease-in-out;
        }
        selector.loaded{
            opacity: 1;
            transform: translateX(0);
        }

        selector .swiper-wrapper{
            height: var(--active-height);
            align-items: center;
        }
        selector:not(.loaded) .swiper-wrapper{
            transition-duration: 0s !important;
        }
        selector .swiper-slide{
            display: flex;
            align-items: flex-end;
            border-radius: var(--radius);
            height: var(--height);
            box-shadow: 0 0 50px rgba(0,0,0,0.15);
        }
        selector.loaded .swiper-slide{
            transition: all 0.3s ease-in-out 0.2s;
        }
        selector .swiper-slide.swiper-slide-active{
            height: var(--active-height);
        }
        selector .swiper-slide:before{
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            background: rgb(0,0,0);
            background: linear-gradient(20deg, rgba(0,0,0,var(--overlay)) 0%, rgba(0,0,0,0) 100%);
            height: 100%;
            width: 100%;
            z-index: 1;
        }
        selector .elementor-testimonial__footer{
            display: block;
        }
        selector img{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border-radius: var(--radius);
        }
        selector .elementor-testimonial__cite{
            z-index: 2;
            position: relative;
        }
        selector .elementor-testimonial__name{
            margin-bottom: 5px;
        }
        selector .swiper-pagination,
        selector .elementor-swiper-button{
            display: none;
        }
        selector .swiper-container{
            overflow: hidden;
            margin-left: auto;
            margin-right: auto;
        }

        @media (max-width: 1024px){
            selector{
                --height: 180px;
                --active-height: 250px;
            }
        }
        @media (max-width: 767px){
            selector{
                --height: 80px;
                --active-height: 105px;
                width: 100% !important;
                max-width: var(--container-widget-width, 300px) !important;
            }
            selector .elementor-testimonial__cite{
                opacity: 0;
            }
        }
        selector{
            --speed: 0.8s;
            --gap: 40px;
        }
        selector{
            transition: all 0.3s ease-in-out;
            height: var(--h);
            --height: calc(var(--h) + var(--gap));
        }
        selector .elementor-widget{
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }
        selector .elementor-widget .elementor-widget-container{
            transform: translateY(calc(-10 * var(--height)));
        }
        selector .elementor-widget.prev .elementor-widget-container{
            animation: prev var(--speed) ease-in-out;
            transform: translateY(calc(-1 * var(--height)));
        }
        selector .elementor-widget.next .elementor-widget-container{
            animation: next var(--speed) ease-in-out;
            transform: translateY(var(--height));
        }
        selector .elementor-widget.currentUp,
        selector .elementor-widget.currentDown{
            z-index: 1;
        }
        selector .elementor-widget.currentUp .elementor-widget-container{
            animation: currentUp var(--speed) ease-in-out;
            transform: translateY(0);
        }
        selector .elementor-widget.currentDown .elementor-widget-container{
            animation: currentDown var(--speed) ease-in-out;
            transform: translateY(0);
        }

        @keyframes prev {
            0%   {transform: translateY(0);}
            100%   {transform: translateY(calc(-1 * var(--height)));}
        }

        @keyframes next {
            0%   {transform: translateY(0);}
            100%   {transform: translateY(var(--height));}
        }

        @keyframes currentUp {
            0%   {transform: translateY(var(--height));}
            100%   {transform: translateY(0);}
        }

        @keyframes currentDown {
            0%   {transform: translateY(calc(-1 * var(--height)));}
            100%   {transform: translateY(0);}
        }
        selector{
            --dot-size: 23px;
            --line-color: #B0B7D04D;
            --dot-color: #B0B7D0;
            --dot-color-active: #B0B7D0;
            color: #fff;
            font-size: 13px;
            font-weight: bold;
        }
        selector{
            height: 80vh;
            height: var(--min-height);
            max-height: 80vh;
            min-height: 0 !important;
        }
        selector .dot{
            height: var(--dot-size);
            width: var(--dot-size);
            background: var(--dot-color);
            border-radius: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            transform: scale(0.3);
            transition: all 0.3s ease-in-out;
            cursor: pointer;
        }
        selector .dot-number{
            opacity: 0;
            transition: all 0.3s ease-in-out;
        }
        selector .dot.active{
            transform: scale(1);
            background: var(--dot-color-active);
        }
        selector .dot.active .dot-number{
            opacity: 1;
        }
        selector:before{
            content: "";
            position: absolute;
            top: 50%;
            height: calc(100% - 20px);
            max-height: 90vh;
            width: 1px;
            background: var(--line-color);
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
        }

        @media (max-width: 767px){
            selector{
                transform: translateX(-50%);
                flex-wrap: nowrap !important;
            }
            selector:before {
                width: calc(100% - 20px);
                height: 1px;

            }
        }
        selector{
            --dot-size: 23px;
            --line-color: #B0B7D04D;
            --dot-color: #B0B7D0;
            --dot-color-active: #B0B7D0;
            color: #fff;
            font-size: 13px;
            font-weight: bold;
        }
        selector{
            height: 80vh;
            height: var(--min-height);
            max-height: 80vh;
            min-height: 0 !important;
        }
        selector .dot{
            height: var(--dot-size);
            width: var(--dot-size);
            background: var(--dot-color);
            border-radius: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            transform: scale(0.3);
            transition: all 0.3s ease-in-out;
            cursor: pointer;
        }
        selector .dot-number{
            opacity: 0;
            transition: all 0.3s ease-in-out;
        }
        selector .dot.active{
            transform: scale(1);
            background: var(--dot-color-active);
        }
        selector .dot.active .dot-number{
            opacity: 1;
        }
        selector:before{
            content: "";
            position: absolute;
            top: 50%;
            height: calc(100% - 20px);
            max-height: 90vh;
            width: 1px;
            background: var(--line-color);
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
        }

        @media (max-width: 767px){
            selector{
                transform: translateX(-50%);
                flex-wrap: nowrap !important;
            }
            selector:before {
                width: calc(100% - 20px);
                height: 1px;

            }
        }
        selector{
            background: #fff;
            --background-speed: 0.5s;
        }
        selector .elementor-background-slideshow{
            display: none;
        }
        selector .as-slider-background,
        selector .as-slider-background img{
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            transition: all 1s ease-in-out;
        }
        selector .as-slider-background img{
            object-fit: cover;
            opacity: 0;
            transform: scale(1.1);
        }
        selector .as-slider-background img.prev,
        selector .as-slider-background img.currentBackward,
        selector .as-slider-background img.currentForward{
            opacity: 1;
            transform: scale(1.1);
        }

        selector .as-slider-background img.currentBackward,
        selector .as-slider-background img.currentForward{
            z-index: 1;
            opacity: 1;
            animation: bgNext var(--background-speed) linear;
            transition: all 1s ease-in-out;
            transform: scale(1);
        }

        selector:before{
            z-index: 2;
        }
        selector > .elementor-element{
            z-index: 3;
        }

        selector .as-bar,
        selector .as-slider-left,
        selector .as-slider-right{
            opacity: 0;
            transition: all 0.8s ease-in-out;
        }
        selector.loaded .as-bar,
        selector.loaded .as-slider-left,
        selector.loaded .as-slider-right{
            opacity: 1;
        }
        /*selector .ds-slider-left a:focus,*/
        /*selector .ds-slider-right a:focus{*/
        /*    outline: none !important;*/
        /*}*/

        @keyframes bgNext {
            0%   {opacity: 0; transform: scale(1.1);}
            100%   {opacity: 1; transform: scale(1);}
        }

        @media (min-width: 768px){
            selector .as-bar,
            selector .as-slider-left,
            selector .as-slider-right{
                position: relative;
            }
        }

        @media (max-width: 1380px) and (min-width: 768px){
            selector{
                padding-left: 4%;
                padding-right: 4%;
            }
        }

        @media (max-width: 767px){
            selector .as-slider-left{
                left: calc(50% - 300px/2) !important;
            }
            selector .as-slider-right{
                right: calc(50% - 300px/2) !important;
            }
        }
        @media (max-width: 1750px) and (min-width: 1381px){
            selector{
                padding-left: 8%;
                padding-right: 12%;
            }
        }
        @media (max-width: 1380px) and (min-width: 768px){
            selector{
                padding-left: 0.5%;
                padding-right: 5.5%;
            }
        }
    </style>
</head>
<body>
<div class="asa">

</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>

    var $ = jQuery

    $(document).ready(function(){

        $('.as-slider').each(function(){

            var $this = $(this),
                currentSlide = 0,
                previousSlide = 0,
                slideNumber = $this.find('.as-side-slider .swiper-slide:not(.swiper-slide-duplicate)').length,
                barHTML = '',
                forward,
                textContainer = $this.find('.as-changing-widget')

            for(var i=0; i<slideNumber;i++){

                barHTML += `<span class="dot"><span class="dot-number">${i+1}</span></span>`
            }

            $this.find('.as-bar .dot').remove()
            $this.find('.as-bar').append(barHTML)
            $this.find('.as-bar .dot').eq(0).addClass('active')

            textContainer.each(function(){
                var texts = $(this).find('.elementor-widget').eq(0)
                texts.addClass('currentUp')
                $(this).css('--h', texts.height()+'px')
            })

            setTimeout(function(){
                $this.addClass('loaded')
                if($this.find('.as-side-slider .swiper-container-initialized, .as-side-slider .swiper-initialized').length){
                    $this.find('.as-side-slider').addClass('loaded')
                }

                var init = setInterval(function(){
                    if($this.find('.as-side-slider .swiper-container-initialized, .as-side-slider .swiper-initialized').length){

                        $this.find('.as-side-slider').addClass('loaded')
                        clearInterval(init)
                    }
                },50)
            }, 500)

            var bgs = JSON.parse($this.attr('data-settings')).background_slideshow_gallery,
                bgHTML = '<div class="as-slider-background">'

            if(bgs){
                bgs.forEach(function(background){
                    bgHTML += `<img src="${background.url}"/>`
                })
            }
            bgHTML += '</div>'

            $this.find('.as-slider-background').remove()
            $this.prepend(bgHTML)

            var backgrounds = $this.find('.as-slider-background img')

            backgrounds.eq(0).addClass('currentForward')

            setInterval(function(){
                currentSlide = $this.find('.as-side-slider .swiper-slide-active').attr('data-swiper-slide-index')
                if(previousSlide != currentSlide) {

                    if( previousSlide < currentSlide ){
                        forward = true
                    }
                    if( previousSlide > currentSlide ){
                        forward = false
                    }
                    if( previousSlide == slideNumber - 1 && currentSlide == 0 ){
                        forward = true
                    }
                    if( previousSlide == 0 && currentSlide == slideNumber - 1 ){
                        forward = false
                    }
                    textContainer.each(function(){
                        var texts = $(this).find('.elementor-widget')

                        $(this).css('--h', texts.eq(currentSlide).height()+'px')

                        texts.removeClass('prev next currentUp currentDown')
                        backgrounds.removeClass('prev currentBackward currentForward')

                        backgrounds.eq(previousSlide).addClass('prev')

                        if(forward) {
                            texts.eq(previousSlide).addClass('prev')
                            texts.eq(currentSlide).addClass('currentUp')

                            backgrounds.eq(currentSlide).addClass('currentForward')

                        }else{
                            texts.eq(previousSlide).addClass('next')
                            texts.eq(currentSlide).addClass('currentDown')

                            backgrounds.eq(currentSlide).addClass('currentBackward')
                        }
                    })

                    $this.find('.as-bar .dot').removeClass('active')
                    $this.find('.as-bar .dot').eq(currentSlide).addClass('active')
                }
                previousSlide = currentSlide
            }, 500)

            $this.find('.as-bar .dot').on('click', function(){

                var index = $(this).index()

                $this.find('.as-side-slider .swiper-pagination-bullet').eq(index).trigger('click')
                $this.find('.as-side-slider .swiper-container').trigger('mouseleave')

            })
            $this.find('.as-slider-left').on('click', function(){

                $this.find('.as-side-slider .elementor-swiper-button-prev').trigger('click')
                $this.find('.as-side-slider .elementor-swiper').trigger('mouseleave')
            })
            $this.find('.as-slider-right').on('click', function(){

                $this.find('.as-side-slider .elementor-swiper-button-next').trigger('click')
                $this.find('.as-side-slider .elementor-swiper').trigger('mouseleave')
            })
            $this.find('.as-slider-left a, .as-slider-right a').on('click', function(e){

                e.preventDefault()
            })

        })
    })

    $(window).on('resize', function(){


        $('.as-slider').each(function(){

            var textContainer = $(this).find('.as-changing-widget')

            textContainer.each(function(){
                var texts = $(this).find('.elementor-widget.currentUp, .elementor-widget.currentDown')

                $(this).css('--h', texts.height()+'px')
            })
        })
    })

</script>
</body>
</html>
