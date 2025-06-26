    <section id="inicio" class="section py-5 bg-danger">
        <div class="container">
        </div>
    </section>


    <section id="contato" class="section py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="container-fluid red-background text-white py-5" id="ifood">
                    <div class="text-center mb-4">
                        <h1 class="display-4">Peça já essa Delícia!</h1>
                    </div>

                    <div class="row text-center">
                        <div class="col-md-4 mb-4">
                            <i class="fas fa-map-marker-alt icon-large mb-2"></i>
                            <h3>Localização</h3>
                            <p>Rua São Paulo, 856</p>
                            <p>Campo Mourão - PR</p>
                        </div>
                        <div class="col-md-4 mb-4">
                            <i class="fas fa-clock icon-large mb-2"></i>
                            <h3>Horário de Atendimento</h3>
                            <p>Terça-Domingo: 19:30 - 23:45</p>
                            <p>Delivery até 23:30</p>
                        </div>
                        <div class="col-md-4 mb-4">
                            <i class="fas fa-phone-alt icon-large mb-2"></i>
                            <h3>Contato</h3>
                            <p>(44) 99945-0920</p>
                            <p>contato@hamburgueriadoteko.com.br</p>
                        </div>
                    </div>

                    <iframe src="https://www.google.com/maps?q=Rua+São+Paulo,+856,+Campo+Mourão+-+PR&output=embed"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>

                </div>

                <div class="container d-flex justify-content-center align-items-center container-fluid bg-warning-subtle text-white py-lg-1"
                    style="min-height: 50vh;">
                    <div class="text-center">
                        <h2 class="display-4 text-dark">Entre em contato conosco!</h2>
                    </div>
                    <div class="col-md-8">
                        <form class="row g-3" action="#" method="POST">
                            <div class="col-md-6">
                                <label for="userName" class="form-label visually-hidden">Seu Nome</label>
                                <input type="text" class="form-control" id="userName" name="userName"
                                    placeholder="Seu Nome Completo" required autocomplete="name">
                                <div class="invalid-feedback">
                                    Por favor, insira seu nome completo (mínimo duas palavras).
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="userEmail" class="form-label visually-hidden">Seu Email</label>
                                <input type="email" class="form-control" id="userEmail" name="userEmail"
                                    placeholder="seu.email@exemplo.com" required autocomplete="email">
                                <div class="invalid-feedback">
                                    Por favor, insira um endereço de e-mail válido.
                                </div>
                            </div>

                            <div class="col-md-6">
                                <label for="userPhone" class="form-label visually-hidden">Telefone</label>
                                <input type="tel" class="form-control" id="userPhone" name="userPhone"
                                    placeholder="Telefone" autocomplete="tel">
                                <div class="invalid-feedback">
                                    Por favor, insira um número de telefone válido (10 ou 11 dígitos).
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="subject" class="form-label visually-hidden">Assunto</label>
                                <input type="text" class="form-control" id="subject" name="subject"
                                    placeholder="Assunto da Mensagem" required>
                                <div class="invalid-feedback">
                                    Por favor, insira o assunto da mensagem.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="userCity" class="form-label visually-hidden">Cidade</label>
                                <input type="text" class="form-control" id="userCity" name="userCity"
                                    placeholder="Sua Cidade" autocomplete="address-level2">
                                <div class="invalid-feedback">
                                    Por favor, insira sua cidade.
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label for="userState" class="form-label visually-hidden">Estado</label>
                                <input type="text" class="form-control" id="userState" name="userState"
                                    placeholder="Seu Estado (Ex: PR)" autocomplete="address-level1">
                                <div class="invalid-feedback">
                                    Por favor, insira a sigla do seu estado (ex: PR).
                                </div>
                            </div>

                            <div class="col-12">
                                <label for="userMessage" class="form-label visually-hidden">Sua Mensagem</label>
                                <textarea class="form-control" id="userMessage" name="userMessage"
                                    placeholder="Digite sua mensagem aqui..." rows="4" required></textarea>
                                <div class="invalid-feedback">
                                    Por favor, digite sua mensagem.
                                </div>
                            </div>
                            <div class="col-12 text-center">
                                <button type="submit" class="btn btn-warning">Enviar Mensagem</button>
                            </div>
                        </form>
                    </div>
                </div>
    </section>

    <button id="scrollToTopBtn" class="btn btn-danger rounded-circle shadow" title="Voltar ao Topo">
        <i class="bi bi-arrow-up"></i>
    </button>

    <script src="js/scrolltopbtn.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-masker@1.2.0/lib/vanilla-masker.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.querySelector('form');

            // --- Input Masks ---
            const userPhoneInput = document.getElementById('userPhone');
            VMasker(userPhoneInput).maskPattern("(99) 99999-9999");

            const userStateInput = document.getElementById('userState');
            userStateInput.addEventListener('input', function (e) {
                let value = e.target.value.toUpperCase();
                if (value.length > 2) {
                    value = value.substring(0, 2);
                }
                e.target.value = value.replace(/[^A-Z]/g, ''); // Allow only letters
            });

            // --- Validation Functions ---
            function validateName(name) {
                return name.trim().length > 0 && name.trim().split(' ').length >= 2;
            }

            function validateEmail(email) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(String(email).toLowerCase());
            }

            function validatePhone(phone) {
                const cleanedPhone = phone.replace(/\D/g, '');
                // Phone is optional, but if filled, must be 10 or 11 digits
                return (cleanedPhone.length === 10 || cleanedPhone.length === 11);
            }

            function validateSubject(subject) {
                return subject.trim().length > 0;
            }

            function validateCity(city) {
                return city.trim().length > 0;
            }

            function validateState(state) {
                const re = /^[A-Z]{2}$/;
                return re.test(String(state).toUpperCase());
            }

            function validateMessage(message) {
                return message.trim().length > 0;
            }

            /**
             * Validates a field and provides visual feedback with specific error messages.
             * @param {HTMLElement} inputElement The input element to validate.
             * @param {Function} validatorFunction The function that performs the validation.
             * @returns {boolean} True if the field is valid, false otherwise.
             */
            function validateField(inputElement, validatorFunction) {
                const isValid = validatorFunction(inputElement.value);
                // Get the next sibling which should be the invalid-feedback div
                const feedbackElement = inputElement.nextElementSibling;

                if (isValid) {
                    inputElement.classList.remove('is-invalid');
                    inputElement.classList.add('is-valid');
                    if (feedbackElement && feedbackElement.classList.contains('invalid-feedback')) {
                        feedbackElement.style.display = 'none'; // Hide the message
                    }
                } else {
                    inputElement.classList.remove('is-valid');
                    inputElement.classList.add('is-invalid');
                    if (feedbackElement && feedbackElement.classList.contains('invalid-feedback')) {
                        feedbackElement.style.display = 'block'; // Show the message
                    }
                }
                return isValid;
            }

            // --- Real-time Validation Feedback (on blur) ---
            document.getElementById('userName').addEventListener('blur', (e) => validateField(e.target, validateName));
            document.getElementById('userEmail').addEventListener('blur', (e) => validateField(e.target, validateEmail));
            document.getElementById('userPhone').addEventListener('blur', (e) => validateField(e.target, validatePhone));
            document.getElementById('subject').addEventListener('blur', (e) => validateField(e.target, validateSubject));
            document.getElementById('userCity').addEventListener('blur', (e) => validateField(e.target, validateCity));
            document.getElementById('userState').addEventListener('blur', (e) => validateField(e.target, validateState));
            document.getElementById('userMessage').addEventListener('blur', (e) => validateField(e.target, validateMessage));


            // --- Form Submission Validation ---
            form.addEventListener('submit', function (event) {
                let formIsValid = true;

                // Validate all fields on submit and accumulate validity
                // Note: The order matters for `formIsValid = validateField(...) && formIsValid;`
                // to correctly accumulate if `validateField` returns false.
                formIsValid = validateField(document.getElementById('userName'), validateName) && formIsValid;
                formIsValid = validateField(document.getElementById('userEmail'), validateEmail) && formIsValid;
                formIsValid = validateField(document.getElementById('userPhone'), validatePhone) && formIsValid;
                formIsValid = validateField(document.getElementById('subject'), validateSubject) && formIsValid;
                formIsValid = validateField(document.getElementById('userCity'), validateCity) && formIsValid;
                formIsValid = validateField(document.getElementById('userState'), validateState) && formIsValid;
                formIsValid = validateField(document.getElementById('userMessage'), validateMessage) && formIsValid;

                if (!formIsValid) {
                    event.preventDefault(); // Prevent form submission if validation fails
                    // No need for alert() anymore as messages are displayed inline
                } else {
                    // Optionally, you can still show a success message or handle submission via AJAX
                    alert('Formulário enviado com sucesso!');
                    // For a real form, you'd typically send data here, e.g., using fetch()
                    // event.target.submit(); // Uncomment this line if you want the form to submit normally after successful validation
                }
            });
        });
    </script>
