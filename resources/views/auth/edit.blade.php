<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('profile.update', ['profile' => $profile->id]) }}" method="post"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="name"
                               placeholder="Ism" value="{{ $profile->name }}"/>
                        @error('name')
                        <label for="if" class="text-danger">Ism</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="password"
                               placeholder="Parol" value="{{ $profile->password }}"/>
                        @error('password')
                        <label for="if" class="text-danger">Parol</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                        <a href="{{ route('profile.index') }}" class="btn btn-outline-info" type="submit" id="sendMessageButton">Orqaga</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
</x-layouts.admin>
