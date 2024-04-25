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
                                <th scope="col">title_uz</th>
                                <th scope="col">Title_ru</th>
                                <th scope="col">Title_en</th>
                                <th scope="col">description_uz</th>
                                <th scope="col">Description_ru</th>
                                <th scope="col">Description_en</th>
                                <th scope="col">Operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{ $questions->id }}</td>
                                    <td>{{ $questions->title_uz }}</td>
                                    <td>{{ $questions->title_ru }}</td>
                                    <td>{{ $questions->title_en }}</td>
                                    <td>{{ $questions->description_uz }}</td>
                                    <td>{{ $questions->description_ru }}</td>
                                    <td>{{ $questions->description_en }}</td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('question.edit', ['question' => $questions->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            @auth
                                                <form action="{{ route('question.destroy', ['question'=> $questions->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
