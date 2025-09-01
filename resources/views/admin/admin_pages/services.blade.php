@extends('admin.layouts.app')

@section('page')
    Послуги
@endsection
@section('page_description')
    Редагувати данні
@endsection

@section('content')
    <div class="row">
        <div class="col-sm-8">
            <div class="card">
                <div class="card-header">
                    <h6>Створити категорію</h6>
                </div>
                <form action="{{ route('categories.create') }}" method="PUT">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <label for="name_category">Назва Категорії <b style="color: #e91e63">*</b></label>
                            <div class="input-group input-group-outline mb-4">
                                <input type="text" id="name_category" placeholder="Введіть назву" name="name"
                                    class="form-control">
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
                                    <th
                                        class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">
                                        Послуг</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td>
                                            <h1 class="mb-0 text-sm">{{ $category->id }}</h1>
                                        </td>
                                        <td>
                                            <div class="d-flex px-2 py-1">
                                                <div class="d-flex flex-column justify-content-center">
                                                    <h6 class="mb-0 text-sm">{{ $category->name }}</h6>
                                                    <p class="text-xs text-secondary mb-0">{{ $category->href }}</p>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <a href="#">
                                                <p class="text-xs font-weight-bold mb-0">Перейти</p>
                                            </a>
                                        </td>
                                        <td class="align-middle text-center">
                                            <span
                                                class="badge badge-sm bg-gradient-primary">{{ count($category->services) }}</span>
                                        </td>
                                        <td class="align-middle">
                                            <button type="button" class="btn bg-gradient-primary"
                                                data-bs-toggle="modal"
                                                data-bs-target="#categoryModal{{ $category->id }}">
                                                <i class="material-symbols-rounded opacity-5">edit</i>
                                            </button>
                                            <form action="{{ route('categories.destroy', $category->id) }}"
                                                method="POST" onsubmit="return confirm('Точно видалити?');"
                                                style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn bg-gradient-danger"
                                                    type="submit"><i class="material-symbols-rounded opacity-5">delete</i></button>
                                            </form>
                                        </td>
                                    </tr>
                                    <!-- Modal -->
                                    <div class="modal fade" id="categoryModal{{ $category->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="categoryModalLabel{{ $category->id }}"
                                        aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title font-weight-normal"
                                                        id="categoryModalLabel{{ $category->id }}">
                                                        #{{ $category->id }} / {{ $category->name }}
                                                    </h5>
                                                    <button type="button" class="btn-close text-dark"
                                                        data-bs-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('categories.update', $category->id) }}"
                                                    method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="modal-body">
                                                        <div class="form-group">
                                                            <label>Категорія <b style="color: #e91e63">*</b></label>
                                                            <div class="input-group input-group-outline mb-4">
                                                                <input type="text" class="form-control" value="{{ $category->name }}" name="name">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn bg-gradient-secondary"
                                                            data-bs-dismiss="modal">Close</button>
                                                        <button type="submit"
                                                            class="btn bg-gradient-primary">Зберегти зміни</button>
                                                    </div>
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
        <div class="col-sm-4">
            <div class="card">
                <div class="card-header">
                    <h6>Створити послугу</h6>
                </div>
                <form action="{{ route('services.create') }}" method="PUT">
                    @csrf
                    <div class="card-body">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-8">
                                    <label>Назва послуги <b style="color: #e91e63">*</b></label>
                                    <div class="input-group input-group-outline">
                                        <input type="text" placeholder="Введіть назву" name="name"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-4">
                                    <label>Ціна <b style="color: #e91e63">*</b></label>
                                    <div class="input-group input-group-dynamic">
                                        <span class="input-group-text">грн.</span>
                                        <input type="text" class="form-control" name="price"
                                            aria-label="Amount (to the nearest dollar)">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Категорія <b style="color: #e91e63">*</b></label>
                            <div class="input-group input-group-outline mb-4">
                                <select name="category" class="form-control">
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="value" id="hidden-description">
                            <div id="editor"></div>
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
                        <h6 class="text-white text-capitalize ps-3">Послуги</h6>
                    </div>
                </div>
                <div class="card-body px-3 pb-2">
                    <div class="table-responsive p-0">
                        <table id="servicesTable" class="table align-items-center mb-0">
                            <thead>
                                <tr>
                                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">
                                        Назва</th>
                                    <th class="text-secondary opacity-7"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    @foreach ($category->services as $service)
                                        <tr>
                                            <td>
                                                <div class="d-flex px-2 py-1">
                                                    <div class="d-flex flex-column justify-content-center">
                                                        <small>{{ $category->name }}</small>
                                                        <h6 class="mb-0 text-sm">{{ $service->name }}</h6>
                                                        <p class="text-xs text-secondary mb-0">{{ $service->href }}</p>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="align-middle">
                                                <button type="button" class="btn bg-gradient-primary"
                                                    data-bs-toggle="modal"
                                                    data-bs-target="#serviceModal{{ $service->id }}">
                                                    <i class="material-symbols-rounded opacity-5">edit</i>
                                                </button>
                                                <form action="{{ route('services.destroy', $service->id) }}"
                                                    method="POST" onsubmit="return confirm('Точно видалити?');"
                                                    style="display:inline;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button class="btn bg-gradient-danger"
                                                        type="submit"><i class="material-symbols-rounded opacity-5">delete</i></button>
                                                </form>
                                            </td>
                                        </tr>
                                        <!-- Modal -->
                                        <div class="modal fade" id="serviceModal{{ $service->id }}" tabindex="-1"
                                            role="dialog" aria-labelledby="serviceModalLabel{{ $service->id }}"
                                            aria-hidden="true">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title font-weight-normal"
                                                            id="serviceModalLabel{{ $service->id }}">
                                                            #{{ $service->id }} / {{ $service->name }}
                                                        </h5>
                                                        <button type="button" class="btn-close text-dark"
                                                            data-bs-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">&times;</span>
                                                        </button>
                                                    </div>
                                                    <form action="{{ route('services.update', $service->id) }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-8">
                                                                        <label>Назва послуги <b
                                                                                style="color: #e91e63">*</b></label>
                                                                        <div class="input-group input-group-outline">
                                                                            <input type="text"
                                                                                placeholder="Введіть назву" name="name"
                                                                                class="form-control"
                                                                                value="{{ $service->name }}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-4">
                                                                        <label>Ціна <b style="color: #e91e63">*</b></label>
                                                                        <div class="input-group input-group-dynamic">
                                                                            <span class="input-group-text">грн.</span>
                                                                            <input type="text" class="form-control"
                                                                                name="price"
                                                                                aria-label="Amount (to the nearest dollar)"
                                                                                value="{{ $service->price }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label>Категорія <b style="color: #e91e63">*</b></label>
                                                                <div class="input-group input-group-outline mb-4">
                                                                    <select name="category" class="form-control">
                                                                        @foreach ($categories as $category)
                                                                            <option value="{{ $category->id }}"
                                                                                {{ $category->id == $service->categories->first()->id ? 'selected' : '' }}>
                                                                                {{ $category->name }}
                                                                            </option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn bg-gradient-secondary"
                                                                data-bs-dismiss="modal">Close</button>
                                                            <button type="submit"
                                                                class="btn bg-gradient-primary">Зберегти зміни</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
