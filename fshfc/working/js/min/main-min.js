smoothScroll.init({selector:"[data-scroll]",selectorHeader:"[data-scroll-header]",speed:666,easing:"easeInOutCubic",updateURL:!0,offset:0}),$(document).ready(function(){if(!Modernizr.svg)for(var e=document.getElementsByTagName("img"),t=/.*\.svg$/,a=e.length,r=0;a>r;r++)e[r].src.match(t)&&(e[r].src=e[r].src.slice(0,-3)+"png");$(window).scroll(function(){$(this).scrollTop()>100?$(".scrollToTop").fadeIn():$(".scrollToTop").fadeOut()}),$(".nav-sidebar")&&($(".nav.sidenav-menu").length||$(".nav-sidebar ul").addClass("nav sidenav-menu"));var s=window.matchMedia("screen and (max-width: 767px)"),i=window.matchMedia("screen and (min-width: 768px) and (max-width: 991px)"),n=window.matchMedia("screen and (min-width: 992px) and (max-width: 1199px)"),o=window.matchMedia("screen and (min-width: 1200px)");if((o.matches||n.matches)&&$(".post-wrapper").length?$(".post-wrapper:nth-of-type(4)").after('<div class="clearfix visible-lg-block visible-md-block"></div>'):i.matches&&$(".post-wrapper").length?$(".post-wrapper:nth-of-type(2n)").after('<div class="clearfix visible-sm-block"></div>'):$(".row .col-xs-6.col-sm-3:nth-of-type(2n)").after('<div class="clearfix visible-xs-block"></div>'),(i.matches||s.matches)&&$(".sidenav-menu").length){var d=$(".sidebar h3").html();$(".sidebar").wrapInner('<div class="dropdown"></div>'),$(".dropdown > h3").replaceWith('<button class="btn btn-primary dropdown-toggle btn-lg" type="button" id="sidebar-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+d+'&nbsp;<i class="fa fa-caret-down"></i></button>'),$(".sidenav-menu").addClass("dropdown-menu").removeClass("nav"),$(".sidenav-menu").attr("role","menu"),$(".sidenav-menu").attr("aria-labelledby","sidebar-navigation")}$(".wp-caption").removeAttr("style"),$(".jumbotron.callout p a").unwrap(),$("p:empty").remove(),$(".text-center").prev("hr").css("display","none"),$('a[href^="#"]').each(function(){$(this).attr("data-scroll","")});var l=$("iframe[src*='//player.vimeo.com'], iframe[src*='//www.youtube.com'], iframe[src*='//www.google.com/maps'], object, embed");l.each(function(){$(this).removeAttr("height width").addClass("embed-responsive-item"),$(this).wrap('<div class="embed-responsive embed-responsive-16by9"></div>')}),$(".header-text").removeAttr("style"),$(".widecolumn").wrap('<div class="container signup-container><div class="row signup-row"><main class="col-xs-12 col-sm-12 col-md-8 col-lg-8 main-content" role="main"></main></div></div>'),$(".tribe-events-ical.tribe-events-button").removeClass("tribe-events-ical tribe-events-button").addClass("btn btn-primary btn-sm"),$(".tribe-events-gcal.tribe-events-button").removeClass("tribe-events-gcal tribe-events-button").addClass("btn btn-primary btn-sm"),$(".tribe-events-sub-nav").css("display","none"),$(".tribe-bar-views-inner select").addClass("form-control"),$(".tribe-bar-date-filter, .tribe-bar-search-filter").wrapInner('<div class="form-group"></div>'),$("#tribe-bar-date, #tribe-bar-search").addClass("form-control"),$("#tribe-events-content h2").removeAttr("class"),$(".tribe-icon-month").html('<i class="fa fa-calendar"></i>Month'),$(".tribe-icon-list").html('<i class="fa fa-list-alt"></i>List'),$(".tribe-icon-day").html('<i class="fa fa-calendar-check-o"></i>Day'),$(window).resize(function(){var e=$(window).height(),t=$(".content-wrapper").height(),a=$("header").outerHeight()+$("footer").outerHeight();e-a>t&&$(".content-wrapper").css("margin-bottom",e-a-t)}).resize()});