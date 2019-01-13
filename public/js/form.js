$('.form-group input').focus((event)=>{
    let curr = event.target.id;
    if(!$('.form-group input#'+curr+' + label').hasClass('label-form')){
        $('.form-group input#'+curr+' + label').addClass('label-form');
    }
});
$('.form-group input').blur((event)=>{
    let curr = event.target.id;
    if($('.form-group input#'+curr).val().length <= 0){
        $('.form-group input#'+curr+' + label').toggleClass('label-form');
    }
});
const hideLeft = () => {
    $('div.flex-right > div#right').addClass('hide');
    $('div.flex-left > *:not(div#left)').addClass('hide');
    $('div.flex-left > div#left').removeClass('hide');
    $('div.flex-left.active').removeClass('active');
    $('div.flex-right').addClass('active');
    $('div.flex-right > *:not(div#right)').removeClass('hide');
};
const hideRight = () => {
    $('div.flex-left > div#left').addClass('hide');
    $('div.flex-right > *:not(div#right)').addClass('hide');
    $('div.flex-right > div#right').removeClass('hide');
    $('div.flex-right.active').removeClass('active');
    $('div.flex-left').addClass('active');
    $('div.flex-left > *:not(div#left)').removeClass('hide');
};
$('button#noleftbtn').click(hideRight);
$('button#norightbtn').click(hideLeft);

let wscreen = window.location.pathname;
if(wscreen == '/login'){
    hideLeft();
}