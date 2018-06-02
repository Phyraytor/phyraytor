// Анимация при прокрутке так и незаработала...((
/*var isScrolling = false;
 
window.addEventListener("scroll", throttleScroll, false);

function throttleScroll(e) 
{
    if (isScrolling == false) 
    {
        window.requestAnimationFrame( function() 
        {
          scrolling(e);
          isScrolling = false;
        });
      }
      isScrolling = true;
    }

document.addEventListener("DOMContentLoaded", scrolling, false);


var $Header = document.querySelector("header");
var $mainFoto = document.querySelector(".mainFoto");

function scrolling(e) 
{ 
    if ( isFullyVisible($mainFoto) ) 
    {
      alert('Visible Header');
      $('header').addClass("headerAnimate");
    } 
    else 
    {
      $('header').removeClass("headerAnimate");
    }

    if (isFullyVisible( $('.mainFoto') ) ) 
    {
      $('.mainFoto').addClass("mainAnimateFoto");
    } 
    else 
    {
      $('.mainFoto').removeClass("mainAnimateFoto");
    }

    if (isFullyVisible( $('.description') ) ) 
    {
      $('.description').addClass("mainAnimateDes");
    } 
    else 
    {
      $('.description').removeClass("mainAnimateDes");
    }

    if (isFullyVisible( $('.application') ) ) 
    {
      $('.application').addClass("mainAnimateApp");
    } 
    else 
    {
      $('.application').removeClass("mainAnimateApp");
    }
}


    function isPartiallyVisible(el) {
      var elementBoundary = el.getBoundingClientRect();
 
      var top = elementBoundary.top;
      var bottom = elementBoundary.bottom;
      var height = elementBoundary.height;
 
      return ((top + height >= 0) && (height + window.innerHeight >= bottom));
    }
/*

  if ($(this).scrollTop() > 500 && $(this).scrollTop() < 1200)
  {  
     $('#skillOne').addClass("skillOneAnimate");  
     $('#skillTwo').addClass("skillTwoAnimate"); 
     $('#skillThree').addClass("skillThreeAnimate"); 
     $('#skillFour').addClass("skillFourAnimate"); 
  } 

  if ($(this).scrollTop() > 1200 && $(this).scrollTop() < 2200)
  {  
     $('.OneBonus').addClass("OneBonusAnimate");
     $('.TwoBonus').addClass("TwoBonusAnimate"); 
     $('.ThreeBonus').addClass("ThreeBonusAnimate"); 
     $('.FourBonus').addClass("FourBonusAnimate"); 
  } 

  if ($(this).scrollTop() > 2200 && $(this).scrollTop() < 3300)
  {  
     $('.OneExam').addClass("OneExamAnimate");
     $('.TwoExam').addClass("TwoExamAnimate"); 
     $('.ThreeExam').addClass("ThreeExamAnimate"); 
     $('.FourExam').addClass("FourExamAnimate"); 
  } 

  if ($(this).scrollTop() > 3300 && $(this).scrollTop() < 4000)
  {  
     $('.TZ').addClass("TZAnimate");
     $('.message .application').addClass("TZapplicationAnimate"); 
  } 

*/
function DeathHover()
{
  $(".death0").css("fill", "#0D4C0C");// Рамка
  $(".death1").css("fill", "#045C0C");  // Внутрення рамка
  $(".death2").css("fill", "#0B580C"); // Под внутренней рамкой полоса
  $(".death3").css("fill", "#0D530C");  // Посола ещё ниже
  $(".death4").css("fill", "#FFFFFF");  // Дырки
  $(".death5").css("fill", "#045C0C"); // Описание
  $(".death6").css("fill", "#008640");  // Строки в описании
}

function DeathMouseOut()
{
  $(".death0").css("fill", "#5D2C0C");// Рамка
  $(".death1").css("fill", "#843C0C");  // Внутрення рамка
  $(".death2").css("fill", "#7B380C"); // Под внутренней рамкой полоса
  $(".death3").css("fill", "#6D330C");  // Посола ещё ниже
  $(".death4").css("fill", "#FFFFFF");  // Дырки
  $(".death5").css("fill", "#843C0C"); // Описание
  $(".death6").css("fill", "#A06640");  // Строки в описании
}