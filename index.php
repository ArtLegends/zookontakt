<!DOCTYPE html>
<html lang="ru">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Контактный зоопарк</title>
	<link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;700&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="stylesheet" href="/style.css"> </head>

<body>
	<marquee behavior="scroll" direction="left"> <b>
      <span style="color:#FF0000">
      В связи с индивидуальным подходом к каждому клиенту и тчательной подготовкой задолго до его прибытия. Оплата возможна только онлайн.
      </span>
   </b> </marquee>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid"> <a class="navbar-brand" href="#">ZOOKONTAKT</a> <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav">
					<li class="nav-item"> <a class="nav-link" href="#about">О нас</a> </li>
					<li class="nav-item"> <a class="nav-link" href="#for-three">До 3-ёх человек</a> </li>
					<li class="nav-item"> <a class="nav-link" href="#for-companies">Для компаний</a> </li>
					<li class="nav-item"> <a class="nav-link" href="#faq">FAQ</a> </li>
					<li class="nav-item"> <a class="nav-link" href="#contacts">Контакты</a> </li>
				</ul>
			</div>
		</div>
	</nav>
	<div class="video__holder">
		<div class="video"> <video width="100%" height="100%" style="width:100%; height:100%; object-fit: cover;" autoplay="" loop="" muted="">
          <source src="video/zookontakt-tatralandia (1) (online-video-cutter.com).mp4" type="video/mp4">
        </video> </div>
	</div>
	<section id="about" class="container my-5">
		<div class="text-center">
			<h1>ОТЛИЧНАЯ ВОЗМОЖНОСТЬ ПРОВЕСТИ ДЕНЬ НА СВЕЖЕМ ВОЗДУХЕ С БЛИЗКИМИ</h1>
			<p>Милый контактный зоопарк, который оставит вам лишь позитивные эмоции</p>
		</div>
		<div class="mb-4">
			<h2>Наш адрес</h2>
			<p>
				<?php echo $address; ?> </p>
		</div>
		<div>
			<h2>О НАС</h2>
			<div class="row">
				<div class="col">
					<h5>НЕ ЗРЯ МЫ НАЗЫВАЕМСЯ "ЗОО КОНТАКТ"</h5>
					<p>животные действительно будут находиться в зоне вашей досягаемости, вы сможете потрогать, погладить их. По соображениям безопасности, к каждому вольеру приставлена своя сиделка"</p>
				</div>
				<div class="col">
					<h5>МЫ НЕ ПРОСТО ЗООПАРК</h5>
					<p>но и целый парк развлечений. Горки для детей, песочницы, уютное кафе. Приходя к нам вы получите отдых для всей семьи</p>
				</div>
				<div class="col">
					<h5>МЫ ЗАБОТИМСЯ О ЖИВОТНЫХ</h5>
					<p>все животные привитые и находятся под постоянным наблюдением ветеринаров</p>
				</div>
			</div>
		</div>
		<div>
			<h2>Наши преимущества</h2>
			<div class="row">
				<div class="col">
					<p>Вы приятно проведете время вместе с семьей или второй половинкой</p>
				</div>
				<div class="col">
					<p>У вас будет возможность покормить животных</p>
				</div>
				<div class="col">
					<p>Получите фотографии в рамочке и на магнитиках</p>
				</div>
				<div class="col">
					<p>Более 30 видов животных</p>
				</div>
			</div>
		</div>
	</section>
	<section id="for-three" class="container my-5">
		<div class="mb-4">
			<h2>Предложения для пар</h2>
			<h3>Тариф "Возлюбленные"</h3>
			<p>Безлимитное нахождение на територии зоопарка, Специальный корм для всех видов животных</p>
			<p>10:00-20:00, 24900₸</p> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal" data-tariff="Возлюбленные" data-time="10:00-20:00">
            Забронировать
        </button> </div>
		<div class="mb-4">
			<h2>Для одного</h2>
			<h3>Тариф "Для одного"</h3>
			<p>Безлимитное нахождение на територии зоопарка, Специальный корм для всех видов животных</p>
			<p>10:00-20:00, 14900₸</p> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal" data-tariff="Для одного" data-time="10:00-20:00">
            Забронировать
        </button> </div>
	</section>
	<div class="modal fade" id="bookingModal" tabindex="-1" aria-labelledby="bookingModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="bookingModalLabel">Бронирование билета</h5> <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> </div>
				<div class="modal-body">
					<form id="bookingForm">
						<div class="mb-3"> <label for="name" class="form-label">Ф.И.О</label> <input type="text" class="form-control" id="name" required> </div>
						<div class="mb-3"> <label for="phone" class="form-label">Контактный номер телефона</label> <input type="tel" class="form-control" id="phone" pattern="^(\+7|7|8)?[\s\-]?\(?[489][0-9]{2}\)?[\s\-]?[0-9]{3}[\s\-]?[0-9]{2}[\s\-]?[0-9]{2}$" placeholder="+7 (999) 999-9999" required maxlength="13"> </div>
						<div class="mb-3"> <label for="date" class="form-label">Дата посещения</label> <input type="date" class="form-control" id="date" required> </div>
						<div class="mb-3"> <label for="arrival-time" class="form-label">Ориентировочное время прибытия</label> <input type="time" class="form-control" id="arrival-time" required min="10:00" max="20:00"> </div>
						<div class="mb-3">
							<p>Дополнительные услуги:</p>
							<!-- Чекбоксы для доп. услуг -->
							<div class="form-check"> <input class="form-check-input" type="checkbox" value="5000" id="photoSession"> <label class="form-check-label" for="photoSession">Фотосессия (5000₸)</label> </div>
							<div class="form-check"> <input class="form-check-input" type="checkbox" value="2500" id="magnetPhotos"> <label class="form-check-label" for="magnetPhotos">Фотографии на магнитиках (2500₸)</label> </div>
							<div class="form-check"> <input class="form-check-input" type="checkbox" value="2500" id="framePhotos"> <label class="form-check-label" for="framePhotos">Фотографии в рамку (2500₸)</label> </div>
							<div class="form-check"> <input class="form-check-input" type="checkbox" value="10000" id="animalPortrait"> <label class="form-check-label" for="animalPortrait">Ручной портрет рядом с животным (10000₸)</label> </div>
						</div>
						<div class="mb-3">
							<p>Примечание: "В случае выбора доп. услуг, менеджер свяжется для уточнения".</p>
						</div>
						<div class="mb-3">
							<p>Итоговая сумма: <span id="totalAmount">0₸</span></p>
						</div>
					</form>
				</div>
				<div class="modal-footer"> <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Закрыть</button> <button type="submit" form="bookingForm" class="btn btn-primary">Подтвердить</button> </div>
			</div>
		</div>
	</div>
	<section id="for-companies" class="container my-5">
		<div class="mb-4">
			<h2>Для веселой компании</h2>
			<p>Лучший вариант провести время для компании</p>
			<h3>Тариф "Семейный"</h3>
			<p>Безлимитное нахождение на територии зоопарка, Специальный корм для всех видов животных</p>
			<p>Цена: 12900₸ за одного человека</p>
			<p>Количество человек: от 3</p> <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#bookingModal" data-tariff="Семейный">
            Забронировать
        </button> </div>
	</section>
	<section id="faq" class="container my-5">
		<div class="mb-4">
			<h2>Часто задаваемые вопросы</h2>
			<p>Пожалуйста, прежде чем задавать вопрос тех поддержке, прочтите это</p>
		</div>
		<div class="accordion" id="faqAccordion">
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingOne"> <button class="accordion-button accordion-toggle-icon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                    Можно ли курить/пить на территории зоопарка?
                    </button> </h2>
				<div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
					<div class="accordion-body">Нет. На территории нашего зоопарка по соображениям безопасности это запрещено.</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingTwo"> <button class="accordion-button accordion-toggle-icon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Можно ли прийти со своей едой и напитками?
                    </button> </h2>
				<div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
					<div class="accordion-body">Конечно! Мы будем только рады, если вы уйдёте от нас сытыми и довольными. Мы можем предложить вам свою собствуенную кухню.</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingThree"> <button class="accordion-button accordion-toggle-icon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        Безопасно ли контактировать с животными?
                    </button> </h2>
				<div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
					<div class="accordion-body">Все наши животные проходят ежедневный осмотр, питаются лишь отборной пищей и содержатся в лучших условиях.</div>
				</div>
			</div>
			<div class="accordion-item">
				<h2 class="accordion-header" id="headingFour"> <button class="accordion-button accordion-toggle-icon" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                        Со скольки лет можно посетить ваш зоопарк?
                    </button> </h2>
				<div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
					<div class="accordion-body">Наш зоопарк можно посетить с любого возраста, однако контактировать с животными разрешается от 7 лет вместе с родителями.</div>
				</div>
			</div>
		</div>
		</div>
	</section>
	<section id="contacts" class="container my-5">
		<div class="mb-4">
			<h2>КАК НАС НАЙТИ</h2>
			<p>
				<?php echo $address; ?> </p>
			<p>Время работы: ПН-ВС 12:00-20:00</p>
		</div>
	</section>
	<footer class="bg-light py-4 mt-auto">
		<div class="container">
			<div class="mb-3"> <a href="#about" class="btn btn-link">О нас</a> <a href="#for-three" class="btn btn-link">До 3-ёх человек</a> <a href="#for-companies" class="btn btn-link">Для компаний</a> <a href="#faq" class="btn btn-link">FAQ</a> <a href="#contacts" class="btn btn-link">Контакты</a> </div>
			<div class="mb-2"> <a href="#" class="btn btn-link">Реквизиты</a> <a href="#" class="btn btn-link">Договор оферты</a> <a href="#" class="btn btn-link">Политика конфиденциальности</a> </div>
		</div>
	</footer>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
	<script>
	const individualTariffPrices = {
	    "Возлюбленные": 24900,
	    "Для одного": 14900,
	    "Семейный": 12900
	};
	
	let currentIndividualTariff = null;
	let currentCompanyTariff = null;
	let individualTotalAmount = 0;
	let companyTotalAmount = 0;
	
	
	function updateIndividualTotalAmount() {
	    document.getElementById('totalAmount').textContent = individualTotalAmount + "₸";
	}
	
	
	function updateCompanyTotalAmount() {
	    document.getElementById('companyTotalAmount').textContent = companyTotalAmount + "₸";
	}
	
	
	document.querySelectorAll('.btn[data-tariff]').forEach(button => {
	    button.addEventListener('click', function() {
	        const tariff = this.getAttribute('data-tariff');
	        if (individualTariffPrices[tariff] !== undefined) {
	            currentIndividualTariff = tariff;
	            individualTotalAmount = individualTariffPrices[currentIndividualTariff];
	            updateIndividualTotalAmount();
	        } else if (companyTariffPrices[tariff] !== undefined) {
	            currentCompanyTariff = tariff;
	            companyTotalAmount = companyTariffPrices[currentCompanyTariff];
	            updateCompanyTotalAmount();
	        }
	    });
	});
	
	
	document.querySelectorAll('#bookingModal .form-check-input').forEach(checkbox => {
	    checkbox.addEventListener('change', function() {
	        if (this.checked) {
	            individualTotalAmount += parseInt(this.value);
	        } else {
	            individualTotalAmount -= parseInt(this.value);
	        }
	        updateIndividualTotalAmount();
	    });
	});
	
	
	document.querySelectorAll('#companyBookingModal .form-check-input').forEach(checkbox => {
	    checkbox.addEventListener('change', function() {
	        if (this.checked) {
	            companyTotalAmount += parseInt(this.value);
	        } else {
	            companyTotalAmount -= parseInt(this.value);
	        }
	        updateCompanyTotalAmount();
	    });
	});
	
	document.getElementById('bookingForm').addEventListener('submit', function(event) {
	    const phoneInput = document.getElementById('phone');
	    const phonePattern = new RegExp(phoneInput.getAttribute('pattern'));
	    
	    if (!phonePattern.test(phoneInput.value)) {
	        alert('Пожалуйста, введите номер телефона в корректном формате.');
	        event.preventDefault();
	    }
	});
	
	document.addEventListener('DOMContentLoaded', function() {
	    const today = new Date();
	    const formattedDate = today.toISOString().split('T')[0];
	    
	
	    document.getElementById('date').setAttribute('min', formattedDate);
	});
	
	
	document.querySelectorAll('.btn[data-tariff]').forEach(button => {
	    button.addEventListener('click', function() {
	        const selectedTariff = this.getAttribute('data-tariff');
	        const timeInterval = this.getAttribute('data-time') || "Не ограничено";
	        
	       
	        const arrivalTimeInput = document.getElementById('arrival-time');
	        const timeIntervalElement = document.getElementById('timeInterval').querySelector('span');
	        
	       
	        timeIntervalElement.textContent = timeInterval;
	        
	        
	        if (selectedTariff === "Возлюбленные" || selectedTariff === "Для одного") {
	            arrivalTimeInput.min = "10:00";
	            arrivalTimeInput.max = "20:00";
	        } else {
	            arrivalTimeInput.min = "";
	            arrivalTimeInput.max = "";
	        }
	    });
	});
	
	
	document.getElementById('bookingModal').addEventListener('hidden.bs.modal', function() {
	    this.querySelector('form').reset();  
	    individualTotalAmount = individualTariffPrices[currentIndividualTariff];  
	    updateIndividualTotalAmount();  
	    document.querySelectorAll('#bookingModal .form-check-input').forEach(checkbox => {
	        checkbox.checked = false;  
	    });
	});
	</script>
</body>

</html>