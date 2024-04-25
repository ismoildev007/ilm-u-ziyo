<x-layouts.admin>
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>Qiziqtirgan savollar</h3>
                    <a href="{{ route('teacher.index') }}">Orqaga</a>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">title_uz</th>
                                <th scope="col">Title_ru</th>
                                <th scope="col">Title_en</th>
                                <th scope="col">short_content_uz</th>
                                <th scope="col">short_content_ru</th>
                                <th scope="col">short_content_en</th>
                                <th scope="col">Photo</th>
                                <th scope="col">Operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>{{ $teachers->id }}</td>
                                <td>{{ $teachers->name }}</td>
                                <td>{{ $teachers->title_uz }}</td>
                                <td>{{ $teachers->title_ru }}</td>
                                <td>{{ $teachers->title_en }}</td>
                                <td>{{ $teachers->short_content_uz }}</td>
                                <td>{{ $teachers->short_content_ru }}</td>
                                <td>{{ $teachers->short_content_en }}</td>
                                <td><img src="{{ asset('storage/' . $teachers->photo) }}" alt="" style="width: 100px;"></td>
                                <td>
                                    <div class="d-flex tools">
                                        <a href="{{ route('teacher.edit', ['teacher' => $teachers->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                        @auth
                                            <form action="{{ route('teacher.destroy', ['teacher'=> $teachers->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn text-danger" style="margin-top: -6px;"><i class="fa fa-trash"></i></button>
                                            </form>
                                        @endauth
                                    </div>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
