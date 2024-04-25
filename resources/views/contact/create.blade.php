<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('contact.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group">
                        <input type="email" id="if" class="form-control p-2" name="email"
                               placeholder="email" value="{{ old('email') }}"/>
                        @error('email')
                        <label for="if" class="text-danger">Emailni kiriting</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="phone_number"
                               placeholder="+998919579717" value="{{ old('phone_number') }}"/>
                        @error('phone_number')
                        <label for="if" class="text-danger">Telefon raqam</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="telegram"
                               placeholder="Telegram linkni kiriting" value="{{ old('telegram') }}"/>
                        @error('telegram')
                        <label for="if" class="text-danger">Telegram</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="instagram"
                               placeholder="instagram linkni kiriting" value="{{ old('instagram') }}"/>
                        @error('instagram')
                        <label for="if" class="text-danger">Instagram</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="facebook"
                               placeholder="facebook linkni kiriting" value="{{ old('facebook') }}"/>
                        @error('facebook')
                        <label for="if" class="text-danger">facebook</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="youtube"
                               placeholder="Youtube linkni kiriting" value="{{ old('youtube') }}"/>
                        @error('youtube')
                        <label for="if" class="text-danger">Youtube</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="linkedin"
                               placeholder="linkedin linkni kiriting" value="{{ old('linkedin') }}"/>
                        @error('linkedin')
                        <label for="if" class="text-danger">linkedin</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.admin>
