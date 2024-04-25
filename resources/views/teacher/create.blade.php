<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('teacher.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="name"
                               placeholder="name" value="{{ old('name') }}"/>
                        @error('name')
                        <label for="if" class="text-danger">Ism kiriting</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title_uz"
                               placeholder="title_uz" value="{{ old('title_uz') }}"/>
                        @error('title_uz')
                        <label for="if" class="text-danger">title_uz</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title_ru"
                               placeholder="title_ru" value="{{ old('title_ru') }}"/>
                        @error('title_ru')
                        <label for="if" class="text-danger">title_ru</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title_en"
                               placeholder="title_en" value="{{ old('title_en') }}"/>
                        @error('title_en')
                        <label for="if" class="text-danger">title_en</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="short_content_uz"
                               placeholder="short_content_uz" value="{{ old('short_content_uz') }}"/>
                        @error('short_content_uz')
                        <label for="if" class="text-danger">short_content_uz</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="short_content_ru"
                               placeholder="short_content_ru" value="{{ old('short_content_ru') }}"/>
                        @error('short_content_ru')
                        <label for="if" class="text-danger">short_content_ru</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="short_content_en"
                               placeholder="short_content_en" value="{{ old('short_content_en') }}"/>
                        @error('short_content_en')
                        <label for="if" class="text-danger">short_content_en</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group form-control mb-3 pb-2">
                        <input name="photo" type="file" class="input-group m-2" id="subject"/>
                    </div>
                    @error('photo')
                    <label for="if" class="text-danger">faylni yuklashni unutdingiz3</label>
                    @enderror
                    <div class="control-group">
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.admin>
