<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('document.update', ['document' => $documents->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="control-group form-control mb-3 pb-2">
                        <input name="licence" type="file" class="input-group m-2" id="subject"/>
                    </div>
                    @error('licence')
                    <label for="if" class="text-danger">Litsenziya faylni yuklashni unutdingiz</label>
                    @enderror
                    <div class="control-group form-control mb-3 pb-2">
                        <input name="passport" type="file" class="input-group m-2" id="subject"/>
                    </div>
                    @error('passport')
                    <label for="if" class="text-danger">Guvohnoma faylni yuklashni unutdingiz</label>
                    @enderror
                    <div class="control-group">
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                        <a href="{{ route('document.index') }}" class="btn btn-outline-info" type="submit" id="sendMessageButton">Orqada</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
</x-layouts.admin>
