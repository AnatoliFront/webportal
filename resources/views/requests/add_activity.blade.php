@extends('base')

@section('content')

<h2 class="section_title main ">
            Подать заявку
        </h2>
        <form action="#" class="request_main show_poll" id="request-form">
        @method('POST')
    
            <input type="text" name="title" class="request_main_input" placeholder="Название мероприятия">

            
            <div class="poll_section">
                <p class="form_title _main">Вид помощи</p>
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

            <div class="organization_section">
                <input type="text" name="organization_name" class="request_main_input" placeholder="Название организации">
                <input type="text" name="event_region" class="request_main_input" placeholder="Регион проведения мероприятия">
                <input type="text" name="event_locality" class="request_main_input" placeholder="Населнный пункт">
                <input type="text" name="event_date" class="request_main_input" placeholder="Дата">
                <input type="text" name="event_time" class="request_main_input" placeholder="Время">
                <textarea type="text" name="event_description" class="request_main_input _textarea" placeholder="Описание"></textarea>
            </div>
            

            <input type="submit" class=" button" value="Отправить">
        </form>

        @endsection