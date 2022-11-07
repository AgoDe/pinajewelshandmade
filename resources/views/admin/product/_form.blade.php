<div class="row">
    <div class="col-12 col-sm-12 col-md-12 col-lg-4">
        <div class="vendor-img-upload">
            <div class="imagePreview position-relative text-center border p-1 mb-3">
                <img class="image-preview" src="/assets/images/vendor/vender-upload-preview.jpg" alt="edit" id="preview_image_1"/>
                <div class="thumb-edit">
                    <label for="image_1" class="d-flex-center justify-content-center z-index-3 position-absolute top-0 end-0 p-2 border-0 rounded-circle shadow btn btn-secondary" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="icon an an-pencil-l an-1x"></i></label>
                    <input type="file"
                           id="image_1"
                           class="vd-image-upload d-none"
                           accept=".png, .jpg, .jpeg"
                           value="{{old('image_1', $product->image_1)}}"
                           name="image_1"
                           required
                    >
                </div>
            </div>
            @error('image_1')
            <div class="input_error">{{$message}}</div>
            @enderror
            <div class="row g-2 thumb-upload-set px-3 mb-4">
                <div class="col-4 col-sm-3 col-md-2 col-lg-4 thumb-upload">
                    <div class="thumb-preview position-relative border p-1">
                        <img class="thumb-preview" src="/assets/images/vendor/vender-upload-preview.jpg" alt="edit" id="preview_image_2">
                        <div class="thumb-edit">
                            <label for="image_2" class="d-flex-center justify-content-center position-absolute top-0 end-0 p-2 border-0 rounded-circle shadow btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="icon an an-pencil-l an-1x"></i></label>
                            <input type="file"
                                   id="image_2"
                                   class="vd-image-upload d-none"
                                   accept=".png, .jpg, .jpeg"
                                   value="{{old('image_2', $product->image_2)}}"
                                   name="image_2"
                            >
                        </div>
                    </div>
                    @error('image_2')
                    <div class="input_error">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-4 col-sm-3 col-md-2 col-lg-4 thumb-upload">
                    <div class="thumb-preview position-relative border p-1">
                        <img class="thumb-preview" src="/assets/images/vendor/vender-upload-preview.jpg" alt="edit" id="preview_image_3">
                        <div class="thumb-edit">
                            <label for="image_3" class="d-flex-center justify-content-center position-absolute top-0 end-0 p-2 border-0 rounded-circle shadow btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="icon an an-pencil-l an-1x"></i></label>
                            <input type="file"
                                   id="image_3"
                                   class="thumb-upload d-none"
                                   accept=".png, .jpg, .jpeg"
                                   value="{{old('image_3', $product->image_3)}}"
                                   name="image_3"
                            >
                        </div>
                    </div>
                    @error('image_3')
                    <div class="input_error">{{$message}}</div>
                    @enderror
                </div>
                <div class="col-4 col-sm-3 col-md-2 col-lg-4 thumb-upload">
                    <div class="thumb-preview position-relative border p-1">
                        <img class="thumb-preview" src="/assets/images/vendor/vender-upload-preview.jpg" alt="edit" id="preview_image_4">
                        <div class="thumb-edit">
                            <label for="image_4" class="d-flex-center justify-content-center position-absolute top-0 end-0 p-2 border-0 rounded-circle shadow btn" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit"><i class="icon an an-pencil-l an-1x"></i></label>
                            <input type="file"
                                   id="image_4"
                                   class="thumb-upload d-none"
                                   accept=".png, .jpg, .jpeg"
                                   value="{{old('image_4', $product->image_4)}}"
                                   name="image_4"
                            >
                        </div>
                    </div>
                    @error('image_4')
                    <div class="input_error">{{$message}}</div>
                    @enderror
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-sm-12 col-md-12 col-lg-8">
        <form class="row g-3 vendor-upload-detail">
            <div class="col-md-6">
                <label for="name" class="form-label">Nome</label>
                <input type="text"
                       class="form-control"
                       id="name"
                       name="name"
                       value="{{old('name', $product->name)}}"
                       required
                >
                @error('name')
                <div class="input_error">{{$message}}</div>
                @enderror
            </div>
            <div class="col-md-6">
                <label for="product-categories" class="form-label">Categoria</label>
                <select name="categories" id="product-categories">
                    <option value="0" label="--" selected="selected"></option>

                    @foreach($categories as $cat)
                        <option
                            value="{{$cat->id}}"
                            {{ old('category_id', $product->category_id) == $cat->id ? 'selected' : '' }}
                        >
                            {{$cat->name}}
                        </option>
                    @endforeach

                </select>
            </div>
            <div class="col-md-12">
                <label class="form-label">Descrizione</label>
                <textarea class="form-control"
                          rows="3"
                          name="description"
                >
                    {{old('description', $product->description)}}
                </textarea>
            </div>


            <div class="col-6">
                <label class="form-label">Prezzo</label>
                <input type="number"
                       class="form-control"
                       id="price"
                       name="price"
                       value="{{old('price', $product->price)}}"
                       required
                >
            </div>
            <div class="col-6">
                <label class="form-label">Quantità</label>
                <input type="number"
                       class="form-control"
                       id="quantity"
                       name="quantity"
                       value="{{old('quantity', $product->quantity)}}"
                       required>
            </div>
            <div class="col-12">
                <label class="form-label"></label>
                <div class="form-checkbox-box d-flex-wrap">
                    <div class="form-check-inline">
                        <div class="customCheckbox">
                            <input type="hidden" name="unique" value="0" />
                            <input type="checkbox" class="form-check-input" id="unique" name="unique" value="1" />
                            <label for="unique">Pezzo unico</label>
                        </div>
                    </div>
                    <div class="form-check-inline">
                        <div class="customCheckbox">
                            <input type="hidden" name="published" value="0" />
                            <input type="checkbox" class="form-check-input" id="published" name="published" value="1" />
                            <label for="published">Pubblicato</label>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 my-4">
                <button type="submit" class="btn btn-primary rounded">Salva</button>
                <a href="{{ route('product.index') }}" class=" mx-3 btn-link">Indietro</a>
            </div>
        </form>
    </div>
</div>

<script>
    function readURL(input, target) {
        if (input.target.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $(target).attr('src', e.target.result);
            }

            reader.readAsDataURL(input.target.files[0]);
        }
    }

    const image_1 = document.getElementById('image_1');
    const image_2 = document.getElementById('image_2');
    const image_3 = document.getElementById('image_3');
    const image_4 = document.getElementById('image_4');

    image_1.addEventListener('change', function (e) {
        readURL(e, '#preview_image_1')
    })
    image_2.addEventListener('change', function (e) {
        readURL(e, '#preview_image_2')
    })
    image_3.addEventListener('change', function (e) {
        readURL(e, '#preview_image_3')
    })
    image_4.addEventListener('change', function (e) {
        readURL(e, '#preview_image_4')
    })

</script>
