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
                                <td>{{ $educations->id }}</td>
                                <td>{{ $educations->description_uz }}</td>
                                <td>{{ $educations->description_ru }}</td>
                                <td>{{ $educations->description_en }}</td>
                                <td>{{ $educations->title_uz }}</td>
                                <td>{{ $educations->title_ru }}</td>
                                <td>{{ $educations->title_en }}</td>
                                <td>{{ $educations->short_content_uz }}</td>
                                <td>{{ $educations->short_content_ru }}</td>
                                <td>{{ $educations->short_content_en }}</td>
                                <td><img src="{{ asset('storage/' . $educations->photo) }}" alt="" style="width: 100px;"></td>
                                <td>
                                    <div class="d-flex tools">
                                        <a href="{{ route('educational.edit', ['educational' => $educations->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                        @auth
                                            <form action="{{ route('educational.destroy', ['educational'=> $educations->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
