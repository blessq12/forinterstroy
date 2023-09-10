<script>
export default{
    props:{
        company: Object
    },data:()=>({
        banners: [
            {id: 1,image: '/images/banner-1.jpg', title: 'Форинтерстрой', description: 'Свой деревянный дом - это просто. Предоставляем строительные услуги полного цикла - от создания индивидуального проекта вашего дома, до сдачи его вам в пользование.'},
            {id: 2,image: '/images/banner-2.jpg', title: 'Свобода решать', description: 'С каждого построенного дома мы жертвуем деньги на благоттворительные фонды, потому что только вместе мы сможем изменить всё'},
            {id: 3,image: '/images/banner-2.jpg', title: 'Нам не всё равно', description: 'С каждого построенного дома мы жертвуем деньги на благоттворительные фонды, потому что только вместе мы сможем изменить всё'}
        ],
        banner: 1
    })
}
</script>

<template>
    <div class="container py-3">
        <div class="row">
            <div class="col-12">
                <div class="hero-banner">
                    <transition-group
                        enter-active-class="animate__animated animate__fadeIn"
                        leave-active-class="animate__animated animate__fadeOut"
                        mode="out-in"
                    >
                    <div class="hero-item" 
                        :style="'background:url('+ item.image +');'" 
                        v-for="item in banners" 
                        :key="item.id"
                        v-show="item.id == banner"
                    >
                        <div class="overlay"></div>
                        <div class="d-block position-relative text-white pb-4">
                            <h2 class="title">{{ item.title }}</h2>
                            <h6 class="description">{{ item.description }}</h6>
                        </div>
                    </div>
                    </transition-group>
                    <div class="pagination">
                        <ul>
                            <li v-for="item in banners" :key="banner" @click="banner = item.id" :class="item.id == banner ? 'active' : ''"></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6 col-md-3 mb-3">
                <a href="/catalog">
                    <div class="sub-banner">
                        <div class="overlay"></div>
                        <div class="image" style="background: url('/images/projects-banner.jpg');"></div>
                        <div class="text">
                            <h5>Проекты</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <a href="/slug_cat">
                    <div class="sub-banner">
                        <div class="overlay"></div>
                        <div class="image" style="background: url('/images/slugs-banner.jpg');"></div>
                        <div class="text">
                            <h5>Услуги</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <a href="/portfoli">
                    <div class="sub-banner">
                        <div class="overlay"></div>
                        <div class="image" style="background: url('/images/portfolio-banner.jpg');"></div>
                        <div class="text">
                            <h5>Портфолио</h5>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <a href="/contact">
                    <div class="sub-banner">
                        <div class="overlay"></div>
                        <div class="image" style="background: url('/images/contact-banner.jpg');"></div>
                        <div class="text">
                            <h5>Контакты</h5>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</template>

<style lang="sass">

// sub banner
.sub-banner
    width: 100%
    min-height: 120px
    border-radius: 10px
    overflow: hidden
    position: relative
    display: flex
    justify-content: start
    align-items: end
    box-shadow: rgba(50, 50, 93, 0.35) 0px 13px 27px -5px, rgba(0, 0, 0, 0.4) 0px 8px 16px -8px
    & .overlay
        position: absolute
        bottom: 0
        left: 0
        width: 100%
        height: 50%
        z-index: 1
        background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,1) 100%)
    & .text
        position: absolute
        width: 100%
        height: 100%
        padding: 12px 24px
        display: flex
        align-items: end
        text-transform: uppercase
        color: #fff
        z-index: 2
        & h5
            font-weight: 700
    & .image
        width: 100%
        height: 100%
        position: absolute
        background-position: center !important
        background-size: cover !important
        background-repeat: no-repeat !important
        transition: all .5s
    &:hover .image
        transform: scale(1.05)

// END sub banner
    
// hero banner
.hero-banner
    box-shadow: rgba(50, 50, 93, 0.35) 0px 13px 27px -5px, rgba(0, 0, 0, 0.4) 0px 8px 16px -8px
    min-height: 500px
    width: 100%
    overflow: hidden
    border-radius: 10px
    position: relative
    & .pagination
        position: absolute
        left: calc( 50% - 25px )
        bottom: 24px
        width: 50px
        display: flex
        justify-content: center
        align-items: center
        & ul
            display: flex
            list-style: none
            padding: 0
            margin: 0
            & li
                cursor: pointer
                display: block
                margin: 0 5px
                width: 10px
                height: 10px
                border-radius: 100%
                background: #fff
                &.active
                    background: green
    & .hero-item
        background-position: center !important
        background-size: cover !important
        background-repeat: no-repeat !important
        width: 100%
        height: 100%
        position: absolute
        top: 0
        left: 0
        display: flex
        align-items: end
        justify-content: start
        padding: 24px
    & .title
        font-size: 32px
        font-weight: 600
    & .description
        font-size: 12px
        font-weight: 300
        width: 100%
        line-height: 1

    & .overlay
        position: absolute
        bottom: 0
        left: 0
        width: 100%
        height: 70%
        background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,1) 100%)

.sub-banner
    width: 100%
    max-height: 200px
    overflow: hidden
    & .overlay
    & a
        text-decoration: none
        & .sub-banner-image
            width: 100%
            & img
                width: 100%
                object-fit: cover

@media (min-width: 920px)
    .hero-banner
        min-height: 550px
        & .hero-item
            & .title
                font-size: 48px
            & .description
                font-size: 18px
    .sub-banner
        min-height: 160px
</style>