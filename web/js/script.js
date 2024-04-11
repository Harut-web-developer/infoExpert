$(".menuAboutDropDown").hover(function(){
    $('.dropDownAbout').show();
},function(){
    $('.dropDownAbout').hide();
});
$(".menuCoursesDropDown").hover(function(){
    $('.dropDownCources').show();
},function(){
    $('.dropDownCources').hide();
});
$(function() {
    $('a[href*=\\#]').on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
    });
});
$(".questionField").click(function() {
    var panel = $(this).next(".answerQuestion");
    $(".answerQuestion").not(panel).css("display", "none");
    $(".questions").find('img').css({'transform': 'rotate(0deg)'});
    panel.toggle();
    $(this).find('img').css({'transform': 'rotate(180deg)'});
});