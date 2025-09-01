$(document).ready(function () {
    $('.element-list').hide();

    $('.tags-category-elements .element').on('click', function () {
        let selectedItem = $(this).data('item');

        $('.tags-category-elements .element').removeClass('checked');
        $(this).addClass('checked');

        $('.element-list').hide();
        $('.element-list[data-item="' + selectedItem + '"]').fadeIn(200);
    });

    $('.tags-category-elements .element').first().trigger('click');
});