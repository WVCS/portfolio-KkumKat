var $form = $('form#contact_form'),
    url = 'https://script.google.com/macros/s/AKfycbzAFW8OpqzlxC-AXuRVA6l7BkgUI-1zIWXNDHgGqRd7YscdkVw5/exec'

$('#form_button').on('click', function(e) {
  e.preventDefault();
  var jqxhr = $.ajax({
    url: url,
    method: "GET",
    dataType: "json",
    data: $form.serializeObject()
  }).success(
    // do something
  );
})
