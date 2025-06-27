$('.cs-navbar-tabs [data-href]').on('click', function () {
    let getHref = $(this).attr('data-href');
    let getActiveClass = $('.cs-navbar-tabs').attr('data-active-class');
    $('.cs-navbar-tabs [data-href]').removeClass(getActiveClass);
    // $('.cs-tab-container>div').hide();

    $(this).addClass(getActiveClass);
    $('.cs-tab-container>div').each(function () {
        if ($(this).attr('data-id') == getHref) {
            $(this).removeClass('hidden');
        } else {
            $(this).addClass('hidden');
        }
    });

})

function toggleCheckBox(t, e) {
    let getStatus = $(t).attr('data-status');
    if (getStatus === 'false') {
        $(t).text('Unselect All');
        $('[data-togglecheckbox="' + e + '"]>*').each(function (i) {
            $(this).find('input').prop('checked', true);
        });
        $(t).attr('data-status', 'true');
    } else {
        $(t).text('Select All');
        $('[data-togglecheckbox="' + e + '"]>*').each(function (i) {
            $(this).find('input').prop('checked', false);
        });
        $(t).attr('data-status', 'false');
    }
}

function ClearAllCheckBox(t, e) {
    let getStatus = $(t).attr('data-status');
    if (getStatus === 'false') {
        $('.cs-tab-container').find('input').prop('checked', false);
        $('.cs-tab-container').find('button').attr('data-status', 'false').text('Select All');
    }
}


$(document).on('click','.accordion-card',function(){
    $('.accordion-card').removeClass('active');
    $(this).addClass('active');
});




$('dt').on('click',function (){
   let _getHref = $(this).attr('data-href');
    $('._faq-js').find('dt').removeClass('active');
    $('._faq-js').find('dd').addClass('hidden');
    $(_getHref).toggleClass('hidden');
    $(this).addClass('active');
});



$(document).ready(function() {
    $('ul[data-list-js="true"]').each(function() {
        let $ul = $(this);
        let numberOfItemsToShow = parseInt($ul.attr('data-list'));
        let $listItems = $ul.children('li');

        // Hide all items beyond the specified number
        $listItems.slice(numberOfItemsToShow).addClass('hidden');

        // Handle "Show More" button click
        $('#show-more').on('click', function() {
            let $hiddenItems = $ul.children('li.hidden');

            // Show the next batch of items equal to the number initially shown
            $hiddenItems.slice(0, numberOfItemsToShow).removeClass('hidden');

            // If there are no more hidden items, hide the "Show More" button
            if ($ul.children('li.hidden').length === 0) {
                $(this).hide();
            }
        });
    });
});