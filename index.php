<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контактный зоопарк</title>
    <!-- Подключение Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/style.css">
</head>

<body>
    <!-- Верхняя часть страницы -->
  <marquee behavior="scroll" direction="left"> <b>
      <span style="color:#FF0000">
      В связи с индивидуальным подходом к каждому клиенту и тчательной подготовкой задолго до его прибытия. Оплата возможна только онлайн.
      </span>
   </b> </marquee>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">ZOOKONTAKT</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="#about">О нас</a>
                    </li>
                    <!-- Другие ссылки на разделы -->
                </ul>
            </div>
        </div>
    </nav>

    <!-- Секция "О нас" -->
    <section id="about" class="container my-5">
        <!-- Блок 1 -->
        <div class="text-center">
            <img src="path_to_logo.jpg" alt="ZOOKONTAKT" class="img-fluid">
            <h1>ОТЛИЧНАЯ ВОЗМОЖНОСТЬ ПРОВЕСТИ ДЕНЬ НА СВЕЖЕМ ВОЗДУХЕ С БЛИЗКИМИ</h1>
            <p>Милый контактный зоопарк, который оставит вам лишь позитивные эмоции.</p>
        </div>

        <!-- Блок 2 -->
        <div>
            <h2>Наш адрес</h2>
            <p><?php echo $address; ?></p>
        </div>

        <!-- Блок 3 -->
        <div>
            <h2>О НАС</h2>
            <div class="row">
                <div class="col">
                    <p>1. НЕ ЗРЯ МЫ НАЗЫВАЕМСЯ "ЗОО КОНТАКТ" животные действительно будут находиться в зоне вашей досягаемости, вы сможете потрогать, погладить их. По соображениям безопасности, к каждому вольеру приставлена своя сиделка".</p>
                </div>
                <div class="col">
                    <p> 2. МЫ НЕ ПРОСТО ЗООПАРК, но и целый парк развлечений. Горки для детей, песочницы, уютное кафе. Приходя к нам вы получите отдых для всей семьи.</p>
                </div>
                <div class="col">
                    <p>3. МЫ ЗАБОТИМСЯ О ЖИВОТНЫХ все животные привитые и находятся под постоянным наблюдением ветеринаров.</p>
                </div>
            </div>
        </div>

        <!-- Блок 4 -->
        <div>
            <h2>Наши преимущества</h2>
            <div class="row">
                <div class="col">
                    <p>1.Вы приятно проведете время вместе с семьей или второй половинкой. </p>
                </div>
                <div class="col">
                    <p>2.У вас будет возможность покормить животных. </p>
                </div>
                <div class="col">
                    <p>3.Получите фотографии в рамочке и на магнитиках.</p>
                </div>
                <div class="col">
                    <p>4.Более 30 видов животных.</p>
                </div>
            </div>
        </div>
    </section>

<!-- Секция "До 3-ёх человек" -->
<section id="for-three" class="container my-5">
    <!-- Блок 5 -->
    <div class="mb-4">
        <h2>Предложения для пар</h2>
        <h3>Тариф "Возлюбленные"</h3>
        <p>Безлимитное нахождение на територии зоопарка, Специальный корм для всех видов животных</p>
        <p>10:00-20:00, 24900</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal" data-tariff="Возлюбленные">
            Забронировать
        </button>
    </div>

    <!-- Блок 6 -->
    <div>
        <h2>Для одного</h2>
        <h3>Тариф "Для одного"</h3>
        <p>Безлимитное нахождение на територии зоопарка, Специальный корм для всех видов животных</p>
        <p>10:00-20:00, 14900</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal" data-tariff="Для одного">
            Забронировать
        </button>
    </div>
</section>

  <!-- Модальное окно -->
<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="bookingModalLabel">Бронирование билета</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="bookingForm">
                    <div class="mb-3">
                        <label for="name" class="form-label">Ф.И.О</label>
                        <input type="text" class="form-control" id="name" required>
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Контактный номер телефона</label>
                        <input type="tel" class="form-control" id="phone" required>
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Дата посещения</label>
                        <input type="date" class="form-control" id="date" required>
                    </div>
                    <div class="mb-3">
                        <label for="arrival-time" class="form-label">Ориентировочное время прибытия</label>
                        <input type="time" class="form-control" id="arrival-time" required>
                    </div>
                    <div class="mb-3">
                        <p>Дополнительные услуги:</p>
                        <!-- Чекбоксы для доп. услуг -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="5000" id="photoSession">
                            <label class="form-check-label" for="photoSession">Фотосессия (5000)</label>
                        </div>
                        <!-- Другие чекбоксы... -->
                    </div>
                    <div class="mb-3">
                        <p>Примечание: "В случае выбора доп. услуг, менеджер свяжется для уточнения".</p>
                    </div>
                    <div class="mb-3">
                        <p>Итоговая сумма: <span id="totalAmount">0</span></p>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="submit" form="bookingForm" class="btn btn-primary">Подтвердить</button>
            </div>
        </div>
    </div>
</div>

  <!-- Секция "Для компаний" -->
<section id="for-companies" class="container my-5">
    <!-- Блок 6 -->
    <div class="mb-4">
        <h2>Для веселой компании</h2>
        <p>Лучший вариант провести время для компании</p>
    </div>

    <!-- Тарифы -->
    <div>
        <h3>Тариф "Семейный"</h3>
        <p>Безлимитное нахождение на територии зоопарка, Специальный корм для всех видов животных</p>
        <p>Цена: 12900 за одного человека</p>
        <p>Количество человек: от 3</p>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#companyBookingModal" data-tariff="Семейный">
            Забронировать
        </button>
    </div>
</section>

<!-- Модальное окно для бронирования для компаний -->
<div class="modal fade" id="companyBookingModal" tabindex="-1" aria-labelledby="companyBookingModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="companyBookingModalLabel">Бронирование билета</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="companyBookingForm">
                    <div class="mb-3">
                        <label for="companyName" class="form-label">Ф.И.О</label>
                        <input type="text" class="form-control" id="companyName" required>
                    </div>
                    <div class="mb-3">
                        <label for="companyPhone" class="form-label">Контактный номер телефона</label>
                        <input type="tel" class="form-control" id="companyPhone" required>
                    </div>
                    <div class="mb-3">
                        <label for="companyDate" class="form-label">Дата посещения</label>
                        <input type="date" class="form-control" id="companyDate" required>
                    </div>
                    <div class="mb-3">
                        <label for="companyArrival-time" class="form-label">Ориентировочное время прибытия</label>
                        <input type="time" class="form-control" id="companyArrival-time" required>
                    </div>
                    <div class="mb-3">
                        <p>Дополнительные услуги:</p>
                        <!-- Чекбоксы для доп. услуг -->
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="5000" id="companyPhotoSession">
                            <label class="form-check-label" for="companyPhotoSession">Фотосессия (5000)</label>
                        </div>
                        <!-- Другие чекбоксы... -->
                    </div>
                    <div class="mb-3">
                        <p>Примечание: "В случае выбора доп. услуг, менеджер свяжется для уточнения".</p>
                    </div>
                    <div class="mb-3">
                        <p>Итоговая сумма: <span id="companyTotalAmount">0</span></p>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button>
                <button type="submit" form="companyBookingForm" class="btn btn-primary">Подтвердить</button>
            </div>
        </div>
    </div>
</div>

  <!-- Секция "FAQ" -->
<section id="faq" class="container my-5">
    <!-- Блок 7 -->
    <div class="mb-4">
        <h2>Часто задаваемые вопросы</h2>
        <p>Пожалуйста, прежде чем задавать вопрос тех поддержке, прочтите это</p>
    </div>
			<!-- Список вопросов и ответов -->
			<div class="accordion" id="faqAccordion">
				<!-- Вопрос 1 -->
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingOne"> <button class="accordion-button accordion-toggle-icon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Можно ли курить/пить на территории зоопарка?
                    </button> </h2>
					<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
						<div class="accordion-body">Нет. На территории нашего зоопарка по соображениям безопасности это запрещено.</div>
					</div>
				</div>
				<!-- Вопрос 2 -->
				<div class="accordion-item">
					<h2 class="accordion-header" id="headingTwo"> <button class="accordion-button accordion-toggle-icon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Можно ли прийти со своей едой и напитками?
                    </button> </h2>
					<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
						<div class="accordion-body">Конечно! Мы будем только рады, если вы уйдёте от нас сытыми и довольными. Мы можем предложить вам свою собствуенную кухню.</div>
					</div>
				</div>
				
				<!-- Добавьте аналогично другие вопросы и ответы -->
			</div>
		</div>
	</section>

  <!-- Секция "Контакты" -->
<section id="contacts" class="container my-5">
    <!-- Блок 8 -->
    <div class="mb-4">
        <h2>КАК НАС НАЙТИ</h2>
        <p><?php echo $address; ?></p>
        <p>Время работы: ПН-ВС 12:00-20:00</p>
    </div>
</section>

<!-- Подвал -->
<footer class="bg-light py-4 mt-auto">
    <div class="container">
        <!-- Якорные кнопки -->
        <div class="mb-3">
            <a href="#about" class="btn btn-link">О нас</a>
            <a href="#for-three" class="btn btn-link">До 3-ёх человек</a>
            <a href="#for-companies" class="btn btn-link">Для компаний</a>
            <a href="#faq" class="btn btn-link">FAQ</a>
            <a href="#contacts" class="btn btn-link">Контакты</a>
        </div>

        <!-- Реквизиты и другие ссылки -->
        <div class="mb-2">
            <a href="#" class="btn btn-link">Реквизиты</a>
            <a href="#" class="btn btn-link">Договор оферты</a>
            <a href="#" class="btn btn-link">Политика конфиденциальности</a>
        </div>
    </div>
</footer>

  
    <!-- Подключение Bootstrap JS и Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>

