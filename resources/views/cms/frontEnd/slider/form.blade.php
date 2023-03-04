@csrf
<div class="col-md-12">
    <label for="inputEmail4" class="form-label">Title</label>
    <input type="text" value="{{old('title') ?? $slider->title}}" name="title" class="form-control" id="inputEmail4" required>
</div>
<div class="col-12">
    <label for="inputAddress" class="form-label">Description</label>
    <textarea required name="description" value="" class="form-control" id="" cols="20" rows="5">{{old('description') ?? $slider->description}}</textarea>
</div>
<div class="col-12">
    <label for="inputAddress2" class="form-label">Image</label>
    <input type="file" class="form-control" id="inputAddress2" name="image" placeholder="Apartment, studio, or floor">
</div>