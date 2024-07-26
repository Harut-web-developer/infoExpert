<?php
/** @var yii\web\View $this */
$this->registerCssFile('@web/css/alumni.css');

?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

<!-- Mariam  80 ev Harut 20-->
<div class="alumni">
    <div class="sectionAlumni">
        <div class="alumniDiv">
            <div class="alumniTitleAll">
                <a href="javascript:history.go(-1)" class="alumniBackButton">
                    <img class="backButton" src="/images/backButton.png" alt="">
                    <img class="ellipseButton" src="/images/Ellipse2.png" alt="">
                </a>
                <div class="alumniTitle">
                    <?=$GLOBALS['text']['alumniTitle']?>
                </div>
            </div>
            <p class="alumniTxt"><?=$GLOBALS['text']['alumniText']?></p>
        </div>
        <div class="swiper mySwiper swiper-container forMobileAlumni">
            <div class="swiper-wrapper">
                <?php if (!empty($alumni)){ foreach ($alumni as $alumnus){?>
                    <div class="swiper-slide card_">
                        <div class="card-image">
                            <?php if (!empty($alumnus['img'])){?>
                                <img src="/<?=$alumnus['img']?>" alt="">
                            <?php }else{ ?>
                                <img src="/images/avatar.png" alt="">
                            <?php } ?>
                        </div>
                        <div class="card-info">
                            <span class="nameCard"><?=$alumnus['alumni']?></span>
                            <div class="textCard"><?=$alumnus['text']?></div>
                            <a target="<?=$alumnus['linkedin_link'] ? '_blank' : ''?>" href="<?=$alumnus['linkedin_link'] ?? '#'?>">
                                <img src="/images/alumniin.png">
                            </a>
                        </div>
                    </div>
                <?php }} ?>
            </div>
            <div class="swiper-pagination"></div>
        </div>
        <div class="mobileAlumni">
            <?php if (!empty($alumni)){ foreach ($alumni as $alumnus){?>
                <div class="card_">
                    <div class="card-image">
                        <?php if (!empty($alumnus['img'])){?>
                            <img src="/<?=$alumnus['img']?>" alt="">
                        <?php }else{ ?>
                            <img src="/images/avatar.png" alt="">
                        <?php } ?>
                    </div>
                    <div class="card-info">
                        <span class="nameCard"><?=$alumnus['alumni']?></span>
                        <div class="textCard"><?=$alumnus['text']?></div>
                        <a target="<?=$alumnus['linkedin_link'] ? '_blank' : ''?>" href="<?=$alumnus['linkedin_link'] ?? '#'?>">
                            <img src="/images/alumniin.png">
                        </a>
                    </div>
                </div>
            <?php }} ?>
            <div class="alumniBtnField">
                <img id="alumniBtnSeeMore" src="/images/seeMoreAlumni.png" alt="" class="seeMoreAlumni">
            </div>
        </div>
    </div>
</div>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<!-- Initialize Swiper -->
<script>

    if (window.innerWidth < 600) {
        // swiper.destroy();
        let seeMoreBtnAlumni = document.querySelector('#alumniBtnSeeMore');
        let alumni = [...document.querySelectorAll('.mobileAlumni .card_')];
        let currentItemAlumni = 2;
        if (seeMoreBtnAlumni != null) {
            if (currentItemAlumni >= alumni.length) {
                seeMoreBtnAlumni.style.display = 'none';
            }
            seeMoreBtnAlumni.onclick = () => {
                let itemsToShow = 2;
                for (let i = currentItemAlumni; i < currentItemAlumni + itemsToShow; i++) {
                    console.log(alumni)
                    if (i < alumni.length) {
                        alumni[i].style.display = 'flex';
                    }
                }
                currentItemAlumni += itemsToShow;
                if (currentItemAlumni >= alumni.length) {
                    seeMoreBtnAlumni.style.display = 'none';
                }
            }
        }
    }else {
        var swiper = new Swiper(".mySwiper", {
            direction: 'horizontal',
            slidesPerView: 'auto',
            // slidesPerView: 4,
            loop: true,
            grid: {
                rows: 2,
            },
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,

            },
            breakpoints: {
                780: {
                    slidesPerView: 3,
                    spaceBetween: 20,
                },
                1000: {
                    slidesPerView: 4,
                    spaceBetween: 15,
                },
                1060: {
                    slidesPerView: 4,
                    spaceBetween: 30,
                },
                1101: {
                    slidesPerView: 2,
                    spaceBetween: 50,
                },
                1180: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1340: {
                    slidesPerView: 3,
                    spaceBetween: 30,
                },
                1550: {
                    slidesPerView: 4,
                    spaceBetween: 20,
                },
                2100: {
                    slidesPerView: 5,
                    spaceBetween: 20,
                },
                2400: {
                    slidesPerView: 5,
                    spaceBetween: 20,
                },
                2600: {
                    slidesPerView: 6,
                    spaceBetween: 20,
                },
            }
        });
    }
    if ($('.swiper-slide').length > 60) {
        swiper.pagination.destroy();
        $('.swiper-pagination').css('display','none');
    }
</script>