<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('contact.update', ['contact' => $contacts->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="control-group">
                        <input type="email" id="if" class="form-control p-2" name="email" placeholder="email" value="{{ $contacts->email }}" />
                        @error('email')
                        <label for="if" class="text-danger">email</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="phone_number" placeholder="+998919579717" value="{{ $contacts->phone_number }}" />
                        @error('phone_number')
                        <label for="if" class="text-danger">phone_number</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="telegram" placeholder="telegram" value="{{ $contacts->telegram }}" />
                        @error('telegram')
                        <label for="if" class="text-danger">telegram</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="instagram" placeholder="instagram" value="{{ $contacts->instagram }}" />
                        @error('instagram')
                        <label for="if" class="text-danger">instagram</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="facebook" placeholder="facebook" value="{{ $contacts->facebook }}" />
                        @error('facebook')
                        <label for="if" class="text-danger">facebook</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="youtube" placeholder="youtube" value="{{ $contacts->youtube }}" />
                        @error('youtube')
                        <label for="if" class="text-danger">youtube</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="linkedin" placeholder="linkedin" value="{{ $contacts->linkedin }}" />
                        @error('linkedin')
                        <label for="if" class="text-danger">linkedin</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                        <a href="{{ route('contact.index') }}" class="btn btn-outline-info" type="submit" id="sendMessageButton">Orqada</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
</x-layouts.admin>
