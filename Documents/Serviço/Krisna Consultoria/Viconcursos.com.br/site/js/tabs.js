
function loadTabContent(tabUrl){if(tabUrl.length>0)
{$("#preloader").show();jQuery.ajax({url:tabUrl,cache:false,success:function(message){jQuery("#tabcontent").empty().append(message);$("#preloader").hide();}});}}
jQuery(document).ready(function(){$("#preloader").hide();jQuery("[id^=tab]").click(function(){tabId=$(this).attr("id");tabUrl=jQuery("#"+tabId).attr("href");jQuery("[id^=tab]").parent().removeClass("abaSel");jQuery("#"+tabId).parent().addClass("abaSel");loadTabContent(tabUrl);return false;});});