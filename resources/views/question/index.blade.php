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
                                <th scope="col">Operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($questions as $question)
                                    <tr>
                                        <td>{{ $question->id }}</td>
                                        <td>{{ $question->title_uz }}</td>
                                        <td>{{ $question->title_ru }}</td>
                                        <td>{{ $question->title_en }}</td>
                                        <td>{{ $question->description_uz }}</td>
                                        <td>
                                            <div class="d-flex tools">
                                                <a href="{{ route('question.show', ['question' => $question->id]) }}" class="mx-3"><i class="fa fa-eye"></i></a>
                                                <a href="{{ route('question.edit', ['question' => $question->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                                @auth
                                                    <form action="{{ route('question.destroy', ['question'=> $question->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
                        <a href="{{ route('question.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>

                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
