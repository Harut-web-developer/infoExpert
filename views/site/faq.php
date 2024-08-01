<!-- Harut-->
<div class="sectionFourPage">
    <div class="answers answers-faq">
        <div class="frequencyPage">
            <span class="freqAsked"><?=$GLOBALS['text']['sectionFourTitle']?></span>
            <span class="freqLook"><?=$GLOBALS['text']['sectionFourLooking']?></span>
        </div>
        <div class="questions">
            <div class="leftQuestions">
                <?php if(!empty($answers)){foreach ($first_part_faq as $part_one){?>
                    <div class="answersField">
                        <div class="questionField">
                            <span><?=$part_one['question']?></span>
                            <img src="/images/arrowDown.png" alt="">
                        </div>
                        <div class="answerQuestion"><?=$part_one['answer']?></div>
                    </div>
                <?php }}?>
            </div>
            <div class="rightQuestions">
                <?php if($total_rows_faq > 1){foreach ($second_par_faq as $part_two){?>
                    <div class="answersField">
                        <div class="questionField">
                            <span><?=$part_two['question']?></span>
                            <img src="/images/arrowDown.png" alt="">
                        </div>
                        <div class="answerQuestion"><?=$part_two['answer']?></div>
                    </div>
                <?php }}?>
            </div>
        </div>
    </div>
</div>
