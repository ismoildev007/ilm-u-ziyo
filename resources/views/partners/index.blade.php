<x-layouts.admin>
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>Hamkorlar</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">partners_id</th>
                                <th scope="col">partner_name</th>
                                <th scope="col">Operatsiya</th>
                            </tr>
                            </thead>
                            <tbody>
                                @foreach($partners as $partner)
                                    <tr>
                                        <td>{{ $partner->id }}</td>
                                        <td>{{ $partner->partner_id }}</td>
                                        <td>{{ $partner->partner_name }}</td>
                                        <td>
                                            <div class="d-flex tools">
                                                <a href="{{ route('partners.edit', ['partner' => $partner->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                                @auth
                                                    <form action="{{ route('partners.destroy', ['partner'=> $partner->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
                        <a href="{{ route('partners.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>

                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
