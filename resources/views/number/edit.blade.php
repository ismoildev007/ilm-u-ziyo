<x-layouts.admin>

    <div class="container">
        <div class="w-50 py-4">
            <div class="contact-form">
                <div id="success"></div>

                <form action="{{ route('number.update', ['number' => $numbers->id]) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="control-group">
                        <input type="number" id="if" class="form-control p-2" name="students" placeholder="students" value="{{ $numbers->students }}" />
                        @error('students')
                        <label for="if" class="text-danger">students</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="number" id="if" class="form-control p-2" name="teachers" placeholder="teachers" value="{{ $numbers->teachers }}" />
                        @error('teachers')
                        <label for="if" class="text-danger">teachers</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="number" id="if" class="form-control p-2" name="departments" placeholder="departments" value="{{ $numbers->departments }}" />
                        @error('departments')
                        <label for="if" class="text-danger">departments</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <input type="number" id="if" class="form-control p-2" name="practices" placeholder="practices" value="{{ $numbers->practices }}" />
                        @error('practices')
                        <label for="if" class="text-danger">practices</label>
                        @enderror
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="control-group">
                        <button class="btn btn-outline-primary" type="submit" id="sendMessageButton">Saqlash</button>
                        <a href="{{ route('number.index') }}" class="btn btn-outline-info" type="submit" id="sendMessageButton">Orqada</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->
</x-layouts.admin>
