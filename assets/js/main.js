$(document).ready(function() {
    const dropdown = $('.dropdown-trigger');
    const fixedBtn = $('.fixed-action-btn');

    if (dropdown.length) {
        dropdown.dropdown({
            constrainWidth: false
        });
    }

    if (fixedBtn.length) {
        fixedBtn.floatingActionButton();
    }

    M.updateTextFields();
});