<x-layouts.auth>
    <div class="mt-5">
        <div class="row">
            <div class="offset-md-2 col-lg-5 col-md-7 offset-lg-4 offset-md-3">
                <div class="panel border bg-white">
                    <div class="panel-heading">
                        <h3 class="pt-3 font-weight-bold text-center">Login</h3>
                    </div>
                    <div class="panel-body p-3">
                        <form action="{{ route('authenticate') }}" method="POST">
                            @csrf
                            <div class="form-group py-2">
                                <div class="input-field">
                                    <span class="far fa-user p-2"></span>
                                    <input name="email" type="text" placeholder="Email" required>
                                    @error('email')
                                    <label class="text-danger" for="">Ro'yhatdan o'tmagan email bilan kirish taqiqlanadi</label>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group py-1 pb-2">
                                <div class="input-field">
                                    <span class="fas fa-lock px-2"></span>
                                    <input name="password" type="password" placeholder="Parolni kiriting" required>
                                    @error('email')
                                    <label class="text-danger" for="">parol mos kelmadi</label>
                                    @enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block mt-3">Kirish</button>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-layouts.auth>
