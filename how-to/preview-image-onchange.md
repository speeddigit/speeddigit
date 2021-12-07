# Image Preview After Upload

```html

 <div class="col-12 mb-1">
    <label for="inputEmail3" class="col-form-label">Photo</label>
    <input type="file" class="choose form-control" name="image"
        onchange="readImageURL(this);">
    @isset($data->image) 
    <img src="{{ asset($data->image) }}" id="one"
        class="img-thumbnail" style="height: 80px; width:90px">
    @else
    <img src="{{ asset('uploads/no-image.png') }}" id="one"
            style="height: 80px; width:90px">
    @endif
</div>

```

```js
<script type="text/javascript">
    function readImageURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function(e) {
                $('#one')
                    .attr('src', e.target.result)
                    .width(80)
                    .height(80);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
```


```php 

if ($request->hasFile('image')) {
    $image = $request->file('image');
    $imageName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
    Image::make($image)->resize(740, 440)->save('uploads/mojumdar/newsblog/' .$imageName);
    $post->image = 'uploads/mojumdar/newsblog/' . $imageName;
}

```