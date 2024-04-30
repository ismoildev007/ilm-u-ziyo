<x-layouts.admin>
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>Barcha hodim va kafedralar ro'yhati</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Talabalar</th>
                                <th scope="col">O'qituvchilar</th>
                                <th scope="col">Kafedralar</th>
                                <th scope="col">Amaliyot bazalari</th>
                                <th scope="col">Operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($numbers as $number)
                                <tr>
                                    <td>{{ $number->id }}</td>
                                    <td>{{ $number->students }}</td>
                                    <td>{{ $number->teachers }}</td>
                                    <td>{{ $number->departments }}</td>
                                    <td>{{ $number->practices }}</td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('number.edit', ['number' => $number->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            @auth
                                                <form action="{{ route('number.destroy', ['number'=> $number->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
                        <a href="{{ route('number.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>

                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
