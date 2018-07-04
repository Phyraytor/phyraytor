

$(function(){
        $("a[href^='#']").click(function(){
                var _href = $(this).attr("href");
                $("html, body").animate({scrollTop: $(_href).offset().top+"px"}, 2000);
                return false;
        });
});

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