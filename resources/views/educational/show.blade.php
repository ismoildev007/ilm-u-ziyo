<x-layouts.admin>
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>Qiziqtirgan savollar</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">description_uz</th>
                                <th scope="col">description_ru</th>
                                <th scope="col">description_en</th>
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
                                <td>{{ $educationals->id }}</td>
                                <td>{{ $educationals->description_uz }}</td>
                                <td>{{ $educationals->description_ru }}</td>
                                <td>{{ $educationals->description_en }}</td>
                                <td>{{ $educationals->title_uz }}</td>
                                <td>{{ $educationals->title_ru }}</td>
                                <td>{{ $educationals->title_en }}</td>
                                <td>{{ $educationals->short_content_uz }}</td>
                                <td>{{ $educationals->short_content_ru }}</td>
                                <td>{{ $educationals->short_content_en }}</td>
                                <td><img src="{{ asset('storage/' . $educationals->photo) }}" alt="" style="width: 100px;"></td>
                                <td>
                                    <div class="d-flex tools">
                                        <a href="{{ route('educational.edit', ['educational' => $educationals->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                        @auth
                                            <form action="{{ route('educational.destroy', ['educational'=> $educationals->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
