<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('partners.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group">
                        <input type="text" id="if" class="form-control p-2" name="partner_name"
                               placeholder="partner_name" value="{{ old('partner_name') }}"/>
                        @error('partner_name')
                        <label for="if" class="text-danger">partners_name</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <select name="partner_id" class="form-control mt-3 mb-3">
                        @foreach($posts as $post)
                            <option value="{{ $post->id }}">{{ $post->partners_name }}</option>
                        @endforeach
                    </select>
                    <div class="control-group">
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

</x-layouts.admin>
