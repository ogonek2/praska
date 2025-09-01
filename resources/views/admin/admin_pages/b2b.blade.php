@extends('admin.layouts.app')

@section('page')
    B2B
@endsection
@section('page_description')
    Редагувати данні
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-header">
                    <h6>Створити категорію</h6>
                </div>
                <form action="{{ route('b2b.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name_category">Назва Категорії <b style="color: #e91e63">*</b></label>
                            <div class="input-group input-group-outline mb-4">
                                <input type="text" id="name" placeholder="Введіть назву" name="name"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name_category">Заголовок <b style="color: #e91e63">*</b></label>
                            <div class="input-group input-group-outline mb-4">
                                <input type="text" id="title" placeholder="Введіть назву" name="title"
                                    class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name_category">Баннер</label>
                            <div class="input-group input-group-outline mb-4">
                                <input type="file" id="banner" name="banner" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button class="btn btn-primary" type="submit">Готово</button>
                    </div>
                </form>
            </div>
            <div class="card mt-5">
                <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                    <div class="bg-gradient-dark shadow-dark border-radius-lg pt-4 pb-3">
                        <h6 class="text-white text-capitalize ps-3">Категорії</h6>
                    </div>
                </div>
                <div class="card-body px-3 pb-2">
                    <div class="table-responsive p-0">
                        <table id="categoriesTable" class="table align-items-center mb-0 justify-content-center">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">#
                                    </th>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Назва</th>
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Посилання</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($b2b_data as $item)
                                    @php
                                        $firstContent = $item->contents->first();
                                        $keys = $firstContent->keys ?? '';
                                        $description = $firstContent->description ?? '';
                                        $content = $firstContent->content ?? '';
                                    @endphp
                                    <tr>
                                        <td>
                                            <h1 class="mb-0 text-sm">{{ $item->id }}</h1>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $item->name }}</h6>
                                                    <p class="text-xs text-secondary mb-0">{{ $item->href }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <p class="text-xs font-weight-bold mb-0">Перейти</p>
                                            </a>
                                        </td>
                                        <td class="align-middle">
                                            <button type="button" class="btn bg-gradient-warning" data-bs-toggle="modal"
                                                data-bs-target="#categoryContentModal{{ $item->id }}">
                                                <i class="material-symbols-rounded opacity-5">window</i>
                                            </button>
                                            <button type="button" class="btn bg-gradient-primary" data-bs-toggle="modal"
                                                data-bs-target="#categoryModal{{ $item->id }}">
                                                <i class="material-symbols-rounded opacity-5">edit</i>
                                            </button>
                                            <form action="{{ route('b2b.destroy', $item->id) }}" method="POST"
                                                onsubmit="return confirm('Точно видалити?');" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn bg-gradient-danger" type="submit"><i
                                                        class="material-symbols-rounded opacity-5">delete</i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="categoryModal{{ $item->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="categoryModalLabel{{ $item->id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title font-weight-normal"
                                                        id="categoryModalLabel{{ $item->id }}">
                                                        #{{ $item->id }} / {{ $item->name }}
                                                    </h5>
                                                    <button type="button" class="btn-close text-dark"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('b2b.update', $item->id) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="card-body">
                                                        <div class="form-group">
                                                            <label for="name_category">Баннер</label>
                                                            <div class="input-group input-group-outline mb-4">
                                                                <input type="file" id="banner" name="banner"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="card-footer">
                                                        <button class="btn btn-primary" type="submit">Готово</button>
                                                    </div>
                                                </form>
                                                <form action="{{ route('b2b.update', $item->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Категорія <b style="color: #e91e63">*</b></label>
                                                            <div class="input-group input-group-outline mb-4">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $item->name }}" name="name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Заголовок <b style="color: #e91e63">*</b></label>
                                                            <div class="input-group input-group-outline mb-4">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $item->title }}" name="title">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn bg-gradient-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn bg-gradient-primary">Зберегти
                                                            зміни</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="categoryContentModal{{ $item->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="categoryContentModalLabel{{ $item->id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title font-weight-normal"
                                                        id="categoryContentModalLabel{{ $item->id }}">
                                                        #{{ $item->id }} / {{ $item->name }}
                                                    </h5>
                                                    <button type="button" class="btn-close text-dark"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('b2b.update', $item->id) }}" onsubmit="return submitForm();" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="form-group mb-2">
                                                            <input type="hidden" name="value" id="hidden-description">
                                                            <div id="editor">{!! $content !!}</div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Ключові слова</label>
                                                            <div class="input-group input-group-outline mb-4">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $keys }}" name="keys">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Опис</label>
                                                            <div class="input-group input-group-outline mb-4">
                                                                <input type="text" class="form-control"
                                                                    value="{{ $description }}" name="description">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn bg-gradient-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn bg-gradient-primary">Зберегти
                                                            зміни</button>
                                                    </div>
                                                    <input type="hidden" name="form_type" value="canonical">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
