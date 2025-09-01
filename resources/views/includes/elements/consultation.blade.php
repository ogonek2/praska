<div class="app-container-elements-box box consultation-box_block">
    <div class="items-box">
        <div class="item">
            <form method="POST" action="#" class="form-block">
                @csrf
                <div class="form-head">
                    <h1 class="header-b-title">Отримати<br>консультацію</h1>
                </div>
                <div class="form-body">
                    <div class="form-group">
                        <input type="text" id="name_fd" placeholder="Ім'я *">
                    </div>
                    <div class="form-group">
                        <input type="text" id="phone_fd" placeholder="Номер телефону *">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-style-fas-head_1" type="submit">
                            <p class="p-uppercase">
                                Відправити
                            </p>
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
