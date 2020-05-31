const qs = (selector) => document.querySelector(selector);
const qsa = (selector) => document.querySelectorAll(selector);


document.addEventListener('DOMContentLoaded', function() {
    const body = qs('body');
    const footerForm = qs('#footer-form');
    const init = function() {
        if(JSON.parse(localStorage.getItem('auth'))) {
            const registrationButton = qs('.nav_link.login');
            const user  = JSON.parse(localStorage.getItem('user'));
            body.classList.add('logged_in');
            body.classList.remove('show-login');

            registrationButton.innerHTML = 'Личный кабинет';
            registrationButton.setAttribute('href', `/account/${user.id}`);
    
            if(qs('#registration-form')) { 
                const form = qs('#registration-form');
                const title = qs('.section_title.main');
                form.style.display = 'none';
                title.innerHTML = 'Вы уже зарегистрированы!';
            }

            if(qs('#request-form')) {
                const form = qs('#request-form');
                const title = qs('.section_title.main');
                form.style.display = 'block';
                title.innerHTML = 'Подать заявку';
            }
           
        } else {
            console.log(234)
            localStorage.setItem('auth', false);
            if(qs('#request-form')) {
                const form = qs('#request-form');
                const title = qs('.section_title.main');
                form.style.display = 'none';
                title.innerHTML = 'Сначала зарегистрируйтесь или войдите!';
            }
        }
    }
    init();
    const loginButton = qs('.nav_link.login');
    const closePopupButton = qs('.login_form__close');
    loginButton.onclick = () => {
        body.classList.add('show-login');
    }
    closePopupButton.onclick = () => {
        body.classList.remove('show-login');
    }



    footerForm.addEventListener('submit', function(e) {
        e.preventDefault();

        let name = this.elements.name.value;
        let email = this.elements.email.value;
        let comment = this.elements.comment.value; 

        let data = {
            name,
            email,
            comment,
        }

        fetch('/send_email', {
            method: 'POST',
            body: JSON.stringify(data),
            headers: {
                "Content-Type": "application/json",
                "Accept": "application/json, text-plain, */*",
                "X-Requested-With": "XMLHttpRequest",
                "X-CSRF-TOKEN": qs('input[name="_token"]').value,
            },
        }).then((response) => response.json())
        .then((data) => alert('форма успешно отправлена'))
    });




    if(qs('.pool_item__checkbox')) {
        const checkItems = qsa('.poll_item');
        const checkBoxesVisible = qsa('.pool_item__check');
        checkItems.forEach(e => {
            e.onclick = function(e) {
                checkBoxesVisible.forEach(e => e.classList.remove('active'));
                let checkBox = this.querySelector('.pool_item__checkbox');
                let checkBoxVisible = this.querySelector('.pool_item__check');
                console.log(checkBox.checked)
                if(checkBox.checked) {
                    checkBoxVisible.classList.add('active');
                } else {
                    checkBoxVisible.classList.remove('active');
                }
            }
        })
    }
    if(qs('.poll_activity__item')) {
        const checkItems = qsa('.poll_activity__item');
        const checkBoxesVisible = qsa('.poll_activity__check');
        checkItems.forEach(e => {
            
            e.onclick = function(e) {
                checkBoxesVisible.forEach(e => e.classList.remove('active'));
                let checkBox = this.querySelector('.poll_activity__input');
                let checkBoxVisible = this.querySelector('.poll_activity__check');
                console.log(checkBox.checked)
                if(checkBox.checked) {
                    checkBoxVisible.classList.add('active');
                    if(checkBox.classList.contains('_volonter')) {
                        qs('.poll_section').classList.add('active');
                    } else {
                        qs('.poll_section').classList.remove('active');
                    }
                } else {
                    checkBoxVisible.classList.remove('active');
                }
                
            }
        })
    }

    if(qs('#request-form')) {
        const requestForm = qs('#request-form');
        requestForm.addEventListener('submit', function(e) {
            e.preventDefault();

            const user = JSON.parse(localStorage.getItem('user'));
            const checkboxes = qsa('.pool_item__checkbox');

            let kind_help;
            let kind_activity=1;
            for(let i=0; i<checkboxes.length; i++) {
                if(checkboxes[i].checked) 
                    kind_help = checkboxes[i].value; break;
            }
            console.log(kind_help)
            !kind_help ? kind_help=0 : alert('Выберите вид помощи!');

            let user_name =  user.name + ' ' + user.last_name;
            let post_id = kind_help;
            let title = this.elements.title.value ? this.elements.title.value : alert('Введите заголовок')
            let image = '/img/help.jpg';
            let organisation_name = this.elements.organization_name ? this.elements.organization_name.value : user.name + ' ' + user.last_name;
            let date = this.elements.event_date.value ? this.elements.event_date.value : alert('Введите  дату'); 
            let time = this.elements.event_time.value ? this.elements.event_date.value : alert('Введите  время');
            let region = this.elements.event_region.value ? this.elements.event_region.value : alert('Введите  регион');
            let city = this.elements.event_locality.value ? this.elements.event_locality.value : alert('Введите  Населенный пункт');
            let description = this.elements.event_description.value ? this.elements.event_description.value : alert('Введите  Описание');

            let data = {
                post_id,          
                title,          
                image,           
                user_name,           
                organisation_name,   
                date,               
                time,               
                region,              
                city,               
                kind_help : post_id,          
                description,         
            }

            console.log(data)

            fetch('/add_activity/add', {
                method: 'POST',
                body: JSON.stringify(data),
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": qs('input[name="_token"]').value,
                },
            }).then((response) => response.json())
            .then((data) => alert('форма успешно отправлена'))

        })
    }


    if(qs('#activities_search')) {
        const formSearch = qs('#activities_search');
        formSearch.addEventListener('submit', function(e) {
            e.preventDefault();

            const searchField = this.elements.search.value.trim();

            let data = {
                search: searchField
            }

            fetch('/search_activities', {
                method: 'POST',
                body: JSON.stringify(data),
                credentials: "same-origin",
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": qs('input[name="_token"]').value,
                },

                
            }).then((response) => response.json())
            .then((data) => {
                let html;

                if(data.length > 1) {
                    data.forEach(e => {
                        html += `
                    
                        <a href="posts/post/${e.id}" class="activity_item">
                        <img src="${e.image}" alt="" class="activity_item__img">
                        <div class="activity_item__descriptin">
                            <h3 class="actictivity_item__title">
                                ${e.title}
                            </h3>
                            <p class="activity_item__text">
                                Заявку подал: ${e.name} <br>
                                Место проведения: ${e.region} <br>
                                Дата работы: ${e.date}<br>
                                Вид требуемой помощи: ${e.kind_help}
                            </p>
                        </div>
                    </a>
                        
                        `
                    })
                } else if (data.length != 0) {
                    html = `
                    
                    <a href="posts/post/${data[0].id}" class="activity_item">
                    <img src="${data[0].image}" alt="" class="activity_item__img">
                    <div class="activity_item__descriptin">
                        <h3 class="actictivity_item__title">
                            ${data[0].title}
                        </h3>
                        <p class="activity_item__text">
                            Заявку подал: ${data[0].name} <br>
                            Место проведения: ${data[0].region} <br>
                            Дата работы: ${data[0].date}<br>
                            Вид требуемой помощи: ${data[0].kind_help}
                        </p>
                    </div>
                </a>
                    
                    `
                } else {
                    html = '<p class="base_description"> По вашему запросу ничего не найдено </p>'
                }

                const list = qs('.activitise_list');
                list.innerHTML = html;

                console.log(data)
            })
        });
    }
    if(qs('#search_organoisation')) {
        const formSearch = qs('#search_organoisation');
        formSearch.addEventListener('submit', function(e) {
            e.preventDefault();

            const searchField = this.elements.search.value.trim();

            let data = {
                search: searchField
            }

            fetch('/search_organisations', {
                method: 'POST',
                body: JSON.stringify(data),
                credentials: "same-origin",
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": qs('input[name="_token"]').value,
                }, 
            }).then((response) => response.json())
            .then((data) => {
                let html;
                console.log(data);
                if(data.length > 1) {
                    data.forEach(e => {
                        html += `<a href="posts/post/${e.href}" target="_blank" class="search_result"> ${e.name}</a>`
                    })
                } else if (data.length != 0) {
                    html = `<a href="${data[0].href}" target="_blank" class="search_result">${data[0].name}</a>`
                } else {
                    html = '<p class="base_description"> По вашему запросу ничего не найдено </p>'
                }

                const list = qs('.search_results');
                list.innerHTML = html;

                console.log(data)
            })
        });
    }



    if (qs('#registration-form')) {
        const regFrom = qs('#registration-form');
        regFrom.addEventListener('submit', function(e) {
            e.preventDefault();

            const checkActivity = qsa('.poll_activity__input');
            let kind_help;
            let kind_activity = "a";
            let email = this.elements.email.value;
            let login = this.elements.login.value;
            let password = this.elements.password.value;
            let name = this.elements.name.value;
            let last_name = this.elements.last_name.value;
            let birdth_date = this.elements.birdthday_date.value;
            let passport_num = this.elements.passport_number.value;
            let region = this.elements.region.value;
            let city = this.elements.city.value;
            let phone = this.elements.phone.value;

            for(let i=0; i<checkActivity.length; i++) {
                if(checkActivity[i].checked)  {
                    console.log(checkActivity[i].value)
                    kind_activity = checkActivity[i].value; break;
                }                    
            }
            console.log(checkActivity)
            kind_activity != "a" ? kind_activity : alert('Выберите активность!')
            console.log(kind_activity)

            if (!kind_activity) {
                const checkboxes = qsa('.pool_item__checkbox');
                for(let i=0; i<checkboxes.length; i++) {
                    if(checkboxes[i].checked)  {
                        console.log(checkboxes[i].value)
                        kind_help = checkboxes[i].value; break;
                    }
                }
            } else {
                kind_help=0;
            }
            

            let data = {
                email,             
                login,            
                password,          
                name,               
                last_name,    
                birdth_date,       
                passport_num,     
                region,             
                city,             
                phone, 
                kind_help,
                kind_activity,
            }

            console.log(data)

            fetch('/registration_request', {
                method: 'POST',
                body: JSON.stringify(data),
                credentials: "same-origin",
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": qs('input[name="_token"]').value,
                },   
            }).then((response) => response.json())
            .then((user) => {
                const registrationButton = qs('.nav_link.login');
                console.log(registrationButton)
                if(user.id) {
                    localStorage.setItem('auth', true);
                    localStorage.setItem('user', JSON.stringify(user));
                    setTimeout(init, 1000);
    
                } else {
                    localStorage.setItem('auth', false);
                    localStorage.setItem('user', JSON.stringify({}));
                    body.classList.remove('logged_in');
    
                }
            })
        })
    }

    const loginForm = qs('#login-form');
    loginForm.addEventListener('submit', function(e) {
        e.preventDefault()
        let data = {
            login: this.elements.login.value,
            password: this.elements.password.value,
        }

        fetch('/login', {
            method: 'POST',
            body: JSON.stringify(data),
            credentials: "same-origin",
                headers: {
                    "Content-Type": "application/json",
                    "Accept": "application/json, text-plain, */*",
                    "X-Requested-With": "XMLHttpRequest",
                    "X-CSRF-TOKEN": qs('input[name="_token"]').value,
                },
        }).then((response) => response.json())
        .then((user) => {
            const registrationButton = qs('.nav_link.login');
            console.log(registrationButton)
            if(user.id) {
                localStorage.setItem('auth', true);
                localStorage.setItem('user', JSON.stringify(user));
                setTimeout(init, 1000);

            } else {
                localStorage.setItem('auth', false);
                localStorage.setItem('user', JSON.stringify({}));
                body.classList.remove('logged_in');

            }
        })
    })

    
 
});