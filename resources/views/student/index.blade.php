<x-layouts.admin>
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>Talabalar ro'yhati</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">title_uz</th>
                                <th scope="col">short_content_uz</th>
                                <th scope="col">photo</th>
                                <th scope="col">Operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($students as $student)
                                    <tr>
                                        <td>{{ $student->id }}</td>
                                        <td>{{ $student->name }}</td>
                                        <td>{{ $student->title_uz }}</td>
                                        <td>{{ $student->short_content_uz }}</td>
                                        <td><img src="{{ asset('storage/' . $student->photo) }}" alt="" style="width: 100px;height: 100px;"></td>
                                        <td>
                                            <div class="d-flex tools">
                                                <a href="{{ route('student.show', ['student' => $student->id]) }}" class="mr-1"><i class="fa fa-eye"></i></a>
                                                <a href="{{ route('student.edit', ['student' => $student->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                                @auth
                                                    <form action="{{ route('student.destroy', ['student'=> $student->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
                                                        @csrf
                                                        @method('DELETE')
                                                        <button type="submit" class="btn text-danger" style="margin-top: -6px;"><i class="fa fa-trash"></i></button>
                                                    </form>
                                                @endauth
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer clearfix">
                        <a href="{{ route('student.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>

                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
