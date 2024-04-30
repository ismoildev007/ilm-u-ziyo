<x-layouts.admin>
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Barcha malumotlar</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="/">Sayitga o'tish</a></li>
                        <li class="breadcrumb-item active"></li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- Bosh saxifa -->
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>Bosh saxifa</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Title_uz</th>
                                <th scope="col">Description_uz</th>
                                <th scope="col">photo</th>
                                <th scope="col">operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($homes as $home)
                                <tr>
                                    <td>{{ $home->id }}</td>
                                    <td>{{ $home->title_uz }}</td>
                                    <td>{{ $home->description_uz }}</td>
                                    <td><img src="{{ asset('storage/' . $home->photo) }}" alt="" style="width: 100px;height: 100px;"></td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('home.show', ['home' => $home->id]) }}" class="mx-3"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('home.edit', ['home' => $home->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            @auth
                                                <form action="{{ route('home.destroy', ['home'=> $home->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
                        <a href="{{ route('home.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>

                </div>
            </section>
        </div>

    </div>
    <!-- Hamkorlar -->

    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>Biz haqimizda</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Title_uz</th>
                                <th scope="col">Description_uz</th>
                                <th scope="col">Branches_uz</th>
                                <th scope="col">short_content_uz</th>
                                <th scope="col">Operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($abouts as $about)
                                <tr>
                                    <td>{{ $about->id }}</td>
                                    <td>{{ $about->title_uz }}</td>
                                    <td>{{ $about->description_uz }}</td>
                                    <td>{{ $about->branches_uz }}</td>
                                    <td>{{ $about->short_content_uz }}</td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('about.show', ['about' => $about->id]) }}" class="mx-2"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('about.edit', ['about' => $about->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            @auth
                                                <form action="{{ route('about.destroy', ['about'=> $about->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
                        <a href="{{ route('about.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>

                </div>
            </section>
        </div>

    </div>
    <!-- Litsenziya va Guvohnomalar -->
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>Litsenziya va Guvohnoma</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Litsenziya</th>
                                <th scope="col">Guvohnoma</th>
                                <th scope="col">Operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($documents as $document)
                                <tr>
                                    <td>{{ $document->id }}</td>
                                    <td><img src="{{ asset('storage/' . $document->licence) }}" alt="" style="width: 100px;height: 100px;"></td>
                                    <td><img src="{{ asset('storage/' . $document->passport) }}" alt="" style="width: 100px;height: 100px;"></td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('document.edit', ['document' => $document->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            @auth
                                                <form action="{{ route('document.destroy', ['document'=> $document->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
                        <a href="{{ route('document.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>

                </div>
            </section>
        </div>

    </div>
    <!-- Talim yo'nalishlar -->
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
                                <th scope="col">Operatsiyalar</th>
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
                                            <a href="{{ route('educational.show', ['educational' => $educational->id]) }}" class="mx-2"><i class="fa fa-eye"></i></a>
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
    <!-- Barcha hodimlar va kafedralar -->
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
    <!-- Hamkorlar -->
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
                                <th scope="col">partner_name</th>
                                <th scope="col">Operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($partners as $partner)
                                <tr>
                                    <td>{{ $partner->id }}</td>
                                    <td>{{ $partner->partner_name }}</td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('partners.show', ['partner' => $partner->id]) }}" class="mx-2"><i class="fa fa-eye"></i></a>
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
    <!-- Biz bilan bog'lanish -->
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
    <!-- Sizni qiziqtirgan savollar -->
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
                                <th scope="col">Title_uz</th>
                                <th scope="col">Description_uz</th>
                                <th scope="col">Operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($questions as $question)
                                <tr>
                                    <td>{{ $question->id }}</td>
                                    <td>{{ $question->title_uz }}</td>
                                    <td>{{ $question->description_uz }}</td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('question.show', ['question' => $question->id]) }}" class="mx-2"><i class="fa fa-eye"></i></a>
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
    <!-- Talabalar -->
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
                                <th scope="col">Title_uz</th>
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
    <!-- O'qituvchilar -->
    <div class="container-fluid">

        <div class="row">
            <section class="col-lg-12 connectedSortable">
                <div class="card">
                    <h3>O'qituvchilar ro'yhati</h3>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Name</th>
                                <th scope="col">Title_uz</th>
                                <th scope="col">short_content_uz</th>
                                <th scope="col">photo</th>
                                <th scope="col">Operatsiyalar</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($teachers as $teacher)
                                <tr>
                                    <td>{{ $teacher->id }}</td>
                                    <td>{{ $teacher->name }}</td>
                                    <td>{{ $teacher->title_uz }}</td>
                                    <td>{{ $teacher->short_content_uz }}</td>
                                    <td><img src="{{ asset('storage/' . $teacher->photo) }}" alt="" style="width: 100px;height: 100px;"></td>
                                    <td>
                                        <div class="d-flex tools">
                                            <a href="{{ route('teacher.show', ['teacher' => $teacher->id]) }}" class="mr-1"><i class="fa fa-eye"></i></a>
                                            <a href="{{ route('teacher.edit', ['teacher' => $teacher->id]) }}" class="mr-1"><i class="fa fa-edit"></i></a>
                                            @auth
                                                <form action="{{ route('teacher.destroy', ['teacher'=> $teacher->id]) }}" method="post" onsubmit="return confirm('Ochirishga ruxsat berasizmi')">
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
                        <a href="{{ route('teacher.create') }}" type="button" class="btn btn-info float-right"><i class="fas fa-plus"></i> Yaratish </a>
                    </div>

                </div>
            </section>
        </div>

    </div>
</x-layouts.admin>
