    <section class="feedback section-offset">
        <div class="container">
            <div class="feedback__inner">
                <div class="feedback__wrap">
                    <p class="feedback__title">Оставьте ваш отзыв</p>
                    <p class="feedback__subtitle">Ваше мнение для улучшения работы нашей клиники и наших специалистов</p>

                    <form action="" class="feedback__form">
                        <input name='catalogue' type='hidden' value='<?= $current_catalogue["Catalogue_ID"] ?>' />
                        <input name="bitrixID" type="hidden" value='<?= $current_catalogue["BitrixID"] ?>'>
                        <input name='city' type='hidden' value='<?= $current_catalogue["Catalogue_Name"] ?>' />
                        <input name='type' type='hidden' value='review' />
                        <input name='cc' type='hidden' value='2' />
                        <input name='sub' type='hidden' value='8' />
                        <input name='mes' type='hidden' value='22' />
                        <input name="urlMessage" type="hidden" value="">
                        <input name="title_url_message" type="hidden" value="">
                        <div class="feedback__form-input__wrap">
                            <div class="input-wrapper">
                                <input type="text" name="params[name][]" class="input feedback__input" placeholder="Ваше имя" required>
                                <button class="input-clear"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/clear.svg" alt=""></button>
                            </div>
                            <div class="input-wrapper">
                                <input type="tel" name="params[phone][]" class="input feedback__input" placeholder="+7 (___) ___-__-__" required>
                                <button class="input-clear"><img src="<?= SITE_TEMPLATE_PATH ?>/images/icons/clear.svg" alt=""></button>
                            </div>
                        </div>

                        <div class="feedback__form-input__wrap">
                            <div class="sort_block">
                                <label for="feedback-service">Услуга</label>
                                <select id="feedback-service" name="feedback-service" class="select feedback__select">
                                    <option value="all" selected>Выбрать</option>
                                    <option value="services-1">Значение 1</option>
                                    <option value="services-2">Значение 2</option>
                                    <option value="services-3">Значение 3</option>
                                </select>
                            </div>
                            <div class="sort_block">
                                <label for="feedback-doctor">Врач</label>
                                <select id="feedback-doctor" name="feedback-doctor" class="select feedback__select">
                                    <option value="all" selected>Выбрать</option>
                                    <option value="doctor-1">Значение 1</option>
                                    <option value="doctor-2">Значение 2</option>
                                    <option value="doctor-3">Значение 3</option>
                                </select>
                            </div>
                        </div>

                        <textarea class="feedback__textarea textarea" placeholder="Текст отзыва"></textarea>

                        <div class="feedback__stars">
                            <p>Поставьте оценку врачу:</p>
                            <div class="feedback-full-stars full-stars">
                                <div class="rating-group">
                                    <input name="fst" value="0" type="radio" disabled checked />

                                    <label for="feedback-fst-1">
                                        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.5245 1.08156C11.6741 0.620903 12.3259 0.620903 12.4755 1.08156L14.4432 7.13729C14.644 7.75532 15.2199 8.17376 15.8697 8.17376H22.2371C22.7215 8.17376 22.9229 8.79357 22.531 9.07827L17.3797 12.8209C16.854 13.2029 16.634 13.8799 16.8348 14.498L18.8024 20.5537C18.9521 21.0143 18.4248 21.3974 18.033 21.1127L12.8817 17.3701C12.3559 16.9881 11.6441 16.9881 11.1183 17.3701L5.96701 21.1127C5.57515 21.3974 5.04791 21.0144 5.19759 20.5537L7.16522 14.498C7.36603 13.8799 7.14604 13.2029 6.62031 12.8209L1.469 9.07827C1.07714 8.79357 1.27853 8.17376 1.76289 8.17376H8.13026C8.7801 8.17376 9.35604 7.75532 9.55685 7.13729L11.5245 1.08156Z" stroke="#FFDA33" />
                                        </svg>
                                    </label>
                                    <input name="fst" id="feedback-fst-1" value="1" type="radio" />

                                    <label for="feedback-fst-2">
                                        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.5245 1.08156C11.6741 0.620903 12.3259 0.620903 12.4755 1.08156L14.4432 7.13729C14.644 7.75532 15.2199 8.17376 15.8697 8.17376H22.2371C22.7215 8.17376 22.9229 8.79357 22.531 9.07827L17.3797 12.8209C16.854 13.2029 16.634 13.8799 16.8348 14.498L18.8024 20.5537C18.9521 21.0143 18.4248 21.3974 18.033 21.1127L12.8817 17.3701C12.3559 16.9881 11.6441 16.9881 11.1183 17.3701L5.96701 21.1127C5.57515 21.3974 5.04791 21.0144 5.19759 20.5537L7.16522 14.498C7.36603 13.8799 7.14604 13.2029 6.62031 12.8209L1.469 9.07827C1.07714 8.79357 1.27853 8.17376 1.76289 8.17376H8.13026C8.7801 8.17376 9.35604 7.75532 9.55685 7.13729L11.5245 1.08156Z" stroke="#FFDA33" />
                                        </svg>
                                    </label>
                                    <input name="fst" id="feedback-fst-2" value="2" type="radio" />

                                    <label for="feedback-fst-3">
                                        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.5245 1.08156C11.6741 0.620903 12.3259 0.620903 12.4755 1.08156L14.4432 7.13729C14.644 7.75532 15.2199 8.17376 15.8697 8.17376H22.2371C22.7215 8.17376 22.9229 8.79357 22.531 9.07827L17.3797 12.8209C16.854 13.2029 16.634 13.8799 16.8348 14.498L18.8024 20.5537C18.9521 21.0143 18.4248 21.3974 18.033 21.1127L12.8817 17.3701C12.3559 16.9881 11.6441 16.9881 11.1183 17.3701L5.96701 21.1127C5.57515 21.3974 5.04791 21.0144 5.19759 20.5537L7.16522 14.498C7.36603 13.8799 7.14604 13.2029 6.62031 12.8209L1.469 9.07827C1.07714 8.79357 1.27853 8.17376 1.76289 8.17376H8.13026C8.7801 8.17376 9.35604 7.75532 9.55685 7.13729L11.5245 1.08156Z" stroke="#FFDA33" />
                                        </svg>
                                    </label>
                                    <input name="fst" id="feedback-fst-3" value="3" type="radio" />

                                    <label for="feedback-fst-4">
                                        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.5245 1.08156C11.6741 0.620903 12.3259 0.620903 12.4755 1.08156L14.4432 7.13729C14.644 7.75532 15.2199 8.17376 15.8697 8.17376H22.2371C22.7215 8.17376 22.9229 8.79357 22.531 9.07827L17.3797 12.8209C16.854 13.2029 16.634 13.8799 16.8348 14.498L18.8024 20.5537C18.9521 21.0143 18.4248 21.3974 18.033 21.1127L12.8817 17.3701C12.3559 16.9881 11.6441 16.9881 11.1183 17.3701L5.96701 21.1127C5.57515 21.3974 5.04791 21.0144 5.19759 20.5537L7.16522 14.498C7.36603 13.8799 7.14604 13.2029 6.62031 12.8209L1.469 9.07827C1.07714 8.79357 1.27853 8.17376 1.76289 8.17376H8.13026C8.7801 8.17376 9.35604 7.75532 9.55685 7.13729L11.5245 1.08156Z" stroke="#FFDA33" />
                                        </svg>
                                    </label>
                                    <input name="fst" id="feedback-fst-4" value="4" type="radio" />

                                    <label for="feedback-fst-5">
                                        <svg width="24" height="22" viewBox="0 0 24 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M11.5245 1.08156C11.6741 0.620903 12.3259 0.620903 12.4755 1.08156L14.4432 7.13729C14.644 7.75532 15.2199 8.17376 15.8697 8.17376H22.2371C22.7215 8.17376 22.9229 8.79357 22.531 9.07827L17.3797 12.8209C16.854 13.2029 16.634 13.8799 16.8348 14.498L18.8024 20.5537C18.9521 21.0143 18.4248 21.3974 18.033 21.1127L12.8817 17.3701C12.3559 16.9881 11.6441 16.9881 11.1183 17.3701L5.96701 21.1127C5.57515 21.3974 5.04791 21.0144 5.19759 20.5537L7.16522 14.498C7.36603 13.8799 7.14604 13.2029 6.62031 12.8209L1.469 9.07827C1.07714 8.79357 1.27853 8.17376 1.76289 8.17376H8.13026C8.7801 8.17376 9.35604 7.75532 9.55685 7.13729L11.5245 1.08156Z" stroke="#FFDA33" />
                                        </svg>
                                    </label>
                                    <input name="fst" id="feedback-fst-5" value="5" type="radio" />
                                </div>
                            </div>
                        </div>
                        <div class="feedback__bottom-wrap">
                            <button class="primary-btn feedback__btn request-send-btn" type="submit"><span>Отправить</span></button>
                            <p class="politic feedback__politic">
                                Мы обеспечиваем полную <a href="#" rel="nofollow">конфиденциальность</a> вашей личности
                            </p>
                        </div>
                    </form>
                </div>
                <picture class="feedback__picture">
                    <source srcset="<?= SITE_TEMPLATE_PATH ?>/images/feedback/feedback-pic-1.webp" type="image/webp">
                    <img src="<?= SITE_TEMPLATE_PATH ?>/images/feedback/feedback-pic-1.jpg" alt="feedback"
                        class="feedback__img">
                </picture>
            </div>
        </div>
    </section>