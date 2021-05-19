<div class="modal fade" id="registrationModal" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Регистрация</h5>
            </div>
            <div class="modal-body">
                <form class="form" id="registrationForm">
                    <div class="mb-3">
                        <label for="nameReg" class="form-label">ФИО:</label>
                        <input class="form-control" type="text" name="nameReg" id="nameReg" required placeholder="ФИО">
                    </div>
                    <div class="mb-3">
                        <label for="emailReg" class="form-label">Эл. почта:</label>
                        <input class="form-control" type="email" name="emailReg" id="emailReg" required placeholder="Эл. почта">
                    </div>
                    <div class="mb-3">
                        <label for="passwordReg" class="form-label">Пароль:</label>
                        <input class="form-control" type="password" name="passwordReg" id="passwordReg" required placeholder="Пароль">
                    </div>
                    <button type="button" id="regBtn" class="button">Зарегистрироватся</button>
                </form>
            </div>
            <div class="alert alert-success" style="display: none">
                <h6>Вы успешно зарегистрировались</h6>
            </div>
        </div>
    </div>
</div>
