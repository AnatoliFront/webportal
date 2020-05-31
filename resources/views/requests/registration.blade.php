@extends('base')

@section('content')
<h2 class="section_title main">
            Зарегистрироваться
        </h2>
        <form action="#" class="request_main" id="registration-form">

            @method('POST')
            <div class="auth_sectoion">
                <p class="form_title _main">Авторизационные данные</p>
                <input type="email" name="email" class="request_main_input" placeholder="Email" required>
                <input type="text" name="login" class="request_main_input" placeholder="Логин" required>
                <input type="password" name="password" class="request_main_input" placeholder="Пароль" required>
            </div>
            <div class="profile_section">
                <p class="form_title _main">Анкета</p>
                <input type="text" name="name" class="request_main_input _half" placeholder="Ваша имя" required>
                <input type="text" name="last_name" class="request_main_input _half" placeholder="Ваша фамилия" required>
                <input type="text" name="birdthday_date" class="request_main_input _half" placeholder="Дата рождения" required>
                <input type="text" name="passport_number" class="request_main_input _half" placeholder="Номер паспорта" required>
                <input type="text" name="region" class="request_main_input _half" placeholder="Область" required>
                <input type="text" name="city" class="request_main_input _half" placeholder="Город" required>
                <input type="text" name="phone" class="request_main_input _half" placeholder="Телефон" required>
            </div>


            <p class="form_title _main">Чем вы можете помочь:</p>
            <div class="poll_activity">
                <label class="poll_activity__item">
                    <div class="poll_activity__check"></div>
                    <input type="radio" class="poll_activity__input _volonter" value="0" name="activity">
                    <p class="poll_activity__text">Волонтер</p>
                </label>
                <label class="poll_activity__item">
                    <div class="poll_activity__check"></div>
                    <input type="radio" class="poll_activity__input" value="1" name="activity">
                    <p class="poll_activity__text">Нуждающийся</p>
                </label>
            </div>
            
            <div class="poll_section">
                <p class="form_title _main">Интересные вам категории</p>
                <label class="poll_item">
                    <input type="radio" class="pool_item__checkbox" name="category" value="1">
                    <div class="pool_item__check"></div>
                    <div class="poll_item__description">
                        <p class="poll_item__name">помощь детям</p>
                        <p class="poll_item__note">*Дети сироты, дети с многодетных семей, дети находящиеся в СОП, дети-инвалиды, благотворительность</p>
                    </div>
                </label>
                <label class="poll_item">
                    <input type="radio" class="pool_item__checkbox" name="category" value="2">
                    <div class="pool_item__check"></div>
                    <div class="poll_item__description">
                        <p class="poll_item__name">помощь взрослым</p>
                        <p class="poll_item__note">*Без определенного места жительства, инвалиды-колясочники, слабовидящие, слабослышащие, освободившиеся с тюрьм и колоний, тяжелобольные люди.</p>
                    </div>
                </label>
                <label class="poll_item">
                    <input type="radio" class="pool_item__checkbox" name="category" value="3">
                    <div class="pool_item__check"></div>
                    <div class="poll_item__description">
                        <p class="poll_item__name">помощь пожилым</p>
                        <p class="poll_item__note">*Ветераны, одинокие, проживающие в интернатах и домах престарелых</p>
                    </div>
                </label>
                <label class="poll_item">
                    <input type="radio" class="pool_item__checkbox" name="category" value="4">
                    <div class="pool_item__check"></div>
                    <div class="poll_item__description">
                        <p class="poll_item__name">помощь животным</p>
                        <p class="poll_item__note">*Поиск домашних животных,помощь животным, работа в приютах для животных</p>
                    </div>
                </label>
                <label class="poll_item">
                    <input type="radio" class="pool_item__checkbox" name="category" value="5">
                    <div class="pool_item__check"></div>
                    <div class="poll_item__description">
                        <p class="poll_item__name">экология </p>
                        <p class="poll_item__note">*Охрана природы и сохранение чистоты окружающей среды, благоустройство улиц, домов, зеленых зон</p>
                    </div>
                </label>
                <label class="poll_item">
                    <input type="radio" class="pool_item__checkbox" name="category" value="6">
                    <div class="pool_item__check"></div>
                    <div class="poll_item__description">
                        <p class="poll_item__name">архитектура</p>
                        <p class="poll_item__note">*Работа, направленная на восстановление и сохранение исторических и природных памятников</p>
                    </div>
                </label>
                <label class="poll_item">
                    <input type="radio" class="pool_item__checkbox" name="category" value="7">
                    <div class="pool_item__check"></div>
                    <div class="poll_item__description">
                        <p class="poll_item__name">культура</p>
                        <p class="poll_item__note">*Работа на культурно-массовых мероприятиях,организация свободного времени детей, подростков и молодежи,Участие в международных проектах</p>
                    </div>
                </label>
                <label class="poll_item">
                    <input type="radio" class="pool_item__checkbox" name="category" value="8">
                    <div class="pool_item__check"></div>
                    <div class="poll_item__description">
                        <p class="poll_item__name">ЗОЖ (спорт) </p>
                        <p class="poll_item__note">*Помощь в проведении спортивных мероприятий</p>
                    </div>
                </label>

            </div>

            <input type="submit" class="request_main_button button _reg" value="Зарегистрироваться">
        </form>

        @endsection