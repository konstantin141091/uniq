<template>
    <div class="content-container content-container--regular">
        <div class="choose-crane-type__wrap">
            <div class="choose-crane-type__step">
                Шаг 5 из 7
            </div>
            <h2 class="choose-crane-type__header">5. Размещение</h2>
            <div class="choose-crane-type__grid three">
                <a href="/" class="choose-crane-type__item price-card">
                    <div class="price-card__text">
                        <div class="price-card__title">Улица</div>
                        <div class="price-card__price">от 89 880 ₽</div>
                    </div>
                    <div class="price-card__image-wrap">
                        <img src="assets/img/price-card-image-8.svg" alt="">
                    </div>
                </a>
                <a href="/" class="choose-crane-type__item price-card">
                    <div class="price-card__text">
                        <div class="price-card__title">Навес</div>
                        <div class="price-card__price">от 67 880 ₽</div>
                    </div>
                    <div class="price-card__image-wrap">
                        <img src="assets/img/price-card-image-9.svg" alt="">
                    </div>
                </a>
                <a href="/" class="choose-crane-type__item price-card">
                    <div class="price-card__text">
                        <div class="price-card__title">Помещение</div>
                        <div class="price-card__price">от 67 880 ₽</div>
                    </div>
                    <div class="price-card__image-wrap">
                        <img src="assets/img/price-card-image-10.svg" alt="">
                    </div>
                </a>
            </div>
            <p @click="nextSlide" class="choose-crane-type__button button"><span class="button__text">Следующий шаг</span></p>
        </div>
    </div>
</template>

<script>
  export default {
    name: "CalculateItem5Component",
    methods: {
      nextSlide() {
        this.$root.$refs.calculate.$refs.calculate_slider.next()
      },
    },
  }
</script>

<style scoped>

</style>
