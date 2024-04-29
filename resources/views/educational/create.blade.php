<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('educational.store') }}" method="post" enctype="multipart/form-data">
                    @php echo 'sssss'  @endphp
                    @csrf
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="description_uz"
                               placeholder="text kiriting uzbek tilida" value="{{ old('description_uz') }}"/>
                        @error('description_uz')
                        <label for="if" class="text-danger">description_uz</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="description_ru"
                               placeholder="text kiriting rus tilida" value="{{ old('description_ru') }}"/>
                        @error('description_ru')
                        <label for="if" class="text-danger">description_ru</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="description_en"
                               placeholder="text kiriting english tilida" value="{{ old('description_en') }}"/>
                        @error('description_en')
                        <label for="if" class="text-danger">description_en</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title_uz"
                               placeholder="Yo'nalish nomi Uzbek" value="{{ old('title_uz') }}"/>
                        @error('title_uz')
                        <label for="if" class="text-danger">title_uz</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title_ru"
                               placeholder="yo'nalish nomi rus" value="{{ old('title_ru') }}"/>
                        @error('title_ru')
                        <label for="if" class="text-danger">title_ru</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="title_en"
                               placeholder="yo'nalish nomi english" value="{{ old('title_en') }}"/>
                        @error('title_en')
                        <label for="if" class="text-danger">title_en</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="short_content_uz"
                               placeholder="yo'nalish haqida Qisqacha. uzbek" value="{{ old('short_content_uz') }}"/>
                        @error('short_content_uz')
                        <label for="if" class="text-danger">Short content</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="short_content_ru"
                               placeholder="yo'nalish haqida Qisqacha. rus" value="{{ old('short_content_ru') }}"/>
                        @error('short_content_ru')
                        <label for="if" class="text-danger">short_content_ru</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="short_content_en"
                               placeholder="yo'nalish haqida Qisqacha english" value="{{ old('short_content_en') }}"/>
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
