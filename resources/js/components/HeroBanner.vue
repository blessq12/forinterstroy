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
                <div class="sub-banner" style="background: url('data:image/jpeg;base64,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');">
                    <div class="overlay"></div>
                    <h5>строительство</h5>
                </div>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <div class="sub-banner" style="background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSTIThQ03J7fcIo9EIYu-tiKVZnTCFWMvQPxw&usqp=CAU');">
                    <div class="overlay"></div>
                    <h5>услуги</h5>
                </div>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <div class="sub-banner" style="background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSqesRGp7Fe8pvv8nWkj5P9s3Qqvg6jKdeX8g&usqp=CAU');">
                    <div class="overlay"></div>
                    <h5>портфолио</h5>
                </div>
            </div>
            <div class="col-6 col-md-3 mb-3">
                <div class="sub-banner" style="background: url('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQhXaiCNo0oqFuYqhXwZA6vtxTNGFXjn0fRjA&usqp=CAU');">
                    <div class="overlay"></div>
                    <h5>проекты</h5>
                </div>
            </div>
        </div>
    </div>
</template>

<style lang="sass">
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
    box-shadow: rgba(50, 50, 93, 0.35) 0px 13px 27px -5px, rgba(0, 0, 0, 0.4) 0px 8px 16px -8px
    background-position: center !important
    background-size: cover !important
    background-repeat: no-repeat !important
    min-height: 130px
    overflow: hidden
    border-radius: 10px
    display: flex
    justify-content: start
    align-items: end
    padding: 12px
    position: relative
    color: #fff
    & h5
        position: relative
        text-transform: capitalize
        font-size: 18px
    & .overlay
        position: absolute
        bottom: 0
        left: 0
        width: 100%
        height: 70%
        background: linear-gradient(180deg, rgba(0,0,0,0) 0%, rgba(0,0,0,1) 100%)
</style>