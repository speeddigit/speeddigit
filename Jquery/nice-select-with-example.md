# jQuery Nice Select 
GitHub: https://github.com/hernansartorio/jquery-nice-select

### Usage

Include jQuery and the plugin.

```
<script src="path/to/jquery.js"></script> 
<script src="path/to/jquery.nice-select.js"></script>
```

Include the plugin styles, either the compiled CSS...

`<link rel="stylesheet" href="path/to/nice-select.css">`

...or, ideally, import the SASS source (if you use SASS) in your main stylesheet for easier customization.


`@import 'nice-select';`

Finally, initialize the plugin.

```js
$(document).ready(function() {
  $('select').niceSelect();
});
```

# Example 

```js

$(document).ready(function() {

var nc = $('#section_id').niceSelect();
nc.niceSelect('destroy');
nc.append('<option value="">All</option>');
nc.niceSelect();

$("#department_id").change(function() {
    var id = $(this).val();
    var url = "{{ route('job_card.get_section_by_department_id', ':id') }}";
    const ajaxUrl = url.replace(":id", id);

    $.ajax({
        url: ajaxUrl
        , type: 'get'
        , success: function(data) {
            $('#section_id').html('');
            nc.niceSelect('destroy');
            nc.append('<option value="">All</option>');
            $.each(data, function(key, data) {
                nc.append('<option value="' + data.id + '">' + data.section_name + '</option>');
            });
            nc.niceSelect();
        }
    });
});

```