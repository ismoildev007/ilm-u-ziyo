<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('number.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="control-group">
                        <input type="number" id="if" class="form-control p-2" name="students"
                               placeholder="students" value="{{ old('students') }}"/>
                        @error('students')
                        <label for="if" class="text-danger">students sonini kiriting</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="number" id="if" class="form-control p-2" name="teachers"
                               placeholder="teachers" value="{{ old('teachers') }}"/>
                        @error('teachers')
                        <label for="if" class="text-danger">teachers</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="number" id="if" class="form-control p-2" name="departments"
                               placeholder="departments" value="{{ old('departments') }}"/>
                        @error('departments')
                        <label for="if" class="text-danger">departments</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="number" id="if" class="form-control p-2" name="practices"
                               placeholder="practices" value="{{ old('practices') }}"/>
                        @error('practices')
                        <label for="if" class="text-danger">practices</label>
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
