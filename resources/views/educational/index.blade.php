<x-layouts.admin>
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>Ta'lim va yo'nalishlar</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Title_uz</th>
                                <th scope="col">Description_uz</th>
                                <th scope="col">short_content_uz</th>
                                <th scope="col">photo</th>
                                <th scope="col">Barchasi</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($educationals as $educational)
                                <tr>
                                    <td>{{ $educational->id }}</td>
                                    <td>{{ $educational->title_uz }}</td>
                                    <td>{{ $educational->description_uz }}</td>
                                    <td>{{ $educational->short_content_uz }}</td>
                                    <td><img src="{{ asset('storage/' . $educational->photo) }}" alt="" style="width: 100px;height: 100px;"></td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('educational.show', ['educational' => $educational->id]) }}" class="mr-1"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('educational.edit', ['educational' => $educational->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            @auth
                                                <form action="{{ route('educational.destroy', ['educational'=> $educational->id]) }}"
                                                      method="post"
                                                      onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn text-danger"
                                                            style="margin-top: -6px;"><i class="fa fa-trash"></i>
                                                    </button>
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
                        <a href="{{ route('educational.create') }}" type="button" class="btn btn-info float-right"><i
                                class="fas fa-plus"></i> Yaratish </a>
                    </div>

                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
