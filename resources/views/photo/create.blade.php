<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('photo.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group form-control mb-3 pb-2">
                        <input name="student_photos" type="file" class="input-group m-2" id="subject"/>
                    </div>
                    @error('student_photos')
                    <label for="if" class="text-danger">Litsenziya faylni yuklashni unutdingiz3</label>
                    @enderror
                    <div class="control-group">
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.admin>
