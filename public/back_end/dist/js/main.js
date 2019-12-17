// Global time and date script section
window.onload = function () {
    var calender = {
        weekday: 'long',
        year:    'numeric',
        month: 'short',
        day: 'numeric'
    }
    var today = new Date();
    var todayDate = today.toLocaleDateString("en-US", calender);
    document.getElementById('doDateTime').value = todayDate;
}

// Summernote text editor script section started
$('#menuDescription').summernote({
    height: 130,
    toolbar: [
        ['style', ['style']],
        ['font', ['bold', 'underline', 'clear']],
        ['fontname', ['fontname']],
        ['color', ['color']],
        ['para', ['ul', 'ol', 'paragraph']],
        ['table', ['table']],
    ],
    popover: [

    ],

});

