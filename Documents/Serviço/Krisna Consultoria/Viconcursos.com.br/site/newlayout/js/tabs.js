/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function loadTabContent(tabUrl) {
    if (tabUrl.length > 0)
    {
        $("#preloader").show();
        jQuery.ajax({
            url: tabUrl,
            cache: false,
            success: function(message) {
                jQuery("#tabcontent").empty().append(message);
                $("#preloader").hide();
            }
        });
    }
}

jQuery(document).ready(function() {
    $("#preloader").hide();
    jQuery("[id^=tab]").click(function() {
        // get tab id and tab url
        tabId = $(this).attr("id");
        tabUrl = jQuery("#" + tabId).attr("href");

        jQuery("[id^=tab]").parent().removeClass("abaSel");
        jQuery("#" + tabId).parent().addClass("abaSel");
        // load tab content
        loadTabContent(tabUrl);
        return false;
    });
});