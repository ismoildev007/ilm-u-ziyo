<x-layouts.admin>
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>Contact</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Email</th>
                                <th scope="col">phone_number</th>
                                <th scope="col">telegram</th>
                                <th scope="col">instagram</th>
                                <th scope="col">facebook</th>
                                <th scope="col">youtube</th>
                                <th scope="col">linkedin</th>
                                <th scope="col">Operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($contacts as $contact)
                                <tr>
                                    <td>{{ $contact->id }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->phone_number }}</td>
                                    <td><a href="{{ $contact->telegram }}">Telegram</a></td>
                                    <td><a href="{{ $contact->instagram }}">Telegram</a></td>
                                    <td><a href="{{ $contact->facebook }}">Telegram</a></td>
                                    <td><a href="{{ $contact->youtube }}">Telegram</a></td>
                                    <td><a href="{{ $contact->linkedin }}">Telegram</a></td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('contact.edit', ['contact' => $contact->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            @auth
                                                <form action="{{ route('contact.destroy', ['contact'=> $contact->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
                        <a href="{{ route('contact.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>

                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
