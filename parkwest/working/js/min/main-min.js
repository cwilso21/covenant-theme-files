smoothScroll.init({selector:"[data-scroll]",selectorHeader:"[data-scroll-header]",speed:666,easing:"easeInOutCubic",updateURL:!0,offset:0}),$(document).ready(function(){$(window).scroll(function(){$(this).scrollTop()>100?$(".scrollToTop").fadeIn():$(".scrollToTop").fadeOut()}),$(".nav-sidebar")&&0===$(".sidenav-menu").length&&$(".nav-sidebar ul").addClass("nav sidenav-menu");var e=window.matchMedia("screen and (max-width: 767px)"),a=window.matchMedia("screen and (min-width: 768px) and (max-width: 991px)"),t=window.matchMedia("screen and (min-width: 992px) and (max-width: 1199px)"),r=window.matchMedia("screen and (min-width: 1200px)");if((r.matches||t.matches)&&$(".post-wrapper").length?$(".post-wrapper:nth-of-type(4)").after('<div class="clearfix visible-lg-block visible-md-block"></div>'):a.matches&&$(".post-wrapper").length?$(".post-wrapper:nth-of-type(2n)").after('<div class="clearfix visible-sm-block"></div>'):$(".row .col-xs-6.col-sm-3:nth-of-type(2n)").after('<div class="clearfix visible-xs-block"></div>'),(a.matches||e.matches)&&$(".sidenav-menu").length){var s=$(".sidebar h3").html();$(".sidebar").wrapInner('<div class="dropdown"></div>'),$(".dropdown > h3").replaceWith('<button class="btn btn-primary dropdown-toggle btn-lg" type="button" id="sidebar-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">'+s+'&nbsp;<i class="fa fa-caret-down"></i></button>'),$(".sidenav-menu").addClass("dropdown-menu").removeClass("nav"),$(".sidenav-menu").attr("role","menu"),$(".sidenav-menu").attr("aria-labelledby","sidebar-navigation")}$(".wp-caption").removeAttr("style"),$(".jumbotron.callout p a").unwrap(),$("p:empty").remove(),$(".text-center").prev("hr").css("display","none"),$('a[href^="#"]').each(function(){$(this).attr("data-scroll","")});var i=$("iframe[src^='//player.vimeo.com'], iframe[src*='//www.youtube.com'], iframe[src*='//www.google.com/maps'], object, embed");i.each(function(){$(this).removeAttr("height width").addClass("embed-responsive-item"),$(this).wrap('<div class="embed-responsive embed-responsive-16by9"></div>')}),$(".header-text").removeAttr("style"),$(".widecolumn").wrap('<div class="container signup-container><div class="row signup-row"><main class="col-xs-12 col-sm-12 col-md-8 col-lg-8 main-content" role="main"></main></div></div>'),$(".tribe-events-ical.tribe-events-button").removeClass("tribe-events-ical tribe-events-button").addClass("btn btn-primary btn-sm"),$(".tribe-events-gcal.tribe-events-button").removeClass("tribe-events-gcal tribe-events-button").addClass("btn btn-primary btn-sm"),$(".tribe-bar-views-inner select").addClass("form-control"),$(".tribe-bar-date-filter, .tribe-bar-search-filter").wrapInner('<div class="form-group"></div>'),$("#tribe-bar-date, #tribe-bar-search").addClass("form-control"),$("#tribe-events-content h2").removeAttr("class"),$(".tribe-icon-month").html('<i class="fa fa-calendar"></i>Month'),$(".tribe-icon-list").html('<i class="fa fa-list-alt"></i>List'),$(".tribe-icon-day").html('<i class="fa fa-calendar-check-o"></i>Day');var n=$(".tribe-events-calendar th");$(".tribe-events-calendar").length&&n.each(function(){var e=$(".tribe-events-calendar th").attr("data-day-abbr");$(this).text(e)})});