<script>
export default{
    props:{
        company: Object
    }
}
</script>

<template>
    <div class="container py-3">
        <div class="row">
            <div class="col-12">
                <div class="hero-banner">
                    <div class="overlay"></div>
                    <div class="d-block position-relative text-white pb-4">
                        <h2 class="title">{{ company.name }}</h2>
                        <h6 class="description">{{ company.description }}</h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-6 col-md-3 mb-3">
                <a href="/catalog">
                    <div class="sub-banner">
                        <div class="overlay"></div>
                        <div class="image" style="background: url('http://via.placeholder.com/512x512');"></div>
                        <div class="text">
                            <h5>Проекты</h5>
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
    min-height: 160px
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
    & .image
        width: 100%
        height: 100%
        position: absolute
        background-position: center !important
        background-size: cover !important
        background-repeat: no-repeat !important
        transition: all .3s
    &:hover .image
        transform: scale(1.1)

// END sub banner
    
// hero banner
.hero-banner
    box-shadow: rgba(50, 50, 93, 0.35) 0px 13px 27px -5px, rgba(0, 0, 0, 0.4) 0px 8px 16px -8px
    min-height: 550px
    width: 100%
    // background
    background: url('https://s3.amazonaws.com/static-loghome/media/Fotolia_22487608_Subscription_Monthly_L_2018-09-13_17-13.jpg')
    background-position: center !important
    background-size: cover !important
    background-repeat: no-repeat !important
    overflow: hidden
    border-radius: 10px
    display: flex
    align-items: end
    justify-content: start
    padding: 24px
    position: relative
    & .title
        font-size: 48px
        font-weight: 600
    & .description
        font-size: 18px
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
</style>